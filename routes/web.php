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

// usando funções do "AdadController"
use App\Http\Controllers\AdadController;

// usando funções do "IgrejaController"
use App\Http\Controllers\IgrejaController;


// Rotas da Igreja
Route::get('/', [IgrejaController::class, 'index'])->name('index.page');

Route::get('/institucional', [IgrejaController::class, 'institucional_create'])->name('institucional_create');

// Formulário de Contato
Route::get('/createformIgreja', [IgrejaController::class, 'form_create'])->name('form_create');

// Nossos Projetos
Route::get('/nossosProjetos', [IgrejaController::class, 'projetos_create'])->name('projetos_create');

// Nossas Reuniões
Route::get('/nossasReunioes', [IgrejaController::class, 'nossas.reunioes_create'])->name('nossas.reunioes_create');


// Cadastro de Alunos ADAD

// Exibindo Form para cadastro
Route::get('/AreaRestrita', [AdadController::class, 'createAreaRestrita'])->name('aluno_create');

// Rota para cadastrar alunos ADAD
Route::post('/alunos', [AdadController::class, 'store'])->name('aluno_store');

// Rota para deletar aluno ADAD
Route::delete('/alunos/{id}', [AdadController::class, 'destroy'])->name('aluno_destroy');

// Rota para exibir formulário de alteração de Aluno
Route::get('/alunos/edit/{id}', [AdadController::class, 'edit'])->name('aluno_edit');

// Rota para alterar alunos
Route::put('/alunos/update/{id}', [AdadController::class, 'update'])->name('aluno_update');

Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');