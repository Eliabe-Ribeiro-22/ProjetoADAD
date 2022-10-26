{{-- Form - Formulário de Contato --}}
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CSS --}}
    <link rel="stylesheet" href="/assets/css/novo-design/nav_style.css">
    <link rel="stylesheet" href="/assets/css/novo-design/main_style.css">
    <link rel="stylesheet" href="/assets/css/novo-design/footer_style.css">

    {{-- Fonts --}}
    <link rel="stylesheet" href="https:;;fonts.googleapis.com/css?family=Poppins">

    <title>Início</title>
    
    {{-- Icon --}}
    <link rel="icon" type="image/x-icon" href="/igreja.ico">
</head>

<body>
    <nav>
        <div>
            <a href="{{ route('main.page') }}">
                 <img id="logo-igreja" src="/assets/img/logoIgreja.png" alt="Logo da Igreja">
            </a>
        </div>
        <div class="nav-logo">
            <h4>Assembleia de Deus <br> Campo Belo do Sul</h4>
        </div>
        <ul class="nav-links">
            <li class="nav-btn"><a href="{{ route('main.page') }}">Início</a></li>
            <li class="nav-btn"><a href="{{ route('institutional.page') }}">Institucional</a></li>
            <li class="nav-btn"><a href="{{ route('contact.page') }}">Contato</a></li>
            <li class="nav-btn"><a href="{{ route('projects.page') }}">Projetos</a></li>
            <li class="nav-btn"><a href="{{ route('reunions.page') }}">Reuniões</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>

        {{-- Navbar script --}}
        <script src="/assets/js/novo-design/navbar.js"></script>
    </nav>
    
    <main>
        <x-igreja.form.form_main />
    </main>
    
    <footer>
        <div class="boxs">
            <h2>Contatos</h2>
            <ul>
                <li><p>WhatsApp: (49) 9 8847-7611</p></li>
                <li><p>Fixo: (49) 3249-1036</p></li>
                <li><p>E-mail (<a href="mailto:adcbsul@gmail.com">adcbsul@gmail.com</a>)</p></li>
            </ul>
        </div>

        <div class="boxs">
            <h2>Endereço</h2>
            <ul>
                <li><p>Rua: Gerônimo Xavier de Oliveira.</p></li>
                <li><p>Número: 230</p></li>
                <li><p>Cidade: Campo Belo do Sul, Santa Catarina.</p></li>
            </ul>
        </div>

        <div class="boxs">
            <h2>Redes sociais</h2>
            <ul>
                <li><a href="#" target="_blank"><img src="" alt="Facebook"></a></li>
                <li><a href="mailto:adcbsul@gmail.com" target="_blank"><img src="" alt="Gmail"></a></li>
                <li><a href="#" target="_blank"><img src="" alt="WhatsApp"></a></li>
            </ul>
        </div>

        <div class="boxs">
            <h2>Contribuidores</h2>
            <p>Site desenvolvido por: </p><br>
            <ul>
                <li><a href="https://www.linkedin.com/in/xadrak/" target="_blank">Adriano Machado</a></li>
                <li><a href="https://www.linkedin.com/in/alessandrogeras" target="_blank">Alessandro Geras</a></li>
                <li><a href="https://www.linkedin.com/in/eliabemota/" target="_blank">Eliabe Ribeiro Mota</a></li>
                <li><a href="https://www.linkedin.com/in/vinicius-jung/" target="_blank">Vinícius Jung</a></li>
            </ul>
        </div>
    </footer>
</body>
