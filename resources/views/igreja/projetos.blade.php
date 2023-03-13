@extends('layouts.templateIgreja')

@section('titulo', 'Projetos')

@section('corpo')
    <br>
    <h2 id="titulo-nossos-projetos-pg">Nossos Projetos</h2>

    <!-- Church's Projects -->
    <x-igreja.carrossel.carrossel />

    {{-- div Projetos desenvolvidos pela igreja --}}
    <div>
        <x-igreja.projetos.projeto-fe />
        <x-igreja.projetos.projeto-adad />
        <x-igreja.projetos.projeto-social />
    </div>
@endsection
