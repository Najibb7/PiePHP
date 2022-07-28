<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    echo "<h3>SUPER GLOBALE POST</h3>\n";
    $objet = $_POST;
if(empty($objet)){
    echo "POST is empty\n";
}else {
foreach ($objet as $key => $value) {
    echo "<pre> $key => $value </pre> \n";
}}

    echo "<h3>SUPER GLOBALE GET</h3>\n";
    $objet = $_GET;
if (empty($objet)) {
    echo "GET is empty\n";
}else {
    foreach ($objet as $key => $value) {
        echo "<pre> $key => $value </pre> \n";
    }
}

    //echo "<h3>SUPER GLOBALE SERVER</h3>\n";
    $objet = $_SERVER;
foreach ($objet as $key => $value) {
    //echo "<pre> $key => $value </pre> \n";
}

    define('BASE_URI', str_replace('\\', '/', substr(__DIR__, strlen($_SERVER['DOCUMENT_ROOT']))));
    require_once implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php']);
    $app = new Core\Core(); 
    echo "<pre>";
    $app->run();
    echo "</pre>";
?>
</body>
</html>