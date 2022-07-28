<?php
    spl_autoload_register(function ($class) {
        $class = str_replace('\\', '/', $class);
        if (is_file($class . '.php')) {
            include $class . '.php';
        } elseif (is_file('./src/' . $class . '.php')) {
            include './src/' . $class . '.php';
        }
    });
?>