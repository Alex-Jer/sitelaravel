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

Route::get('/empregos', function () {
    return view('empregos');
});

Route::get('/formacao', function () {
    return view('formacao');
});

Route::get('/eventos', function () {
    return view('eventos');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');