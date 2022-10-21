/* + --------------------------------------------- +
*  | Função criada para controlar o uso das setas  |
*  | do carrossel de imagens que será exibido na   |
*  | página inicial do projeto.                    |
*  + --------------------------------------------- +
*/

function slide() {
    // Contantes puxam as classes control e item
    const controls = document.querySelectorAll('.control');
    const items = document.querySelectorAll('.item');
    const maxItems = items.length;

    let currentItem = 1;

    // Centraliza item padrão selecionado
    items[currentItem].scrollIntoView({inline: "center", behavior: "smooth",});

    // Verifica evento de click em qual direção
    controls.forEach(control => {
        control.addEventListener('click', () => {
            // True se seta da esquerda for clicada
            const isLeft = control.classList.contains('arrow-left');

            isLeft ? currentItem -= 1 : currentItem += 1;      

            if (currentItem >= maxItems)
                currentItem = 0;
            if (currentItem < 0)
                currentItem = maxItems - 1;

            // Controla qual item está selecionado
            items.forEach(item => item.classList.remove('current-item'));
            items[currentItem].scrollIntoView({inline: "center", behavior: "smooth"});
            items[currentItem].classList.add('current-item');
        });
    });
}