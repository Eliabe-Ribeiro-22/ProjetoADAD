<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Exception\HttpException;
use Exception;
use App\Models\Aluno;
use App\Models\User;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdadController extends Controller
{
    // Função para exibir Formulário para cadastro de alunos
    public function aluno_create()
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

    // Função para cadastrar alunos ADAD
    public function aluno_store(Request $request)
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

    // Função para deletar um aluno ADAD
    public function aluno_destroy($id)
    {
        try {
            // encontrar o id do aluno, para depois excluí-lo
            Aluno::findOrFail($id)->delete();

            return redirect('/AreaRestrita');
        } catch (Exception $e) {
            return 'Ocorreu um erro ao excluir um aluno!<br/>' . $e->getMessage();
        }
    }

    // Função para exibir formulário de alteração de Aluno
    public function aluno_edit($id)
    {
        $aluno = Aluno::findOrFail($id);

        // return view('adad.area-restrita', ['aluno' => $aluno, 'alterar' => true]);
        return view('adad.area-restrita', ['aluno' => $aluno, 'alterar' => true]);
    }

    // Função para alterar alunos ADAD
    public function aluno_update(Request $request)
    {
        try {
            $data = $request->all();

            $c = Aluno::findOrFail($request->id)->update($data);
            return redirect('/AreaRestrita');
        } catch (Exception $e) {
            return 'Ocorreu um erro ao alterar um aluno!<br/>' . $e->getMessage();
        }
    }

    // Auth e Cadastrar
    public function login()
    {
        try {
            return view('auth.login');
        } catch (Exception $e) {
            return 'Ocorreu um erro no Login do ADAD<br/>' . $e->getMessage();
        }
    }
    // Registra um novo usuário
    public function register()
    {
        return response()
            ->view('auth/register')
            ->setStatusCode(200);
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
        } else {
            return back()->with('msg', 'Erro de autenticação: Verifique seu email e a senha');
        }
    }

    public function store(Request $request)
    {
        // Validação de senha
        $request->validate([
            'email' => ['required', 'email'],
            'password' => [
                'required', // REQUISITOS DE SENHA:
                'min:8', // No mínimo 8 caracteres
                'regex:/[A-Z]/', // Pelo menos uma letra maiúscula
                'regex:/[@$!%*#?&]/', // Pelo menos um caractere especial
            ],
            'password_confirmation' => [
                'required', // REQUISITOS DE SENHA:
                'min:8', // No mínimo 8 caracteres
                'regex:/[A-Z]/', // Pelo menos uma letra maiúscula
                'regex:/[@$!%*#?&]/', // Pelo menos um caractere especial
                'same:password', // Ser idêntica a senha do campo anterior
            ],
        ]);

        // Adicionar informações do usuário no banco
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        $user->address = $request->address;
        $user->password = Hash::make($request->password);

        $user->save();

        Auth::login($user); // Loga
        return redirect()->intended('/');
    }
}
