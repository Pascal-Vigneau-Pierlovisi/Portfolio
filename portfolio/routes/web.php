<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () {
    return view('home');
});

$router->get('/projects', function () {
    return view('projects');
});

$router->get('/contact', function () {
    return view('contact');
});

$router->post('/send-email', 'ContactController@sendEmail');

$router->get('/success', function () {
    return view('success');
});

/* Login Admin */
$router->get('/login', 'AuthController@showLoginForm');
$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');
/* Login Admin */