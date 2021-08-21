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

Route::get('/','App\Http\Controllers\homeController@home');

Route::get('/aboutus','App\Http\Controllers\aboutusController@aboutus');

Route::get('/contacts','App\Http\Controllers\contactsController@contacts');

Route::get('contacts/{nome}/{assunto}/{mensagem}',function (string $nome,string $assunto,string $mensagem) {
    echo "Nome: $nome<br>Assunto: $assunto<br>Mensagem: $mensagem";
});

