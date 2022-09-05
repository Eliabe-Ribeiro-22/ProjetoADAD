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
        return view('igreja.index');
    }
);
Route::get('/create', function () {
    try {
        return view('igreja.formIgreja');
    } catch (Exception $e) {
        echo "Ocorreu um erro ao exibir o formulário de contato";
        echo "</br>";
    }
});
