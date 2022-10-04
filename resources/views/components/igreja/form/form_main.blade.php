{{-- Main do Form - Formulário de Contato --}}
<h1 class="titlePage" id="title-form-contato">Entre em Contato Conosco!</h1>

<form action="{{ route('form_send') }}" method="POST" class="bg-div" id="form-contato">
    @csrf
    <h1 id="formContato-title">Formulário de Contato</h1>

    <div id="formContato-div">
        <label class="color-primary" id="formContato-lbl">Seu nome:</label>
        <input type="text" name="nome" id="formContato-input" placeholder="Digite seu nome" required>
    </div>

    <div id="formContato-div">
        <label class="color-primary" id="formContato-lbl">Seu telefone:</label>
        <input type="text" name="telefone" id="formContato-input" placeholder="Digite seu telefone" required>
    </div>

    <div id="formContato-div">
        <label class="color-primary" id="formContato-lbl">Sua mensagem:</label>
        <textarea name="mensagem" id="formContato-input" rows="5" cols="33" placeholder="Digite sua mensagem"
            required></textarea>
    </div>

    <button type="submit" id="formContato-enviar">Enviar</a>

</form>
