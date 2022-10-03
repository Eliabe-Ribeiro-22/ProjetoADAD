{{-- Main do Index --}}
@section('corpo')
    <!-- Section Boas-vindas ao Site -->
    <section>
        <div class="boas-vindas">
            <!-- To Vini: Criar aqui "Carrossel" -->
            <img src="#" alt="Imagem de Boas-Vindas">

            <!-- Video para ser colocado como fundo -->
            <video controls loop muted>
                <source src="assets/videos/video.mp4" type="video/mp4">
                Seu navegador não tem suporte para esse vídeo
            </video>

            <h1>Bem-vindo a IEAD Campo Belo do Sul</h1>
        </div>
    </section>

    <!-- Seção do Versículo Diário -->
    <section>
        <h1>Versículo diário</h1>

        <div class="square">
            <div>
                <div id="padding-bottom-footer">
                    <p class="text bg-div color-primary" id="text-institucional">
                        <?php
                        echo $dailyVerse['text'], '.', '<br>';
                        echo $dailyVerse['book']['name'], ' ', $dailyVerse['chapter'], '.', $dailyVerse['number'];
                        ?>
                    </p>
                </div>
            </div>
        </div>


    </section>

    <!-- Section Projetos -->
    <section>
        <x-igreja.projetos.projetos_main />
    </section>

    <!-- Section Nossas Reuniões -->
    <section>
        <x-igreja.nossas-reunioes.nossas-reunioes_main />
    </section>
@endsection
