<?php

use App\Http\Middleware\logAccessMiddleware;
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

Route::middleware('log.access')->get('/','App\Http\Controllers\homeController@home')->name('site.index');

Route::get('/aboutus','App\Http\Controllers\aboutusController@aboutus')->name('site.aboutus');

Route::get('/contacts','App\Http\Controllers\contactsController@contacts')->name('site.contacts');
Route::post('/contacts','App\Http\Controllers\contactsController@guardar')->name('site.contacts');

Route::get('/login/{erro?}','App\Http\Controllers\loginController@index')->name('site.login');
Route::post('/login','App\Http\Controllers\loginController@autenticar')->name('site.login');


Route::middleware('autenticacao:padrao,visitante')->prefix('/app')->group(function() {
    Route::get('/clientes','App\Http\Controllers\clienteController@index')->name('app.clientes');
    Route::get('/clientes/remover/{id}','App\Http\Controllers\clienteController@remover')->name('app.clientes.remover');
    Route::get('/fornecedores','App\Http\Controllers\fornecedorController@index')->name('app.fornecedores');
    Route::get('/produtos',function() {return 'Produtos'; })->name('app.produtos');
    Route::get('/sair/','App\Http\Controllers\loginController@sair')->name('app.sair');
});



Route::get('contacts/{nome}/{assunto}/{categoriaID}/{mensagem?}',function (string $nome,string $assunto,int $categoriaIdD=1,string $mensagem='Sem mensagem') {
    echo "Nome: $nome<br>Assunto: $assunto<br>Categoria: $categoriaIdD<br>Mensagem: $mensagem";
})->where('categoriaID','[0-9]+')->where('nome','[A-Za-z]+')->where('assunto','[A-Za-z]+');


Route::get('/rota1',function() {
    return 'Rota 1'; 
})->name('site.rota1');

//Redirecionamento - Método 1
//Route::redirect('rota2','rota1');

//Redirecionamento - Método 2
Route::get('/rota2',function() {
    return redirect()->route('site.rota1'); 
})->name('site.rota2');

//Redirecionamwnto - Método 3
//Definir o redirecionamento no Controller da Rota2

//Rota de contingência
Route::fallback(function() {
    echo "A rota indicada não existe! Clique <a href='".route('site.index')."'>aqui</a> para voltar à página inicial.";
});

//Enviar parametros para o controller
Route::get('/teste/{p1}/{p2}','App\Http\Controllers\testeController@teste')->name('teste');
