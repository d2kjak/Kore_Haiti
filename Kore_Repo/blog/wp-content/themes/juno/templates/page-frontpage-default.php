<?php
/**
 *
 * Template Name: Frontpage Default
 * 
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Juno
 */
get_header(); ?>

<div id="primary" class="content-area">
    
    <main id="main" class="site-main" role="main">
       
        <?php if ( get_theme_mod( 'juno_jumbotron_visibility_toggle', 'show' ) == 'show' ) { do_action( 'juno_jumbotron' ); } ?>

        <?php if ( get_theme_mod( 'juno_featured_post_visibility_toggle', 'show' ) == 'show' ) { do_action( 'juno_featured_post_section' ); } ?>

        <?php if ( get_theme_mod( 'juno_color_banner_visibility_toggle', 'show' ) == 'show' ) { do_action( 'juno_color_banner' ); } ?>

        <?php do_action( 'juno_homepage_widget_areas' ); ?>

        <?php if ( get_theme_mod( 'juno_social_visibility_toggle', 'show' ) == 'show' ) { do_action( 'juno_social' ); } ?>
       
        <div id="front-page-content" class="container">

            <div class="row">

                <div id="front-page-blog" class="col-sm-12">

                    <div class="row">

                        <?php if ( have_posts() ) : ?>

                            <?php if ( is_home() && !is_front_page() ) : ?>

                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>

                            <?php endif; ?>
                        
                            <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
                                <div class="sidebar-container col-sm-3">

                                    <?php get_sidebar( 'left' ); ?>

                                </div>
                            <?php endif; ?>
                                
                            <div class="col-sm-<?php echo esc_attr( juno_main_width() ); ?>">
                                
                                <?php /* Start the Loop */ ?>
                                <?php while ( have_posts() ) : the_post(); ?>

                                    <?php get_template_part( 'template-parts/content', 'page-home' ); ?>

                                <?php endwhile; ?>

                            </div>

                            <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
                                <div class="sidebar-container col-sm-3">

                                    <?php get_sidebar( 'right' ); ?>

                                </div>
                            <?php endif; ?>
                                
                        <?php else : ?>

                            <?php get_template_part('template-parts/content', 'none'); ?>

                        <?php endif; ?>

                    </div>

                </div>

            </div>

        </div>
            
    </main><!-- #main -->
    
</div><!-- #primary -->

<?php get_footer(); ?>      