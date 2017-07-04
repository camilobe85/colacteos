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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/unidad1', 'Unidad1Controller@index');
Route::get('/unidad2', 'Unidad2Controller@index');
Route::get('/unidad3', 'Unidad3Controller@index');
Route::get('/admin', 'AdminController@index');
Route::get('/actividades', 'ActividadesController@index');
Route::get('/pdfRecurso', 'ActividadesController@showPdf');

