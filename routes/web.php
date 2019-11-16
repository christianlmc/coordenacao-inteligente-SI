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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/fila-de-atendimento', function(){
    return "Fila de atendimento";
})->name('filas.index');

Route::get('/agendar-coordenador', 'FilaController@agendar')->name('filas.agendar');
Route::post('/agendar-coordenador', 'FilaController@criar')->name('filas.criar');

Route::get('/buscador-de-disciplinas', 'DisciplinaController@index')->name('disciplinas.index');
Route::get('/buscador-de-disciplinas/resultados', 'DisciplinaController@buscar')->name('disciplinas.buscar');

Route::get('/minhas-trocas', 'TrocaTurmaController@index')->name('turma_trocas.index');
Route::get('/troca-turmas/nova', 'TrocaTurmaController@nova')->name('turma_trocas.nova');
Route::post('/troca-turmas', 'TrocaTurmaController@criar')->name('turma_trocas.criar');
