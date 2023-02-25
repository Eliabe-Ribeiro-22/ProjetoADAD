<head>
    <head>
    <x-adad.head.head/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript" src="/assets/js/messagesToastr.js"></script>

    <link rel="stylesheet" href="/assets/css/adad/login.css">

    <title>Recuperar senha</title>
</head>

<body>    
    @if (session('msg'))
    <script type="text/javascript">
            success("{{ session('msg') }}");
    </script>
    @elseif (session('error'))
        <script type="text/javascript">
            error("{{ session('error') }}");
        </script>
    @endif

{{-- Logo --}}
<form method="POST" action="{{ route('submitForgetPasswordForm') }}">
    @csrf
    Sua senha foi enviada
    Verfique seu email!

    <a onclick="alert('a->herf');loading('Cadastrando aluno');this.closest('form').submit();return false; ">
        <button type="submit"
                class="inline-flex items-center px-4 py-2 
                        bg-gray-800 border border-transparent 
                        rounded-md font-semibold text-xs text-white 
                        uppercase tracking-widest hover:bg-gray-700 
                        active:bg-gray-900 focus:outline-none 
                        focus:border-gray-900 focus:ring focus:ring-gray-300 
                        disabled:opacity-25 transition ml-4"
              onclick="loading('Autenticando usuário');"
       >
              Recuperar senha
                        </button>

</form>
<a href="{{ route('main.page') }}">Voltar ao início do site</a>
</body>