<?php
/**
 * Wordpress Starter Kit functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Wordpress_Starter_Kit
 */

if ( ! function_exists( 'wordpressstarterkit_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wordpressstarterkit_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Wordpress Starter Kit, use a find and replace
	 * to change 'wordpressstarterkit' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'wordpressstarterkit', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'wordpressstarterkit' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'wordpressstarterkit_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'wordpressstarterkit_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wordpressstarterkit_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wordpressstarterkit_content_width', 640 );
}
add_action( 'after_setup_theme', 'wordpressstarterkit_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

 /******Custom Widgets****/
 register_sidebar( array(
 'name' => 'Footer Area 1',
 'id' => 'footer-1',
 'description' => 'Appears in the footer area',
 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 'after_widget' => '</aside>',
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 ) );

 register_sidebar( array(
 'name' => 'Footer Area 2',
 'id' => 'footer-2',
 'description' => 'Appears in the footer area',
 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 'after_widget' => '</aside>',
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 ) );

 register_sidebar( array(
 'name' => 'Footer Area 3',
 'id' => 'footer-3',
 'description' => 'Appears in the footer area',
 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 'after_widget' => '</aside>',
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 ) );

 register_sidebar( array(
 'name' => 'Footer Area 4',
 'id' => 'footer-4',
 'description' => 'Appears in the footer area',
 'before_widget' => '<aside id="%1$s" class="widget %2$s">',
 'after_widget' => '</aside>',
 'before_title' => '<h3 class="widget-title">',
 'after_title' => '</h3>',
 ) );
/****End custom widgets****/

function wordpressstarterkit_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'wordpressstarterkit' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'wordpressstarterkit' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'wordpressstarterkit_widgets_init' );

/**
 * Enqueue scripts and styles.
 */


function wordpressstarterkit_scripts() {
	wp_enqueue_style( 'wordpressstarterkit-style', get_stylesheet_uri() );

	// wp_enqueue_script( 'wordpressstarterkit-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wordpressstarterkit_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
