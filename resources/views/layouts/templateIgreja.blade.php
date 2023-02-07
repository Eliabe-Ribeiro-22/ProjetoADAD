{{-- Template Igreja --}}
<x-igreja.head.head />
{{-- @if (session('msg'))
    {{ session('msg') }}
    <script type="text/javascript">
        
    </script>
@elseif (session('error'))
    {{ session('error') }}
    <script type="text/javascript">
        
    </script>
@endif --}}

<x-igreja.nav.nav />

<main>
    @yield('corpo')
</main>

<x-igreja.footer.footer />
