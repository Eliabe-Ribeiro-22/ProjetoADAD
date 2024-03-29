<?php
namespace App\Http\Controllers;
use Exception;
use Illuminate\Http\Request;
use App\Exception\HttpException;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

//use App\Models\Permission;
//use App\Models\Warning;

use App\Aluno;
use App\User;


date_default_timezone_set('America/Sao_Paulo');


class AdadController extends Controller
{
    
    // Função para exibir Formulário para cadastro de alunos
    public function aluno_create()
    {
        try {
            $alunos = Aluno::all();
            # Form que cadastra alunos,
            // por isso passamos o value false na variável alterar, pois não é um form de alteracao
            return view('adad.area-restrita', ['alterar' => false, 'alunos' => $alunos]);
        } catch (Exception $e) {
            return redirect()
                ->route('aluno_create')
                ->with('error', 'Ocorreu erro ao carregar a página de alunos');
        }
    }

    // Função para cadastrar alunos ADAD
    public function aluno_store(Request $request)
    {
        try {
            // salvar um aluno
            $aluno = new Aluno;
            
            $aluno->NOME = $request->NOME;
            $aluno->IDADE = $request->IDADE;
            $aluno->nascimento = $request->nascimento;
            $aluno->SERIE = $request->SERIE;
            $aluno->CPF = $request->SERIE;
            $aluno->MAE = $request->MAE;
            $aluno->PAI = $request->PAI;
            $aluno->RUA = $request->RUA;
            $aluno->NUMERO = $request->NUMERO;
            $aluno->BAIRRO = $request->BAIRRO;
            $aluno->COMPLEMENTO = $request->COMPLEMENTO;
            $aluno->CIDADE = $request->CIDADE;
            $aluno->RELIGIAO = $request->RELIGIAO;

            $aluno->save();

            // deu certo o salvar
            return redirect()
                ->route('aluno_create')
                ->with('msg', 'Aluno cadastrado com sucesso');
        } catch (Exception $e) {
            return redirect()
              ->route('aluno_create')
               ->with('error', 'Ocorreu erro ao cadastrar um aluno');

        }
    }

    // Função para deletar um aluno ADAD
    public function aluno_destroy($id)
    {
        try {
            // encontrar o id do aluno, para depois excluí-lo
            Aluno::findOrFail($id)->delete();

            return redirect()
                ->route('aluno_create')
                ->with('msg', 'Aluno excluído com sucesso');
        } catch (Exception $e) {
            return redirect()
                ->route('aluno_create')
                ->with('error', 'Ocorreu erro ao excluir um aluno');
        }
    }

    // Função para exibir formulário de alteração de Aluno
    public function aluno_edit($id)
    {
        try {
            $aluno = Aluno::findOrFail($id);

            return view('adad.area-restrita', ['aluno' => $aluno, 'alterar' => true]);
        } catch (Exception $e) {
            return redirect()
                ->route('aluno_create')
                ->with('error', 'Ocorreu erro ao visualizar a página de alteração de aluno');
        }
    }

    // Função para alterar alunos ADAD
    public function aluno_update(Request $request)
    {
        try {
            $data = $request->all();

            Aluno::findOrFail($request->id)->update($data);
            return redirect()
                ->route('aluno_create')
                ->with('msg', 'Aluno alterado com sucesso');
        } catch (Exception $e) {
            return redirect()
                ->route('aluno_create')
                ->with('error', 'Ocorreu erro ao alterar um aluno. Tente mais tarde!');
        }
    }

    // Auth e Cadastrar
    public function login()
    {
        return response()
            ->view('auth.login')
            ->setStatusCode(200);
    }
    // Registra um novo usuário
    public function register()
    {
        return response()
            ->view('auth/register')
            ->setStatusCode(200);
    }

    public function store(Request $request)
    {
        try {
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
            return redirect()->intended('/')->with('msg', 'Usuário cadastrado com sucesso!');
        } catch (Exception $e) {
            return redirect('/')->with('error', 'Ocorreu erro ao cadastrar um usuário');
        }
    }
    
    public function autorizar(Request $request){
        try {
            $credentials = $request->validate([
                'email' => 'email',
                'password' => 'required',
            ]);
            
            if (Auth::attempt($credentials)) {
                return redirect('AreaRestrita')->with('msg', 'Logado com sucesso!');
            } else {
                return back()->with('error', 'Erro de autenticação: Verifique seu email e senha');
            }
        }
        catch(Exception $e){
            return back()->with('error', 'Erro de autenticação: Verifique seu email e senha');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('msg', 'Usuário deslogado com suceso');
    }

    public function showForgetPasswordForm()
    {
        return response()
            ->view('auth.forgot-password')
            ->setStatusCode(200);
    }

    public function submitForgetPasswordForm(Request $request)
    {
        echo "<script>alert('entrou no Controller')</script>";
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
                    $message->from('adcbsul@gmail.com', 'ADCBSUL');
                    $message->subject('Recuperação de senha');
                });

                return redirect()->name('showForgetPasswordForm')->with('msg', 'O email de recuperação de senha foi enviado! Verfique seu email');
            } else {
                return back()->name('showForgetPasswordForm')->with('error', 'Falha ao enviar o email de recuperação de senha. Tente mais tarde');
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
        try {
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
                return redirect('/')->with('error', 'Falha no link de verificação');
            }

            $user = User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

            DB::table('password_resets')
                ->where(['email' => $request->email])
                ->delete();

            return redirect('auth/login')->with('msg', 'Sua senha foi alterada com sucesso');
        } catch (Exception $e) {
            return redirect('/')->with('error', 'Falha ao tentar recuperar a senha. Tente mais tarde');
        }
    }

    public function setnewPassword(Request $request)
    {
        try {
            $request->validate([
                'password' => [
                    'required',
                    'min:8', // must be at least 8 characters in length
                    //    'regex:/[a-z]/',       must contain at least one lowercase letter
                    'regex:/[A-Z]/', // must contain at least one uppercase letter
                    //    'regex:/[0-9]/',       must contain at least one digit
                    'regex:/[@$!%*#?&]/', // must contain a special character
                ],
                'newpassword' => [
                    'required',
                    'min:8', // must be at least 8 characters in length
                    //    'regex:/[a-z]/',       must contain at least one lowercase letter
                    'regex:/[A-Z]/', // must contain at least one uppercase letter
                    //    'regex:/[0-9]/',       must contain at least one digit
                    'regex:/[@$!%*#?&]/', // must contain a special character
                    'same:password',
                ],
            ]);

            $user = User::find(Auth::user()->id);

            $user->password = Hash::make($request->password);

            $user->save();
            return redirect()
                ->intended()
                ->with('msg', 'Senha alterada com sucesso');
        } catch (Exception $e) {
            return back()->with('error', 'Ocorreu erro a atualizar a senha');
        }
    }
}
