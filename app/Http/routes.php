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
session_start();

$app->get( // Početna strana
    '/',
    [
        'as'    => "index",
        'uses'  => 'HomeController@index',
    ]
);

$app->post( //unosi novu lozinku i potvrđuje izmene
    'checkEmail',
    [
    	'as'	=>	'checkEmail',
        'uses' 	=> 	'HomeController@checkEmail',
    ]
);
