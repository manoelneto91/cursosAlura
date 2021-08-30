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

Route::get('/alunos', 'AlunosController@listarAlunos');
Route::get('/alunos/criar', 'AlunosController@create');
Route::post('/alunos/criar', 'AlunosController@store');
