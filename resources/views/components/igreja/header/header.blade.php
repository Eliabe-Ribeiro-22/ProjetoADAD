{{-- nav_bar do templateIgreja --}}
<nav>
    <div id="nav_logo">
        <a href="{{ route('aluno_create') }}" target="_blank">
            <img src="/img/adad_logo.png" alt="logo-adad" id="logo-adad">
        </a>

        <a href="{{ route('index.page') }}">
            <img src="/assets/img/igreja/logoIgreja.png" alt="logo da Igreja" id="logo-igreja">
        </a>

    </div>

    <div id="nav_menu">
        <ul id="menu_button_ul">
            <li class="menu_button_li">
                <a href="{{ route('institucional_create') }}" class="menu_button_item" id="btnInstitucional">
                    Institucional
                </a>
            </li>

            <li class="menu_button_li">
                <a href="{{ route('form_create') }}" class="menu_button_item">
                    Contato
                </a>
            </li>

            <li class="menu_button_li">
                <a href="{{ route('projetos_create') }}" class="menu_button_item" id="btnProjetos">
                    Nossos Projetos
                </a>
            </li>

            <li class="menu_button_li">
                <a href="{{ route('nossas_reunioes_create') }}" class="menu_button_item" id="btnReunioes">
                    Nossas Reuniões
                </a>
            </li>
        </ul>
    </div>
</nav>
