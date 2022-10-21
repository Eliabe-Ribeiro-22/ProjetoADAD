{{-- Main do Index --}}
@section('corpo')
    {{-- Section Boas-vindas ao Site --}}
    <section>
        <div class="boas-vindas">
            <x-igreja.carrossel.carrossel />
        </div>
    </section>

    {{-- Seção do Momento de Reflexão --}}
    <section>
        <div id="sect-momento-reflexao">
            <div id="div-momento-reflexao">
                <br>
                <p class="bg-div color-primary" id="div-p-momento-reflexao">
                    <span id="title-momento-reflexao">Momento de
                        Reflexão</span>
                    <br><br>

                    <?php
                    echo $dailyVerse['text'], '.', '<br><br>';
                    echo $dailyVerse['book']['name'], ' ', $dailyVerse['chapter'], '.', $dailyVerse['number'];
                    ?>
                </p>
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
