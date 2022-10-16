// Função para exibir e ocultar os
//  btn de menu -> Form de contato
const abre_menu = () => {
    // menu com btn de menu: contato,
    //  nossas Reuniões, Projetos
    let menu_button = document.getElementById("menu_button");
    // menu_button.className = "exibir-menu-button";

    let btn_burguer = document.getElementById("menu-mobile-open");
    btn_burguer.className = "menu-mobile-item teste";
    
    let btn_close = document.getElementById("menu-mobile-close");
    btn_close.className = "menu-mobile-item teste";
};

const fecha_menu = () => {
    let btn_burguer = document.getElementById("menu-mobile-open");
    btn_burguer.className = "menu-mobile-item";
    
    let btn_close = document.getElementById("menu-mobile-close");
    btn_close.className = "menu-mobile-item";
};
