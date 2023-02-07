<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="UTF-8">

    {{-- Style --}}
    <link rel="icon" type="image/x-icon" href="/igreja.ico">
    <link rel="stylesheet" href="/assets/css/restful/rest_style.css">

    <title>404 - Não encontrado</title>
</head>

<body>
    <div class="full-size-pg">
        <div class="church-logo">
            <a href="{{ route('main.page') }}">
                <img id="img-logo-chur" src="/assets/img/igreja/logoIgreja.png" alt="Logo da Igreja">
            </a>
        </div>
        <div class="main-box">
            <h2>404 - Página não encontrada!</h2>
            <div class="message-box">
                <p class="p-404-pg">Verifique se o endereço digitado está correto.</p>
            </div>
        </div>
    </div>

</body>

</html>
