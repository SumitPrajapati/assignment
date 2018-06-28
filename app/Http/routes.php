<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$app->get('/', function() use ($app) {
    return $app->welcome();
});

$app->get('/hello', function () {
    return 'Hello World';
});

//get all user defined  (App\Http\Controllers\HomeController@index)

$app->get('/assignment/{id}', 'App\Http\Controllers\assignmentController@getAllAssignment');
$app->get('/users','App\Http\Controllers\assignmentController@assignmentDatas');


$app->get('/data/{id}', 'App\Http\Controllers\assignmentController@assignmentvalue');



