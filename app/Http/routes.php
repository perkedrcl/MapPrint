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

$app->get( // O nama strana
    'onama',
    [
        'as'    => "onama",
        'uses'  => 'HomeController@getAbout',
    ]
);

$app->get( // Usluge strana
    'usluge',
    [
        'as'    => "usluge",
        'uses'  => 'HomeController@getServices',
    ]
);

$app->get( // Kontakt strana
    'kontakt',
    [
        'as'    => "contact",
        'uses'  => 'HomeController@getContact',
    ]
);

$app->post( // unosi novu lozinku i potvrđuje izmene
    'checkEmail',
    [
    	'as'	=>	'checkEmail',
        'uses' 	=> 	'HomeController@checkEmail',
    ]
);

$app->post( // unosi novu lozinku i potvrđuje izmene
    'sendEmail',
    [
        'as'    =>  'sendEmail',
        'uses'  =>  'HomeController@sendEmail',
    ]
);
$app->get( // Kontakt strana
    'admin',
    [
        'as'    => "admin",
        'uses'  => 'AdminController@getAdmin',
    ]
);