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

require get_template_directory() . '/template-part/walker.php';

/*<?php get_search_form(); ?>*/
?>

<?php
// Register Custom Navigation Walker
require_once get_template_directory() . '/bs4navwalker.php';

// Função para menus
register_nav_menus( array(
        'primary' => __( 'Menu Principal', 'primary' ),
) );
?>

<?php
// Funcões de Widgets, adiciona sidebar e define divs do widget
if (function_exists('register_sidebar')) {

	register_sidebar(array(
		'name' => 'Sidebar',
		'id'   => 'widget-sidebar',
		'description'   => 'Insira aqui o widget de categorias',
		'before_widget' => '<aside class="widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>'
	));

}

// Adiciona option pages da home
add_action('admin_init', 'remove_acf_options_page', 99);
function remove_acf_options_page() {
   remove_menu_page('acf-options');
}

if( function_exists('acf_add_options_page') ) {

    $parent  = acf_add_options_page(array(
        'page_title' 	=> __('Programação'),
        'menu_title' 	=> __('Programação do Evento'),
        'menu_slug' 	=> 'front_page',
        'capability' 	=> 'edit_posts',
        'icon_url' => 'dashicons-calendar-alt',
        'position' => 1,
        'redirect' 	    => false
    ));

    $parent2  = acf_add_options_page(array(
        'page_title' 	=> __('Organização'),
        'menu_title' 	=> __('Organização'),
        'menu_slug' 	=> 'organizacao',
        'capability' 	=> 'edit_posts',
        'icon_url' => 'dashicons-admin-users',
        'position' => 1,
        'redirect' 	    => false
    ));

    $parent3  = acf_add_options_page(array(
        'page_title' 	=> __('Parceiros (LOGOS)'),
        'menu_title' 	=> __('Parceiros (LOGOS)'),
        'menu_slug' 	=> 'logos',
        'capability' 	=> 'edit_posts',
        'icon_url' => 'dashicons-image-filter',
        'position' => 1,
        'redirect' 	    => false
    ));


    add_filter( 'get_the_archive_title', function ($title) {
           if ( is_category() ) {
                   $title = single_cat_title( '', false );
               } elseif ( is_tag() ) {
                   $title = single_tag_title( '', false );
               } elseif ( is_author() ) {
                   $title = '<span class="vcard">' . get_the_author() . '</span>' ;
               } elseif ( is_tax() ) { //for custom post types
                   $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
               } elseif (is_post_type_archive()) {
                   $title = post_type_archive_title( '', false );
               }
           return $title;
       });
}

?>
<?php

/**
 * Removing dashboard widgets.
 *
 * @link https://developer.wordpress.org/reference/functions/remove_meta_box/
 */
add_action(
	'wp_dashboard_setup',
	function () {
		// Remove the 'Welcome' panel
		remove_action( 'welcome_panel', 'wp_welcome_panel' );

		// Remove 'Site health' metabox
		remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );

		// Remove the 'At a Glance' metabox
		remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );

		// Remove the 'Activity' metabox
		remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );

		// Remove the 'WordPress News' metabox
		remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );

		// Remove the 'Quick Draft' metabox
		remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
	}
);

?>

