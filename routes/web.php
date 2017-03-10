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

Route::group(['namespace' => 'api', 'middleware' => 'cors'], function () {
  Route::get('ocorrencias', 'OcorrenciaController@index')
  ->name('ocorrencias.get');
  Route::post('ocorrencias', 'OcorrenciaController@store');
  Route::get('ocorrencias/{id}', 'ocorrenciaController@show');
});
