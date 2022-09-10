{{-- Main Church --}}
<div class="main">
    <div class="boas-vindas">
        <h1>Bem-vindo a IEAD Campo Belo do Sul</h1>
        <p>
            ADCBSUL é a sigla para Igreja Evangélica Assembleia de Deus em Campo Belo do
            Sul
        </p>
    </div>
    <!-- Versiculo do Dia -->
    <div id="divVerse">
        <p class="verse">
            <?php
            // Exemplo de Array retornada pela API(JSON to Array)
            // $dailyVerse = [
            //     "book" => [
            //         "abbrev" => 'en',
            //         "name" => "Salmos",
            //         "author" => "David, Moisés, Salomão",
            //         "group" => "Poéticos",
            //         "version" => "nvi"
            //     ],
            //     "chapter" => 91,
            //     "number" => 1,
            //     "text" => "Aquele que habita no abrigo do Altíssimo e descansa à sombra do Todo-poderoso",
            // ];
            // Dump and die
            //dd($dailyVerse);

            // Versiculo
            echo $dailyVerse['text'];
            echo ".";
            echo "</p>";

            // Referencia
            //  Livro
            echo "<p class='verse' id='b'>";
            echo $dailyVerse['book']['name'];
            echo " ";
            //  Capitulo e versiculo
            echo $dailyVerse['chapter'];
            echo ".";
            echo $dailyVerse['number'];
            echo "</p>";
            ?>
            <!-- JS 
            const verseIndex = new Date().getDate(); 
        -->
            <!-- PHP -
        ? -->
        </p>
    </div>
    <section>
        <!-- Section Projetos -->
        <x-igreja.projetos.main.main />

    </section>
</div>