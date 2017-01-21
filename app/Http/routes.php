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
    'o nama',
    [
        'as'    => "o nama",
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

$app->get( // Usluge strana
    'sadasnji pogled',
    [
        'as'    => "sadasnji pogled",
        'uses'  => 'HomeController@getView',
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
    'subscribing',
    [
    	'as'	=>	'subscribing',
        'uses' 	=> 	'HomeController@subscribing',
    ]
);

$app->post( // unosi novu lozinku i potvrđuje izmene
    'question',
    [
        'as'    =>  'question',
        'uses'  =>  'HomeController@question',
    ]
);

$app->get( // Kontakt strana
    'admin',
    [
        'as'    => "admin",
        'uses'  => 'AdminController@getAdmin',
    ]
);

$app->post( // Kontakt strana
    'admin-login',
    [
        'as'    => "admin-login",
        'uses'  => 'AdminController@adminLogin',
    ]
);

$app->post( // Kontakt strana
    'readSubs',
    [
        'as'    => "readSubs",
        'uses'  => 'AdminController@readSubs',
    ]
);

$app->post(
    'sendEmail',
    [
        'as'    =>  'sendEmail',
        'uses'  =>  'AdminController@sendEmail',
    ]
);
$app->post(
    'read',
    [
        'as'    =>  'read',
        'uses'  =>  'AdminController@read',
    ]
);

$app->post(
    'saveNews',
    [
        'as'    =>  'saveNews',
        'uses'  =>  'AdminController@saveNews',
    ]
);