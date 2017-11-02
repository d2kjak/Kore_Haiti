<?php
/**
 * Template part for displaying results in blog pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Juno
 */
?>

<div class="blog-roll-item">

    <article data-link="<?php echo esc_url( get_the_permalink( get_the_ID() ) ); ?>" id="post-<?php echo esc_attr( get_the_ID() ); ?>" <?php post_class(); ?>>

        <?php if ( has_post_thumbnail() ) : ?>
            <div class="image">
                <a href="<?php echo esc_url( get_the_permalink() ); ?>">
                    <?php the_post_thumbnail( 'medium' ); ?>
                </a>
            </div>
        <?php endif; ?>
        
        <div class="inner">

            <?php if ( get_theme_mod( 'juno_blog_show_category', 'show' ) == 'show' ) : ?>  
                <h6 class="post-category">
                    <?php 
                    $categories = get_the_category();
                    if ( ! empty( $categories ) ) : ?>

                        <a href="<?php echo esc_url( get_category_link( $categories[0]->term_id ) ); ?>">
                            <?php echo esc_html( $categories[0]->name ); ?>
                        </a>

                    <?php endif; ?>
                </h6>
            <?php endif; ?>
            
            <h3 class="post-title">
                <a href="<?php echo esc_url( get_the_permalink() ); ?>">
                    <?php echo esc_html( get_the_title() ); ?>
                </a>
            </h3>
            
            <hr>
            
            <?php $words = get_theme_mod( 'juno_blog_trim_words_value', 50 ); ?>
            
            <?php if ( $words > 0 ) : ?>
                <div class="post-content">
                    <?php echo esc_html( wp_trim_words( wp_strip_all_tags( get_the_content() ), $words ) ); ?>
                </div>
            <?php endif; ?>

            <?php if ( get_theme_mod( 'juno_blog_show_date', 'show' ) == 'show' || get_theme_mod( 'juno_blog_show_author', 'show' ) == 'show' ) : ?>
                <h5 class="post-meta">
                    <?php echo get_theme_mod( 'juno_blog_show_date', 'show' ) == 'show' ? esc_html( juno_posted_on() ) : ''; ?>
                    <?php if ( get_theme_mod( 'juno_blog_show_author', 'show' ) == 'show' ) : ?>    
                        <?php _e( 'by', 'juno' ); ?> <span class="post-author"><?php the_author_posts_link(); ?></span>
                    <?php endif; ?>
                </h5>
            <?php endif; ?>
            
            <div class="image-corner"></div>
            <a href="<?php the_permalink() ?>">
                <i class="<?php echo esc_attr( get_theme_mod( 'juno_blog_hover_tab_icon', 'fa fa-share' ) ); ?> icon"></i>
            </a>
            
        </div>

    </article>

</div>