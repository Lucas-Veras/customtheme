<?php
//adiciona o title dinâmico
function customtheme_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'customtheme_theme_support');

function customtheme_menus() {
    $locations = array(
        'primary' => "Desktop Primary Link",
        'footer' => "Footer Menu Items"
    );

    register_nav_menus($locations);
}

add_action('init', 'customtheme_menus');

function customtheme_register_styles() {
    wp_enqueue_style('customtheme-style', get_template_directory_uri() . "/style.css", array(), '1.0', 'all');

    wp_enqueue_style('customtheme-bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css", array(), '5.2.2', 'all');

    wp_enqueue_style('customtheme-font', "https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap", array(), '5.2.2', 'all');
}

add_action('wp_enqueue_scripts', 'customtheme_register_styles');

function customtheme_register_scripts() {
    wp_enqueue_script('customtheme-js', "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array(), '5.2.2', true);
}

add_action('wp_enqueue_scripts', 'customtheme_register_scripts');

require get_template_directory() . '/template-parts/walker.php';
?>

