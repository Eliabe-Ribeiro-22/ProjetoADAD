@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
<br>
<div class="reunioes">
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
<!-- Descrição completa de cada reunião da igreja e do adad -->
<x-igreja.reunioes.descricao-reuniao />
@endsection
