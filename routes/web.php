<?php
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
Route::get('/', function () {
    return view('layout.index');
});
//layout.index
//Route::get('/Usuarios', 'App\Http\Controllers\UsuariosController@index');
//Route::get('/Usuarios/create', 'App\Http\Controllers\UsuariosController@create');
//Route::get('/Usuarios/edit', 'App\Http\Controllers\UsuariosController@edit');
//Route::get('/Usuarios/show', 'App\Http\Controllers\UsuariosController@show');
//Route::delete('/Usuarios/destroy', 'App\Http\Controllers\UsuariosController@destroy');
//Route::post('/Usuarios', 'App\Http\Controllers\UsuariosController@store');
//Route::put('/Usuarios/update', 'App\Http\Controllers\UsuariosController@update');

Route::resource('Usuarios', 'App\Http\Controllers\UsuariosController');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
