// Função para exibir e ocultar os
//  btn de menu -> Form de contato
const abre_menu = () => {
    // menu com btn de menu: contato, nossos Projeto
    // Exibe ele
    
    // Pega o Hamburguer de Abrir,
    // Oculta ele
    
    // pega o botão X, que faz o close
    // Exibe ele
    
    let menu_button = document.getElementById("menu_button");
    // menu_button.className = "";

    
    let btn_mobile_open = document.getElementById("btn-mobile-open");
    btn_mobile_open.className = "btn-mobile-item  none";

    let btn_mobile_close = document.getElementById("btn-mobile-close");
    btn_mobile_close.className = "btn-mobile-item show";
};

const fecha_menu = () => {
    // Pega o menu com btn de menu: contato, nossos Projeto
    // Oculta eles

    // Pega o Hamburguer de Abrir,
    // Exibe ele


    // Pega o btn close
    // E oculta ele


    let btn_mobile_open = document.getElementById("btn-mobile-open");
    btn_mobile_open.className = "btn-mobile-item";

    let btn_mobile_close = document.getElementById("btn-mobile-close");
    btn_mobile_close.className = "btn-mobile-item";
};
