{{-- Main do Index --}}
@section('corpo')
    <!-- Section Boas-vindas ao Site -->
    <section>
        <div class="boas-vindas">
            <!-- To Vini: Criar aqui "Carrossel" -->
            <img src="#" alt="Imagem de Boas-Vindas">
            <h1>Bem-vindo a IEAD Campo Belo do Sul</h1>
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
