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
    Route::get('/Conjuntos_numericos', 'matematica@conjunto')->name('conjuntos');
    Route::get('/Regularidades_numericas', 'matematica@Regularidades')->name('regulariedade');
    Route::get('/Progressoes', 'matematica@Progressoes')->name('Progressoes');
    Route::get('/duasgrandezas', 'matematica@duasgrandezas')->name('duasgrandezas');
    Route::get('/Proporcionalidades', 'matematica@Proporcionalidades')->name('Proporcionalidades');
    Route::get('/Funcao_de_1_grau', 'matematica@Funcao_de_1_grau')->name('Funcao_de_1_grau');
    Route::get('/Funcao_de_2_grau', 'matematica@Funcao_de_2_grau')->name('Funcao_de_2_grau');
    Route::get('/Crescimento', 'matematica@Crescimento')->name('Crescimento');
    Route::get('/Funcao_exponencial', 'matematica@Funcao_exponencial')->name('Funcao_exponencial');
    Route::get('/inequacoes', 'matematica@inequações')->name('inequacoes');
    Route::get('/Logaritmos', 'matematica@Logaritmos')->name('Logaritmos');
    Route::get('/Funcao_logaritmica', 'matematica@Funcao_logaritmica')->name('Funcao_logaritmica');
    Route::get('/trigonometricas', 'matematica@trigonométricas')->name('trigonometricas');
    Route::get('/Poligonos_regulares', 'matematica@Poligonos_regulares')->name('Poligonos_regulares');
    Route::get('/triangulos_nao_retangulos', 'matematica@triangulos_nao_retangulos')->name('triangulos_nao_retangulos');

    // Seus posts
    Route::get('/seus_cadastros', 'matematica@seus_cadastros')->name('seus_cadastros');
});

Route::get('/', function () { return view('auth/Welcome'); })->middleware('guest');;
Auth::routes();