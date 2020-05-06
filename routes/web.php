<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/empregos/list', 'EmpregosController@list');
Route::post('/empregos/list', 'EmpregosController@search');

Route::get('/formacao', function () {
    return view('formacao');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Route::get('/contactos', function () {
    return view('contactos');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/empregos', 'EmpregosController@index')->middleware('auth');
Route::post('/empregos', 'EmpregosController@store');
Route::get('/empregos/create', 'EmpregosController@create')->middleware('auth')->name('empregos.create');
Route::get('/empregos/{emprego}', 'EmpregosController@show');
Route::get('/empregos/{emprego}/edit', 'EmpregosController@edit')->middleware('auth');
Route::put('/empregos/{emprego}', 'EmpregosController@update');
Route::delete('/empregos/{emprego}', 'EmpregosController@destroy');