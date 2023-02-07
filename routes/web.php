<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;

// Rotas relativas as páginas da igreja Campo Belo
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');

Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');

// Rotas para o sistema de gestão do adad
Route::post('/alunos', [AdadController::class, 'aluno_store'])->name('aluno_store');

Route::delete('/alunos/{id}', [AdadController::class, 'aluno_destroy'])->name('aluno_destroy');

Route::put('/alunos/update/{id}', [AdadController::class, 'aluno_update'])->name('aluno_update');

// Funções de Sistema de Login
//  Login / Registrar (post)
Route::post('/authenticate', [AdadController::class, 'autorizar'])->name('authenticate');

Route::post('/newuser', [AdadController::class, 'store'])->name('newuser');

// Autenticação
Route::post('forget_password', [AdadController::class, 'submitForgetPasswordForm'])->name('submitForgetPasswordForm');

Route::post('reset_password', [AdadController::class, 'submitResetPasswordForm'])->name('submitPassword');
