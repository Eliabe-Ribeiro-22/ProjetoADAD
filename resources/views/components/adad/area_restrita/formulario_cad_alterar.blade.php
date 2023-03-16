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
    @if (isset($alunos))
        <h3>Impressos:</h3>
        <a href="/assets/doc/formulario-inscricao-aluno.pdf" download class="btn-download-file pdf">
            &#128462; Baixar formulário de inscrição do aluno (PDF)
        </a>
        <br>
        
        <a href="/assets/doc/ficha-autorizacao-para-acampamento-adad.pdf" download class="btn-download-file pdf">
            &#128462; Baixar ficha de autorização para participar do acampamento do ADAD (PDF)
        </a>
        <br>
        
        <a href="/assets/doc/chamadas-alunos-adad.xlsx" download class="btn-download-file excel">
            &#128462; Baixar chamada dos alunos (Excel)
        </a> 
    @endif
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
