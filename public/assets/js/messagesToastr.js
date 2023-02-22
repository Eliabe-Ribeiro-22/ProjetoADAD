// Usando Toastr na Tela de Login e Cadastro/Alteração de Alunos
alert('Entrou JS')
// Ativar Toastr - mensagem de carregamento: 
//  cadastrando aluno..., alterando aluno..., excluindo aluno...
const loading = (messagem) => {
    toastr.options = {
        progressBar: true,
        timeOut: "9000",
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

loading('Entrou no toastr');