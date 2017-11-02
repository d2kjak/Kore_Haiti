<?php

// ---------------------------------------------
// General Panel
// ---------------------------------------------
$wp_customize->add_panel( 'juno_extras_panel', array (
    'title'                 => __( 'Extras', 'juno' ),
    'description'           => __( 'Customize the extras of your site', 'juno' ),
    'priority'              => 10
) );

// ---------------------------------------------
// 404 Error Page Section
// ---------------------------------------------
$wp_customize->add_section( 'juno_error_page_section', array(
    'title'                 => __( '404 Error Page', 'juno'),
    'description'           => __( 'Customize the 404 error page appearance', 'juno' ),
    'panel'                 => 'juno_extras_panel'
) );
 
    // Error Page Primary Heading
    $wp_customize->add_setting( 'juno_error_page_heading', array (
        'default'               => __( 'Oops!', 'juno' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'juno_error_page_heading', array(
        'type'                  => 'text',
        'section'               => 'juno_error_page_section',
        'label'                 => __( 'The primary error page heading', 'juno' ),
    ) );   

    // Error Page Secondary Heading
    $wp_customize->add_setting( 'juno_error_page_subheading', array (
        'default'               => __( 'It looks like nothing was found at this location, please check the address and try again!', 'juno' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'juno_error_page_subheading', array(
        'type'                  => 'text',
        'section'               => 'juno_error_page_section',
        'label'                 => __( 'The secondary, smaller error page heading', 'juno' ),
    ) );   
