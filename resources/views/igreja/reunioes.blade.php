@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <div id="div-reunioes-above">
        <div class="reunioes">
            <h2>Nossas Reuniões</h2>
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
    </div>
    <x-igreja.reunioes.descricao-reuniao />
@endsection
