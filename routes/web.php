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

Route::get('/login',function() {return 'Login'; });


Route::prefix('/app')->group(function() {
    Route::get('/clientes',function() {return 'Clientes'; });
    Route::get('/fornecedores',function() {return 'Fornecedores'; });
    Route::get('/produtos',function() {return 'Produtos'; });
});



Route::get('contacts/{nome}/{assunto}/{categoriaID}/{mensagem?}',function (string $nome,string $assunto,int $categoriaIdD=1,string $mensagem='Sem mensagem') {
    echo "Nome: $nome<br>Assunto: $assunto<br>Categoria: $categoriaIdD<br>Mensagem: $mensagem";
})->where('categoriaID','[0-9]+')->where('nome','[A-Za-z]+')->where('assunto','[A-Za-z]+');

