<div class="api-versiculo">
    <h2>Momentos de Reflexão</h2>
    <br><br>
    <p class="api-p">
        @php
        echo $dailyVerse['text'];
        echo "<br><br>";
        echo $dailyVerse['book']['name'] . " ";
        echo $dailyVerse['chapter'], ".", 
              $dailyVerse['number']; 
        @endphp
    </p>
</div>

<hr>
