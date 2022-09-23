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

// using functions on Controllers "ChurchController"
use App\Http\Controllers\ChurchController;
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;

Route::get('/', [IgrejaController::class, 'index']);

Route::get('/institucional', [IgrejaController::class, 'createInstitucional']);


// Church's routes
Route::get('/', [ChurchController::class, 'index']);

Route::get('/institucional', [ChurchController::class, 'createInstitucional']);

// Contact's form
Route::get('/createformIgreja', [ChurchController::class, 'createFormIgreja']);

// Projects
Route::get('/nossosProjetos', [ChurchController::class, 'createProjetos']);

// Our Meetings
Route::get('/nossasReunioes', [ChurchController::class, 'createNossasReunioes']);


// Cadastro de Alunos
// Exibindo Form para cadastro
Route::get('/AreaRestrita', [AdadController::class, 'createAreaRestrita'])->name('AlunosCreate');

// route to register ADAD students
Route::post('/alunos', [AdadController::class, 'store'])->name('AlunoStore');

// To delete
Route::delete('/alunos/{id}', [AdadController::class, 'destroy'])->name('AlunosDestroy');

// Exibir Form de Atualizar cadastro
Route::get('/alunos/edit/{id}', [AdadController::class, 'edit'])->name('AlunosEdit');

// To update
Route::put('/alunos/update/{id}', [AdadController::class, 'update'])->name('AlunosUpdate');
