<?php

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


Route::get('/bienvenida', function() {
    //return 'Hola perro!';
    return view('landing-page');
});

Route::get('/contacto', function() {
    //return 'Hola perro!';
    return view('contacto');
});