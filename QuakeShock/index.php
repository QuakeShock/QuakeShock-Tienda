<?php

session_start();
require_once 'autoload.php';
require_once 'config/parameters.php';
require_once 'config/db.php';
require_once 'views/layout/menubar.php';
require_once 'views/layout/header.php';
require_once 'views/usuario/login.php';
require_once 'views/usuario/registro.php';

function mostrar_error() {
    $error = new ErrorController();
    $error->index();
}

if (isset($_GET['controller'])) {
    $nombre_controlador = $_GET['controller'] . 'Controller';
} else {
    mostrar_error();
    require_once('views/layout/footer.php');
    exit();
}
$nombre_controllador = null;
    clearstatcache();
if (class_exists($nombre_controlador)) {
    
    $controlador = new $nombre_controlador();

    if (isset($_GET['action']) && method_exists($controlador, $_GET['action'])) {
        $action = $_GET['action'];
        $controlador->$action();
    } else {
        mostrar_error();
    }
} else {
    mostrar_error();
}
require_once 'views/layout/footer.php';




