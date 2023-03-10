<!DOCTYPE html>
<html>

{{-- Template das páginas da Igreja --}}
<head>
    <x-igreja.head.head />
</head>

<body>
    @if (session('msg'))
        <script type="text/javascript">
            alert("{{ session('msg') }}");
        </script>
    @elseif (session('error'))
        <script type="text/javascript">
            alert("{{ session('error') }}");
        </script>
    @endif

    <x-igreja.nav.nav /> {{-- Botões de navegação --}}
    
    <main>
        @yield('corpo') {{-- Conteúdo do site --}}
    </main>

    <x-igreja.footer.footer /> {{-- Rodapé do site --}}
</body>
</html>
