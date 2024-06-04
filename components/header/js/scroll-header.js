let lastScrollTop = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', function() {
    let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > 300) {
        // Se o scroll for maior que 300px
        if (scrollTop > lastScrollTop) {
            // Scroll Down
            header.style.top = '-70px'; // Ajuste conforme necessário
        } else {
            // Scroll Up
            header.style.top = '0';
        }
    } else {
        // Se o scroll for menor ou igual a 300px
        if (scrollTop > lastScrollTop) {
            // Scroll Down
            header.style.top = '20px'; // Ajuste conforme necessário
        } else {
            // Scroll Up
            header.style.top = '18px';
        }
    }
    
    lastScrollTop = scrollTop;
});
