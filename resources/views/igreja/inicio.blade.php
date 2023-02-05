{{-- Index da Igreja --}}
@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    @if (session('msg'))
        <script type="text/javascript">
            success("<?php echo session('msg'); ?>")
        </script>
    @endif
    @if (session('error'))
        <script type="text/javascript">
            error("<?php echo session('error'); ?>")
        </script>
    @endif

    <div class="slogan-inicio">
        <h1>Seja bem vindo ao nosso site!</h1>
    </div>
    <div>
        <video class="video-inicial" autoplay muted loop>
            <source src="/assets/videos/video.mp4" type="video/mp4">
        </video>
    </div>

    <x-igreja.inicio.api-versiculo :dailyVerse="$dailyVerse" />
    <div class="projetos-igreja">
        <h2>Nossos Projetos</h2>
    </div>

    <div class="projetos-igreja">
        <h3>Projeto Educacional</h3>

        <a id="imagem-logo-adad">
            <img src="/assets/img/igreja/adad_logo.png" alt="logo do projeto ADAD">
        </a>

        <ul class="projeto-lista">
            <p>
                Desenvolvem atividades com crianças, adolescentes e jovens visando fortalecer o Caráter de Cristo,valores,
                princípios morais e éticos, patriotismo, recreação, acampamentos, prática de escotismo e integração em busca
                de uma formação educacional por princípios.
            </p>
            <br><br>
            <li>Realização de Palestras educativas de socialização para todas as faixas etárias.</li>
        </ul>
    </div>

    <div class="projetos-igreja">
        <h3>Projeto Social</h3>
        <ul class="projeto-lista">
            <li>Distribuimos roupas usadas para pessoas carentes de nossa cidade e também nas localidades do interior do
                município. </li>
            <li>Distribuimos cestas básicas de alimento para famílias carentes de nossa cidade e também nas localidades
                do interior.</li>
        </ul>
    </div>

    <div class="projetos-mais-info">
        <p>Mais informações na página de projetos: <a href="{{ route('projects.page') }}">Quero saber mais!</a></p>
    </div>
    <hr>

    <div class="reunioes">
        <h2>Nossas Reuniões</h2>
        <p>Noite da Vitória <br>
            Quintas-Feiras às 19:15 hs</p>
        <p>Noite da Família <br>
            Domingos às 19:00 hs</p>
    </div>
@endsection
