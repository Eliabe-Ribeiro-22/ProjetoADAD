<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;

// Rotas relativas as páginas da igreja Campo Belo
Route::get('/institucional', [IgrejaController::class, 'institutionalPg'])->name('institutional.page');
Route::get('/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::get('/projetos', [IgrejaController::class, 'projectsPg'])->name('projects.page');
Route::get('/reunioes', [IgrejaController::class, 'reunionsPg'])->name('reunions.page');

// Funções de Sistema de Login
//  Login / Registrar (get)
Route::get('/auth/login', [AdadController::class, 'login'])->name('login');

Route::get('/auth/register', [AdadController::class, 'register'])->name('register');
// ->middleware('auth');

Route::get('forgot-password', [AdadController::class, 'showForgetPasswordForm'])->name('showForgetPasswordForm');

// Autenticação
Route::get('/logout', [AdadController::class, 'logout'])->name('logout');

Route::get('reset_password/{token}', [AdadController::class, 'showResetPasswordForm'])->name('resetPassword');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
