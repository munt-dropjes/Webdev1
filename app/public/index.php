<?php

use Bramus\Router\Router;

// Start the session
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();
$router->setNamespace('\Controllers');

// for more info visit: https://github.com/bramus/router
// route setup is like this:
// $router->get('/YOURPATH', 'YOURCONTROLLER@YOURFUNCTION');


// Add your routes here:
// default route
    $router->get('/', 'HomeController@index');
    $router->get('/home', 'HomeController@index');

    $router->get('/groep', 'GroepController@index');

    //speltakken
    $router->get('/welpen', 'SpeltakkenController@welpen');
    $router->get('/verkenners', 'SpeltakkenController@verkenners');
    $router->get('/rowans', 'SpeltakkenController@rowans');
    $router->get('/rovers', 'SpeltakkenController@rovers');
    $router->get('/stam', 'SpeltakkenController@stam');

    $router->get('/verhuur', 'VerhuurController@index');

    $router->get('/contact', 'ContactController@index');

    //authentication
    $router->get('/register', 'AuthController@register');
    $router->post('/register', 'AuthController@register');
    $router->get('/login', 'AuthController@login');
    $router->post('/login', 'AuthController@login');
    $router->get('/logout', 'AuthController@logout');


// Run the router
$router->run();