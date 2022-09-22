<!-- Template Igreja -->

<head>
    <x-igreja.head.head />
</head>

<body>
    <header id="header">
        <x-igreja.header.header />
    </header>

    <main>
        @yield("corpo")
    </main>

    <footer id="rodape">
        <x-igreja.footer.footer />
    </footer>
</body>