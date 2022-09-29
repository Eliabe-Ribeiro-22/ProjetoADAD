@extends("layouts.templateAdad") 
@section("titulo", "Login ADAD")
@section("corpo")
<form action="{{ route('authenticate') }}" method="post">
    @csrf
    <input type="text" name="username" placeholder="digite seu login" />
    <input type="text" name="username" placeholder="digite a sua senha" />
    <input type="submit" value="Entrar" />
    <a href="#">Esqueci minha senha</a>

    <input type="checkbox" onclick="exibir_senha()" />
    Exibir senha
    <!-- Esse botão será visualizado somente para usuários de maiores permissões -->
    <a href="#">Cadastrar novo usuário</a>
</form>

<script type="text/javascript">
    alert("Ola mundo");
    console.log("Olá mundo!");
</script>

@endsection
