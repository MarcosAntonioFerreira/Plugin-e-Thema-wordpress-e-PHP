<?php
/**
 * Plugin Name: Simples
 * Plugin URI: https://exemplo.com
 * Description: Um plugin simples para demonstração.
 * Version: 1.0
 * Author: Marcos Almeida
 * Author URI: https://exemplo.com
 */


 // Função que adiciona uma mensagem ao rodapé
function mps_adicionar_mensagem_rodape() {
    // O conteúdo que será inserido no rodapé
    echo '<p style="text-align:center;">Obrigado por visitar nosso site!</p>';
}

// Gancho que diz ao WordPress para executar essa função no rodapé
add_action('wp_footer', 'mps_adicionar_mensagem_rodape');






// Função que define o conteúdo do shortcode
function mps_shortcode_exemplo() {
    return '<p>Este é um shortcode simples!</p>';
}

// Registrando o shortcode
add_shortcode('meu_shortcode', 'mps_shortcode_exemplo');







// Função para adicionar um item de menu no painel do WordPress
function mps_adicionar_pagina_configuracoes() {
    add_menu_page(
        'Configurações do Meu Plugin Simples', // Título da página
        'Meu Plugin Simples', // Título do menu
        'manage_options', // Capacidade necessária
        'meu-plugin-simples', // Slug do menu
        'mps_renderizar_pagina_configuracoes', // Função de callback
        'dashicons-admin-generic', // Ícone do menu
        90 // Posição no menu
    );
}

// Função que renderiza a página de configurações
function mps_renderizar_pagina_configuracoes() {
    echo '<h1>Configurações do Meu Plugin Simples</h1>';
    echo '<form method="post" action="options.php">';
    // Aqui você vai gerar os campos de configuração
    echo '</form>';
}

// Gancho para adicionar a página de configuração
add_action('admin_menu', 'mps_adicionar_pagina_configuracoes');
