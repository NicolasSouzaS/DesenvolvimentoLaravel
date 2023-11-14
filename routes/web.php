<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SobreController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/sobre', [SobreController::class, 'index'])->name('sobre');
Route::get('/contato', [ContatoController::class, 'index'])->name('contato');
Route::get('/modalidade', [ModalidadesController::class, 'index'])->name('modalidade');
Route::get('/treino', []);


// Route::get('/sobre', 'SobreController@index')->name('sobre');
// Route::get('/modalidades', 'ModalidadesController@index')->name('modalidades');
// Route::get('/noticias', 'NoticiasController@index')->name('noticias');
// Route::get('/treino', 'TreinoController@index')->name('treino');
// Route::get('/contato', 'ContatoController@index')->name('contato');
