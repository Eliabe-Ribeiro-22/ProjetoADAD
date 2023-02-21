<!DOCTYPE html>
<html>

{{-- Template das páginas da Igreja --}}

<head>
    <x-igreja.head.head />
</head>

<body>
    <x-igreja.nav.nav /> {{-- Botões de navegação --}}
    @if (session('msg'))
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
    @elseif (session('error'))
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
    @endif
    <main>
        {{-- Conteúdo do site --}}
        @yield('corpo')
    </main>

    <x-igreja.footer.footer /> {{-- Rodapé do site --}}
</body>
</html>
