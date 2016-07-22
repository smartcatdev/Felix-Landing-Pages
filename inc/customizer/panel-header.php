<?php

// ---------------------------------------------
// Header Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_header_section',  array(
    'title'         => __( 'Header', 'felix-landing-page', 'felix-landing-page' ),
    'description'   => __( 'Header configuration', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );
    
    // Display logo
     // Jumbotron visibility toggle
    $wp_customize->add_setting( 'felix_title_or_logo', array(
        'type'              => 'option',
        'default'           => 'both',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_logo_title_toggle'
        
    ) );
    $wp_customize->add_control( 'felix_title_or_logo', array(
        'type'              => 'radio',
        'section'           => 'felix_header_section',
        'choices'           => array(
            'logo'             => __( 'Logo', 'felix-landing-page' ),
            'title'            => __( 'Title', 'felix-landing-page' ),
            'both'             => __( 'Both', 'felix-landing-page' ),
    ) ) );
    
    
    // Value to use as title
    $wp_customize->add_setting( 'felix_title', array(
        'type'              => 'option',
        'default'           => __( 'Felix Landing Page', 'felix-landing-page' ),
        'transport'         => __( 'refresh', 'felix-landing-page' ),
        'sanatize_callback' => 'felix_sanitize_text'
    ) );
    $wp_customize->add_control( 'felix_title', array(
        'type'              => 'text',
        'section'           => 'felix_header_section',
        'label'             => __( 'Landing page title', 'felix-landing-page' )
    ) );
    
    
    // Image to use as logo
    $wp_customize->add_setting( 'felix_header_logo', array(
        'type'              => 'option',
        'default'           => '',
        'transport'         => 'refresh',
        'sanatize_callback' => 'esc_url_raw'
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'felix_header_logo', array(
        'mime_type'         => 'image',
        'settings'          => 'felix_header_logo',
        'section'           => 'felix_header_section',
        'label'             => __( 'Logo image', 'felix-landing-page' )
    ) ) );
    
    
    // Size of the logo image
    $wp_customize->add_setting( 'felix_header_logo_size', array(
        'type'              => 'option',
        'default'           => 50,
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize_integer'
    ) );
    $wp_customize->add_control( 'felix_header_logo_size', array(
        'type'              => 'number',
        'section'           => 'felix_header_section',
        'label'             =>  __( 'Logo size', 'felix-landing-page' ),
        'input_attrs'           => array(
            'min'   => 10,
            'max'   => 50,
            'step'  => 2,
    ) ) );