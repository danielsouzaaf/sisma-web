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
    return view('dashboard');
});

Route::group(['prefix' => 'barramento', 'middleware' => 'cors'], function () {
  Route::get('ocorrencias', 'OcorrenciaController@index')
  ->name('ocorrencias.get');
  Route::post('ocorrencias', 'OcorrenciaController@store');
  Route::get('ocorrencias/{id}', 'OcorrenciaController@show');
});

Route::get('/home', 'HomeController@index');

Route::get('/abrir-chamado', function () {
    return view('abrirChamado');
});
Route::get('/detalhes-chamado', function () {
    return view('detalhesChamado');
});
Route::get('/detalhes-atribuicao', function () {
    return view('detalhesAtribuicao');
});
Route::get('/demandas', function () {
    return view('demandas');
});
Route::get('/editar-demanda', function () {
    return view('editarDemanda');
});
Route::get('/vincular-chamado', function () {
    return view('vincularChamado');
});
