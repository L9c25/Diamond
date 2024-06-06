$(document).ready(function() {
    // Função para abrir e fechar a barra lateral
    function toggleSidebar() {
        var sidebar = $('#L_sidebar');
        if (sidebar.css('left') === '-340px' || sidebar.css('left') === '-350px') {
            sidebar.animate({ left: '0px' }, 50); // Abre a barra lateral
        } else {
            sidebar.animate({ left: '-340px' }, 50); // Fecha a barra lateral
        }
    }

    // Atribuir a função aos botões de menu
    $('#L_menu-toggle, #L_sidebar #L_menu-toggle').click(function() {
        toggleSidebar();
    });
});
