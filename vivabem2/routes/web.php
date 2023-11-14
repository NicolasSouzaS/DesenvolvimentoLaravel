<?php

use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class,])

// Route::get('/sobre', 'SobreController@index')->name('sobre');
// Route::get('/modalidades', 'ModalidadesController@index')->name('modalidades');
// Route::get('/noticias', 'NoticiasController@index')->name('noticias');
// Route::get('/treino', 'TreinoController@index')->name('treino');
// Route::get('/contato', 'ContatoController@index')->name('contato');
