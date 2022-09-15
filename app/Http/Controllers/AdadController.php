<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AdadController extends Controller
{
    public function login()
    {
        try {
            return view('auth.login');
        } catch (Exception $e) {
            return 'Ocorreu um erro no Login do ADAD<br/>' . $e->getMessage();
        }
    }

    public function auth()
    {
        try {
            // Autenticação com Sanctum
            return 'OK, autenticação deu certo';
        } catch (Exception $e) {
            return 'Ocorreu um erro ao fazer login<br/>' . $e->getMessage();
        }
    }

    // Registra um novo usuário
    public function register()
    {
        return response()->view('auth/register')->setStatusCode(200);
    }

    // Efetua a validação do login
    public function autorizar(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) { 
            return redirect()->intended();
        }
        else{
            return back()->with("msg", "Erro de autenticação: Verifique seu email e a senha");
        }
    }
}
