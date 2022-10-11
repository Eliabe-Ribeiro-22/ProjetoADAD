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
    <div class="flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-gray-800 shadow-md overflow_scroll sm:rounded-lg"
        style="border-radius: 1rem;">
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
                <h3 class="color-white title-show-alunos" id="a"><b>ADAD - Alunos Cadastrados:</b></h3>   

                <table class="w-1\1">
                    <tr class="w-1\1" style="border-bottom: 4px solid #bfbfbf;">
                        <th class="cabecalho-table">Nome</th>
                        <th class="cabecalho-table">Idade</th>
                        <th class="display cabecalho-table">Série</th>
                        <th class="display cabecalho-table">Cidade</th>
                        <th class="display cabecalho-table">Religião</th>
                        <th class="cabecalho-table">Editar</th>
                        <th class="cabecalho-table" id="delete">Excluir</th>
                    </tr>  
                    @foreach ($alunos as $aluno)
                        <tr class="w-1\1" style="border-bottom: 1px solid #bfbfbf;">
                            <td>{{ $aluno->NOME }}</td>
                            <td>{{ $aluno->IDADE }}</td>
                            <td class="display">{{ $aluno->SERIE }}</td>
                            <td class="display">{{ $aluno->CIDADE }}</td>
                            <td class="display">{{ $aluno->RELIGIAO }}</td>
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