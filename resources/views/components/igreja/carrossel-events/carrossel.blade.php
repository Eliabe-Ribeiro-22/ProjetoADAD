{{-- 
    + ---------------------------------- +
    | Componente do carrossel de imagens |
    | presente na página projetos .      |
    + ---------------------------------- +
--}}

{{-- CSS e JS do carrossel --}}
<link rel="stylesheet" href="/assets/css/carrossel/carrossel.css">
<script type="text/javascript" src="/assets/js/carousel.js"></script>

<div class="container">
    <button class="arrow-left control" aria-label="Previous image">&#8592;</button>
    <button class="arrow-right control" aria-label="Next image">&#8594;</button>
    <div class="gallery-wrapper">
        <div class="gallery">
            <img class="item" src="/assets/img/igreja/events/"
                alt="Alunos fazendo um mosaico de 'Jesus te ama'.">
            <img class="item current-item" src="/assets/img/igreja/events/adads-sujos-lama.jpeg"
                 alt="Alunos ADAD complemante sujos de lama">
            <img class="item" src="/assets/img/igreja/events/devocicional-parte-pregacao.jpeg"
                alt="Foto de alunos e professores assistindo a parte final do devocional.">
            <img class="item" src="/assets/img/igreja/events"
                alt="Professores e instrutores do programa ADAD.">
            <img class="item" src="/assets/img/igreja/"
            alt="Fachada da igreja Assembleia de Deus.">
                
            <img class="item" src="/assets/img/igreja/events" alt="Doação de roupas">
            <img class="item" src="/assets/img/igreja/events"
               alt="Imagem de uma pessoa orando com a bíblia de fundo.">
        </div>
    </div>
</div>

{{-- Script do carrossel --}}
<script>
    slide();
</script>
