@extends('layouts.templateIgreja')

@section('titulo', 'Projetos')

@section('corpo')
    <div class="projetos-igreja">
        <h2>Nossos Projetos</h2>

        <h3>Projeto Prática de Fé</h3>
        {{-- Adicionar mais informações acerca de cada projeto --}}
        <ul class="projeto-lista">
            <li>Realização de cultos com ministração de louvores e palavra.</li>
            <li>Realização de cultos com ensino da Palavra de Deus</li>
            <li>Realização de cultos evangelísticos com distribuição de literatura.</li>
            <li>Realização de orações da fé por necessidades de cada família.</li>
        </ul>
    </div>

    <div class="projetos-igreja">
        <h3>Projeto Educacional</h3>

        <a href="{{ route('aluno_create') }}" id="imagem-logo-adad">
            <img src="/assets/img/igreja/adad_logo.png" alt="logo do projeto ADAD">
        </a>

        <ul class="projeto-lista">
            <p>Desenvolvem atividades com crianças, adolescentes e jovens visando fortalecer o Caráter de Cristo,
                valores, princípios morais e éticos, patriotismo, recreação, acampamentos, prática de escotismo e
                integração em busca de uma formação educacional por princípios. </p>
            <br><br>
            <li>Realização de Palestras educativas de socialização para todas as faixas etárias.</li>
        </ul>
    </div>

    <div class="projetos-igreja">
        <h3>Projeto Social</h3>
        <ul class="projeto-lista">
            <li>Distribuimos roupas usadas para pessoas carentes de nossa cidade e também nas localidades do
                interior do município. </li>
            <li>Distribuimos cestas básicas de alimento para famílias carentes de nossa cidade e também nas
                localidades do interior.</li>
        </ul>
    </div>
@endsection
