<?php

/**
 * Enqueue scripts and styles.
 */
function juno_scripts() {
    
    wp_enqueue_style( 'juno-style', get_stylesheet_uri() );

    // Load Fonts from array
    $fonts = juno_fonts();

    // Primary Font Enqueue
    if( array_key_exists ( get_theme_mod( 'juno_font_primary', 'Montserrat, sans-serif'), $fonts ) ) :
        wp_enqueue_style('google-font-primary', '//fonts.googleapis.com/css?family=' . esc_attr( $fonts[ get_theme_mod( 'juno_font_primary', 'Montserrat, sans-serif' ) ] ), array(), JUNO_VERSION );
    endif;

    // Body Font Enqueue
    if( array_key_exists ( get_theme_mod( 'juno_font_body', 'Lato, sans-serif'), $fonts ) ) :
        wp_enqueue_style('google-font-body', '//fonts.googleapis.com/css?family=' . esc_attr( $fonts[ get_theme_mod( 'juno_font_body', 'Lato, sans-serif' ) ] ), array(), JUNO_VERSION );
    endif;
    
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/inc/css/bootstrap.min.css', array(), JUNO_VERSION );
    wp_enqueue_style( 'animate', get_template_directory_uri() . '/inc/css/animate.min.css', array(), JUNO_VERSION );
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/inc/css/font-awesome.min.css', array(), JUNO_VERSION );
    wp_enqueue_style( 'slicknav', get_template_directory_uri() . '/inc/css/slicknav.min.css', array(), JUNO_VERSION );
    wp_enqueue_style( 'camera', get_template_directory_uri() . '/inc/css/camera.css', array(), JUNO_VERSION );
    wp_enqueue_style( 'juno-main-style', get_template_directory_uri() . '/inc/css/style.css', array(), JUNO_VERSION );

    wp_enqueue_script( 'jquery-easing', get_template_directory_uri() . '/inc/js/jquery.easing.1.3.js', array('jquery'), JUNO_VERSION, true );
    wp_enqueue_script( 'jquery-mobile', get_template_directory_uri() . '/inc/js/jquery.mobile.custom.min.js', array('jquery'), JUNO_VERSION, true );
    wp_enqueue_script( 'camera', get_template_directory_uri() . '/inc/js/camera.min.js', array('jquery', 'jquery-ui-core'), JUNO_VERSION, true );
    wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/inc/js/jquery.slicknav.min.js', array('jquery'), JUNO_VERSION, true );
    wp_enqueue_script( 'juno-main-script', get_template_directory_uri() . '/inc/js/custom.js', array('jquery', 'jquery-masonry'), JUNO_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
    
}
add_action( 'wp_enqueue_scripts', 'juno_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function juno_widgets_init() {
    
    register_sidebar( array(
            'name'          => esc_html__( 'Left Sidebar', 'juno' ),
            'id'            => 'sidebar-left',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-12"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
            'name'          => esc_html__( 'Right Sidebar', 'juno' ),
            'id'            => 'sidebar-right',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-12"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
            'name'          => esc_html__( 'Featured Post Section', 'juno' ),
            'id'            => 'sidebar-featured',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-6"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h6 class="feature-title">',
            'after_title'   => '</h6>',
    ) );

    register_sidebar( array(
            'name'          => esc_html__( 'Color Banner', 'juno' ),
            'id'            => 'sidebar-color',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-12"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
            'name'          => esc_html__( 'Footer', 'juno' ),
            'id'            => 'sidebar-footer',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-4"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
            'name'          => esc_html__( 'Homepage A', 'juno' ),
            'id'            => 'sidebar-front-a',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-4"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );

    register_sidebar( array(
            'name'          => esc_html__( 'Homepage B', 'juno' ),
            'id'            => 'sidebar-front-b',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-4"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );
    
    register_sidebar( array(
            'name'          => esc_html__( 'Homepage C', 'juno' ),
            'id'            => 'sidebar-front-c',
            'description'   => esc_html__( 'Add widgets here.', 'juno' ),
            'before_widget' => '<div class="col-sm-4"><section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section></div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
    ) );

}
add_action( 'widgets_init', 'juno_widgets_init' );

/**
 * Inject custom CSS in the header to handle certain theme mods.
 * 
 */
function juno_custom_css() { ?>

    <style type="text/css">
        
        /* ---------- FONT SIZES ---------- */
        
        body {
            font-size: <?php echo intval( get_theme_mod( 'juno_font_body_size', 14 ) ); ?>px; 
        }
                
        #site-branding a {
            font-size: <?php echo intval( get_theme_mod( 'juno_title_font_size', 36) ); ?>px; 
        }
        
        ul#primary-menu > li > a,
        .slicknav_nav a {
            font-size: <?php echo intval( get_theme_mod( 'juno_nav_menu_font_size', 10 ) ); ?>px; 
        }
        
        header#masthead img.custom-logo { 
            max-height: <?php echo intval( get_theme_mod( 'juno_custom_logo_height', 300 ) ); ?>px;
        }
        
        /* ---------- FONT FAMILIES ---------- */
        
        h1,h2,h3,h4,h5,h6,
        a.accent-button,
        #site-branding a,
        ul#primary-menu > li.menu-item,
        .slicknav_nav a,
        .camera_caption a,
        #subscribe-module input[type="submit"],
        #single-page-container nav.navigation.post-navigation a,
        #single-post-container nav.navigation.post-navigation a,
        #comments p.logged-in-as, #comments p.logged-in-as a,
        #comments p.comment-form-comment label,
        #comments input[type="submit"],
        input.search-submit,
        .error-404 input.search-submit,
        #comments .comment-body .reply,
        span.edit-link a {
            font-family: <?php echo esc_attr( get_theme_mod( 'juno_font_primary', 'Montserrat, sans-serif' ) ); ?>;
        }
        
        body {
            font-family: <?php echo esc_attr( get_theme_mod( 'juno_font_body', 'Lato, sans-serif' ) ); ?>;
        }
        
        /* ---------- THEME COLORS ---------- */
        
        <?php $skin = juno_get_skin_colors(); ?>
        
        /* --- JUMBOTRON TINT --- */
        #jumbotron-section .camera_overlayer {
            background-color: rgba(0,0,0,<?php echo esc_attr( get_theme_mod( 'juno_slider_dark_tint', .5 ) ); ?>);
        }
        
        /* --- DARK COLOR --- */
        header#masthead,
        .camera_wrap .camera_pag .camera_pag_ul li.cameracurrent > span,
        footer#colophon #footer-sidebar-wrapper,
        footer #footer-widget-area .widget_categories ul li a,
        #subscribe-module .widget_calendar table th {
            background-color: <?php echo esc_attr( $skin[ 'dark' ] ); ?>;
        }
        ul.slicknav_nav ul.sub-menu li a,
        ul#primary-menu > li.menu-item > ul.sub-menu > li a,
        ul#primary-menu > li.menu-item.current-menu-item > a,
        #about-section #about-primary,
        .juno-blog-content .blog-roll-item .inner h3.post-title a,
        #single-page-container nav.navigation.post-navigation a,
        #single-post-container nav.navigation.post-navigation a,
        #comments p.logged-in-as, #comments p.logged-in-as a,
        footer .widget_calendar table td,
        #subscribe-module .widget_calendar table caption,
        #subscribe-module .widget_calendar table td {
            color: <?php echo esc_attr( $skin[ 'dark' ] ); ?>;
        }
        .widgettitle,
        .widget-title,
        #front-page-blog div#frontpage-page .entry-title,
        .front-page-widget h6.feature-title,
        .sidebar-container h6.feature-title {
            border-bottom: #333;
        }
        
        footer .widget_calendar table th,
        footer .widget_calendar table td {
            border-color: <?php echo esc_attr( $skin[ 'dark' ] ); ?>;
        }
        
        /* --- PRIMARY COLOR --- */
        div#site-navigation,
        .camera_wrap .camera_pag .camera_pag_ul li:hover > span,
        div#subscribe-module,
        #blog-title-box,
        #comments input[type="submit"],
        div#social-module,
        div.social-bubble,
        .pagination-links .page-numbers.current,
        #subscribe-module .widget_categories ul li a,
        .widget_calendar table th,
        div#single-title-box.no-header-img,
        .widget_juno-recent-articles-widget .related-article-title,
        nav.posts-navigation .nav-links a,
        #comments .comment-body .reply {
            background-color: <?php echo esc_attr( $skin[ 'primary' ] ); ?>;
        }
        ul#primary-menu > li.menu-item > ul.sub-menu > li a:hover,
        .juno-blog-content .blog-roll-item .post-category a,
        div.social-bubble:hover i,
        div#footer-widget-area a,
        .widget_calendar table a,
        .widget_calendar caption,
        footer .widget_calendar caption,
        .widget a:hover {
            color: <?php echo esc_attr( $skin[ 'primary' ] ); ?>;
        }
        footer#colophon #footer-sidebar-wrapper {
            border-top: 15px solid <?php echo esc_attr( $skin[ 'primary' ] ); ?>;
        }
        div#single-title-box {
            background-color: <?php echo esc_attr( juno_hex2rgba( $skin[ 'primary' ], 0.75 ) ); ?>;
        }
        #subscribe-module .widget_calendar table th,
        #subscribe-module .widget_calendar table td {
            border-color: <?php echo esc_attr( $skin[ 'primary' ] ); ?>;
        }
        
        /* --- ACCENT COLOR --- */
        a.accent-button,
        #subscribe-module input[type="submit"],
        input.search-submit,
        .error-404 input.search-submit {
            background-color: <?php echo esc_attr( $skin[ 'accent' ] ); ?>;
        }
        input.search-field,
        .error-404 input.search-field,
        .error-404 input.search-submit {
            border: thin solid <?php echo esc_attr( $skin[ 'accent' ] ); ?>;
        }
        input.search-submit {
            border: thin solid <?php echo esc_attr( $skin[ 'accent' ] ); ?> !important;
        }
        hr.accent-divider {
            border-color: <?php echo esc_attr( $skin[ 'accent' ] ); ?>;
        }
    
        /* --- JUMBOTRON TITLE --- */
        #jumbotron-section .camera_caption a {
            font-size: <?php echo intval( get_theme_mod( 'juno_jumbotron_title_size', 28 ) ); ?>px;
            color: <?php echo esc_attr( get_theme_mod( 'juno_jumbotron_title_color', '#ffffff' ) ); ?>; 
        }

        /* --- JUMBOTRON CONTENT --- */
        #jumbotron-section .camera_caption p.slide-content {
            font-size: <?php echo intval( get_theme_mod( 'juno_jumbotron_content_size', 18 ) ); ?>px;
        }
 
        /* --- BLOG ROLL HOVER TAB COLOR --- */
        .juno-blog-content .blog-roll-item .inner .image-corner {
            border-color: transparent transparent <?php echo esc_attr( get_theme_mod( 'juno_blog_hover_tab_color', '#ffc859' ) ); ?> transparent;
        }
        .juno-blog-content .blog-roll-item .inner i.icon {
            color: <?php echo esc_attr( get_theme_mod( 'juno_blog_hover_icon_color', '#ffffff' ) ); ?>;
        }

        /* --- BLOG ROLL MASONRY COLUMNS --- */
        .grid-sizer,
        .blog-roll-item { 
            width: <?php echo get_theme_mod( 'juno_blog_columns', '3cols' ) == '2cols' ? esc_attr( '48%' ) : esc_attr( '32%' ); ?>; 
        }
        
        /* --- BLOG ROLL TYPOGRAPHY  --- */
        .juno-blog-content .blog-roll-item .inner h3.post-title { 
            font-size: <?php echo intval( get_theme_mod( 'juno_blog_item_title_font_size', 16 ) ); ?>px;
        }
        .blog-roll-item .post-content { 
            font-size: <?php echo intval( get_theme_mod( 'juno_blog_item_content_font_size', 14 ) ); ?>px;
        }
        .juno-blog-content .blog-roll-item .post-category a,
        .blog-roll-item h5.post-meta { 
            font-size: <?php echo intval( get_theme_mod( 'juno_blog_item_meta_font_size', 12 ) ); ?>px;
        }
        
        /* --- SINGLE POST TYPOGRAPHY  --- */
        div#single-title-box .entry-title { 
            font-size: <?php echo intval( get_theme_mod( 'juno_single_post_title_font_size', 24 ) ); ?>px;
        }
        #single-post-container .entry-content,
        #single-page-container .entry-content { 
            font-size: <?php echo intval( get_theme_mod( 'juno_single_post_content_font_size', 14 ) ); ?>px;
        }
        div#single-title-box .post-meta { 
            font-size: <?php echo intval( get_theme_mod( 'juno_single_post_meta_font_size', 10 ) ); ?>px;
        }
        
        
        
        
    </style>
    
    <?php 
    
}
add_action('wp_head', 'juno_custom_css');

