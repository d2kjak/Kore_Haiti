<?php
/**
 * The template for displaying archive pages.
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

                        <header class="page-header">

                            <div id="blog-title-box">

                                <h2 class="entry-title">
                                    <?php the_archive_title(); ?>
                                </h2>
                                    
                                <?php the_archive_description(); ?>
                                
                            </div>

                        </header><!-- .page-header -->

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

                                        <?php the_posts_navigation(); ?>

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
