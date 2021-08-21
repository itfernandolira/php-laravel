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
    //return view('welcome');
    return 'Bem-vindo à primeira app Laravel!';
});

Route::get('/aboutus', function () {
    return 'Sobre nós';
});

Route::get('/contacts', function () {
    return 'Contactos';
});

/*
Route::METHOD($uri,$callback)
get
post
put
patch
delete
options
*/
