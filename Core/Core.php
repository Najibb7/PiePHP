<?php
namespace Core;

class Core {
    public function run() {
        include './src/routes.php';

        $url = str_replace(BASE_URI,'',$_SERVER['REQUEST_URI']);

        $routes = Router::get($url);

        $controllerName = '\\Controller\\' . ucfirst($routes['controller']) . 'Controller';
        $controllerAction = $routes['action'] . 'Action';

        if (method_exists($controllerName, $controllerAction)) {
            $new = new $controllerName();
            $new -> $controllerAction();
        } else {
            echo 'ERROR 404';
        }

}
}


