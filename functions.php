<?php 

// Função para registrar os Scripts e o CSS
function origamid_scripts() {
	// Desregistra o jQuery do Wordpress
	wp_deregister_script('jquery');

	// Registra o jQuery Novo
	wp_register_script( 'jquery', get_template_directory_uri() . '/js/libs/jquery-1.11.2.min.js', array(), "1.11.2", true );

	// Registrar Plugins
	wp_register_script( 'plugins-script', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), false, true );

	// Registrar Main
	wp_register_script( 'main-script', get_template_directory_uri() . '/js/main.js', array( 'jquery', 'plugins-script' ), false, true );

	// Registrar Modernizr
	wp_register_script( 'modernizr', get_template_directory_uri() . '/js/libs/modernizr.custom.45655.js', array(), "45655", false );

	// Carrega o Script
	wp_enqueue_script( 'modernizr' );
	wp_enqueue_script( 'main-script' );	
}
add_action( 'wp_enqueue_scripts', 'origamid_scripts' );

function origamid_css() {
	wp_register_style( 'origamid-style', get_template_directory_uri() . '/style.css', array(), false, false );
	wp_enqueue_style( 'origamid-style' );
}
add_action( 'wp_enqueue_scripts', 'origamid_css' );

// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

// Habilitar Menus
add_theme_support('menus');

/*
Plugin Name: My Custom Post Types
Description: Add post types for movies and movie reviews
Author: Joao Pedro
*/
 
// Hook <strong>lc_custom_post_movie()</strong> to the init action hook
add_action( 'init', 'lc_custom_post_movie' );
 
// The custom function to register a movie post type
function lc_custom_post_movie() {
 
  // Set the labels, this variable is used in the $args array
  $labels = array(
    'name'               => __( 'Clientes' ),
    'singular_name'      => __( 'Cliente' ),
    'add_new'            => __( 'Adicionar Novo Cliente' ),
    'add_new_item'       => __( 'Adicionar Novo Cliente' ),
    'edit_item'          => __( 'Editar Cliente' ),
    'new_item'           => __( 'Novo Cliente' ),
    'all_items'          => __( 'Todos Clientes' ),
    'view_item'          => __( 'Visualizar Cliente' ),
    'search_items'       => __( 'Buscar Clientes' ),
    'featured_image'     => 'Imagem',
    'set_featured_image' => 'Adicionar Imagem'
  );
 
  // The arguments for our post type, to be entered as parameter 2 of register_post_type()
  $args = array(
    'labels'            => $labels,
    'description'       => 'Holds our movies and movie specific data',
    'public'            => true,
    'menu_position'     => 5,
    'supports'          => array( 'title', 'editor', 'thumbnail' ),
    'has_archive'       => true,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'has_archive'       => true,
    'query_var'         => 'film'
  );
 
  // Call the actual WordPress function
  // Parameter 1 is a name for the post type
  // Parameter 2 is the $args array
  register_post_type( 'cliente', $args);
}