@extends("layouts.templateIgreja")

@section("titulo", "Formulario para contato")

@section("corpo")
<form method="post">
    <!-- 
        Form com:
            - Nome
            - telefone
            - Mensagem que o visitante irá enviar 
    -->
    <h1>Formulario</h1>
    <input type="text" name="nome" placeholder="Digite seu nome"></input>
    <input type="text" name="nome" placeholder="Digite seu telefone"></input>
    <textarea rows="5" cols="33" placeholder="Digite a mensagem"></textarea>
    <input type="submit" value="Enviar">
</form>
@endsection