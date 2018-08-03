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

Route::get('/meuPrimeiroCaminho/{nome}', function ($nome) {
    if($nome == "daniel"){


    
    return "Meu primeiro Caminho";
    }
    else 
    {
        return redirect('/');
    }
});

Route::get('/filmes/{id}', 'FilmesController@procurarFilmeId');


Route::get('/atores', 'AtorController@directory');

Route::get('/atores/show/{id}', 'AtorController@show');

Route::get('/filmes/procurar/{nome}', 'FilmesController@procurarFilmeNome');

Route::get('/ListaFilmes', 'FilmesController@ListarFilmes');

