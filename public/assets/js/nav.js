// Função para exibir e ocultar os
//  btn de menu -> Form de contato
const abre_menu = () => {
    // menu com btn de menu: contato, nossos Projeto
    // Exibe ele
    let menu_button = document.getElementById("menu_button");
    menu_button.className = "menu-button-open";

    // Pega o Hamburguer de Abrir,
    // Oculta ele
    let btn_mobile_open = document.getElementById("btn-mobile-open");
    btn_mobile_open.className = "btn-mobile-item  none";

    // pega o botão X, que faz o close
    // Exibe ele
    let btn_mobile_close = document.getElementById("btn-mobile-close");
    btn_mobile_close.className = "btn-mobile-item show";
};

const fecha_menu = () => {
    // Pega o menu com btn de menu: contato, nossos Projeto
    // Oculta eles
    let menu_button = document.getElementById("menu_button");
    menu_button.className = "";

    // Pega o Hamburguer de Abrir,
    // Exibe ele
    let btn_mobile_open = document.getElementById("btn-mobile-open");
    btn_mobile_open.className = "btn-mobile-item";

    // Pega o btn close
    // E oculta ele
    let btn_mobile_close = document.getElementById("btn-mobile-close");
    btn_mobile_close.className = "btn-mobile-item";
};
