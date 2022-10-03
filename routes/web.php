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

// Funcionalidades das páginas da Igreja

// Rotas que usam IgrejaController

Route::get('/', [IgrejaController::class, 'index'])->name('index.page');

Route::get('/institucional', [IgrejaController::class, 'institucional_create'])->name('institucional_create');

// Formulário de Contato
Route::get('/createformIgreja', [IgrejaController::class, 'form_create'])->name('form_create');

// Rota para enviar os dados preenchidos no Formulário de Contato por email
Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');

// Nossos Projetos
Route::get('/nossosProjetos', [IgrejaController::class, 'projetos_create'])->name('projetos_create');

// Nossas Reuniões
Route::get('/nossasReunioes', [IgrejaController::class, 'nossas_reunioes_create'])->name('nossas_reunioes_create');

// Cadastro de Alunos ADAD
//  Rotas que usam AdadController

// Rota para exibir Formulário para cadastro de alunos

Route::get('/AreaRestrita', [AdadController::class, 'aluno_create'])
->name('aluno_create')
->middleware('auth');

// Rota para cadastrar alunos ADAD
Route::post('/alunos', [AdadController::class, 'aluno_store'])->name('aluno_store');

// Rota para deletar um aluno ADAD
Route::delete('/alunos/{id}', [AdadController::class, 'aluno_destroy'])->name('aluno_destroy');

// Rota para exibir formulário de alteração de Aluno
Route::get('/alunos/edit/{id}', [AdadController::class, 'aluno_edit'])->name('aluno_edit');

// Rota para alterar alunos ADAD
Route::put('/alunos/update/{id}', [AdadController::class, 'aluno_update'])->name('aluno_update');


//  Login / Registrar (get)
Route::get('/auth/login', [AdadController::class, 'login'])->name('login');

Route::get('/auth/register', [AdadController::class, "register"])->name('register');

Route::get('forgot-password', [AdadController::class, 'showForgetPasswordForm'])->name('showForgetPasswordForm');

// Login / Registrar (post)
Route::post('/authenticate', [AdadController::class, "autorizar"])->name('authenticate');

Route::post('/newuser', [AdadController::class, "store"])->name('newuser');

//Autenticação
Route::get('/logout', [AdadController::class, 'logout'])->name('logout');

Route::post('forget_password', [AdadController::class, 'submitForgetPasswordForm'])->name('submitForgetPasswordForm');

Route::get('reset_password/{token}', [AdadController::class, 'showResetPasswordForm'])->name('resetPassword');

Route::post('reset_password', [AdadController::class, 'submitResetPasswordForm'])->name('submitPassword');

