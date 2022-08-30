<!-- Devo compontentizar este head -->

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <link rel="stylesheet" href="/assets/css/igreja/styles_church.css">
    <link rel="stylesheet" href="/assets/icons/style.css">
    <title>@yield("titulo")</title>
</head>
<!-- Template Igreja -->

<body>
    <header id="header">
        Cabeçalho da Igreja
    </header>

    <main>
        @yield("corpo")
    </main>

    <footer id="rodape">
        Rodapé da Igreja
    </footer>
</body>