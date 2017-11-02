<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                                    <?php printf( esc_html__( 'Search Results for: %s', 'juno' ), '<span>' . get_search_query() . '</span>' ); ?>
                                </h2>

                            </div>
                            
                            <?php get_search_form(); ?>

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
