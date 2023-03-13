@extends('layouts.templateIgreja')
@section('titulo', 'Contato')

@section('corpo')
<br>
<h1 id="formContato-title">Entre em Contato Conosco!</h1>

{{-- Formulário de Contato --}}
<form action="{{ route('form_send') }}" method="POST">
    @csrf
    <div class="formContato-container">
        <label>Seu nome:</label>
        <input type="text" id="formContato-container-nome" name="nome" placeholder="Digite seu nome" required>
    </div>

    <div class="formContato-container">
        <label>Seu telefone:</label>
        <input type="text" id="formContato-container-telefone" name="telefone" placeholder="Digite seu telefone"
            required>
    </div>

    <div class="formContato-container">
        <label>Sua mensagem:</label>
        <textarea id="formContato-container-mensagem" name="mensagem" rows="5" cols="33"
            placeholder="Digite sua mensagem" required></textarea>
    </div>

    <div class="formContato-container" id="formContato-container-enviar">
        <br>
        <button type="submit" id="formContato-enviar">Enviar</button>
    </div>
    <br>
</form>
@endsection