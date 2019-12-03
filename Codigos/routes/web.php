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

Route::get('/', ['as'=>'site.home', 'uses' => 'Site\HomeController@index']);
Route::get('/ocorrencias', ['as'=>'ocorrencias', 'uses' => 'Ocorrencias\OcorrenciaController@index']);
Route::get('/ocorrencias/criar', ['as'=>'ocorrencias.adicionar','uses' => 'Ocorrencias\OcorrenciaController@adicionar']);
Route::post('/ocorrencias/salvar', ['as'=>'ocorrencias.salvar' , 'uses' => 'Ocorrencias\OcorrenciaController@salvar']);
Route::get('/ocorrencias/editar/{id}', ['as'=>'ocorrencias.editar' , 'uses' => 'Ocorrencias\OcorrenciaController@editar']);
Route::put('/ocorrencias/atualizar/{id}', ['as'=>'ocorrencias.atualizar' , 'uses' => 'Ocorrencias\OcorrenciaController@atualizar']);
Route::get('/ocorrencias/deletar/{id}', ['as'=>'ocorrencias.deletar' , 'uses' => 'Ocorrencias\OcorrenciaController@deletar']);
