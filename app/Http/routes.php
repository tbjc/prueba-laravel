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

Route::get('/', 'Inicio@index');

Route::post('/login','Inicio@login');

Route::get('/salir','Inicio@salir');

Route::get('/admin','Usuario@admin');

Route::post('/createuser','Usuario@create');