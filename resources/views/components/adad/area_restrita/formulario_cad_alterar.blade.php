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
    // As variáveis recebem os valores vindos do aluno cadastrado no Banco de Dados
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
    } 
    else {
        // Senão, é porque o form será exibido para realizar cadastro 
	    // de alunos as vars mantêm setadas com null.
        echo "<h1 class='CentralizaText title-alunos' id='title-form-alunos'>Cadastro de Alunos ADAD</h1>";
    }
    @endphp
    
    {{-- Todos os inputs do formulário --}}
    {{-- <x-adad.area_restrita.dados_pessoais :aluno="$alunos" :alunos="$alunos" :alterar="$alterar"/> --}}
    {{-- Buttões que realizam ações, seja ela cadastro, alteraçao --}}
    <x-adad.area_restrita.botoes_acao_form :alunos="$alunos" :alterar="$alterar"/>
</form>
{{-- Botão para acessar tela de cadastro de usuários --}}
    {{--  
        <div class="flex items-center justify-between mt-4">
            <a 
          class="underline text-sm text-gray-600 
              hover:text-gray-900" 
          href="{{ route('register') }}">
              Cadastrar novo líder ADAD
          </a>
      </div> 
    --}}
            