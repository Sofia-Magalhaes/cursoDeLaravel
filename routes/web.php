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

/*oi */

Route::get('/', function () {

    $nome = "Sofia";
    $idade = 18;

    $arr = [1,2,3,4,5];
    $nomes = ["So", "fi", "a"];

    return view('welcome', [
        'nome' => $nome,
        'idade' => $idade,
        'profissao' => "programadora",
        'arr' => $arr,
        'nomes' => $nomes
    ]);

});

Route::get('/contato', function () {
    return view('contado');
});

Route::get('/produto', function () {
    return view('produtos');
});


