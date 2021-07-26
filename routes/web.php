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

Route::get('/contato/{id?}',['uses'=>'App\Http\Controllers\ContatoController@index']);

Route::post('/contato', ['uses'=>'App\Http\Controllers\ContatoController@criar']);

Route::put('/contato', ['uses'=>'App\Http\Controllers\ContatoController@editar']);

//Definindo apelido para as rotas
Route::get('/admin/cursos', ['as'=>'admin.cursos','uses'=>'App\Http\Controllers\Admin\CursoController@index']);
//Adcionar novos
Route::get('/admin/cursos/adicionar', ['as'=>'admin.cursos.adicionar','uses'=>'App\Http\Controllers\Admin\CursoController@adicionar']);
//Salvar 
Route::post('/admin/cursos/salvar', ['as'=>'admin.cursos.salvar','uses'=>'App\Http\Controllers\Admin\CursoController@salvar']);
//Editar
Route::get('/admin/cursos/editar/{id}', ['as'=>'admin.cursos.editar','uses'=>'App\Http\Controllers\Admin\CursoController@editar']);
//Atualizar
Route::get('/admin/cursos/atualizar/{id}', ['as'=>'admin.cursos.atualizar','uses'=>'App\Http\Controllers\Admin\CursoController@atualizar']);
//Deletar
Route::get('/admin/cursos/deletar/{id}', ['as'=>'admin.cursos.deletar','uses'=>'App\Http\Admin\Controllers\CursoController@deletar']);

