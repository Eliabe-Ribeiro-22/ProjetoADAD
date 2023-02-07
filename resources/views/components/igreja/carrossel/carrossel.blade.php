{{-- 
    + ---------------------------------- +
    | Componente do carrossel de imagens |
    | presente na página principal.      |
    + ---------------------------------- +
--}}

{{-- CSS e JS do carrossel --}}
<link rel="stylesheet" href="/assets/css/igreja/carrossel/carrossel.css">
<script type="text/javascript" src="/assets/js/carousel.js"></script>

<div class="container">
    <button class="arrow-left control" aria-label="Previous image">&#8592;</button>
    <button class="arrow-right control" aria-label="Next image">&#8594;</button>
    <div class="gallery-wrapper">
        <div class="gallery">
            <img class="item" src="/assets/img/igreja/carrossel-adad-grupo.jpg"
                alt="Alunos fazendo um mosaico de 'Jesus te ama'.">
            <img class="item current-item" src="/assets/img/igreja/carrossel-templo.jpg"
                alt="Fachada da igreja Assembleia de Deus.">
            <img class="item" src="/assets/img/igreja/carrossel-adad-faixa.jpg"
                alt="Foto de alunos e professores com a faixa ADAD Campo Belo do Sul.">
            <img class="item" src="/assets/img/igreja/carrossel-lideranca.jpeg"
                alt="Professores e instrutores do programa ADAD.">
            <img class="item" src="/assets/img/igreja/carrossel-biblia.jpeg"
                alt="Imagem de uma pessoa orando com a bíblia de fundo.">
            <img class="item" src="/assets/img/igreja/carrossel-doacao-roupas.jpg" alt="Doação de roupas">
            <img class="item" src="/assets/img/igreja/carrossel-adad-bandeiras.jpeg"
                alt="Alunos ADAD segurando bandeiras">
        </div>
    </div>
</div>

{{-- Script do carrossel --}}
<script>
    slide();
</script>
