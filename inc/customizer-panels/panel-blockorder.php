<?php

// ---------------------------------------------
// Block Order Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_blockorder_section',  array(
    'title'         => __( 'Block Order', 'felix-landing-page' ),
    'description'   => __( 'The 7 blocks that make up the landing page are able to be rearranged. ', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Select for block 1
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][0]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
        
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][0]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 1', 'felix-landing-page' ),
        'choices'           => felix_block_names(),
        'default'           => 'header'
    ) );
    
    
    // Select for block 2
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][1]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'

    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][1]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 2', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );


    // Select for block 3
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][2]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'

    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][2]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 3', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );


    // Select for block 4
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][3]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'

    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][3]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 4', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );


    // Select for block 5
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][4]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][4]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 5', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );
    
    
    // Select for block 6
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][5]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][5]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 6', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );
    
    
    // Select for block 7
    $wp_customize->add_setting( 'felix_landing_page_template[blockorder][6]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanatize_callback' => 'felix_sanitize'
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[blockorder][6]', array(
        'type'              => 'select',
        'section'           => 'felix_blockorder_section',
        'label'             => __( 'Block 7', 'felix-landing-page' ),
        'choices'           => felix_block_names()
    ) );
    