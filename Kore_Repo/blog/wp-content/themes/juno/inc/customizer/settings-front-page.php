<?php

// ---------------------------------------------
// Frontpage Content Panel
// ---------------------------------------------
$wp_customize->add_panel( 'juno_front_page_panel', array (
    'title'                 => __( 'Frontpage Content', 'juno' ),
    'description'           => __( 'Customize the appearance of your front page', 'juno' ),
    'priority'              => 3
) );
    
// ---------------------------------------------
// Featured Post Section
// ---------------------------------------------
$wp_customize->add_section( 'juno_featured_post_section', array(
    'title'                 => __( 'Featured Post Section', 'juno'),
    'description'           => __( 'This section appears on the Frontpage when Static Frontpage option is set to "A static page" from Customize -> Static Frontpage', 'juno' ),
    'panel'                 => 'juno_front_page_panel'
) );

    // Featured Post Section Visibility Toggle
    $wp_customize->add_setting( 'juno_featured_post_visibility_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_featured_post_visibility_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_featured_post_section',
        'label'                 => __( 'Show the "Featured Post" section?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Featured Post Section Post
    $wp_customize->add_setting( 'juno_featured_post_post', array (
        'default'               => null,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_post',
    ) );
    $wp_customize->add_control( 'juno_featured_post_post', array(
        'type'                  => 'select',
        'section'               => 'juno_featured_post_section',
        'label'                 => __( '"Featured Post" section - Post', 'juno' ),
        'description'           => __( 'Select a Post or Page. The title and content will be drawn in automatically.', 'juno' ),
        'choices'               => juno_all_posts_array( true ),
    ) );
    
    // Featured Post Section - Button Label
    $wp_customize->add_setting( 'juno_featured_post_section_button_label', array (
        'default'               => __( 'Show Me More', 'juno' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'juno_featured_post_section_button_label', array(
        'type'                  => 'text',
        'section'               => 'juno_featured_post_section',
        'label'                 => __( 'Button Label', 'juno' ),
    ) );
   
// ---------------------------------------------
// Frontpage Widget Areas Section
// ---------------------------------------------
$wp_customize->add_section( 'juno_widget_areas_section', array(
    'title'                 => __( 'Frontpage Widget Areas', 'juno'),
    'description'           => __( 'These Widget Areas appear on the Frontpage, but can be toggled off and hidden', 'juno' ),
    'panel'                 => 'juno_front_page_panel'
) );

    // Widget Area A
    $wp_customize->add_setting( 'juno_toggle_widget_area_a', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_toggle_widget_area_a', array(
        'type'                  => 'radio',
        'section'               => 'juno_widget_areas_section',
        'label'                 => __( 'Show the Frontpage Widget Area A?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Widget Area B
    $wp_customize->add_setting( 'juno_toggle_widget_area_b', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_toggle_widget_area_b', array(
        'type'                  => 'radio',
        'section'               => 'juno_widget_areas_section',
        'label'                 => __( 'Show the Frontpage Widget Area B?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Widget Area C
    $wp_customize->add_setting( 'juno_toggle_widget_area_c', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_toggle_widget_area_c', array(
        'type'                  => 'radio',
        'section'               => 'juno_widget_areas_section',
        'label'                 => __( 'Show the Frontpage Widget Area C?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );

// ---------------------------------------------
// Color Banner Section
// ---------------------------------------------
$wp_customize->add_section( 'juno_color_banner_section', array(
    'title'                 => __( 'Colored Widget Area', 'juno'),
    'description'           => __( 'This section appears on the Frontpage when Static Frontpage option is set to "A static page" from Customize -> Static Frontpage', 'juno' ),
    'panel'                 => 'juno_front_page_panel'
) );

    // Color Banner Section Visibility Toggle
    $wp_customize->add_setting( 'juno_color_banner_visibility_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_color_banner_visibility_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_color_banner_section',
        'label'                 => __( 'Show the Colored widget area?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
// ---------------------------------------------
// Social Section
// ---------------------------------------------
$wp_customize->add_section( 'juno_social_section', array(
    'title'                 => __( 'Social Links', 'juno'),
    'description'           => __( 'This section appears on the Frontpage when Static Frontpage option is set to "A static page" from Customize -> Static Frontpage', 'juno' ),
    'panel'                 => 'juno_front_page_panel'
) );

    // Social Section Visibility Toggle
    $wp_customize->add_setting( 'juno_social_visibility_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_social_visibility_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Show the Social Links section?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );

    // Social Section Message Visibility Toggle
    $wp_customize->add_setting( 'juno_social_message_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_social_message_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Include a title message?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Social Message Text
    $wp_customize->add_setting( 'juno_social_message', array (
        'default'               => __( 'Stay Connected', 'juno' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'juno_social_message', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Title message text', 'juno' ),
    ) );
    
    // Facebook URL
    $wp_customize->add_setting( 'juno_social_icon_facebook_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_facebook_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Facebook', 'juno' ),
    ) );
    
    // Twitter URL
    $wp_customize->add_setting( 'juno_social_icon_twitter_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_twitter_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Twitter', 'juno' ),
    ) );
    
    // Google+ URL
    $wp_customize->add_setting( 'juno_social_icon_google_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_google_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Google+', 'juno' ),
    ) );
    
    // LinkedIn URL
    $wp_customize->add_setting( 'juno_social_icon_linkedin_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_linkedin_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'LinkedIn', 'juno' ),
    ) );
    
    // Behance URL
    $wp_customize->add_setting( 'juno_social_icon_behance_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_behance_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Behance', 'juno' ),
    ) );
    
    // Instagram URL
    $wp_customize->add_setting( 'juno_social_icon_instagram_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_instagram_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Instagram', 'juno' ),
    ) );
    
    // Pinterest URL
    $wp_customize->add_setting( 'juno_social_icon_pinterest_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_pinterest_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Pinterest', 'juno' ),
    ) );
    
    // YouTube URL
    $wp_customize->add_setting( 'juno_social_icon_youtube_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_youtube_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'YouTube', 'juno' ),
    ) );
    
    // Vimeo URL
    $wp_customize->add_setting( 'juno_social_icon_vimeo_url', array (
        'default'               => '',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'esc_url_raw',
    ) );
    $wp_customize->add_control( 'juno_social_icon_vimeo_url', array(
        'type'                  => 'text',
        'section'               => 'juno_social_section',
        'label'                 => __( 'Vimeo', 'juno' ),
    ) );