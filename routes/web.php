<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/home', [App\Http\Controllers\HomeController::class, 'salvar'])->name('home');
Route::get('/gerenciar', [App\Http\Controllers\HomeController::class, 'listar'])->name('gerenciar');
Route::get('/gerenciar/editar/{id}', [App\Http\Controllers\HomeController::class, 'editar'])->name('editar');
Route::get('/gerenciar/excluir/{id}', [App\Http\Controllers\HomeController::class, 'excluir'])->name('excluir');

//Route::get('/home/excluirUser/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'excluirUser'])->name('excluirUser');
Route::resource('tarefa', 'App\Http\Controllers\TarefaController');