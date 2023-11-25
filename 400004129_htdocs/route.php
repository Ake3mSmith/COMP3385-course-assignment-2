<?php
include_once '/xampp/400004129/framework/router/router.php';

//Routing
$routes = new app\Router();
$uri = parse_url($_SERVER["REQUEST_URI"])['path'];
$routes->addRoute('GET', '/login', '/xampp/400004129/app/views/landing.php');

$routes->addRoute('GET', '/userdashboard', '/xampp/400004129/app/controllers/loginController.php');

$routes->addRoute('GET', '/logout', '/xampp/400004129/app/controllers/logoutController.php');

$routes->routeTo($uri);
