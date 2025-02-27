<?php

use Bramus\Router\Router;

// Start the session
require_once __DIR__ . '/../Models/User.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

require_once __DIR__ . '/../vendor/autoload.php';

$router = new Router();
$router->setNamespace('\Controllers');

// for admin routes, check if user is authenticated
$router->before('GET|POST', '/admin(.*)', function () {
    if (str_contains($_SERVER['REQUEST_URI'], '/login') || str_contains($_SERVER['REQUEST_URI'], '/logout')) {
        return;
    }

    if (!isset($_SESSION['user']) || $_SESSION['user']->role !== 'admin') {
        header('Location: /login');
        exit();
    }
});


// for more info visit: https://github.com/bramus/router
// route setup is like this:
// $router->get('/YOURPATH', 'YOURCONTROLLER@YOURFUNCTION');

// Add your routes here:
// default route
    //home
    $router->get('/', 'HomeController@index');
    $router->get('/home', 'HomeController@index');

    //de groep
    $router->get('/groep', 'GroepController@index');
    $router->get('/geschiedenis', 'GroepController@geschiedenis');
    $router->get('/cadugraaf', 'GroepController@cadugraaf');
    $router->get('/smoelenboek', 'GroepController@smoelenboek');
    $router->get('/vertrouwenspersoon', 'GroepController@vertrouwenspersoon');
    $router->get('/privacy', 'GroepController@privacy');
    $router->get('/aanmelding', 'GroepController@aanmelding');

    //speltakken
    $router->get('/welpen', 'SpeltakkenController@welpen');
    $router->get('/verkenners', 'SpeltakkenController@verkenners');
    $router->get('/rowans', 'SpeltakkenController@rowans');
    $router->get('/rovers', 'SpeltakkenController@rovers');
    $router->get('/stam', 'SpeltakkenController@stam');
        $router->get('/.*/programma', 'SpeltakkenController@programma');
        $router->get('/.*/foto', 'SpeltakkenController@foto');
        $router->get('/.*/boekjes', 'SpeltakkenController@boekjes');

    //verhuur
    $router->get('/verhuur', 'VerhuurController@index');

    //contact
    $router->get('/contact', 'ContactController@index');

    //authenticatie
    $router->get('/register', 'AuthController@register');
    $router->post('/register', 'AuthController@register');
    $router->get('/login', 'AuthController@login');
    $router->post('/login', 'AuthController@login');
    $router->get('/logout', 'AuthController@logout');

    //admin
    $router->get('/admin', 'AdminController@index');
    $router->get('/admin/verhuur', 'AdminController@verhuur');
    $router->post('/admin/verhuur', 'AdminController@verhuur');
    $router->get('/admin/contact', 'AdminController@contact');
    $router->post('/admin/contact', 'AdminController@contact');
    $router->get('/admin/documenten', 'AdminController@documenten');
    $router->post('/admin/documenten', 'AdminController@documenten');
    $router->get('/admin/speltak', 'AdminController@speltak');
    $router->post('/admin/speltak', 'AdminController@speltak');

    //api
    $router->get('/api/users', 'ApiController@getAll');
    $router->get('/api/users/(\d+)', 'ApiController@getOne');
    $router->post('/api/users', 'ApiController@create');
    $router->put('/api/users/(\d+)', 'ApiController@update');
    $router->delete('/api/users/(\d+)', 'ApiController@delete');

// Run the router
$router->run();