<?php
    // echo phpinfo();

# Constantes de chemins
define("PATH_ROOT", dirname($_SERVER['SCRIPT_FILENAME']));
define("BASE_URL", dirname($_SERVER['SERVER_NAME']));

# Chargements
require PATH_ROOT . '/system/lib/Util.php';

// Util::dd('coucou');

#Le routage
if(isset($_GET['url']));{
    $url = $_GET['url'];
    $controllerName = $url;
    require PATH_ROOT . "/app/controllers/$controllerName.php";
    $controller = "\app\controllers\\".$controllerName;
    $c = new $controller;
    $c->index();
}