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

Route::get('/alunos', 'AlunosController@listarAlunos')-> name('listar_alunos');
Route::get('/alunos/criar', 'AlunosController@create')-> name('criar_alunos');
Route::post('/alunos/criar', 'AlunosController@store');
Route::delete('/alunos/remover/{id}', 'AlunosController@destroy');
