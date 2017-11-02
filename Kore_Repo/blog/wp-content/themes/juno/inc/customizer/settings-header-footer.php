<?php

// ---------------------------------------------
// Theme Branding Panel
// ---------------------------------------------
$wp_customize->add_panel( 'juno_header_footer_panel', array (
    'title'                 => __( 'Header & Footer', 'juno' ),
    'description'           => __( 'Customize the header and footer', 'juno' ),
    'priority'              => 1
) );




// ---------------------------------------------
// Logo & title
// ---------------------------------------------
$wp_customize->add_section( 'title_tagline', array(
    'title'                 => __( 'Logo & title', 'juno'),
    'description'           => __( 'Customize the logo & site title', 'juno' ),
    'panel'                 => 'juno_header_footer_panel'
) );

// ---------------------------------------------
// Footer
// ---------------------------------------------
$wp_customize->add_section( 'juno_footer_section', array(
    'title'                 => __( 'Footer Copyright', 'juno'),
    'description'           => __( 'Customize the copyright blurb in the footer of your site', 'juno' ),
    'panel'                 => 'juno_header_footer_panel'
) );

    // Copyright Line Company Name
    $wp_customize->add_setting( 'juno_footer_copyright_area', array (
        'default'               => get_bloginfo( 'name' ),
        'transport'             => 'refresh',
        'sanitize_callback'     => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'juno_footer_copyright_area', array(
        'type'                  => 'text',
        'section'               => 'juno_footer_section',
        'label'                 => __( 'Company Name / Copyright', 'juno' ),
    ) );   