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
    return redirect('/aluno');
});

Route::get('/aluno', 'AlunoController@index')->name('aluno.index');
Route::post('/aluno', 'AlunoController@store')->name('aluno.store');
Route::get('/aluno/novo', 'AlunoController@create')->name('aluno.create');
Route::get('/aluno/{id}', 'AlunoController@show')->name('aluno.show');
Route::get('/aluno/{id}/editar', 'AlunoController@edit')->name('aluno.edit');
Route::put('/aluno/{id}', 'AlunoController@update')->name('aluno.update');

Route::get('/curso', 'CursoController@index');
Route::post('/curso', 'CursoController@store');
Route::get('/curso/novo', 'CursoController@create');
Route::get('/curso/{id}', 'CursoController@show');
Route::get('/curso/{id}/editar', 'CursoController@edit');
Route::put('/curso/{id}', 'CursoController@update');

Route::get('/matricula', 'MatriculaController@index');
Route::get('/matricula/novo', 'MatriculaController@create');
Route::post('/matricula', 'MatriculaController@store');
