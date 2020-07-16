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




Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function() {
    Route::get('/inicio', 'inicio@index')->name('inicio');
    Route::get('/Ajuda', function () { return view('Ajuda'); })->name('help');
    Route::get('/post', 'PostControlador@index')->name('cadastro');
    Route::Post('/post', 'PostControlador@store');
    Route::delete('/post{id}', 'PostControlador@destroy');

    // Conteudos 
    Route::get('/Conjuntos_numericos', 'matematica@index')->name('conjuntos');
});

Route::get('/', function () { return view('auth/Welcome'); })->middleware('guest');;
Auth::routes();