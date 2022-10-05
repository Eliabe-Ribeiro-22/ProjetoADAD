<div class="bg-red-700" style="margin: 0 auto;">
    <div>

        @if ($alterar) {{-- Se o visitante estiver editando um aluno --}}
            <h3><b>Dados do Alunos a ser Alterado:</b></h3>
            <label>Nome: {{ $aluno->NOME }}</label>
            <br />
            <label>Idade: {{ $aluno->IDADE }}</label>
            <br>
            <label>Data de Nascimento: {{ $aluno->nascimento }}</label>
            <br>
            <label>Série escolar: {{ $aluno->SERIE }}.</label>
            <br>
            <label>
                {{ $aluno->RUA }}, nº {{ $aluno->NUMERO }}, bairro {{ $aluno->BAIRRO }},
                {{ $aluno->CIDADE }}.
            </label>
            <br>
            <label>Crença/Religião: {{ $aluno->RELIGIAO }}</label>
            <br>
            <br>
        @else
            {{-- Se não, é porque ele está cadastrando um aluno --}}
            @if (count($alunos) == 0) {{-- Se não existir alunos cadastrados --}}
                <p>
                    Ainda não há alunos Cadastrados.
                </p>
                <a href="/AreaRestrita"><strong>Cadastre um agora mesmo!</strong></a>
            @else
                {{-- Senão, é porque existem alunos cadastrados, então exiba-os com FOREACH --}}
                <h3><b>ADAD - Alunos Cadastrados:</b></h3>
                @foreach ($alunos as $aluno)
                    <label>Nome do Aluno: {{ $aluno->NOME }}.</label>
                    <label>Idade: {{ $aluno->IDADE }}</label>
                    <br>
                    <label>Data de Nascimento: {{ $aluno->nascimento->format('d-m-Y') }}</label>
                    <br>
                    <label>Série escolar: {{ $aluno->SERIE }}.</label>
                    <br>
                    <label>
                        Rua {{ $aluno->RUA }}, nº {{ $aluno->NUMERO }}, bairro {{ $aluno->BAIRRO }},
                        {{ $aluno->CIDADE }}.
                    </label>
                    <br>
                    <label>Crença/Religião: {{ $aluno->RELIGIAO }}</label>
                    <br>
                    <a href="{{ route('aluno_edit', ['id' => $aluno->id]) }}">Editar</a>
                    <form action="{{ route('aluno_destroy', ['id' => $aluno->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Excluir</button>
                    </form>
                    <br>
                    <br>
                @endforeach
            @endif
        @endif
    </div>
</div>
