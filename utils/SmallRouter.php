<?php

if (isset($_GET['page'])) {
    require '../controllers/' . $_GET['page'] . 'Controller.php';
    $page = $_GET['page'];
    $Controller = 'App\\Controllers\\' . ucfirst($page) . 'Controller';
    $controllerInstance = new $Controller();
    $controllerInstance->$page();
}
