<head>
    <title>Recuperar senha</title>
</head>

{{-- Logo --}}
<form method="POST" action="{{ route('index.page') }}">
    @csrf
    Senha enviada com sucesso!
    <br>
    Verfique seu email
</form>
<a href="{{ route('index.page') }}">Voltar ao início do site</a>
