<form method="POST"
    @if ($alterar) action="{{ route('aluno_update', ['id' => $aluno->id]) }}" 
    @else 
    action="{{ route('aluno_store') }}" @endif>
    @csrf
    @if (isset($alunos))
        {{-- Todos os inputs do formulário --}}
        <x-adad.area_restrita.dados_pessoais :alunos="$alunos" :alterar="$alterar" />
    @else
        {{-- Todos os inputs do formulário --}}
        <x-adad.area_restrita.dados_pessoais :aluno="$aluno" :alterar="$alterar" />
    @endif

    {{-- Buttões que realizam ações, seja ela cadastro, alteraçao --}}
    <x-adad.area_restrita.botoes_acao_form :alterar="$alterar" />

    <a href="/assets/doc/formulario-inscricao-aluno.pdf" download style="text-decoration: underline; color:red;">   &#128462; Baixar formulário de inscrição do aluno ADAD
    </a>
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