/**
 * Returns all available fonts as an array
 * 
 * @return array of fonts
 */
function juno_fonts(){
    
    $font_family_array = array(
        
        'Abel, sans-serif'                                  => 'Abel',
        'Arvo, serif'                                       => 'Arvo:400,400i,700',
        'Bangers, cursive'                                  => 'Bangers',
        'Courgette, cursive'                                => 'Courgette',
        'Domine, serif'                                     => 'Domine',
        'Dosis, sans-serif'                                 => 'Dosis:200,300,400',
        'Droid Sans, sans-serif'                            => 'Droid+Sans:400,700',
        'Economica, sans-serif'                             => 'Economica:400,700',
        'Josefin Sans, sans-serif'                          => 'Josefin+Sans:300,400,600,700',
        'Itim, cursive'                                     => 'Itim',
        'Lato, sans-serif'                                  => 'Lato:100,300,400,700,900,300italic,400italic',
        'Lobster Two, cursive'                              => 'Lobster+Two',
        'Lora, serif'                                       => 'Lora',
        'Lilita One, cursive'                               => 'Lilita+One',
        'Montserrat, sans-serif'                            => 'Montserrat:400,700',
        'Noto Serif, serif'                                 => 'Noto+Serif',
        'Old Standard TT, serif'                            => 'Old+Standard+TT:400,400i,700',
        'Open Sans, sans-serif'                             => 'Open Sans',
        'Open Sans Condensed, sans-serif'                   => 'Open+Sans+Condensed:300,300i,700',
        'Orbitron, sans-serif'                              => 'Orbitron',
        'Oswald, sans-serif'                                => 'Oswald:300,400',
        'Poiret One, cursive'                               => 'Poiret+One',
        'PT Sans Narrow, sans-serif'                        => 'PT+Sans+Narrow',
        'Rajdhani, sans-serif'                              => 'Rajdhani:300,400,500,600',
        'Raleway, sans-serif'                               => 'Raleway:200,300,400,500,700',
        'Roboto, sans-serif'                                => 'Roboto:100,300,400,500',
        'Roboto Condensed, sans-serif'                      => 'Roboto+Condensed:400,300,700',
        'Shadows Into Light, cursive'                       => 'Shadows+Into+Light',
        'Shrikhand, cursive'                                => 'Shrikhand',
        'Source Sans Pro, sans-serif'                       => 'Source+Sans+Pro:200,400,600',
        'Teko, sans-serif'                                  => 'Teko:300,400,600',
        'Titillium Web, sans-serif'                         => 'Titillium+Web:400,200,300,600,700,200italic,300italic,400italic,600italic,700italic',
        'Ubuntu, sans-serif'                                => 'Ubuntu',
        'Vollkorn, serif'                                   => 'Vollkorn:400,400i,700',
        'Voltaire, sans-serif'                              => 'Voltaire',
        
    );
    
    return $font_family_array;
}

