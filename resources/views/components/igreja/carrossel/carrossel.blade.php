{{-- 
    + ---------------------------------- +
    | Componente do carrossel de imagens |
    | presente na página principal.      |
    + ---------------------------------- +
--}}

{{-- CSS e JS do carrossel --}}
<link rel="stylesheet" href="assets/css/igreja/carrossel/carrossel.css">
<script src="assets/js/carousel.js"></script>

<div class="container">
    <button class="arrow-left control" aria-label="Previous image">&#8592;</button>
    <button class="arrow-right control" aria-label="Next image">&#8594;</button>
    <div class="gallery-wrapper">
        <div class="gallery">
            <img class="item" src="/assets/img/igreja/pc1.jpg" alt="Alunos fazendo um mosaico de 'Jesus te ama'.">
            <img class="item current-item" src="/assets/img/igreja/pc2.jpg" alt="Fachada da igreja Assembleia de Deus.">
            <img class="item" src="/assets/img/igreja/pc3.jpg"
                alt="Foto de alunos e professores com a faixa ADAD Campo Belo do Sul.">
            <img class="item" src="/assets/img/igreja/pc4.jpeg" alt="Professores e tutores do programa ADAD.">
            <img class="item" src="/assets/img/igreja/pc5.jpeg" alt="Imagem de uma pessoa orando com a bíblia de fundo.">
            <img class="item" src="/assets/img/igreja/pc6.jpg" alt="Doação de roupas">
            <img class="item" src="/assets/img/igreja/pc7.jpeg" alt="Alunos ADAD segurando bandeiras">
        </div>
    </div>
</div>
{{-- Script do carrossel --}}
<script>
    slide();
</script>
