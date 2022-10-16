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

<body>
    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
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
                    <div>
                        <label class="block font-medium text-sm text-gray-700" for="name">
                            Nome Completo *
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="name" type="text" name="name" required="required" autofocus="autofocus"
                            autocomplete="name">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="email">
                            Email
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="email" type="email" name="email" required="required">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700">
                            DDD + Telefone
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            type="text" name="phone_number" required="required" autofocus="autofocus">
                    </div>

                    <div>
                        <label class="block font-medium text-sm text-gray-700">
                            Endereço Completo
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            type="text" name="address" required="required" autofocus="autofocus">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password">
                            Senha<br>
                            Minimo: Oito Caracteres - Uma Maiscula - Um Caracter Especial
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="password" type="password" name="password" required="required"
                            autocomplete="new-password">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" for="password_confirmation">
                            Confirmar Senha
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full"
                            id="password_confirmation" type="password" name="password_confirmation" required="required"
                            autocomplete="new-password">
                    </div>


                    <div class="flex items-center justify-end mt-4">
                        <a class="underline text-sm text-gray-600 mx-auto hover:text-gray-900"
                            href="{{ route('login') }}">
                            Já é cadastrado?
                        </a>

                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                            Cadastrar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-800 shadow-md overflow_scroll sm:rounded-lg">
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
                            <a href="/AreaRestrita" class="color-white" id="text-sem-alunos">Cadastre um agora
                                mesmo!</a>
                        </div>
                    @else
                        {{-- Senão, é porque existem alunos cadastrados, então exiba-os com FOREACH --}}
                        <table class="w-1\1">
                            <tr id="table-title">
                                <th colspan="7" class="title-alunos" id="title-table-alunos">ADAD - Alunos
                                    Cadastrados:</th>
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
                                        <form action="{{ route('aluno_destroy', ['id' => $aluno->id]) }}"
                                            method="POST" id="btn-form-del">
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
</body>
