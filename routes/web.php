<?php
use Illuminate\Support\Facades\Route;

// Chamando Controllers
use App\Http\Controllers\AdadController;
use App\Http\Controllers\IgrejaController;


// IgrejaController
Route::get('/', [IgrejaController::class, 'index'])->name('index.page');

Route::get('/institucional', [IgrejaController::class, 'institucional_create'])->name('institucional_create');

Route::get('/createformIgreja', [IgrejaController::class, 'form_create'])->name('form_create');

Route::post('/sendForm', [IgrejaController::class, 'sendForm'])->name('form_send');

Route::get('/nossosProjetos', [IgrejaController::class, 'projetos_create'])->name('projetos_create');

Route::get('/nossasReunioes', [IgrejaController::class, 'nossas_reunioes_create'])->name('nossas_reunioes_create');


// Rota para exibir Formulário para cadastro de alunos

Route::get('/AreaRestrita', [AdadController::class, 'aluno_create'])
->name('aluno_create')
->middleware('auth');

Route::post('/alunos', [AdadController::class, 'aluno_store'])->name('aluno_store');

Route::delete('/alunos/{id}', [AdadController::class, 'aluno_destroy'])->name('aluno_destroy');

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