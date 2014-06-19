<?php
/**
 * tyler functions and definitions
 *
 * @package tyler
 */

if ( ! function_exists( 'tyler_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */

register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);

add_action( 'init', 'lineup_post_type' );

function lineup_post_type() {

	register_post_type( 'lineup', array(
		'labels' => array(
			'name' => __('Lineup'),
			'singular_name' => __('Performer')
			),
		'public' => true,
		'show_ui' => true,
		'rewrite' => array(
			'slug' => 'lineup',
			'with_front' => false
			),
		'has_archive' => true
	) );

}

function theme_css() {
    wp_register_style( 'superslides', get_template_directory_uri() . '/css/superslides.css', array(), '20120208', 'all' );
    wp_enqueue_style( 'superslides' );
}

add_action( 'wp_enqueue_scripts', 'theme_css' );

function theme_js() {
    wp_register_script( 'main', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true );
    wp_register_script( 'superslides', get_template_directory_uri() . '/js/superslides.js', array('jquery'), '', true );
    wp_register_script( 'mixitup', get_template_directory_uri() . '/js/mixitup_min.js', array('jquery'), '', true );
    wp_enqueue_script( 'main' );
    wp_enqueue_script( 'superslides' );
    wp_enqueue_script( 'mixitup' );
}

add_action( 'wp_enqueue_scripts', 'theme_js');

function tyler_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on tyler, use a find and replace
	 * to change 'tyler' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'tyler', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Enable support for Post Formats.
	add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

	// Enable support for HTML5 markup.
	add_theme_support( 'html5', array(
		'comment-list',
		'search-form',
		'comment-form',
		'gallery',
	) );
}
endif; // tyler_setup
add_action( 'after_setup_theme', 'tyler_setup' );


/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';