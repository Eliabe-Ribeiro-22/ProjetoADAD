{{-- Main do Index --}}
@section('corpo')
    <!-- Section Boas-vindas ao Site -->
    {{-- <section>
        <div class="boas-vindas">
            <!-- To Vini: Criar aqui "Carrossel" -->
            <img src="#" alt="Imagem de Boas-Vindas" >

            <h1>Bem-vindo a IEAD Campo Belo do Sul</h1>
        </div>
    </section> --}}

    {{-- Seção do Momento de Reflexão --}}
    <section>
        <div id="sect-momento-reflexao">
            <div>
                <div id="">
                    <p class="">
                        <span class="" id="">Momento de
                            Reflexão</span>
                        <br><br>

                        <?php
                        echo $dailyVerse['text'], '.', '<br><br>';
                        echo $dailyVerse['book']['name'], ' ', $dailyVerse['chapter'], '.', $dailyVerse['number'];
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Section Projetos --}}
    <section>
        <x-igreja.projetos.projetos_main />
    </section>

    {{-- Section Nossas Reuniões --}}
    <section>

        <h3 class="titlePage" id="title-nossas-reunioes" style="">
            Nossas Reuniões
        </h3>
        <div id="square">
            <div>
                <div id="pb-footer-nossas-reunioes">
                    <p class="text bg-div color-primary" id="text-nossas-reunioes">
                        <span class="color-white">Cultos</span>
                        <br><br>

                        <span class="subTitle">Noite da Vitória</span><br>
                        Quintas-Feiras às 19:15 hs<br><br>

                        <span class="subTitle">Noite da Família</span><br>

                        Domingos às 19:00 hs
                    </p>
                </div>
            </div>

    </section>
@endsection
