<?php
/**
 * Functions for handling JavaScript in the framework.  Themes can add support for the 
 * 'omega-scripts' feature to allow the framework to handle loading the stylesheets into 
 * the theme header or footer at an appropriate time.
 */

/* Register Omega Core scripts. */
add_action( 'wp_enqueue_scripts', 'omega_register_scripts', 1 );

/* Load Omega Core scripts. */
add_action( 'wp_enqueue_scripts', 'omega_enqueue_scripts' );

/**
 * Registers JavaScript files for the framework.  This function merely registers scripts with WordPress using
 * the wp_register_script() function.  It does not load any script files on the site.  If a theme wants to register 
 * its own custom scripts, it should do so on the 'wp_enqueue_scripts' hook.
 *
 * @since 0.9.0
 * @access private
 * @return void
 */
function omega_register_scripts() {

	/* Supported JavaScript. */
	$supports = get_theme_support( 'omega-scripts' );

	/* Use the .min script if SCRIPT_DEBUG is turned off. */
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';

	/* Register the 'mobile-toggle' script if the current theme supports 'mobile-toggle'. */
	if ( isset( $supports[0] ) && in_array( 'mobile-toggle', $supports[0] ) )
		wp_register_script( 'mobile-toggle', esc_url( trailingslashit( OMEGA_JS ) . "mobile-toggle{$suffix}.js" ), array( 'jquery' ), '20130528', true );
}

/**
 * Tells WordPress to load the scripts needed for the framework using the wp_enqueue_script() function.
 *
 * @since 0.9.0
 * @access private
 * @return void
 */
function omega_enqueue_scripts() {

	/* Supported JavaScript. */
	$supports = get_theme_support( 'omega-scripts' );

	/* Load the comment reply script on singular posts with open comments if threaded comments are supported. */
	if ( is_singular() && get_option( 'thread_comments' ) && comments_open() )
		wp_enqueue_script( 'comment-reply' );

	/* Load the 'mobile-toggle' script if the current theme supports 'mobile-toggle'. */
	if ( isset( $supports[0] ) && in_array( 'mobile-toggle', $supports[0] ) )
		wp_enqueue_script( 'mobile-toggle' );
}

?>