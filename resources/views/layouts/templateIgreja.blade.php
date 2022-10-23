{{-- Template Igreja --}}

<head>
    <x-igreja.head.head />
</head>

<nav class="nav-bar">
    <x-igreja.nav.navbar />
</nav>

<main class="bg-main">
    @yield('corpo')
</main>

<footer>
    <x-igreja.footer.footer />
</footer>
