<?php
// routing
use Illuminate\Events\Dispatcher;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;

$dispatcher = new Dispatcher;
$router = new Router($dispatcher);



$router->get('/', 'App\Controllers\UserController@index');
$router->get('/users', 'App\Controllers\UserController@index');
$router->get('/users/{id}', 'App\Controllers\UserController@show');


$request = Request::capture();
$response = $router->dispatch($request);
$response->send();