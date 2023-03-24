<?php

// Customiza a página de login
add_filter('login_headerurl', 'my_login_logo_url');
function my_login_logo_url()
{
    return home_url();
}

add_filter('login_headertext', 'my_login_logo_url_title');
function my_login_logo_url_title()
{
    return get_bloginfo('description');
}

add_action('login_enqueue_scripts', 'my_login_stylesheet');
function my_login_stylesheet()
{
    wp_enqueue_style('custom-login', get_stylesheet_directory_uri() . '/style-login.css');
    // wp_enqueue_script( 'custom-login', get_stylesheet_directory_uri() . '/style-login.js' );
}

//Função para registrar os Scripts e o CSS
add_action('wp_enqueue_scripts', 'vg_theme_script');
function vg_theme_script()
{
    wp_register_script('vg_theme_swiper-script', get_template_directory_uri() . '/source/js/swiper-bundle.min.js', array('jquery'), false, true);
    wp_register_script('vg_theme_main-script', get_template_directory_uri() . '/source/js/main.js', array('jquery'), false, true);

    wp_enqueue_script('vg_theme_swiper-script');
    wp_enqueue_script('vg_theme_main-script');
}

add_action('wp_enqueue_scripts', 'vg_theme_style');
function vg_theme_style()
{
    wp_register_style('vg_theme_swiper-style', get_template_directory_uri() . '/source/style/swiper-bundle.min.css', array(), false, false);
    wp_register_style('vg_theme_main-style', get_template_directory_uri() . '/style.css', array(), false, false);

    wp_enqueue_style('vg_theme_swiper-style');
    wp_enqueue_style('vg_theme_main-style');
}


// Registra o Ajax
add_action('wp_enqueue_scripts', 'vg_theme_register_ajax');
function vg_theme_register_ajax()
{
    wp_enqueue_script('ajax-script',  get_template_directory_uri() . '/source/js/main.js', array('jquery'));
    wp_localize_script('ajax-script', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Adiciona suporte a imagem destaque dos posts
add_theme_support('post-thumbnails');

// Chama os Custom Post Type
require './components/cpt_cursos.php';
require './components/cpt_portfolio.php';
require './components/ctp_experiencia.php';
require './components/ctp_formacao.php';


add_action('wp_ajax_nopriv_vg_theme_contato', 'vg_theme_contato');
add_action('wp_ajax_vg_theme_contato', 'vg_theme_contato');
function vg_theme_contato()
{
    echo 'Chegou no functions.php';

    wp_die();
}
