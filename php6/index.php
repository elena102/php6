<?php

//require_once 'controller/HomeController.php';
session_start();

$controller = $_GET['controller'] ?? 'home';
$routes = require '/../routes/routes.php';

require_once $routes[$controller];
//require_once 'controller/HomeController.php';