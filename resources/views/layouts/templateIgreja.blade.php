{{-- Template Igreja --}}
{{-- Head --}}
<x-igreja.head.head />

</head>
{{-- Botões de navegeção --}}
<x-igreja.nav.nav />

{{-- Conteúdo do site --}}
<main>
    @if (session('msg'))
        Mensagem de sucesso: {{ session('msg') }}
        <script type="text/javascript">
            success("{{ session('msg') }}");
        </script>
    @elseif (session('error'))
        Mensagem de erro: {{ session('error') }}

        <script type="text/javascript">
            error("{{ session('error') }}");
        </script>
    @endif

    @yield('corpo')
</main>

{{-- Rodapé do site --}}
<x-igreja.footer.footer />
