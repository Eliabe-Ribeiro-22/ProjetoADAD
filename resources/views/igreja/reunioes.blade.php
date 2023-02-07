@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')

    <div class="reunioes-pg">
        <h2>Nossas Reuniões</h2>
        <p>Noite da Vitória <br>
            Quintas-Feiras às 19:15 hs</p>
        <p>Noite da Família <br>
            Domingos às 19:00 hs</p>
    </div>
    {{-- <x-igreja.reunioes.descricao-reuniao /> --}}
    {{-- update --}}
@endsection