/**
 * Returns all posts as an array.
 * Pass true to include Pages
 * 
 * @param boolean $include_pages
 * @return array of posts
 */
function juno_all_posts_array( $include_pages = false ) {
    
    $posts = get_posts( array(
        'post_type'        => $include_pages ? array( 'post', 'page' ) : 'post',
        'posts_per_page'   => -1,
        'post_status'      => 'publish',
        'orderby'          => 'title',
        'order'            => 'ASC',
    ));

    $posts_array = array(
        'none'  => __( 'None', 'juno' ),
    );
    
    foreach ( $posts as $post ) :
        
        if ( ! empty( $post->ID ) ) :
            $posts_array[ $post->ID ] = $post->post_title;
        endif;
        
    endforeach;
    
    return $posts_array;
    
}

/**
 * Render the jumbotron.
 */
function juno_render_jumbotron() { ?>
        
    <?php 
        if ( get_theme_mod( 'juno_jumbotron_post_1', null ) == 'none' ) :
            if ( get_theme_mod( 'juno_jumbotron_post_2', null ) == null || get_theme_mod( 'juno_jumbotron_post_2', null ) == 'none' ) :
                if ( get_theme_mod( 'juno_jumbotron_post_3', null ) == null || get_theme_mod( 'juno_jumbotron_post_3', null ) == 'none' ) :
                    return;
                endif;
            endif;
        endif;
    ?>
        
    <div id="jumbotron-section" class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">
                
                <div id="camera_slider" class="camera_wrap">

                    <!-- Slider Post #1 -->

                        <?php if ( get_theme_mod( 'juno_jumbotron_post_1', null ) != 'none' ) : ?>
                    
                            <?php if ( get_theme_mod( 'juno_jumbotron_post_1', null ) == null ) : ?>
                    
                                <div class="camera_lime_skin" data-src="<?php echo esc_url( get_template_directory_uri() . '/inc/images/jumbotron.jpg' ); ?>">
                                    <div class="camera_caption wow fadeIn">
                                        <a href="#">
                                            <?php bloginfo( 'name' ); ?>
                                        </a>
                                    </div>
                                </div>

                            <?php else : ?>
                    
                                <?php $slider_post_1 = get_post( get_theme_mod( 'juno_jumbotron_post_1', null ) ); ?>
                    
                                <div class="camera_lime_skin" data-src="<?php echo has_post_thumbnail( $slider_post_1 ) ? esc_url( get_the_post_thumbnail_url( $slider_post_1 ) ) : esc_url( get_template_directory_uri() . '/inc/images/jumbotron.jpg' ); ?>">
                                    <div class="camera_caption wow fadeIn">
                                        <a href="<?php echo esc_url( get_the_permalink( $slider_post_1 ) ); ?>">
                                            <?php echo esc_html( get_the_title( $slider_post_1 ) ); ?>
                                        </a>
                                        <?php if ( get_theme_mod( 'juno_jumbotron_content_trim_value', 50 ) > 0 ) : ?>
                                            <p class="slide-content">
                                                <?php echo wp_trim_words( wp_strip_all_tags ( strip_shortcodes( $slider_post_1->post_content ) ), get_theme_mod( 'juno_jumbotron_content_trim_value', 50 ) ); ?>
                                            <p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                            <?php endif; ?>
                    
                        <?php endif; ?>

                    <!-- End of Slider Post #1 -->

                    <!-- Slider Post #2 -->

                        <?php if ( get_theme_mod( 'juno_jumbotron_post_2', null ) != 'none' && get_theme_mod( 'juno_jumbotron_post_2', null ) != null ) : ?>
                    
                                <?php $slider_post_2 = get_post( get_theme_mod( 'juno_jumbotron_post_2', null ) ); ?>
                    
                                <div class="camera_lime_skin" data-src="<?php echo has_post_thumbnail( $slider_post_2 ) ? esc_url( get_the_post_thumbnail_url( $slider_post_2 ) ) : esc_url( get_template_directory_uri() . '/inc/images/jumbotron.jpg' ); ?>">
                                    <div class="camera_caption wow fadeIn">
                                        <a href="<?php echo esc_url( get_the_permalink( $slider_post_2 ) ); ?>">
                                            <?php echo esc_html( get_the_title( $slider_post_2 ) ); ?>
                                        </a>
                                        <?php if ( get_theme_mod( 'juno_jumbotron_content_trim_value', 50 ) > 0 ) : ?>
                                            <p class="slide-content">
                                                <?php echo wp_trim_words( wp_strip_all_tags ( strip_shortcodes( $slider_post_2->post_content ) ), get_theme_mod( 'juno_jumbotron_content_trim_value', 50 ) ); ?>
                                            <p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                        <?php endif; ?>

                    <!-- End of Slider Post #2 -->
                    
                    <!-- Slider Post #3 -->

                        <?php if ( get_theme_mod( 'juno_jumbotron_post_3', null ) != 'none' && get_theme_mod( 'juno_jumbotron_post_3', null ) != null ) : ?>
                    
                                <?php $slider_post_3 = get_post( get_theme_mod( 'juno_jumbotron_post_3', null ) ); ?>
                    
                                <div class="camera_lime_skin" data-src="<?php echo has_post_thumbnail( $slider_post_3 ) ? esc_url( get_the_post_thumbnail_url( $slider_post_3 ) ) : esc_url( get_template_directory_uri() . '/inc/images/jumbotron.jpg' ); ?>">
                                    <div class="camera_caption wow fadeIn">
                                        <a href="<?php echo esc_url( get_the_permalink( $slider_post_3 ) ); ?>">
                                            <?php echo esc_html( get_the_title( $slider_post_3 ) ); ?>
                                        </a>
                                        <?php if ( get_theme_mod( 'juno_jumbotron_content_trim_value', 50 ) > 0 ) : ?>
                                            <p class="slide-content">
                                                <?php echo wp_trim_words( wp_strip_all_tags ( strip_shortcodes( $slider_post_3->post_content ) ), get_theme_mod( 'juno_jumbotron_content_trim_value', 50 ) ); ?>
                                            <p>
                                        <?php endif; ?>
                                    </div>
                                </div>

                        <?php endif; ?>

                    <!-- End of Slider Post #3 -->
                    
                    
                </div>
                
            </div>
            
        </div>
        
    </div>

<?php }
add_action( 'juno_jumbotron', 'juno_render_jumbotron' );

