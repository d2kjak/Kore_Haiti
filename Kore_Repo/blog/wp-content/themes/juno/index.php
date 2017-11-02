<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Juno
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <div id="front-page-content" class="container">
              
                <div class="row">

                    <div id="archive-blog" class="col-sm-12">

                        <?php if ( get_theme_mod( 'juno_blog_title_toggle', 'show' ) == 'show' ) : ?> 

                            <div id="blog-title-box">

                                <h2 class="entry-title">
                                    <?php echo esc_html( get_theme_mod( 'juno_blog_title', __( 'Blog', 'juno' ) ) ); ?>
                                </h2>

                            </div>
                        
                        <?php endif; ?>

                        <div class="row">

                            <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
                                <div class="sidebar-container col-sm-3">

                                    <?php get_sidebar( 'left' ); ?>

                                </div>
                            <?php endif; ?>
                            
                            <div class="col-sm-<?php echo esc_attr( juno_main_width() ); ?>">
                                
                                <?php if ( have_posts() ) : ?>

                                    <div class="juno-blog-content">

                                        <div id="masonry-blog-wrapper">

                                            <div class="grid-sizer"></div>
                                            <div class="gutter-sizer"></div>

                                            <?php

                                            /* Start the Loop */
                                            while ( have_posts() ) : the_post();

                                                get_template_part( 'template-parts/content', 'blog' );

                                            endwhile;

                                            ?>

                                        </div><!-- #masonry-blog-wrapper -->

                                        <div class="pagination-links">
                                            <?php the_posts_pagination( array( 'mid_size' => 1 ) ); ?>
                                        </div>

                                    </div><!-- #juno-blog-content -->

                                <?php else :

                                    get_template_part( 'template-parts/content', 'none' );

                                endif; ?>
                                    
                            </div>
                            
                            <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
                                <div class="sidebar-container col-sm-3">

                                    <?php get_sidebar( 'right' ); ?>

                                </div>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>
            
        </main><!-- #main -->
        
    </div><!-- #primary -->

<?php
get_footer();
