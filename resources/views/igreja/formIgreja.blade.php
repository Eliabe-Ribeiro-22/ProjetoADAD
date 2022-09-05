@extends("layouts.templateIgreja")

@section("titulo", "Formulario para contato")

@section("corpo")
<form action="" method="post">
    <!-- 
        Form com:
            - Nome
            - telefone
            - Mensagem que o visitante irá enviar 
    -->
    <h1>Entre em contato conosco:</h1>
    <label>Seu nome:</label>
    <input type="text" name="nome" placeholder="Digite seu nome"></input>
    <label>Seu número de telefone:</label>
    <input type="text" name="nome" placeholder="Digite seu telefone"></input>
    <label>Mensagem:</label>
    <textarea rows="5" cols="33" placeholder="Digite a mensagem"></textarea>
    <input type="submit" value="Enviar">
</form>
@endsection