/**
 * Render the Featured Post section.
 */
function juno_render_featured_post_section() { ?>
    
    <div id="about-section" class="container">
        
        <div class="row">
            
            <div class="col-sm-<?php echo is_active_sidebar( 'sidebar-featured' ) ? esc_attr( '5' ) : esc_attr( '12' ); ?>">
                
                <?php $about_post = get_theme_mod( 'juno_featured_post_post', null ) == null ? null : get_post( get_theme_mod( 'juno_featured_post_post', null ) ); ?>
                
                <h2 id="about-primary">
                    
                    <?php if( is_null( $about_post ) ) : ?>
                        <?php if( current_user_can( 'edit_theme_options') ) : ?>
                            <?php echo esc_html__( 'Users can select any Post or Page, and the title will be output here.', 'juno' ); ?>
                        <?php else : ?>
                            <?php echo get_bloginfo( 'name' ); ?>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php echo esc_html( get_the_title( $about_post ) ); ?>
                    <?php endif; ?>
                </h2>
                
                <hr class="accent-divider">
                
                <p id="about-secondary">
                    
                    <?php if( is_null( $about_post ) ) : ?>
                        <?php if( current_user_can( 'edit_theme_options') ) : ?>
                            <?php echo esc_html__( 'The content of the selected Post or Page will be displayed here.', 'juno' ); ?>
                        <?php else : ?>
                            <?php echo get_bloginfo( 'description' ); ?>
                        <?php endif; ?>
                    <?php else : ?>
                        <?php echo esc_html( $about_post->post_content ); ?>
                    <?php endif; ?>
                    
                </p>
                
                <?php if ( get_theme_mod( 'juno_featured_post_section_button_label', __( 'Show Me More', 'juno' ) ) != '' ) : ?>
                
                    <a class="accent-button" href="<?php echo esc_url( get_the_permalink( $about_post ) ); ?>">
                        <?php echo esc_html( get_theme_mod( 'juno_featured_post_section_button_label', __( 'Continue reading', 'juno' ) ) ); ?>
                    </a>
                
                <?php endif; ?>
                
            </div>
            
            <?php if ( is_active_sidebar( 'sidebar-featured' ) ) : ?>
                
                <div class="col-sm-6 col-sm-offset-1">

                    <?php get_sidebar( 'featured' ); ?>
                    
                </div>
                
            <?php endif; ?>
                
        </div>
        
    </div>

<?php }
add_action( 'juno_featured_post_section', 'juno_render_featured_post_section' );

