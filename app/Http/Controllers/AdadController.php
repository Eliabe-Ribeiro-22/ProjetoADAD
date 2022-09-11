<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function sendForm(Request $request)
    {
        try {
            $credentials = $request->validate([
                'nome' => ['required'],
                'telefone' => ['required'],
                'mensagem' => ['required'],
            ]);

            $nome = $request->nome;
            $telefone = $request->telefone;
            $mensagem = $request->mensagem;

            if ($credentials) {
                Mail::send(
                    'email.sendMail',
                    [
                        'nome' => $nome,
                        'telefone' => $telefone,
                        'mensagem' => $mensagem,
                    ],
                    function ($message) use ($request) {
                        $message->to('adcbsul@gmail.com');
                        $message->from('adcbsul@gmail.com', 'ADCBSUL');
                        $message->subject('Mensagem via formulário');
                    },
                );

                return redirect('/')->with('msg', 'O formulário foi enviado com sucesso');
            } else {
                return redirect('/')->with('message', 'Falha ao enviar o formulário. Tente mais tarde');
            }
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}
