{{-- Template Igreja --}}

<head>
    <x-igreja.head.head />
</head>

<body>
    <header id="header">
        <x-igreja.header.header />
    </header>

    <main class="bg-main">
        @yield('corpo')
    </main>

    <footer class="bg-body">
        <x-igreja.footer.footer />
    </footer>
</body>
