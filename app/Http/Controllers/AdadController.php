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
            return view('adad.login');
        } catch (Exception $e) {
            return 'Ocorreu um erro no Login do ADAD<br/>' . $e->getMessage();
        }
    }

    public function auth()
    {
        try {
            //authentication with Sanctum
            return 'OK, autenticação deu certo';
        } catch (Exception $e) {
            return 'Ocorreu um erro ao fazer login<br/>' . $e->getMessage();
        }
    }
}
