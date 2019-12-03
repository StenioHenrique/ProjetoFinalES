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

Route::get('/admin/ocorrencias', ['as'=>'admin.ocorrencias'], 'uses' => 'Admin\OcorrenciaController@index');
Route::get('/admin/ocorrencias/criar', ['as'=>'admin.ocorrencias.criar'], 'uses' => 'Admin\OcorrenciaController@criar');
Route::post('/admin/ocorrencias/salvar', ['as'=>'admin.ocorrencias.salvar'], 'uses' => 'Admin\OcorrenciaController@salvar');
Route::get('/admin/ocorrencias/editar/{id}', ['as'=>'admin.ocorrencias.editar'], 'uses' => 'Admin\OcorrenciaController@editar');
Route::put('/admin/ocorrencias/atualizar/{id}', ['as'=>'admin.ocorrencias.atualizar'], 'uses' => 'Admin\OcorrenciaController@atualizar');
Route::get('/admin/ocorrencias/deletar/{id}', ['as'=>'admin.ocorrencias.deletar'], 'uses' => 'Admin\OcorrenciaController@deletar');
