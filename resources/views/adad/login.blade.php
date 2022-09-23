@extends("layouts.templateIgreja")

@section("titulo", "Login ADAD")

@section("corpo")
<form action="/validar" method="post">
    @CSRF
    <input type="text" name="username" placeholder="digite seu login">
    <input type="text" name="username" placeholder="digite a sua senha">
    <input type="submit" value="Entrar">
    <a href="#">Esqueci minha senha</a>

    <!-- Esse botão será visualizado somente para usuários de maiores permissões -->
    <a href="#">Cadastrar novo usuário</a>
</form>
@endsection