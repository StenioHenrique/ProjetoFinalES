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
    return view('homeguest');
});

Route::get('/home', function() {
    return view('homeguest');
});


Route::get('/login', ['as'=>'site.login', 'uses' => 'Site\LoginController@index']);
Route::get('/bairros', ['as'=>'bairro.listar', 'uses' => 'Site\BairroController@index']);
Route::get('/bairros/cadastrar/', ['as'=>'bairro.cadastrar', 'uses' => 'Site\BairroController@cadastrar']);
Route::post('/bairros/cadastrar/salvar', ['as'=>'bairro.salvar', 'uses' => 'Site\BairroController@salvar']);

Route::post('/login/entrar', ['as'=>'site.entrar', 'uses' => 'Site\LoginController@entrar']);
Route::get('/login/sair', ['as'=>'site.login.sair', 'uses' => 'Site\LoginController@sair']);
Route::get('/cadastrar', ['as' => 'site.cadastrar', 'uses' => 'Site\LoginController@cadastrar']);
Route::post('/cadastrar/salvar', ['as' => 'site.salvarcadastro', 'uses' => 'Site\LoginController@salvarcadastro']);

Route::group(['middleware'=>'auth'], function()
{

  Route::get('/categorias/cadastro', ['as' => 'categoria.cadastro', 'uses' => 'Site\CategoriaController@cadastro']);
  Route::post('/categorias/cadastro/salvar', ['as' => 'categoria.salvar', 'uses' => 'Site\CategoriaController@salvar']);

  Route::get('/plano', ['as' => 'plano.listar', 'uses' => 'Site\PlanoController@index']);
  Route::get('/plano/cadastrar', ['as' => 'plano.cadastrar', 'uses' => 'Site\PlanoController@cadastrar']);
  Route::post('/plano/cadastrar/salvar', ['as' => 'plano.salvar', 'uses' => 'Site\PlanoController@salvar']);
  Route::get('/plano/editar/{id}', ['as' => 'plano.editar', 'uses' => 'Site\PlanoController@editar']);
  Route::post('/plano/atualizar/{id}', ['as' => 'plano.atualizar', 'uses' => 'Site\PlanoController@atualizar']);
  Route::get('/plano/deletar/{id}', ['as' => 'plano.deletar', 'uses' => 'Site\PlanoController@deletar']);

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
