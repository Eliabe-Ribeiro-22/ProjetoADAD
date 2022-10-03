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

// P. EVA
use App\Models\Permission;
use App\Models\Warning;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

date_default_timezone_set('America/Sao_Paulo');

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

        Auth::login($user); // Loga com Sanctum
        return redirect()->intended('/');
    }

    // public function login()
    // {
    //     return response()
    //         ->view('auth/login')
    //         ->setStatusCode(200);
    // }

    // public function autorizar(Request $request)
    // {
    //     $credentials = $request->validate([
    //         'email' => ['required', 'email'],
    //         'password' => ['required'],
    //     ]);

    //     if (Auth::attempt($credentials)) {
    //         return redirect()->intended();
    //     } else {
    //         return back()->with('msg', 'Erro de autenticação: Verifique seu email e a senha');
    //     }
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function showForgetPasswordForm()
    {
        return response()
            ->view('auth.forgot-password')
            ->setStatusCode(200);
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
        ]);

        if ($credentials) {
            if (User::where('email', '=', $request->email)->exists()) {
                $token = Str::random(64);

                DB::table('password_resets')->insert([
                    'email' => $request->email,
                    'token' => $token,
                    'created_at' => date('Y-m-d\TH:i'),
                ]);

                Mail::send('email.forgetPassword', ['token' => $token], function ($message) use ($request) {
                    $message->to($request->email);
                    $message->from('projetoevagaropaba@gmail.com', 'Projeto Eva');
                    $message->subject('Recuperação de senha');
                });

                return redirect('/')->with('msg', 'O email de recuperação de senha foi enviado');
            } else {
                return redirect('/')->with('message', 'Falha ao enviar o email de recuperação de senha. Tente mais tarde');
            }
        }
    }

    public function showResetPasswordForm($token)
    {
        return response()
            ->view('auth.forgetPasswordLink', ['token' => $token])
            ->setStatusCode(200);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email'],
            'password' => [
                'required',
                'min:8', // must be at least 8 characters in length
                //    'regex:/[a-z]/',       must contain at least one lowercase letter
                'regex:/[A-Z]/', // must contain at least one uppercase letter
                //    'regex:/[0-9]/',       must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'password_confirmation' => [
                'required',
                'min:8', // must be at least 8 characters in length
                //    'regex:/[a-z]/',       must contain at least one lowercase letter
                'regex:/[A-Z]/', // must contain at least one uppercase letter
                //    'regex:/[0-9]/',       must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
                'same:password',
            ],
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token,
            ])
            ->first();

        if (!$updatePassword) {
            return redirect('/')->with('msg', 'Falha no link de verificação');
        }

        $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        DB::table('password_resets')
            ->where(['email' => $request->email])
            ->delete();

        return redirect('auth/login')->with('message', 'Sua senha foi alterada com sucesso');
    }


    //function than neeed?
    public function setnewPassword(Request $request)
    {
        $request->validate([            
            'password' => [
                'required',
                'min:8',              // must be at least 8 characters in length
                //    'regex:/[a-z]/',       must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                //    'regex:/[0-9]/',       must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
            ],
            'newpassword' => [
                'required',
                'min:8',              // must be at least 8 characters in length
                //    'regex:/[a-z]/',       must contain at least one lowercase letter
                'regex:/[A-Z]/',      // must contain at least one uppercase letter
                //    'regex:/[0-9]/',       must contain at least one digit
                'regex:/[@$!%*#?&]/', // must contain a special character
                'same:password'
            ]
        ]);

        $user = User::find(Auth::user()->id);

        $user->password = Hash::make($request->password);

        $user->save();


        return redirect(route('dashboard'))->with("msg", "Senha alterada com sucesso");
    }    
    
}
