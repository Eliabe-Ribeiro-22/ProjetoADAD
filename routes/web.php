<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;


// ### Rotas do novo design ###

// Rotas da barra de navegação
Route::get('/', [IgrejaController::class, 'mainPg'])->name('main.page');
Route::get('/institucional', [IgrejaController::class, 'institutionalPg'])->name('institutional.page');
// Route::get('/contato', [IgrejaController::class, 'contactPg'])->name('contact.page');
Route::get('/contato', [IgrejaController::class, 'form_create'])->name('contact.page');
Route::get('/projetos', [IgrejaController::class, 'projectsPg'])->name('projects.page');
Route::get('/reunioes', [IgrejaController::class, 'reunionsPg'])->name('reunions.page');

Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');

// AdadController
Route::get('/AreaRestrita', [AdadController::class, 'aluno_create'])
->name('aluno_create')
->middleware('auth');

Route::post('/alunos', [AdadController::class, 'aluno_store'])->name('aluno_store');

Route::delete('/alunos/{id}', [AdadController::class, 'aluno_destroy'])->name('aluno_destroy');

Route::get('/alunos/edit/{id}', [AdadController::class, 'aluno_edit'])->name('aluno_edit');

Route::put('/alunos/update/{id}', [AdadController::class, 'aluno_update'])->name('aluno_update');



//  Login / Registrar (get)
Route::get('/auth/login', [AdadController::class, 'login'])->name('login');

Route::get('/auth/register', [AdadController::class, "register"])->name('register')->middleware('auth');

Route::get('forgot-password', [AdadController::class, 'showForgetPasswordForm'])->name('showForgetPasswordForm');

// Login / Registrar (post)
Route::post('/authenticate', [AdadController::class, "autorizar"])->name('authenticate');

Route::post('/newuser', [AdadController::class, "store"])->name('newuser');

// Autenticação
Route::get('/logout', [AdadController::class, 'logout'])->name('logout');

Route::post('forget_password', [AdadController::class, 'submitForgetPasswordForm'])->name('submitForgetPasswordForm');

Route::get('reset_password/{token}', [AdadController::class, 'showResetPasswordForm'])->name('resetPassword');

Route::post('reset_password', [AdadController::class, 'submitResetPasswordForm'])->name('submitPassword');

/*
// IgrejaController
Route::get('/', [IgrejaController::class, 'index'])->name('index.page');

Route::get('/institucional', [IgrejaController::class, 'institucional_create'])->name('institucional_create');

Route::get('/createformIgreja', [IgrejaController::class, 'form_create'])->name('form_create');


Route::get('/nossosProjetos', [IgrejaController::class, 'projetos_create'])->name('projetos_create');

Route::get('/nossasReunioes', [IgrejaController::class, 'nossas_reunioes_create'])->name('nossas_reunioes_create');
*/
