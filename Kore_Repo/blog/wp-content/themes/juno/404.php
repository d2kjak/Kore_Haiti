<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Juno
 */

get_header(); ?>

    <div id="primary" class="content-area">

        <main id="main" class="site-main" role="main">
        
            <div id="single-page-container" class="container">

                <div class="row">

                    <div id="error-page-wrapper" class="col-md-12">
                    
			<section class="error-404 not-found">
                            
				<header class="page-header">
					
                                        <h1 class="page-title">
                                            <?php echo esc_html( get_theme_mod( 'juno_error_page_heading', __( 'Oops!', 'juno' ) ) ); ?>
                                        </h1>
                                        
                                        <p class="page-subtitle">
                                            <?php echo esc_html( get_theme_mod( 'juno_error_page_subheading', __( 'It looks like nothing was found at this location, please check the address and try again!', 'juno' ) ) ); ?>
                                        </p>
                                        
                                        <?php get_search_form(); ?>
                                        
                                </header><!-- .page-header -->

				
			</section><!-- .error-404 -->

                        </div>
                    </div>
                
                </div>
                        
        </main><!-- #main -->
        
    </div><!-- #primary -->

<?php
get_footer();
