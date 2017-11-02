<?php

// ---------------------------------------------
// Layout Section
// ---------------------------------------------

$wp_customize->add_section( 'juno_single_layout_section', array (
    'title'                 => __( 'Single Post', 'juno' ),
    'description'           => __( 'Customize the layout of your single Post template', 'juno' ),
    'priority'              => 5
) );

    // Show Author?
    $wp_customize->add_setting( 'juno_single_show_author', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_single_show_author', array(
        'type'                  => 'radio',
        'section'               => 'juno_single_layout_section',
        'label'                 => __( 'Show Author in Single Posts?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );

    // Show Date Posted?
    $wp_customize->add_setting( 'juno_single_show_date', array (
        'default'               => 'show',
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_show_hide',
    ) );
    $wp_customize->add_control( 'juno_single_show_date', array(
        'type'                  => 'radio',
        'section'               => 'juno_single_layout_section',
        'label'                 => __( 'Show Date Posted in Single Posts?', 'juno' ),
        'choices'               => array(
            'show'      => __( 'Show', 'juno' ),
            'hide'      => __( 'Hide', 'juno' ),
    ) ) );
    
    // Post Title Font Size
    $wp_customize->add_setting( 'juno_single_post_title_font_size', array (
        'default'               => 24,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_single_post_title_font_size', array(
        'type'                  => 'number',
        'section'               => 'juno_single_layout_section',
        'label'                 => __( 'Single Post/Page Title Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 36,
            'step' => 2,
    ) ) );

    // Post Content Font Size
    $wp_customize->add_setting( 'juno_single_post_content_font_size', array (
        'default'               => 14,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_single_post_content_font_size', array(
        'type'                  => 'number',
        'section'               => 'juno_single_layout_section',
        'label'                 => __( 'Single Post/Page Content Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 10,
            'max' => 26,
            'step' => 2,
    ) ) );

    // Post Meta Font Size
    $wp_customize->add_setting( 'juno_single_post_meta_font_size', array (
        'default'               => 10,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_single_post_meta_font_size', array(
        'type'                  => 'number',
        'section'               => 'juno_single_layout_section',
        'label'                 => __( 'Single Post Meta Size', 'juno' ),
        'input_attrs'           => array(
            'min' => 8,
            'max' => 18,
            'step' => 2,
    ) ) );