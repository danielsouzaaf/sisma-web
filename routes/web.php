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

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('/abrir-chamado', function () {
    return view('abrirChamado');
});*/
Route::get('/abrir-chamado/{id}', 'AbrirChamadoController@show');
Route::post('abrir-chamado/{id}', 'ChamadoController@store')->name('chamado.store');

Route::post('demandas', 'DemandaController@store')->name('demandas.store');

Route::get('/detalhes-chamado/{id}', 'DetalhesChamadoController@show');

Route::get('/detalhes-atribuicao/{id}', 'DetalhesAtribuicaoController@show');

Route::get('/vincular-chamado/{id}', 'VincularChamadoController@show');

Route::post('atribuir-chamado/{id}', 'AtribuicaoController@store');

Route::get('/vincular-chamado/{chamadoid}/ocorrencia/{ocorrenciaid}', 'VincularChamadoController@store')->name('vincular.ocorrencia');

Route::get('/demandas', 'DemandaController@index')->name('demandas.index');

Route::get('/editar-demanda/{id}', 'DemandaController@show');
