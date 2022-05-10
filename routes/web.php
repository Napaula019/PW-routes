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
    return view('welcome');
});

Route::get('/esporte/{ano}/{titulo}', function ($ano, $titulo) {

    echo "<h1>" . implode(" ", explode("-", $titulo)) . "</h1>";
});



Route::get('/cadastrar/{id?}', function ($id = null) {

    echo $id == null ? "Não tem id" : $id;
})->where("id", "[0-9]+");
