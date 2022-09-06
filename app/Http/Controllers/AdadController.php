<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class AdadController extends Controller
{

    public function indexADAD()
    {
        // return view('welcome');
    }

    public function arearestrita()
    {
        // exibir os alunos
    }

    public function store()
    {
        // salvar
    }

    public function sendForm()
    {
        // enviar form de contato Igreja por gmail
        try {
            echo "Mensagem enviada com sucesso!";
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
