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
        <div class="square">
            <div>
                <div id="padding-bottom-footer">
                    <br>
                    <br>
                    <br>
                    <br>
                    <p class="text bg-div color-primary" style="margin: 0 150px;">
                        <span class="color-white" style="font-size: 2rem;">Momento de Reflexão</span>
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
        <x-igreja.nossas-reunioes.nossas-reunioes_main />
    </section>
@endsection
