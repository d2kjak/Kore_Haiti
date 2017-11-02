<?php
/**
 * Template part for displaying single posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Juno
 */

?>

<div id="single-post-container" class="container">

    <div class="row">

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php if ( is_active_sidebar( 'sidebar-left' ) ) : ?>
                <div class="sidebar-container col-sm-3">

                    <?php get_sidebar( 'left' ); ?>

                </div>
            <?php endif; ?>
            
            <div class="col-sm-<?php echo esc_attr( juno_main_width() ); ?>">
                
                <div class="row">
            
                    <div class="col-sm-12">
                        
                        <?php 
    
                            if ( has_post_thumbnail() ) :
                        
                                $position = '50%';

                                switch ( get_post_meta( get_the_ID(), 'banner_meta_img_align', true ) ) :

                                    case 'top' :
                                        $position = '0%';
                                        break;

                                    case 'bottom' :
                                        $position = '100%';
                                        break;

                                    default :
                                        $position = '50%';

                                endswitch; 
                                
                            endif;

                        ?>

                        <?php if ( has_post_thumbnail() ) : ?>
                
                            <div id="single-image-container" style="
                                background-image: url(<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'large' ) ); ?>); 
                                height: <?php echo get_post_meta( get_the_ID(), 'banner_meta_height', true ) ? esc_attr( get_post_meta( get_the_ID(), 'banner_meta_height', true ) ) : esc_attr( '500' ); ?>px;
                                background-position: 50% <?php echo esc_attr( $position ); ?>; 
                            ">

                        <?php else : ?>

                            <div id="single-image-container" class="no-header-img">

                        <?php endif; ?>

                            <div id="single-title-box" class="<?php echo has_post_thumbnail() ? '' : esc_attr( 'no-header-img' ); ?>">

                                <h2 class="entry-title"><?php the_title(); ?></h2>

                                <h6 class="post-meta">
                                    <?php echo get_theme_mod( 'juno_single_show_date', 'show' ) == 'show' ? esc_html( juno_posted_on() ) : ''; ?>
                                    <?php if ( get_theme_mod( 'juno_single_show_author', 'show' ) == 'show' ) : ?>    
                                        <?php _e( 'by', 'juno' ); ?> <span class="post-author"><?php the_author_posts_link(); ?></span>
                                    <?php endif; ?>
                                </h6>

                            </div>

                        </div>

                    </div>

                    <div class="col-sm-12">

                        <div class="entry-content">

                            <?php the_content(); ?>

                            <?php
                                wp_link_pages( array(
                                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'juno' ),
                                    'after'  => '</div>',
                                ) );
                            ?>

                        </div><!-- .entry-content -->

                        <?php the_post_navigation(); ?>

                    </div>
                    
                    <div class="col-sm-12">
                        
                        <?php 
                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                            endif;
                        ?>
                        
                    </div>
            
                </div>
                    
            </div>
            
            <?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
                <div class="sidebar-container col-sm-3">

                    <?php get_sidebar( 'right' ); ?>

                </div>
            <?php endif; ?>
            
        </article>
        
    </div>
    
</div>
