function exibir_senha() {
    alert('entrou no alert');
    
    var x = document.getElementById("password");
    if (x.type === "password") x.type = "text"; else x.type = "password";
}