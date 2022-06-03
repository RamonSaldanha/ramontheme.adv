<?php

do_action( 'wprev_pro_plugin_action', 1 );


function custom_assets() {


	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/libraries/bootstrap/css/bootstrap.min.css');

	// wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri().'/assets/libraries/bootstrap/css/bootstrap-grid.min.css', array(), '5.0.1', 'all' );
	// wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri().'/assets/libraries/bootstrap/css/bootstrap-reboot.min.css');
	wp_enqueue_style( 'parallax', get_template_directory_uri().'/assets/libraries/parallax/jarallax.css');
	wp_enqueue_style( 'dropdown-css', get_template_directory_uri().'/assets/libraries/dropdown/css/style.css');
	wp_enqueue_style( 'theme-css', get_template_directory_uri().'/assets/libraries/theme/css/style.css');
	wp_enqueue_style( 'mobirise-css', get_template_directory_uri().'/assets/libraries/mobirise/css/mbr-additional.css');

	
}

add_action( 'wp_enqueue_scripts', 'custom_assets' );


if ( function_exists('register_sidebar') )
	//Código para o widget.
	register_sidebar(array(
	'name' => __( "Área na metade da landing" ),
	'id' => 'wp-custom-widgets',
	'description' => __( 'Area de widget' ),
	'before_widget' => '<li id="%1$s" class="%2$s">',
	'after_widget' => '</li>',
	'before_title' => '<h3>',
	'after_title' => '</h3>',
));


function add_favicon() {
	echo '<link rel="shortcut icon" type="image/png" href="'.get_template_directory_uri().'/assets/images/favicon-16x16.png" />';
}

add_action('wp_head', 'add_favicon');