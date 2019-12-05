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


Route::get('/', ['as'=>'site.login', 'uses' => 'Site\LoginController@index']);
Route::post('/login', ['as'=>'site.entrar', 'uses' => 'Site\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses' => 'Site\LoginController@sair']);
Route::get('/cadastrar', ['as' => 'site.cadastrar', 'uses' => 'Site\LoginController@cadastrar']);
Route::post('/cadastrar/salvar', ['as' => 'site.salvarcadastro', 'uses' => 'Site\LoginController@salvarcadastro']);



Route::group(['middleware'=>'auth'], function()
{
  Route::get('/home', ['as'=>'site.home', 'uses' => 'Site\HomeController@index']);

  Route::get('/ocorrencias', ['as'=>'ocorrencias', 'uses' => 'Ocorrencias\OcorrenciaController@index']);
  Route::get('/ocorrencias/criar', ['as'=>'ocorrencias.adicionar','uses' => 'Ocorrencias\OcorrenciaController@adicionar']);
  Route::post('/ocorrencias/salvar', ['as'=>'ocorrencias.salvar' , 'uses' => 'Ocorrencias\OcorrenciaController@salvar']);
  Route::get('/ocorrencias/editar/{id}', ['as'=>'ocorrencias.editar' , 'uses' => 'Ocorrencias\OcorrenciaController@editar']);
  Route::put('/ocorrencias/atualizar/{id}', ['as'=>'ocorrencias.atualizar' , 'uses' => 'Ocorrencias\OcorrenciaController@atualizar']);
  Route::get('/ocorrencias/deletar/{id}', ['as'=>'ocorrencias.deletar' , 'uses' => 'Ocorrencias\OcorrenciaController@deletar']);

  //Route::get('/perfil/{id}', ['as'=>'perfil.visualizar', 'uses'=> 'Site\PerfilController@visualizar']);
  /*Route::get('/perfil/editar', ['as'=> 'perfil.editar', 'uses' => 'Site\PerfilController@editar']);
  Route::post('/perfil/editar/salvar', ['as' => 'perfil.salvar','uses'=> 'Site\PerfilController@salvar']);
  Route::post('/perfil/editar/salvar', ['as' => 'perfil.apagar','uses'=> 'Site\PerfilController@apagar']);*/
});
