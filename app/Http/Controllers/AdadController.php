<?php

namespace App\Http\Controllers;

use App\Exception\HttpException;

// Usado para salvar aluno(Request)
use Illuminate\Http\Request;

// usado Model Students
use App\Models\Aluno;

class AdadController extends Controller
{
    public function index_adad()
    {
        return view('adad.index');
    }

    // Exibir Form Cadastro de Alunos
    public function createAreaRestrita()
    {
        try {
            $alunos = Aluno::all();
            # Form que cadastra alunos,
            // por isso passamos o value false na var. alterar
            return view('adad.area-restrita', ['alterar' => false, 'alunos' => $alunos]);
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    // salvar alunos
    public function store(Request $request)
    {
        try {
            // salvar aluno
            $aluno = new Aluno();

            $aluno->NOME = $request->nome;
            $aluno->IDADE = $request->idade;
            $aluno->nascimento = $request->nascimento;
            $aluno->SERIE = $request->serie;
            $aluno->CPF = $request->cpf;
            $aluno->MAE = $request->mae;
            $aluno->PAI = $request->pai;
            $aluno->RUA = $request->rua;
            $aluno->NUMERO = $request->numero;
            $aluno->BAIRRO = $request->bairro;
            $aluno->COMPLEMENTO = $request->complemento;
            $aluno->CIDADE = $request->cidade;
            $aluno->RELIGIAO = $request->religiao;

            $aluno->save();

            // deu certo o salvar
            return redirect('/AreaRestrita');
        } catch (Exception $e) {
            return 'Ocorreu um erro ao cadastrar um aluno!<br/>' . $e->getMessage();
        }
    }

    // Exclusão de Alunos
    public function destroy($id)
    {
        try {
            // encontrar o id do aluno, para depois excluí-lo
            Aluno::findOrFail($id)->delete();

            return redirect('/AreaRestrita');
        } catch (Exception $e) {
            return 'Ocorreu um erro ao excluir um aluno!<br/>' . $e->getMessage();
        }
    }

    // Exibir Form de Alteração de aluno
    public function edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        // return view('adad.area-restrita', ['aluno' => $aluno, 'alterar' => true]);
        return view('adad.area-restrita', ['aluno' => $aluno, 'alterar' => true]);
    }

    // Função para Alterar Aluno no DB
    public function update(Request $request)
    {
        try {
            $data = $request->all();

            $c = Aluno::findOrFail($request->id)->update($data);
            return redirect('/AreaRestrita');
        } catch (Exception $e) {
            return 'Ocorreu um erro ao alterar um aluno!<br/>' . $e->getMessage();
        }
    }
}
