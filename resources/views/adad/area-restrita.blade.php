{{-- Frase que irá no title da página: [`Cadastrar`] ou [`Alterar`] aluno --}}
@php
// Por padrão é Cadastro de Alunos
$title = 'Cadastrar Aluno';
// Se o usuário estiver alterando
if ($alterar) {
// o title será de Alteração
$title = 'Alterar aluno';
}
@endphp
<head>
    <x-adad.head.head :title="$title" />
</head>
<div class="font-sans text-gray-900 antialiased">
    {{-- <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"> --}}
        <div
            class="h-screen center mx-auto lg:min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
        >
        <div>
            <a href="/">
                <img src="/assets/img/igreja/adad_logo.png" class="adad-logo">
            </a>
        </div>
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <form method="POST"
			@if ($alterar) 
				action="{{ route('aluno_update', ['id' => $aluno->id]) }}" 
			@else 
				action="{{ route('aluno_store') }}" 
			@endif
			>
                @csrf
                {{-- Variáveis settadas com valor, que por padrão são para exibir o form de cadastro de alunos --}}
                @php
                $nome = '';
                $idade = '';
                $nascimento = '';
                $serie = '';
                $cpf = '';
                $mae = '';
                $pai = '';
                $rua = '';
                $numero = '';
                $bairro = '';
                $complemento = '';
                $cidade = '';
                $religiao = '';
                
                // Se o form for exibido para realizar alteração de aluno
                if ($alterar) {
                @endphp
                @method('PUT')
                @php
                echo "<h1 id='title-form-alunos'>Editando: " . $aluno->NOME . "</h1>";
                // As variáveis recebem os valores vindos do aluno cadastrado 
				//  no Banco de Dados
                $nome = $aluno->NOME;
                $idade = $aluno->IDADE;
                $serie = $aluno->SERIE;
                $nascimento = $aluno->nascimento->format('Y-m-d');
                $cpf = $aluno->CPF;
                $mae = $aluno->MAE;
                $pai = $aluno->PAI;
                $rua = $aluno->RUA;
                $numero = $aluno->NUMERO;
                $bairro = $aluno->BAIRRO;
                $complemento = $aluno->COMPLEMENTO;
                $cidade = $aluno->CIDADE;
                $religiao = $aluno->RELIGIAO;
                } else {
                // Senão, é porque o form será exibido para realizar cadastro 
				// de alunos as vars mantêm setadas com null.
                echo "<h1 class='CentralizaText title-alunos' id='title-form-alunos'>Cadastro de Alunos ADAD</h1>";
                }
                @endphp
                <h3 class="CentralizaText"> Dados Pessoais</h3>
                
                {{-- Grupo: Nome + Idade + Data de Nascimento + Série Escolar + CPF --}}
                <div style="display: table;">
                    <!-- Input Nome -->
                    <div style="display: table-cell; vertical-align: middle; width:30%;">
                        <label class="block font-medium text-sm text-gray-700" for="name">
                            Nome*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                         id="name" type="text" required="required" autofocus="autofocus" autocomplete="name"
                         name="nome" value="{{ $nome }}">
                    </div>
                    <!-- Input Idade -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle;">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Idade*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                        focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                        id="email" type="number" name="idade" value="{{ $idade }}" required="required">
                    </div>
                    <!-- Input Data de Nascimento -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle;">
                        <label class="block font-medium text-sm text-gray-700">
                            Data de Nascimento*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                        focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                         autofocus="autofocus" type="date" 
                         name="nascimento" value="{{ $nascimento }}" 
                         required="required"
                        >
                    </div>
                    <!-- Input Série Escolar -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle;">
                        <label class="block font-medium text-sm text-gray-700">
                            Série Escolar
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                         type="text"  name="serie" value="{{ $serie }}" required="required" autofocus="autofocus">
                    </div>
                    <!-- Input CPF -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle;">
                        <label class="block font-medium text-sm text-gray-700">
                            CPF*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                        focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                        type="text" name="cpf" value="{{ $cpf }}" required="required" autofocus="autofocus">
                    </div>
                </div>
                <!-- Input Mãe -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">
                        Mãe do aluno*
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                     focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password" type="text" 
                      name="mae" value="{{ $mae }}" required="required" autocomplete="new-password">
                </div>
                <!-- Input Pai -->
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                        Pai do aluno
                    </label>
                    <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                    focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" id="password_confirmation" 
                    type="text" name="pai" value="{{ $pai }}"autocomplete="new-password">
                </div>
                <br>
                <h3 class="CentralizaText">Endereço</h3>
                {{-- Grupo: Rua + Número da Casa + Bairro + Complemento --}}
                <div style="display: table;  width: 96%; margin-right: 0; padding-right: 0;">
                    <!-- Input Rua -->
                    <div style="display: table-cell; vertical-align: middle; width:25%;">
                        <label class="block font-medium text-sm text-gray-700" for="name">
                            Rua*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                        focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                         id="name" 
                         type="text" 
                         name="rua" 
                         value="{{ $rua }}"
                         required="required" 
                         autofocus="autofocus" 
                         autocomplete="name"
                        >
                    </div>
                    <!-- Input Número da Casa/Apartamento -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle; width:15%;">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Número*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                         
                         type="number" 
                         name="numero" 
                         value="{{ $numero }}"
                         required="required">
                    </div>
                    <!-- Input Bairro -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle; width:16%;">
                        <label class="block font-medium text-sm text-gray-700">
                            Bairro*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                         type="text"
                         name="bairro"
                         value="{{ $bairro }}"
                         required="required" 
                         autofocus="autofocus"
                        >
                    </div>
                    <!-- Input Complemento -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle; width:10%;">
                        <label class="block font-medium text-sm text-gray-700">
                            Complemento
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                         type="text" 
                         name="complemento" 
                         value="{{ $complemento }}" 
                         autofocus="autofocus"
                        >
                    </div>
                    <!-- Input Cidade -->
                    <div class="mt-4" style="display: table-cell; vertical-align: middle;width:15%;">
                        <label class="block font-medium text-sm text-gray-700">
                            Cidade*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                         type="text" 
                         name="cidade" 
                         value="{{ $cidade }}" 
                         required="required" 
                         autofocus="autofocus">
                    </div>
                </div>
                <br> 
                <h3 class="CentralizaText"> Dados Eclesiásticos</h3>
                {{-- Grupo: Religiao --}}
                <div style="display: table;">
                    <!-- Input Rua -->
                    <div style="display: table-cell; vertical-align: middle;">
                        <label class="block font-medium text-sm text-gray-700" for="name">
                            Religião/Crença*
                        </label>
                        <input class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200
                         focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" 
                         id="name" 
                         type="text" 
                         name="religiao" 
                         value="{{ $religiao }}"                         
                         required="required" 
                         autofocus="autofocus" 
                         autocomplete="name"
                        >
                    </div>
                </div>
            
                {{-- Grupo: Cadastrar Aluno --}}
                <div class="flex items-center justify-end mt-4">
                    @if ($alterar)
                    <button 
                     type="submit"
                     class="text-sm text-gray-600 mx-auto hover:text-white px-4 py-2 bg-gray-800 
                     border border-transparent rounded-md font-semibold text-xs text-white 
                     uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
                     focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 
                     disabled:opacity-25 transition"
                    >
                        Alterar Aluno
                    </button>
                    @else
                    <button 
                    type="submit"
                    class="text-sm text-gray-600 mx-auto hover:text-white px-4 py-2 bg-gray-800 
                    border border-transparent rounded-md font-semibold text-xs text-white 
                    uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
                    focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 
                    disabled:opacity-25 transition"
                    >
                        Cadastrar Aluno
                    </a>
                    @endif
                </div>
            
            @if ($alterar)
            {{-- Cancelar Alterações --}}   
            <div class="flex items-center justify-end mt-4">
                <a href="{{ route('aluno_create') }}" class="underline mx-auto text-sm transition" >
				Cancelar Alterações
				</a>
            </div>
            @endif
        </form>
        <div class="flex items-center justify-between mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                Cadastrar novo usuário
            </a>
        </div>
    </div>
</div>

<div class="font-sans text-gray-900 antialiased">
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-800 shadow-md overflow_scroll sm:rounded-lg show-alunos">
        @if ($alterar) {{-- Se o visitante estiver editando um aluno --}}
            <h3 class="CentralizaText color-white"><b>Dados do Alunos a ser Alterado:</b></h3>
            <label class="CentralizaText color-white">Nome: {{ $aluno->NOME }}</label>
            <br />
            <label class="CentralizaText color-white">Idade: {{ $aluno->IDADE }}</label>
            <br>
            <label class="CentralizaText color-white">Data de Nascimento: {{ $aluno->nascimento }}</label>
            <br>
            <label class="CentralizaText color-white">Série escolar: {{ $aluno->SERIE }}.</label>
            <br>
            <label class="CentralizaText color-white">
                {{ $aluno->RUA }}, nº {{ $aluno->NUMERO }}, bairro {{ $aluno->BAIRRO }},
                {{ $aluno->CIDADE }}.
            </label>
            <br>
            <label class="CentralizaText color-white">Crença/Religião: {{ $aluno->RELIGIAO }}</label>
            <br>
            <br>
        @else
            {{-- Se não, é porque ele está cadastrando um aluno --}}
            @if (count($alunos) == 0) {{-- Se não existir alunos cadastrados --}}
                <div class="flex">
                    <h3 class="color-white font-bold" class="title-cad-alunos" id="title-sem-alunos">
                        Ainda não há alunos Cadastrados.
                    </h3>    
                </div>        
            
                <div class="flex">
                    <a href="/AreaRestrita" class="color-white" id="text-sem-alunos">Cadastre um agora mesmo!</a>        
                </div>

            @else
                {{-- Senão, é porque existem alunos cadastrados, então exiba-os com FOREACH --}}
                {{-- <h3 class="color-white title-show-alunos" id="a"><b></b></h3>    --}}

                <table class="w-1\1">
                    <tr id="table-title">
                        <th colspan="7" class="title-alunos" id="title-table-alunos">ADAD - Alunos Cadastrados:</th>
                    </tr>
                    <tr class="w-1\1 line-header-alunos">
                        <th class="cabecalho-table">Nome</th>
                        <th class="cabecalho-table">Idade</th>
                        <th class="cabecalho-table">Série</th>
                        <th class="cabecalho-table">Cidade</th>
                        <th class="cabecalho-table">Religião</th>
                        <th class="cabecalho-table">Editar</th>
                        <th class="cabecalho-table" id="delete">Excluir</th>
                    </tr>  
                    @foreach ($alunos as $aluno)
                        <tr class="w-1\1 line-body-alunos">
                            <td>{{ $aluno->NOME }}</td>
                            <td>{{ $aluno->IDADE }}</td>
                            <td>{{ $aluno->SERIE }}</td>
                            <td>{{ $aluno->CIDADE }}</td>
                            <td>{{ $aluno->RELIGIAO }}</td>
                            <td class="btn-edit-del">
                                <a href="{{ route('aluno_edit', ['id' => $aluno->id]) }}">
                                    &#128393;
                                </a>
                            </td>
                            <td class="btn-edit-del">
                                <form 
                                    action="{{ route('aluno_destroy', ['id' => $aluno->id]) }}" 
                                    method="POST"
                                    id="btn-form-del"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button>&#128465;</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            @endif
        @endif
        </div>
    </div>
</div>