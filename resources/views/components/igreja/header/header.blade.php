{{-- nav_bar do templateIgreja --}}
<nav>
    <div id="nav_logo">
        <img src="/img/adad_logo.png" alt="logo-adad" id="logo-adad">

        <img src="/assets/img/igreja/logoIgreja.png" alt="logo da Igreja" id="logo-igreja">
    </div>

    <div id="nav_menu">
        <ul id="menu_button_ul">
            <li class="menu_button_li">
                <a href="{{ route('index.page') }}" class="menu_button_item">
                    Início
                </a>
            </li>

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

            <li class="menu_button_li">
                <a href="{{ route('aluno_create') }}" class="menu_button_item" id="btnAreaRestrita">
                    Área Restrita
                </a>
            </li>
        </ul>
    </div>
</nav>