/**
 * Render the homepage color banner widget area.
 */
function juno_render_color_banner_section() { ?>
    
    <?php if ( is_active_sidebar( 'sidebar-color' ) ) : ?>
    
        <div id="subscribe-module" class="container-fluid">

            <div class="row">

                <div class="col-sm-12">

                    <div class="container">

                        <div class="row">

                            <?php get_sidebar( 'color' ); ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    
    <?php else : ?>

        <div id="subscribe-module" class="container-fluid">

            <div class="row">

                <div class="col-sm-12">

                    <div class="container">

                        <div class="row">

                            <?php if( current_user_can( 'edit_theme_options' ) ) :  ?>
                            <h6 class="default-text">
                                <?php _e( 'Colored Widget Area', 'juno' ); ?>
                            </h6>
                            <div class="textwidget">
                                <p class="default-text"><?php _e( 'You can enable/disable this widget area from Customizer - Frontpage - Colored Widget Area. This is a widget placeholder, and you can add any widget to it from Customizer - Widgets.', 'juno' ); ?></p>
                            </div>
                            <?php else : ?>
                                <h6 class="default-text">
                                    <?php echo get_bloginfo( 'name' ); ?>
                                </h6>
                                <div class="textwidget">
                                    <p class="default-text"><?php echo get_bloginfo( 'description' ); ?></p>
                                </div>
                            <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    
        
    <?php endif; ?>
    
<?php }
add_action( 'juno_color_banner', 'juno_render_color_banner_section' );

/**
 * Render the homepage widget areas.
 */
function juno_render_homepage_widget_areas() { ?>
    
    <!-- Homepage Area A -->
    <?php if ( get_theme_mod( 'juno_toggle_widget_area_a', 'show' ) == 'show' ) : ?>
    
        <?php if ( ! is_active_sidebar( 'sidebar-front-a' ) ) : ?>

            <div class="container-fluid area-a">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        
                        <div class="container">
                            
                            <section class="front-page-widget area-a">

                                <div class="row">

                                    <div class="col-sm-12">
                                        <?php if( current_user_can( 'edit_theme_options' ) ) :  ?>
                                        <h6 class="default-text">
                                            <?php _e( 'Homepage A Widget Area', 'juno' ); ?>
                                        </h6>
                                        <div class="textwidget">
                                            <p class="default-text"><?php _e( 'You can enable/disable this widget area from Customizer - Frontpage - Homepage Widget A. This is a widget placeholder, and you can add any widget to it from Customizer - Widgets.', 'juno' ); ?></p>
                                        </div>
                                        <?php else : ?>
                                            <h6 class="default-text">
                                                <?php echo get_bloginfo( 'name' ); ?>
                                            </h6>
                                            <div class="textwidget">
                                                <p class="default-text"><?php echo get_bloginfo( 'description' ); ?></p>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>

                            </section>
                            
                        </div>
                        
                    </div>
                    
                </div>
    
            </div>

        <?php else : ?>

            <?php get_sidebar( 'front_a' ); ?>

        <?php endif; ?>
    
    <?php endif; ?>

    <!-- Homepage Area B -->
    <?php if ( get_theme_mod( 'juno_toggle_widget_area_b', 'show' ) == 'show' ) : ?>
    
        <?php if ( ! is_active_sidebar( 'sidebar-front-b' ) ) : ?>

            <div class="container-fluid area-b">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        
                        <div class="container">
                            
                            <section class="front-page-widget area-b">

                                <div class="row">

                                    <div class="col-sm-12">

                                        <?php if( current_user_can( 'edit_theme_options' ) ) :  ?>
                                        <h6 class="default-text">
                                            <?php _e( 'Homepage B Widget Area', 'juno' ); ?>
                                        </h6>
                                        <div class="textwidget">
                                            <p class="default-text"><?php _e( 'You can enable/disable this widget area from Customizer - Frontpage - Homepage Widget B. This is a widget placeholder, and you can add any widget to it from Customizer - Widgets.', 'juno' ); ?></p>
                                        </div>
                                        <?php else : ?>
                                            <h6 class="default-text">
                                                <?php echo get_bloginfo( 'name' ); ?>
                                            </h6>
                                            <div class="textwidget">
                                                <p class="default-text"><?php echo get_bloginfo( 'description' ); ?></p>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>

                            </section>
                            
                        </div>
                        
                    </div>
                    
                </div>
    
            </div>

        <?php else : ?>

            <?php get_sidebar( 'front_b' ); ?>

        <?php endif; ?>
    
    <?php endif; ?>
    
    <!-- Homepage Area C -->
    <?php if ( get_theme_mod( 'juno_toggle_widget_area_c', 'show' ) == 'show' ) : ?>
    
        <?php if ( ! is_active_sidebar( 'sidebar-front-c' ) ) : ?>

            <div class="container-fluid area-c">
                
                <div class="row">
                    
                    <div class="col-sm-12">
                        
                        <div class="container">
                            
                            <section class="front-page-widget area-c">

                                <div class="row">

                                    <div class="col-sm-12">

                                        <?php if( current_user_can( 'edit_theme_options' ) ) :  ?>
                                        <h6 class="default-text">
                                            <?php _e( 'Homepage C Widget Area', 'juno' ); ?>
                                        </h6>
                                        <div class="textwidget">
                                            <p class="default-text"><?php _e( 'You can enable/disable this widget area from Customizer - Frontpage - Homepage Widget C. This is a widget placeholder, and you can add any widget to it from Customizer - Widgets.', 'juno' ); ?></p>
                                        </div>
                                        <?php else : ?>
                                            <h6 class="default-text">
                                                <?php echo get_bloginfo( 'name' ); ?>
                                            </h6>
                                            <div class="textwidget">
                                                <p class="default-text"><?php echo get_bloginfo( 'description' ); ?></p>
                                            </div>
                                        <?php endif; ?>

                                    </div>

                                </div>

                            </section>
                            
                        </div>
                        
                    </div>
                    
                </div>
    
            </div>

        <?php else : ?>

            <?php get_sidebar( 'front_c' ); ?>

        <?php endif; ?>
    
    <?php endif; ?>

<?php }
add_action( 'juno_homepage_widget_areas', 'juno_render_homepage_widget_areas' );

