<?php

// ---------------------------------------------
// "Site Identity" Extras
// ---------------------------------------------
    
    // Logo Height
    $wp_customize->add_setting( 'juno_custom_logo_height', array (
        'default'               => 300,
        'transport'             => 'refresh',
        'sanitize_callback'     => 'juno_sanitize_integer',
    ) );
    $wp_customize->add_control( 'juno_custom_logo_height', array(
        'type'                  => 'number',
        'section'               => 'title_tagline',
        'label'                 => __( 'Custom Logo Height', 'juno' ),
        'description'           => __( 'Set in pixels. Width will automatically maintain the image aspect ratio.', 'juno' ),
        'input_attrs'           => array(
            'min' => 25,
            'max' => 300,
            'step' => 5,
    ) ) );