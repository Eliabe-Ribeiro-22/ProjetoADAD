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

use App\Http\Controllers\AdadController;

Route::get('/', function () {
        return view('igreja.index');
    }
);

// Rotas ADAD
//  Login / Registrar (get)
Route::get('/auth/login', [AdadController::class, 'login'])->name('login');
Route::get('/auth/register', [AdadController::class, "register"])->name('register');
Route::get('forgot-password', [AdadController::class, 'showForgetPasswordForm'])->name('showForgetPasswordForm');

// Login / Registrar (post)
Route::post('/validar', [AdadController::class, 'auth']);
Route::post('/authenticate', [AdadController::class, "autorizar"])->name('authenticate');
Route::post('/newuser', [AdadController::class, "store"])->name('newuser');