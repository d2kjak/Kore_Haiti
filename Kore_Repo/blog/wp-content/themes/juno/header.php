<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Juno
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    
    <a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'juno' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
           
        <div class="container-fluid">
            
            <div class="row">
           
                <div id="site-branding" class="col-sm-12">
                
                    <?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) {

                        the_custom_logo();

                    } else { ?>

                        <a href="<?php echo esc_url( home_url() ); ?>">
                            <?php echo get_bloginfo( 'name' ); ?>
                        </a>
                    
                        <?php if ( get_bloginfo( 'description' ) ) : ?>
                            <h5 class="site-description">
                                <?php echo get_bloginfo( 'description' ); ?>
                            </h5>
                        <?php endif; ?>

                    <?php } ?>

                    <div id="slicknav-menu-toggle">

                        <i class="fa fa-bars"></i>

                    </div>
                    
                </div>
                
                <div id="site-navigation" class="col-sm-12">
                   
                    <nav class="main-nav main-navigation">

                        <?php if ( has_nav_menu( 'primary' ) ) : ?>

                            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>

                        <?php else : ?>

                            <?php if ( current_user_can( 'edit_theme_options' ) ) : ?>
                        
                            <div class="menu-testing-menu-container">

                                <ul id="primary-menu" class="menu">

                                    <li class="menu-item menu-item-type-custom menu-item-object-custom">

                                        <a href="<?php echo esc_url( admin_url( 'nav-menus.php' ) ); ?>">
                                            <?php if( current_user_can( 'edit_posts' ) ) : ?>
                                               <?php _e( 'Add a Primary Menu?', 'juno' ); ?>
                                            <?php endif; ?>
                                        </a>

                                    </li>

                                </ul>

                            </div>

                            <?php endif; ?>
                        
                        <?php endif; ?>

                    </nav>
               
                </div>
                
            </div>
            
        </div>
        
    </header><!-- #masthead -->

    <div id="content" class="site-content">
