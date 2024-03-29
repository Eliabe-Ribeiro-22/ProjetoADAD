<head>
    <x-adad.head.head />
    {{-- Toastr --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="/assets/js/messagesToastr.js"></script>

    {{-- CSS da página --}}
    <link rel="stylesheet" href="/assets/css/adad/area-restrita/alunos.css">

    @php
        // Frase que irá no title da página: Cadastrar/Alterar aluno
        $titulo = 'Cadastrar Aluno';
        
        if ($alterar) {
            $titulo = 'Alterar aluno';
        }
    @endphp

    <title>{{$titulo}}</title>
    
</head>

<body>
    @if (session('msg'))
    <script type="text/javascript">
            success("{{ session('msg') }}");
    </script>
    @elseif (session('error'))
        <script type="text/javascript">
            error("{{ session('error') }}");
        </script>
    @endif

    <div class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <a href="{{ route('logout') }}">
                <img src="/assets/img/igreja/adad_logo.png" class="adad-logo">
            </a>
            <a href="{{ route('logout') }}">
                <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition ml-4">
                    Sair
            </button>
            </a>
            
            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">

                {{-- Formulário de Cadastro e Alteração de Alunos --}}
                @if (isset($alunos))
                    
                    <x-adad.area_restrita.formulario_cad_alterar :alunos="$alunos" :alterar="$alterar" />
                @else
                    <x-adad.area_restrita.formulario_cad_alterar :aluno="$aluno" :alterar="$alterar" />
                @endif
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
                    @if (!$alunos || count($alunos) == 0) {{-- Se não existir alunos cadastrados --}}
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

                                        <form action="{{ route('aluno_edit', ['id' => $aluno->id]) }}" method="get">
                                            <a href="{{ route('aluno_edit', ['id' => $aluno->id]) }}"
                                                onclick="
                                                this.closest('form').submit();loading('Carregando informações do aluno');return false;">
                                                &#128393;
                                            </a>
                                        </form>

                                    </td>
                                    <td class="btn-edit-del">
                                        <form action="{{ route('aluno_destroy', ['id' => $aluno->id]) }}"
                                            method="POST" id="btn-form-del">
                                            @csrf
                                            @method('DELETE')
                                            {{-- <button>&#128465;</button> --}}
                                            <a href="{{ route('aluno_destroy', ['id' => $aluno->id]) }}"
                                                onclick="
                                            this.closest('form').submit();loading('Excluindo aluno');return false;">&#128465;</a>
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
