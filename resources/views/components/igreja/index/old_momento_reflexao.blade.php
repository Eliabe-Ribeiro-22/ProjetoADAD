<section>
    <div class="square">
        <div>
            <div id="padding-bottom-footer">
                <p class="bg-div color-primary">
                    <span class="color-white text title-momento-reflexao" id="text-institucional">Momento de
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
