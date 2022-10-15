{{-- Template Igreja --}}

<head>
    <x-igreja.head.head />
</head>

<body>
    <nav id="menu-site">
        <x-igreja.nav.logo />
        <x-igreja.nav.menu-nav />
        <x-igreja.nav.menu-mobile />
    </nav>

    <main class="bg-main">
        @yield('corpo')
    </main>

    <footer class="bg-body">
        <x-igreja.footer.footer />
    </footer>
</body>
