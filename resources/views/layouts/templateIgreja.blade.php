<!-- Template Igreja -->

<head>
    <x-igreja.head.head />
</head>

<body>
    <nav>
        <div id="header">
            <x-igreja.nav.logo />
            <x-igreja.nav.menu-nav />
            <x-igreja.nav.menu-mobile/>
        </div>
    </nav>

    <main class="bg-main">
        @yield('corpo')
    </main>

    {{-- <footer>
        <x-igreja.footer.footer />
    </footer> --}}
</body>
