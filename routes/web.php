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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/enquetes', ['uses' => 'EnqueteController@getAll', 'as' => 'enquetes']);

$router->get('/answers/{enquete_id:[0-9]+}', ['uses' => 'AnswerController@getByEnqueteId', 'as' => 'answers']);

$router->post('/answer/{enquete_id}', ['uses' => 'AnswerController@answer', 'as' => 'answer']);
