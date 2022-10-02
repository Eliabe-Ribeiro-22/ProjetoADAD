<!-- Template Igreja -->

<head>
    <x-igreja.head.head />
</head>

<body>
    <div id="header">
        <nav>
            <x-igreja.nav.logo />
            <x-igreja.nav.menu_nav />
        </nav>
    </div>

    <main class="bg-main">
        @yield('corpo')
    </main>

    <footer>
        <x-igreja.footer.footer />
    </footer>
</body>
