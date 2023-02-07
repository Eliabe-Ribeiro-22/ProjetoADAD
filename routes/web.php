<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;

// Rotas relativas as páginas da igreja Campo Belo
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');

Route::redirect('/institucional', 'api/institucional')->name('institutional.page');
Route::redirect('/projetos', 'api/projetos')->name('projects.page');
Route::redirect('/reunioes', 'api/reunioes')->name('reunions.page');

Route::get('/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');

// Rotas para o sistema de gestão do adad
Route::get('/AreaRestrita', [AdadController::class, 'aluno_create'])
    ->name('aluno_create')
    ->middleware('auth');

Route::post('/alunos', [AdadController::class, 'aluno_store'])->name('aluno_store');

Route::delete('/alunos/{id}', [AdadController::class, 'aluno_destroy'])->name('aluno_destroy');

Route::get('/alunos/edit/{id}', [AdadController::class, 'aluno_edit'])->name('aluno_edit');

Route::put('/alunos/update/{id}', [AdadController::class, 'aluno_update'])->name('aluno_update');

// Funções de Sistema de Login
//  Login / Registrar (get)
Route::get('/auth/login', [AdadController::class, 'login'])->name('login');

Route::get('/auth/register', [AdadController::class, 'register'])->name('register');
// ->middleware('auth');

Route::redirect('forgot-password_web', '/api/forgot-password')->name('showForgetPasswordForm');

// Login / Registrar (post)
Route::post('/authenticate', [AdadController::class, 'autorizar'])->name('authenticate');

Route::post('/newuser', [AdadController::class, 'store'])->name('newuser');

// Autenticação
Route::redirect('/logout_web', '/api/logout')->name('logout');

Route::post('forget_password', [AdadController::class, 'submitForgetPasswordForm'])->name('submitForgetPasswordForm');

Route::redirect('reset_password_web/{token}', '/api/reset_password/{token}')->name('resetPassword');

Route::post('reset_password', [AdadController::class, 'submitResetPasswordForm'])->name('submitPassword');
