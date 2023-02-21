<html>

<head>
    <x-adad.head.head/>
    <link rel="stylesheet" href="/assets/css/adad/login.css">
    <title>Tela de login</title>
</head>

<body>
    <script type="text/javascript" src="/assets/js/password.js"></script>

    <div class="font-sans text-gray-900 antialiased">
        <div
            class="h-screen center mx-auto lg:min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100"
        >
            <div>
                <a href="/">
                    <img class="adad-logo" src="/assets/img/igreja/adad_logo.png">
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
                <form method="POST" action="{{ route('authenticate') }}">
                    @csrf
                    <div>
                        <label class="block font-medium text-sm text-gray-700" 
                        for="email">
                            Email
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring 
                            focus:ring-indigo-200 focus:ring-opacity-50 
                            rounded-md shadow-sm block mt-1 w-full"
                            id="email" type="email" name="email" required="required" autofocus="autofocus">
                    </div>

                    <div class="mt-4">
                        <label class="block font-medium text-sm text-gray-700" 
                        for="password">
                            Senha
                        </label>
                        <input
                            class="border-gray-300 focus:border-indigo-300 focus:ring 
                            focus:ring-indigo-200 focus:ring-opacity-50 rounded-md 
                            shadow-sm block mt-1 w-full"
                            id="password" type="password" name="password" required="required"
                            autocomplete="current-password">
                    </div>

                    <input type="checkbox" onclick="showPassword()" />
                    <a class="text-sm text-gray-900">
                        Exibir senha
                    </a>

                    <br>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                        href="{{ route('showForgetPasswordForm') }}">
                        Esqueceu a senha?
                    </a>

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
                        Entrar
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
