const navSlide = ()=> {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    burger.addEventListener('click', () => {
        // Abrir/fechar navbar
        nav.classList.toggle('nav-active');

        // Animar links
        navLinks.forEach((link, index) => {
            if (link.style.animation) {
                link.style.animation = '';
            } else {
                link.style.animation = `navLinkFade 0.5s ease fowards ${index / 7 + 1.5}s`;
            }
        });

        // Animação do menu hambúrguer
        burger.classList.toggle('toggle');
    });
}   

navSlide();