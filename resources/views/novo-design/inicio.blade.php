<!DOCTYPE html>
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
        <div class="slogan-inicio">
            <h1>Seja bem vindo ao nosso site!</h1>
        </div>
        <div>
            <video class="video-inicial" autoplay muted loop>
                <source src="/assets/videos/video.mp4" type="video/mp4">
            </video>
        </div>

        <div class="api-versiculo">
            <h2>Momentos de Reflexão</h2>
            <br><br>
            <p class="api-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci quasi expedita pariatur nesciunt nisi, modi officia perferendis ut dignissimos qui, beatae repudiandae vero aperiam nihil distinctio ab laborum, tempora voluptate!</p>
        </div>

        <div class="projetos-igreja">
            <h2>Nossos Projetos</h2>
            <hr>
            <h3>Projeto Prática de Fé</h3>
            <ul class="projeto-lista">
                <li>Realização de cultos com ministração de louvores e palavra.</li>
                <li>Realização de cultos com ensino da Palavra de Deus</li>
                <li>Realização de cultos evangelísticos com distribuição de literatura.</li>
                <li>Realização de orações da fé por necessidades de cada família.</li>
            </ul>
        </div>

        <div class="projetos-igreja">
            <h3>Projeto Educacional</h3>
            <ul class="projeto-lista">
                <p>Desenvolvem atividades com crianças, adolescentes e jovens visando fortalecer o Caráter de Cristo, valores, princípios morais e éticos, patriotismo, recreação, acampamentos, prática de escotismo e integração em busca de uma formação educacional por princípios. </p>
                <br><br>
                <li>Realização de Palestras educativas de socialização para todas as faixas etárias.</li>
            </ul>
        </div>

        <div class="projetos-igreja">
            <h3>Projeto Social</h3>
            <ul class="projeto-lista">
                <li>Distribuimos roupas usadas para pessoas carentes de nossa cidade e também nas localidades do interior do município. </li>
                <li>Distribuimos cestas básicas de alimento para famílias carentes de nossa cidade e também nas localidades do interior.</li>
            </ul>
        </div>

        <div class="projetos-mais-info">
            <p>Mais informações na página de projetos: <a href="{{ route('projects.page') }}">Quero saber mais!</a></p>
        </div>
        <hr>

        <div class="reunioes">
            <h2>Nossas Reuniões</h2>
            <p>Noite da Vitória <br>
            Quintas-Feiras às 19:15 hs</p>
            <p>Noite da Família <br>
            Domingos às 19:00 hs</p>
        </div>
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
</html>