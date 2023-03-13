{{-- Index da Igreja --}}
@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
<div class="slogan-inicio">
    <h1>Seja bem vindo ao nosso site!</h1>
</div>
<div>
    <video class="video-inicial" autoplay muted loop controls>
        <source src="/assets/videos/video.mp4" type="video/mp4">
    </video>
</div>

{{-- <x-igreja.inicio.api-versiculo :dailyVerse="$dailyVerse" /> --}}

<div class="projetos-igreja">
    <br><br>
    <h2>Nossos Projetos</h2>
</div>

<x-igreja.inicio.projeto-adad/>

<x-igreja.inicio.projeto-social/>
<br>
<div class="reunioes" id="reunioes-inicio">
    <br>
    <h2>Nossas Reuniões</h2>
    <br>
    <p>
        Noite da Vitória <br>
        Quintas-Feiras às 19:00 hs
    </p>
    <p>
        Noite da Família <br>
        Domingos às 19:00 hs
    </p>
    <p>
        Aula do ADAD <br>
        Segunda-feiras às 19:30 hs
    </p>
</div>
<br>
@endsection