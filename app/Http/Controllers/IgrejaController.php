<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IgrejaController extends Controller
{
    public function index()
    {
        return view('igreja.index');
    }

    public function createFormIgreja()
    {
        try {
            return view('igreja.form');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir o formulário de contato';
            echo '</br>';
        }
    }

    public function createProjetos()
    {
        try {
            return view('igreja.projetos');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir os nossos eventos!';
            echo '</br>';
        }
    }

    public function createInstitucional()
    {
        try {
            return view('igreja.institucional');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir os nossos eventos!';
            echo '</br>';
        }
    }
    public function createNossasReunioes()
    {
        try {
            return view('igreja.nossas-reunioes');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir os nossos eventos!';
            echo '</br>';
        }
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
                        'mensagem' => $mensagem,
                        'nome' => $nome,
                        'telefone' => $telefone,
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
