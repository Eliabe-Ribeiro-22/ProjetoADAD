{{-- Header do templateIgreja --}}
<header>
    <nav>
        <div id="logo">
            {{-- <img src="assets/img/igreja/logoIgreja.jpeg" alt="logo da Igreja" id="t"> --}}
            <img src="assets/img/igreja/logoIgreja.png" alt="logo da Igreja" id="logo-igreja">

            <a id="nomeIgreja">
                ASSEMBLEIA DE DEUS
                <br />
                CAMPO BELO DO SUL
            </a>
        </div>

        <div id="menu">
            <ul id="ul">
                <li class="li"><a href="{{ route('index.page') }}" class="btn">Início</a></li>

                <li class="li">
                    <a href="{{ route('institucional_create') }}" class="btn" id="btnInstitucional">
                        Institucional
                    </a>
                </li>

                <li class="li"><a href="{{ route('form_create') }}" class="btn">Contato</a></li>
                <li class="li"><a href="{{ route('projetos_create') }}" class="btn">Nossos Projetos</a></li>

                <li class="li">
                    <a href="{{ route('nossas_reunioes_create') }}" class="btn" id="btnReunioes">
                        Nossas Reuniões
                    </a>
                </li>

                <li class="li"><a href="{{ route('aluno_create') }}" class="btn">Área Restrita</a></li>
            </ul>
        </div>
    </nav>
</header>
