@extends('layouts.templateIgreja')
@section('titulo', 'Eventos')

@section('corpo')
    <h2>Eventos realizados:</h2>
    <h3>AcampADAD 2023</h3>
    {{-- Carrossel with photos of "AcampADAD" --}}
    <x-igreja.carrossel-events.carrossel />
    <p>
        Nosso acampamento foi extraordinário!<br>
        Sentimos a presença manifesta do Senhor e também foi um dia de muita integração e recreação para os adad's!
        <br>
        A parte que eles mais gostaram foi o rastejo na lama e o culto! 😍😍😍
        <br>
        Para acessar as fotos na íntegra, acesse o link abaixo:
        https://photos.app.goo.gl/dsq4u98qGnJRLiV47
    </p>
@endsection
