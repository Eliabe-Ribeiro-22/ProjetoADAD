{{-- Template Igreja --}}
<x-igreja.head.head />
{{ session('msg') }}
{{ session('error') }}

@if (session('msg'))
    <script type="text/javascript">
        success("<?php echo session('msg'); ?>")
    </script>
@elseif (session('msg'))
    <script type="text/javascript">
        error("<?php echo session('error'); ?>")
    </script>
@endif

<x-igreja.nav.nav />

<main>
    @yield('corpo')
</main>

<x-igreja.footer.footer />
