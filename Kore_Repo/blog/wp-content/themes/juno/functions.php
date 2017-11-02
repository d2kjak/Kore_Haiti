<?php
/**
 * Juno functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Juno
 */

if ( ! function_exists( 'juno_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function juno_setup() {
    
        if( !defined( 'JUNO_VERSION' ) ) :
            define( 'JUNO_VERSION', '1.1.5' );
        endif;
    
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Juno, use a find and replace
	 * to change 'juno' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'juno', get_template_directory() . '/languages' );

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
		'primary' => esc_html__( 'Primary', 'juno' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
	) );
        
        /**
         * Enable custom logo support
         */
        add_theme_support( 'custom-logo', array(
                'height'        => 300,
                'flex-width'    => true,
        ));
}
endif;
add_action( 'after_setup_theme', 'juno_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function juno_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'juno_content_width', 1170 );
}
add_action( 'after_setup_theme', 'juno_content_width', 0 );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load the theme functions file.
 */
require get_template_directory() . '/inc/juno/juno.php';

/**
 * Load the TGM file.
 */
require get_template_directory() . '/inc/tgm.php';
