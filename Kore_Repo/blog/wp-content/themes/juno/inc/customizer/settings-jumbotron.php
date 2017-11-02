<?php

// ---------------------------------------------
// Jumbotron Panel
// ---------------------------------------------
$wp_customize->add_panel( 'juno_jumbotron_panel', array (
    'title'                 => __( 'Jumbotron ( Slider )', 'juno' ),
    'description'           => __( 'Customize the appearance of the large frontpage slider', 'juno' ),
    'priority'              => 2
) );
    
// ---------------------------------------------
// Jumbotron General & Post Selection
// ---------------------------------------------
$wp_customize->add_section( 'juno_jumbotron_general_section', array(
    'title'                 => __( 'Slides', 'juno'),
    'description'           => __( 'The Jumbotron Slider will only show up on the Frontpage. Set your Frontpage from Customizer-Static Frontpage to a Static Page.', 'juno' ),
    'panel'                 => 'juno_jumbotron_panel'
) );

    // Jumbotron Visibility Toggle
    $wp_customize->add_setting( 'juno_jumbotron_visibility_toggle', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_visibility_toggle', array(
        'type'                  => 'radio',
        'section'               => 'juno_jumbotron_general_section',
        'label'                 => __( 'Show the Jumbotron section?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Slider Post #1
    $wp_customize->add_setting( 'juno_jumbotron_post_1', array (
        'default'               => null,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_post',
        
    ) );
    $wp_customize->add_control( 'juno_jumbotron_post_1', array(
        'type'                  => 'select',
        'section'               => 'juno_jumbotron_general_section',
        'label'                 => __( 'Jumbotron Post #1', 'juno' ),
        'description'           => __( 'To select the image, Edit the page/post you selected and Set Featured Image', 'juno' ),
        'choices'               => juno_all_posts_array( true ),
    ) );

    // Slider Post #2
    $wp_customize->add_setting( 'juno_jumbotron_post_2', array (
        'default'               => null,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_post',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_post_2', array(
        'type'                  => 'select',
        'section'               => 'juno_jumbotron_general_section',
        'label'                 => __( 'Jumbotron Post #2', 'juno' ),
        'description'           => __( 'To select the image, Edit the page/post you selected and Set Featured Image', 'juno' ),
        'choices'               => juno_all_posts_array( true ),
    ) );

    // Slider Post #2
    $wp_customize->add_setting( 'juno_jumbotron_post_3', array (
        'default'               => null,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_post',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_post_3', array(
        'type'                  => 'select',
        'section'               => 'juno_jumbotron_general_section',
        'label'                 => __( 'Jumbotron Post #3', 'juno' ),
        'description'           => __( 'To select the image, Edit the page/post you selected and Set Featured Image', 'juno' ),
        'choices'               => juno_all_posts_array( true ),
    ) );
    
// ---------------------------------------------
// Jumbotron Appearance
// ---------------------------------------------
$wp_customize->add_section( 'juno_jumbotron_appearance_section', array(
    'title'                 => __( 'Appearance', 'juno'),
    'description'           => __( 'Customize the Jumbotron appearance', 'juno' ),
    'panel'                 => 'juno_jumbotron_panel'
) );

    // Jumbotron Mobile Height
    $wp_customize->add_setting( 'juno_jumbotron_mobile_height', array (
        'default'               => 400,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_mobile_height', array(
        'type'                  => 'number',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Mobile Height of Jumbotron', 'juno' ),
        'description'           => __( 'If the page is loaded on a mobile device, this value will be used to set the Jumbotron height', 'juno' ),
        'input_attrs'           => array(
            'min' => 300,
            'max' => 1000,
            'step' => 50,
    ) ) );

    // Slide's Dark Tint Overlay
    $wp_customize->add_setting( 'juno_slider_dark_tint', array (
        'default'               => .5,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_overlay_decimal',
    ) );
    $wp_customize->add_control( 'juno_slider_dark_tint', array(
        'type'                  => 'number',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Dark Tinted Slide Overlay', 'juno' ),
        'description'           => __( 'Adjust the amount of dark tint to apply to slider images, from 0.0 for no tint to 1.0 for solid black, or anything in between', 'juno' ),
        'input_attrs'           => array(
            'min' => .0,
            'max' => 1.0,
            'step' => .05,
    ) ) );
    
    // Jumbotron Title - Color
    $wp_customize->add_setting( 'juno_jumbotron_title_color', array (
        'default'               => '#ffffff',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 
	new WP_Customize_Color_Control( $wp_customize, 'juno_jumbotron_title_color', array(
            'label'      => __( 'Title - Text Color', 'juno' ),
            'section'    => 'juno_jumbotron_appearance_section',
            'settings'   => 'juno_jumbotron_title_color',
	) ) 
    );     
    
    // Jumbotron Title - Size
    $wp_customize->add_setting( 'juno_jumbotron_title_size', array (
        'default'               => 28,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_title_size', array(
        'type'                  => 'range',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Title - Font Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 64,
            'step' => 2,
    ) ) );
    
    // Trim Post Content
    $wp_customize->add_setting( 'juno_jumbotron_content_trim_value', array (
        'default'               => 50,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_content_trim_value', array(
        'type'                  => 'number',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Trim the Post Content', 'juno' ),
        'description'           => __( 'This value will limit the number of words from the Post Content that will be displayed. Set to zero to show only the title. PLEASE NOTE: Post Content in the Jumbotron will not be visible on mobile.', 'juno' ),
        'input_attrs'           => array(
            'min' => 0,
            'max' => 200,
            'step' => 10,
    ) ) );
   
    // Jumbotron Content - Size
    $wp_customize->add_setting( 'juno_jumbotron_content_size', array (
        'default'               => 18,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_content_size', array(
        'type'                  => 'range',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Post Content - Font Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 36,
            'step' => 2,
    ) ) );
    
    // Jumbotron Slides - Delay
    $wp_customize->add_setting( 'juno_jumbotron_slide_delay', array (
        'default'               => 7500,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_slide_delay', array(
        'type'                  => 'number',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Slide Duration', 'juno' ),
        'description'           => __( 'How long to wait before switching slides, in milliseconds. (1000 = 1 second)', 'juno' ),
        'input_attrs'           => array(
            'min' => 100,
            'max' => 10000,
            'step' => 100,
    ) ) );
    
    // Jumbotron Slides - Transition Effect
    $wp_customize->add_setting( 'juno_jumbotron_slide_effect', array (
        'default'               => 'simpleFade',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_slide_effect',
    ) );
    $wp_customize->add_control( 'juno_jumbotron_slide_effect', array(
        'type'                  => 'radio',
        'section'               => 'juno_jumbotron_appearance_section',
        'label'                 => __( 'Select your slide transition Effect', 'juno' ),
        'choices'               => array(
            'simpleFade'    => __( 'Fade', 'juno' ),
            'scrollLeft'    => __( 'Scroll Left', 'juno' ),
    ) ) );