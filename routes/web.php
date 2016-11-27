<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Acceso Login
Route::get('/', function () {
    //return view('welcome');
    //return App\clientes::all();
    return view('login');
});

//Acceso Registro
Route::get('register/', function () {
    return view('register');
});

//Acceso Home 
Route::get('home/', function () {
    return view('home');
});

//Acceso Transacciones 
Route::get('transactions/', function () {
    return view('transactions');
});

