<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;

use Illuminate\Http\Request;

// Rotas relativas as páginas da igreja Campo Belo
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');
Route::get('/institucional', [IgrejaController::class, 'institutionalPg'])->name('institutional.page');
Route::get('/projetos', [IgrejaController::class, 'projectsPg'])->name('projects.page');
Route::get('/reunioes', [IgrejaController::class, 'reunionsPg'])->name('reunions.page');
Route::get('/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');


// Rotas para o sistema de gestão do adad
Route::get('/AreaRestrita', [AdadController::class, 'aluno_create'])
    ->name('aluno_create');
    //->middleware('auth');
Route::get('/alunos/edit/{id}', [AdadController::class, 'aluno_edit'])->name('aluno_edit');

Route::post('/alunos', [AdadController::class, 'aluno_store'])->name('aluno_store');
Route::put('/alunos/update/{id}', [AdadController::class, 'aluno_update'])->name('aluno_update');
Route::delete('/alunos/{id}', [AdadController::class, 'aluno_destroy'])->name('aluno_destroy');


// Funções de Sistema de Login
//  Login / Registrar
Route::get('/auth/login', [AdadController::class, 'login'])->name('login');
Route::get('/auth/register', [AdadController::class, 'register'])->name('register');
//->middleware('auth');
Route::get('forgot-password', [AdadController::class, 'showForgetPasswordForm'])->name('showForgetPasswordForm');

//Route::post('/autorizar', [AdadController::class, 'autorizar'])->name('autorizar');
Route::post('/autorizar', function(Request $request){
    try{
        // 'email' => ['required', 'email'],

        $credentials = $request->validate([
        'email' => 'email',
        'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            return redirect('AreaRestrita')->with('msg', 'Logado com sucesso!');
        } else {
            return back()->with('error', 'Erro de autenticação: Verifique seu email e senha');
        }
   }
   catch(Exception $e){
       return $e->getMessage();
    }
})->name('autorizar');

Route::post('/newuser', [AdadController::class, 'store'])->name('newuser');

// Autenticação
Route::get('/logout', [AdadController::class, 'logout'])->name('logout');
Route::post('forget_password', [AdadController::class, 'submitForgetPasswordForm'])->name('submitForgetPasswordForm');
Route::get('reset_password/{token}', [AdadController::class, 'showResetPasswordForm'])->name('resetPassword');
Route::post('reset_password', [AdadController::class, 'submitResetPasswordForm'])->name('submitPassword');