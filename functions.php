<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Register Theme Scripts
 * https://developer.wordpress.org/reference/hooks/wp_enqueue_scripts/
 */
function ditto_scripts() {
  wp_enqueue_style( 'core', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'main-styles', get_template_directory_uri() . '/css/main.bundle.css' );
  wp_enqueue_style('bootstrap.css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
  wp_enqueue_style('font-awesome.css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
  wp_enqueue_style('aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
  
  wp_enqueue_script('font-awesome.js', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js');
  wp_enqueue_script( 'main-scripts', get_template_directory_uri() . '/js/main.bundle.js', array( 'jquery' ), '', true );
  wp_enqueue_script('bootstrap.js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js');
  wp_enqueue_script('aos.js', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
}
add_action( 'wp_enqueue_scripts', 'ditto_scripts');

/**
 * Register Navigation Menus
 * https://developer.wordpress.org/reference/functions/register_nav_menus/
 */
function ditto_navigation_menus() {
  $locations = array(
    'main_menu' => __( 'Main Menu', 'text_domain' )
  );
  register_nav_menus( $locations );
}
add_action( 'init', 'ditto_navigation_menus' );

/**
 * Theme support
 * https://developer.wordpress.org/reference/functions/add_theme_support/
 */
add_theme_support( 'custom-logo' );

/**
 * Login Styles
 */
function ditto_login_styles() { ?>
  <style type="text/css">
    body {
      background-color: #222 !important;
    }
    #login h1 a, .login h1 a {
      display: none;
    }
    #login h1 img {
      width: 100%;
      max-width: 240px;
      max-height: 180px;
    }
  </style>
  <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function(event) { 
      let loginImg = document.createElement("img");
        loginImg.src = "<?= get_template_directory_uri() ?>/images/pipe-code-logo.svg";
        loginImg.alt = "WordPress login image";
        document.querySelector('#login h1').appendChild(loginImg);
    });
  </script>
<?php }
add_action( 'login_enqueue_scripts', 'ditto_login_styles' );

/**
 * Install latest jQuery version 3.5.1
 */
if (!is_admin()) {
	wp_deregister_script('jquery');
	wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"), false);
	wp_enqueue_script('jquery');
}

/**
 * Disable Gutenberg
 */
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);
if (function_exists('acf_add_options_page')){
	acf_add_options_page(array(
		'page_title'    => 'Theme Settings',
		'menu_title'    => 'Theme Settings',
		'menu_slug'     => 'theme-settings',
		'capability'    => 'edit_posts',
		'redirect'      =>  true
	  ));
	acf_add_options_sub_page(array(
		'page_title'     => 'Header',
		'menu_title'     => 'Header',
		'parent_slug'   => 'theme-settings',
	));
  acf_add_options_sub_page(array(
		'page_title'     => 'Footer',
		'menu_title'     => 'Footer',
		'parent_slug'   => 'theme-settings',
	));
  acf_add_options_sub_page(array(
		'page_title'     => 'Formulario',
		'menu_title'     => 'Formulario',
		'parent_slug'   => 'theme-settings',
	));
}

add_action('init', 'forms_arbol_genealogico');

// post type Forms Family tree
function forms_arbol_genealogico(){
  $args = array(
    'public' => true,
    'label'  => 'Todos Los Formularios',
    'menu_icon' => 'dashicons-editor-table'
  );
  register_post_type('formularios', $args);
}
