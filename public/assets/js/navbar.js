// Animações para abertura e fechamento do menu mobile
/* Funcao abre-ou-fecha-menu, com id-> btn-hamburguer OU X */
const menu_click = (clicked_id) => {

    /* se o btn for btn-hamburguer */
    if (clicked_id == "menu_open") {
        /* menu com btn de menu: contato, nossos Projetoo */
        let navbar_menu = document.getElementById("navbar_menu");

        /* Exibe eles chamando o code CSS que faz display: exibe */
        navbar_menu.className = "mobile_open";

        /* Pega o Hamburguer de Abrir, */
        let menu_open = document.getElementById("menu_open");
        
        // fazendo oculta-lo
        menu_open.className = "menu_close";

        /* pega o botão de X, que faz o close */
        let menu_close = document.getElementById("menu_close");
        
        // Exibe ele 
        menu_close.className = "menu_open";

        /* alinhamento no EVA */
        let index_logo = document.getElementById("index_logo");
        if (index_logo) {
            index_logo.className = "margin";
        }

        let cursos_title = document.getElementById("palestras_title");
        if (cursos_title) {
            cursos_title.className = "margin";
        }
    } else {
        let navbar_menu = document.getElementById("navbar_menu");
        navbar_menu.className = "mobile_close";

        let menu_open = document.getElementById("menu_open");
        menu_open.className = "menu_open";

        let menu_close = document.getElementById("menu_close");
        menu_close.className = "menu_close";

        let index_logo = document.getElementById("index_logo");
        if (index_logo) {
            index_logo.className = "no_margin";
        }

        let cursos_title = document.getElementById("palestras_title");
        if (cursos_title) {
            cursos_title.className = "no_margin";
        }
    }
};
