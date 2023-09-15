<?php
/*
Plugin Name: Menu Lateral Fixo
Description: Adiciona um menu de ícones fixo à lateral direita.
Version: 1.0
Author: Rafael M.
*/

// Adicione os estilos e scripts necessários
function menu_lateral_fixo_enqueue_scripts() {
    wp_enqueue_style('menu-lateral-fixo-styles', plugin_dir_url(__FILE__) . 'css/menu.css');
    wp_enqueue_script('menu-lateral-fixo-scripts', plugin_dir_url(__FILE__) . 'js/menu.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'menu_lateral_fixo_enqueue_scripts');

// Renderize o menu de ícones
function menu_lateral_fixo_render_menu() {
    //
    $plugin_dir = plugin_dir_url(__FILE__);
    $zap_url = $plugin_dir . 'images/icon-whatsapp.png';

    echo 
    
    '<div id="menu-lateral-fixo">
        <a href="https://api.whatsapp.com/send/?phone=5573999883982&text=Ol%C3%A1%2C+bem+vindo+%C3%A0+Locadora+Horizonte+Rent+A+Car%2C+clique+em+iniciar+conversa+para+continuar+o+atendimento.&type=phone_number&app_absent=0" target="_blank">
            <img src="' . esc_url($zap_url) . '" alt="IconWhats" class="icon" />

            <div class="balao-texto">
                <p>Chame agora no WhatsApp</p>
                <p>Estamos prontos para atendê-lo!</p>
            </div>
        </a>
    
    </div>';
}
add_action('wp_footer', 'menu_lateral_fixo_render_menu');
?>
