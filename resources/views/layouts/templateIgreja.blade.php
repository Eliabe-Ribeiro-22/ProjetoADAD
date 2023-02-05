{{-- Template Igreja --}}
<x-igreja.head.head />

@if(session('msg'))
<script type="text/javascript">message("<?php echo session('msg') ?>")</script>
@endif

<x-igreja.nav.nav />

<main>
    @yield('corpo')
</main>

<x-igreja.footer.footer />
