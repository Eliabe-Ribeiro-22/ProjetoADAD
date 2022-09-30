{{-- Main do Form - Formulário de Contato --}}
<h1 class="title" id="title-before-form">Entre em Contato Conosco!</h1>

<form action="{{ route('form_send') }}" method="POST" id="formulario-contato">
    @csrf
    <h1 id="formTitle">Formulário de Contato</h1>

    <div>
        <label>Seu nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
    </div>

    <div>
        <label>Seu telefone:</label>
        <input type="text" name="telefone" placeholder="Digite seu telefone" required>
    </div>

    <div>
        <label>Sua mensagem:</label>
        <textarea name="mensagem" rows="5" cols="33" placeholder="Digite sua mensagem" required></textarea>
    </div>

    <button type="submit" id="enviar">Enviar</a>

</form>
