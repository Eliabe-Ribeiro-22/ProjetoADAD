@extends('layouts.templateIgreja')

@section('titulo', 'Início')

@section('corpo')
    <h1 class="titlePage" id="title-form-contato">Entre em Contato Conosco!</h1>

    <x-igreja.contato.contato-form/>
@endsection
