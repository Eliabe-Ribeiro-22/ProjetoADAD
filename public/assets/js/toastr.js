// Ativar Toaster ao tentar logar
const loading = (messagem) => {
    toastr.options = {
        progressBar: true,
        timeOut: "60000",
    };
    toastr["info"](messagem);
};


// Ativar Toastr (Mensagem de sucesso)
const success = (mensagem) => {
    toastr.options = {
        progressBar: true,
        timeOut: "5000",
    };
    toastr["success"](mensagem);
};

// Ativar Toastr (Mensagem  de erro)
const error = (mensagem) => {
    toastr.options = {
        progressBar: true,
        timeOut: "5000",
    };
    toastr["error"](mensagem);
};


/*

Modelo de lógica para chamar as funções na página
<script>
    loading();
    @if (true)
        success();
    @else
        error();
    @endif
</script>
*/