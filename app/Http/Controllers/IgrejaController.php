<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class IgrejaController extends Controller
{
    public function mainPg()
    {
        //$api = "https://www.abibliadigital.com.br/api/verses/nvi/sl/91/1";
        //$dailyVerse = json_decode(file_get_contents($api), true);
        $dailyVerse = [
            'text' => 'Aquele que habita no esconderijo do Altíssimo, à sombra do Onipotente descansará.',
            'book' => ['name' => 'Sl'],
            'chapter' => '91',
            'number' => '1',
        ];
        return view('igreja.inicio', ['dailyVerse' => $dailyVerse]);
    }

    public function institutionalPg()
    {
        return view('igreja.institucional');
    }

    public function contactPg()
    {
        return view('igreja.contato');
    }

    public function projectsPg()
    {
        return view('igreja.projetos');
    }

    public function reunionsPg()
    {
        return view('igreja.reunioes');
    }

    public function index()
    {
        try {
            // API BIBLIA - Vou desativar, pois vou trabalhar com CSS
            // Ela tem limite de requisicoes por hora
            #$api = "https://www.abibliadigital.com.br/api/verses/nvi/sl/91/1";
            #$dailyVerse = json_decode(file_get_contents($api), true);
            // $dailyVerse = ['a', 'b'];
            $dailyVerse = [
                'book' => [
                    'abbrev' => 'en',
                    'name' => 'Salmos',
                    'author' => 'David, Moisés, Salomão',
                    'group' => 'Poéticos',
                    'version' => 'nvi',
                ],
                'chapter' => 91,
                'number' => 1,
                'text' => 'Aquele que habita no abrigo do Altíssimo e descansa à sombra do Todo-poderoso',
            ];
            return view('igreja.index', ['dailyVerse' => $dailyVerse]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }

    public function institucional_create()
    {
        try {
            return view('igreja.institucional');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir os nossos eventos!';
            echo '</br>';
        }
    }

    public function form_create()
    {
        try {
            return view('igreja.form');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir o formulário de contato';
            echo '</br>';
        }
    }

    public function projetos_create()
    {
        try {
            return view('igreja.projetos');
        } catch (Exception $e) {
            echo 'Ocorreu um erro ao exibir os nossos eventos!';
            echo '</br>';
        }
    }

    public function nossas_reunioes_create()
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
                return redirect('/')->with('error', 'Falha ao enviar o formulário. Tente mais tarde');
            }
        } catch (Exception $e) {
            return redirect('/')->with('error', 'Falha ao enviar o formulário. Tente mais tarde');
        }
    }

    public function rest()
    {
        return view('rest.error_404');
    }
}
