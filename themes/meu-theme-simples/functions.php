<?php
// Adicionar suporte a thumbnails
add_theme_support('post-thumbnails');

// Registrar um menu de navegação
function meu_theme_registrar_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'meu-theme-simples'),
    ));
}
add_action('init', 'meu_theme_registrar_menus');

// Carregar arquivos de estilo e scripts
function meu_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'meu_theme_scripts');
?>
