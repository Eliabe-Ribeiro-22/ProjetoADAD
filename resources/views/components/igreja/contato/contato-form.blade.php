{{-- Formulário de Contato --}}
<form action="{{ route('form_send') }}" method="POST">
    @csrf
    <div class="formContato-container">
        <label>Seu nome:</label>
        <input type="text" name="nome" placeholder="Digite seu nome" required>
    </div>

    <div class="formContato-container">
        <label>Seu telefone:</label>
        <input type="text" name="telefone" placeholder="Digite seu telefone" required>
    </div>

    <div class="formContato-container">
        <label>Sua mensagem:</label>
        <textarea name="mensagem" rows="5" cols="33" placeholder="Digite sua mensagem" required></textarea>
    </div>

    <button type="submit" id="formContato-enviar">Enviar</a>
</form>
