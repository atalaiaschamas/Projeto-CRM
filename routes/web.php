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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/home','ClienteController@home');

Route::get('/cadastro/home','CadastroClienteController@home');

Route::get('/produto/home','CadastroProdutoController@home');

Route::get('/consultaclientes/consulta','ConsultaClientesController@consulta');

Route::get('/consultaprodutos/consulta', 'ConsultaProdutosController@consulta');

Route::post('/cadastro/home', 'CadastroClienteController@cadastro');

Route::post('/produto/home', 'CadastroProdutoController@cadastro');