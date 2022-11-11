{{-- Projetos --}}

{{-- Projetos desenvolvidos pela Igreja --}}
@extends('layouts.templateIgreja')

@section('titulo', 'Nossos Projetos')

@section('corpo')
    
    <h1 class="titlePage" id="title-projetos">Nossos Projetos</h1>

    {{-- div Projetos desenvolvidos pela igreja --}}
    <div>
        <x-igreja.projetos.projeto-fe />
        <x-igreja.projetos.projeto-adad />
        <x-igreja.projetos.projeto-social />
    </div>
@endsection