/**
 * Render the homepage social bararea.
 */
function juno_render_social_module() { ?>
    
    <div id="social-module" class="container-fluid">
        
        <div class="row">
            
            <div class="col-sm-12">
                
                <div class="container">
                    
                    <div class="row">
            
                        <div class="col-sm-12">

                            <?php if ( get_theme_mod( 'juno_social_message_toggle', 'show' ) == 'show' ) : ?>
                                <div id="social-message">
                                    <?php $social_output = current_user_can( 'edit_theme_options' ) ? __( 'Social links section', 'juno' ) : ''; ?>
                                    <?php echo esc_html( get_theme_mod( 'juno_social_message', $social_output ) ); ?>
                                </div>
                            <?php endif; ?>
                            
                            <div id="social-container">

                                <?php if ( get_theme_mod( 'juno_social_icon_facebook_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_facebook_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-facebook"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_twitter_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_twitter_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-twitter"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_google_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_google_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-google-plus"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_linkedin_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_linkedin_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-linkedin"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_behance_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_behance_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-behance"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_instagram_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_instagram_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-instagram"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_pinterest_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_pinterest_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-pinterest-p"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_youtube_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_youtube_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-youtube-play"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <?php if ( get_theme_mod( 'juno_social_icon_vimeo_url', '' ) != '' ) : ?>
                                    <a href="<?php echo esc_url( get_theme_mod( 'juno_social_icon_vimeo_url', '' ) ); ?>">
                                        <div class="social-bubble">
                                            <i class="fa fa-vimeo"></i>
                                        </div>
                                    </a>
                                <?php endif; ?>

                            </div>
                            
                        </div>

                    </div>
                    
                </div>
                
            </div>
            
        </div>
       
    </div>

<?php }
add_action( 'juno_social', 'juno_render_social_module' );

function juno_render_footer() { ?>
    
    <div id="footer-sidebar-wrapper" class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="container">
                    
                    <div class="row">

                        <?php if ( is_active_sidebar( 'sidebar-footer' ) ) : ?>
                            <div class="col-md-12">

                                <div id="footer-widget-area">

                                    <?php get_sidebar( 'footer' ); ?>

                                </div>

                            </div>
                        <?php endif; ?>
                       
                    </div>
                    
                </div>
                
            </div>
    
        </div>
            
    </div>
    
    <div id="footer-branding-wrapper" class="container-fluid">

        <div class="row">

            <div class="col-md-12">

                <div class="container">
                    
                    <div class="row">
                        
                        <div class="col-md-12">
                            
                            <div id="footer-branding">

                                <?php if ( get_theme_mod( 'juno_footer_copyright_area', get_bloginfo( 'name' ) ) != '' ) : ?>
                                    <span class="site-info">
                                        <?php echo esc_html( get_theme_mod( 'juno_footer_copyright_area', get_bloginfo( 'name' ) ) ); ?>
                                    </span>
                                    |
                                <?php endif; ?>
                                
                                <a href="https://smartcatdesign.net">
                                    <?php printf( esc_html__( 'Designed by %s', 'juno' ), 'Smartcat' ); ?> 

                                    <img src="<?php echo trailingslashit( get_template_directory_uri() ) . 'inc/images/sc-emblem-skyblue.png'; ?>" alt="<?php printf( esc_attr__( '%s Logo', 'juno' ), 'Smartcat' ); ?>" />
                                </a>
                            </div>

                        </div>

                        <div class="col-md-12">
                            
                            <div id="footer-jumper">
                    
                                <span class="fa fa-caret-up"></span>

                            </div>
                            
                        </div>
                        
                    </div>
                    
                </div>
                
            </div>
    
        </div>
            
    </div>
    
<?php }
add_action( 'juno_footer', 'juno_render_footer' );


/**
 * Determine the width of columns based on left and right sidebar settings.
 */
function juno_main_width() {
    
    if( is_active_sidebar('sidebar-left') && is_active_sidebar('sidebar-right') ) :
        $width = 6;
    elseif( is_active_sidebar('sidebar-left') || is_active_sidebar('sidebar-right') ) :
        $width = 9;
    else:
        $width = 12;
    endif;
    
    return $width;

}

function juno_get_skin_colors() {
    
    $skin_color_array[] = null;
    
    $skin_color_array[ 'dark' ]     = get_theme_mod( 'juno_theme_color_dark', '#1f2933' );
    $skin_color_array[ 'primary' ]  = get_theme_mod( 'juno_theme_color_primary', '#72c4c0' );
    $skin_color_array[ 'accent' ]   = get_theme_mod( 'juno_theme_color_accent', '#ffc859' );
    
    return $skin_color_array;
    
}

function juno_hex2rgba( $color, $opacity = false ) {
 
    $default = 'rgb(0,0,0)';

    //Return default if no color provided
    if ( empty( $color ) )
        return $default; 

    //Sanitize $color if "#" is provided 
    if ( $color[0] == '#' ) {
        $color = substr( $color, 1 );
    }

    //Check if color has 6 or 3 characters and get values
    if ( strlen( $color ) == 6) {
        $hex = array( $color[0] . $color[1], $color[2] . $color[3], $color[4] . $color[5] );
    } elseif ( strlen( $color ) == 3 ) {
        $hex = array( $color[0] . $color[0], $color[1] . $color[1], $color[2] . $color[2] );
    } else {
        return $default;
    }

    // Convert hexadec to rgb
    $rgb =  array_map( 'hexdec', $hex );

    // Check if opacity is set(rgba or rgb)
    if( $opacity ){
        if( abs( $opacity ) > 1 )
            $opacity = 1.0;
        $output = 'rgba('.implode(",",$rgb).','.$opacity.')';
    } else {
        $output = 'rgb('.implode(",",$rgb).')';
    }

    //Return rgb(a) color string
    return $output;
        
}

function juno_custom_js() { ?>
    
    <script type="text/javascript">
    
        jQuery(document).ready( function( $ ) {
            
            /*
            * Handle Blog Roll Masonry
            */
            function doMasonry() {

                var $grid = $( "#masonry-blog-wrapper" ).imagesLoaded(function () {
                    $grid.masonry({
                        itemSelector: '.blog-roll-item',
                        columnWidth: '.grid-sizer',
                        percentPosition: true,
                        gutter: '.gutter-sizer',
                        transitionDuration: '.75s'
                    });
                });

                <?php if ( get_theme_mod( 'juno_blog_columns', '3cols' ) == '2cols' ) : ?>

                    if ( $( window ).width() >= 768 ) {

                        $('.juno-blog-content .gutter-sizer').css('width', '2%');
                        $('.juno-blog-content .grid-sizer').css('width', '48%');
                        $('.juno-blog-content .blog-roll-item').css('width', '48%');

                    } else {

                        $('.juno-blog-content .gutter-sizer').css('width', '0%');
                        $('.juno-blog-content .grid-sizer').css('width', '100%');
                        $('.juno-blog-content .blog-roll-item').css('width', '100%');

                    }

                <?php else : ?>

                    if ( $( window ).width() >= 992 ) {  

                        $('.juno-blog-content .gutter-sizer').css('width', '2%');
                        $('.juno-blog-content .grid-sizer').css('width', '32%');
                        $('.juno-blog-content .blog-roll-item').css('width', '32%');

                    } else if ( $( window ).width() < 992 && $( window ).width() >= 768 ) {

                        $('.juno-blog-content .gutter-sizer').css('width', '2%');
                        $('.juno-blog-content .grid-sizer').css('width', '48%');
                        $('.juno-blog-content .blog-roll-item').css('width', '48%');

                    } else {

                        $('.juno-blog-content .gutter-sizer').css('width', '0%');
                        $('.juno-blog-content .grid-sizer').css('width', '100%');
                        $('.juno-blog-content .blog-roll-item').css('width', '100%');

                    }
                    
                <?php endif; ?>

            }

            /**
            * Call Masonry on window resize and load
            */
            $( window ).resize( function() {
                doMasonry();
            });
            doMasonry();
            
            <?php if ( get_theme_mod( 'juno_blog_hover_tab_toggle', 'show' ) == 'show' ) : ?>
            
                /**
                * Blog Roll Tab Hover Effect
                */
                $( '.blog-roll-item article').mouseenter( function() {

                    $( this ).find( '.inner .image-corner' ).stop().animate({
                        borderWidth: "0 0 60px 60px"
                    }, 200 );

                    $( this ).find( '.inner .icon' ).stop().animate({
                        fontSize: "14px",
                        opacity: "1" 
                    }, 400 );

                }).mouseleave( function() {

                    $( this ).find( '.inner .icon' ).stop().animate({
                        fontSize: "0px",
                        opacity: "0"
                    }, 200 );

                    $( this ).find( '.inner .image-corner' ).stop().animate({
                        borderWidth: "0 0 0 0"
                    }, 400 );

                });
                
            <?php endif; ?>
            
            <?php 
                
                $single_slide = false;
            
                if ( get_theme_mod( 'juno_jumbotron_post_2', null ) == null || get_theme_mod( 'juno_jumbotron_post_2', null ) == 'none' ) :
                
                    if ( get_theme_mod( 'juno_jumbotron_post_3', null ) == null || get_theme_mod( 'juno_jumbotron_post_3', null ) == 'none' ) :
                        
                        $single_slide = true;
                        
                    endif;
                    
                endif;
                
            ?>
            
            /*
            * Initialize the homepage slider module (only if the element exists on the page)
            */
            if ( $( "#camera_slider" ).length ) {
                
                var viewport_height = $(window).height(),
                    header_height = $( 'header#masthead' ).height(),
                    jumbotron_height = null;
                
                if ( $(window).width() > 767 ) {
                    jumbotron_height = viewport_height - header_height + 'px';
                } else {
                    jumbotron_height = <?php echo esc_js( get_theme_mod( 'juno_jumbotron_mobile_height', '400' ) ); ?> + 'px';
                }
                
                $('#jumbotron-section').animate({
                    height: jumbotron_height
                });
                
                $( "#camera_slider" ).camera({ 
                    height: jumbotron_height,
                    hover: true,
                    transPeriod: 1000,
                    time: <?php echo esc_js( get_theme_mod( 'juno_jumbotron_slide_delay', '7500' ) ); ?>,
                    fx: '<?php echo esc_js( get_theme_mod( 'juno_jumbotron_slide_effect', 'simpleFade' ) ); ?>',
                    pagination: <?php echo $single_slide ? esc_js( 'false') : esc_js( 'true' ); ?>,
                    playPause: false,
                    loader: 'none',
                    navigation: false,
                    autoAdvance: <?php echo $single_slide ? esc_js( 'false') : esc_js( 'true' ); ?>,
                    mobileAutoAdvance: <?php echo $single_slide ? esc_js( 'false') : esc_js( 'true' ); ?>,
                });

            }
            
        });
    
    </script>
    
<?php }
add_action('wp_head', 'juno_custom_js');

new Smartcat_Juno_Featured_Image_Meta_Box();
class Smartcat_Juno_Featured_Image_Meta_Box {

    public function __construct() {

        if ( is_admin() ) {
            add_action( 'load-post.php',        array ( $this, 'init_metabox' ) );
            add_action( 'load-post-new.php',    array ( $this, 'init_metabox' ) );
        }
        
    }

    public function init_metabox() {

        add_action( 'add_meta_boxes',           array ( $this, 'add_metabox' ) );
        add_action( 'save_post',                array ( $this, 'save_metabox' ), 10, 2 );
        
    }

    public function add_metabox() {

        add_meta_box( 'juno_page_post_banner_meta', __( 'Featured Image Settings', 'juno' ), array ( $this, 'render_juno_page_post_banner_metabox' ), array( 'page', 'post' ), 'normal', 'high' );
        
    }

    public function render_juno_page_post_banner_metabox( $post ) {

        // Add nonce for security and authentication.
        wp_nonce_field( 'juno_banner_meta_box_nonce_action', 'juno_banner_meta_box_nonce' );

        // Retrieve an existing value from the database.
        $banner_height      = get_post_meta( $post->ID, 'banner_meta_height', true );
        $banner_img_align   = get_post_meta( $post->ID, 'banner_meta_img_align', true );

        // Set default values.
        if ( empty( $banner_height ) )      { $banner_height = '500'; } 
        if ( empty( $banner_img_align ) )   { $banner_img_align = 'middle'; }
      
        $alignments = array(
            'top'       => __( 'Top', 'juno' ),
            'middle'    => __( 'Middle', 'juno' ),
            'bottom'    => __( 'Bottom', 'juno' ),
        );
        
        // Form fields
        echo '<table class="form-table">';

        echo '	<tr>';
        echo '		<th><label for="banner_meta_height" class="banner_meta_height_label">' . __( 'Banner Height', 'juno' ) . '</label></th>';
        echo '		<td>';
        echo '			<input type="number" id="banner_meta_height" name="banner_meta_height" class="banner_meta_height_field" value="' . esc_attr( $banner_height ) . '" min="150" max="1000" step="50">';
        echo '		</td>';
        echo '	</tr>';

        echo '	<tr>';
        echo '		<th><label for="banner_meta_img_align" class="banner_meta_img_align_label">' . __( 'Location', 'juno' ) . '</label></th>';
        echo '		<td>';
        echo '	                <select id="banner_meta_img_align" name="banner_meta_img_align" class="banner_meta_img_align_field">';
                                    foreach( $alignments as $key => $value ) :
        echo '                          <option value="' . $key . '" ' . selected( $banner_img_align, $key, false ) . '> ' . $value . '</option>';
                                    endforeach;
        echo '	                </select>';
        echo '		</td>';
        echo '	</tr>';
        
        echo '</table>';
        
    }
    
    public function save_metabox( $post_id, $post ) {

        // Add nonce for security and authentication.
        $nonce_name     = isset( $_POST[ 'juno_banner_meta_box_nonce' ] ) ? $_POST[ 'juno_banner_meta_box_nonce' ] : '';
        $nonce_action   = 'juno_banner_meta_box_nonce_action';

        // Check if a nonce is set and valid
        if ( !isset( $nonce_name ) ) { return; }
        if ( !wp_verify_nonce( $nonce_name, $nonce_action ) ) { return; }
            
        // Sanitize user input.
        $banner_height      = isset( $_POST[ 'banner_meta_height' ] ) ? sanitize_text_field( $_POST[ 'banner_meta_height' ] ) : '500';
        $banner_img_align   = isset( $_POST[ 'banner_meta_img_align' ] ) ? sanitize_text_field( $_POST[ 'banner_meta_img_align' ] ) : 'middle';

        // Update the meta field in the database
        update_post_meta( $post_id, 'banner_meta_height', $banner_height );
        update_post_meta( $post_id, 'banner_meta_img_align', $banner_img_align );
        
    }
    
}


function juno_link_tab_icons() {
    
    return array( 
        'fa fa-link'                    => __( 'Link', 'juno'), 
        'fa fa-external-link'           => __( 'External Link', 'juno'), 
        'fa fa-external-link-square'    => __( 'External Link Square', 'juno'), 
        'fa fa-share'                   => __( 'Share', 'juno'), 
        'fa fa-share-square-o'          => __( 'Share Square Outline', 'juno'), 
        'fa fa-star'                    => __( 'Star', 'juno'), 
        'fa fa-star-o'                  => __( 'Star Outline', 'juno'), 
    );
    
}