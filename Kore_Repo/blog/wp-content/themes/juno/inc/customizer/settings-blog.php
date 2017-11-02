<?php

// ---------------------------------------------
// Layout Section
// ---------------------------------------------

$wp_customize->add_section( 'juno_blog_layout_section', array (
    'title'                 => __( 'Blog', 'juno' ),
    'description'           => __( 'Customize the layout of your blog template', 'juno' ),
    'priority'              => 5
) );

    // Blog Section Title Toggle
    $wp_customize->add_setting( 'juno_blog_title_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_blog_title_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Show Blog Roll Title?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );

    // Blog Section Title
    $wp_customize->add_setting( 'juno_blog_title', array (
        'default'               => __( 'Blog', 'juno' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'juno_blog_title', array(
        'type'                  => 'text',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Blog Roll Title', 'juno' ),
    ) );

    // Blog Roll Columns
    $wp_customize->add_setting( 'juno_blog_columns', array (
        'default'               => '3cols',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_blog_cols',
    ) );
    $wp_customize->add_control( 'juno_blog_columns', array(
        'type'                  => 'radio',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Blog Columns', 'juno' ),
        'choices'               => array(
            '2cols'    => __( '2-Column', 'juno' ),
            '3cols'    => __( '3-Column', 'juno' ),
    ) ) );
    
    // Corner Hover Tab Toggle
    $wp_customize->add_setting( 'juno_blog_hover_tab_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_blog_hover_tab_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Show Link Tab Effect on Hover?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Corner Hover Tab Color
    $wp_customize->add_setting( 'juno_blog_hover_tab_color', array (
        'default'               => '#ffc859',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 
	new WP_Customize_Color_Control( $wp_customize, 'juno_blog_hover_tab_color', array(
            'label'      => __( 'Blog Item - Hover Tab Background Color', 'juno' ),
            'section'    => 'juno_blog_layout_section',
            'settings'   => 'juno_blog_hover_tab_color',
	) ) 
    );     

    // Corner Hover Tab Icon Color
    $wp_customize->add_setting( 'juno_blog_hover_icon_color', array (
        'default'               => '#ffffff',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 
	new WP_Customize_Color_Control( $wp_customize, 'juno_blog_hover_icon_color', array(
            'label'      => __( 'Blog Item - Hover Tab Icon Color', 'juno' ),
            'section'    => 'juno_blog_layout_section',
            'settings'   => 'juno_blog_hover_icon_color',
	) ) 
    );     
    
    // Corner Hover Tab Icon
    $wp_customize->add_setting( 'juno_blog_hover_tab_icon', array (
        'default'               => 'fa fa-share',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_tab_icon',
    ) );
    $wp_customize->add_control( 'juno_blog_hover_tab_icon', array(
        'type'                  => 'select',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Blog Item - Hover Tab Icon', 'juno' ),
        'choices'               => juno_link_tab_icons(),
    ) );

    // Post Title Font Size
    $wp_customize->add_setting( 'juno_blog_item_title_font_size', array (
        'default'               => 16,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_blog_item_title_font_size', array(
        'type'                  => 'number',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Blog Item Title Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 36,
            'step' => 2,
    ) ) );

    // Post Content Font Size
    $wp_customize->add_setting( 'juno_blog_item_content_font_size', array (
        'default'               => 14,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_blog_item_content_font_size', array(
        'type'                  => 'number',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Blog Item Content Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 26,
            'step' => 2,
    ) ) );

    // Post Meta Font Size
    $wp_customize->add_setting( 'juno_blog_item_meta_font_size', array (
        'default'               => 12,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_blog_item_meta_font_size', array(
        'type'                  => 'number',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Blog Item Meta Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 8,
            'max' => 18,
            'step' => 2,
    ) ) );
    
    // Show Category?
    $wp_customize->add_setting( 'juno_blog_show_category', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_blog_show_category', array(
        'type'                  => 'radio',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Show Category in Blog Items?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );

    // Show Author?
    $wp_customize->add_setting( 'juno_blog_show_author', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_blog_show_author', array(
        'type'                  => 'radio',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Show Author in Blog Items?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );

    // Show Date Posted?
    $wp_customize->add_setting( 'juno_blog_show_date', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_blog_show_date', array(
        'type'                  => 'radio',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Show Date Posted in Blog Items?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Trim Post Content Blurb
    $wp_customize->add_setting( 'juno_blog_trim_words_value', array (
        'default'               => 50,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_blog_trim_words_value', array(
        'type'                  => 'number',
        'section'               => 'juno_blog_layout_section',
        'label'                 => __( 'Trim Sample to How Many Words?', 'juno' ),
        'input_attrs'           => array(
            'min' => 0,
            'max' => 150,
            'step' => 5,
    ) ) );
    