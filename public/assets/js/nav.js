/* Ocultar botões de menu da Nav */
const abre_menu = () => {
    let menu_button = document.getElementById("menu_button");
    menu_button.className = "menu-button-open";

    let btn_mobile_open = document.getElementById("btn-mobile-open");
    btn_mobile_open.className = "btn-mobile-item  none";

    let btn_mobile_close = document.getElementById("btn-mobile-close");
    btn_mobile_close.className = "btn-mobile-item show";
};

/* Ocultar botões de menu da Nav */
const fecha_menu = () => {
    let menu_button = document.getElementById("menu_button");
    menu_button.className = "";

    let btn_mobile_open = document.getElementById("btn-mobile-open");
    btn_mobile_open.className = "btn-mobile-item";

    let btn_mobile_close = document.getElementById("btn-mobile-close");
    btn_mobile_close.className = "btn-mobile-item";
};
