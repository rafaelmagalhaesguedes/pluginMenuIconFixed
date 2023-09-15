jQuery(document).ready(function($) {
    // Quando o mouse passar sobre o ícone
    $('#menu-lateral-fixo img').hover(function() {
        // Mostrar o balão de texto
        $(this).siblings('.balao-texto').fadeIn();
    }, function() {
        // Esconder o balão de texto quando o mouse sair
        $(this).siblings('.balao-texto').fadeOut();
    });
});
