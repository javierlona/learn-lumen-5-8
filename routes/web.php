<?php

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

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });
$router->get('/home', function () use ($router) {
    echo "Home";
});
$router->get('/home/{code}', function () use ($router) {
    var_dump($router);
    echo "Home Code";
});
$router->get('/', 'PageController@getHome');
$router->post('/contact', [
    'as' => 'contact', 'uses' => 'ContactController@store'
]);
$router->get('/contact', [
    'as' => 'contact', 'uses' => 'PageController@getContact'
]);
$router->get('/directory', 'PageController@getDirectory');
$router->get('/profile/{id}', 'ProfileController@getDirectory');