<?php
/**
 * Digihigh Lite Theme Customizer
 *
 * @package digihigh-lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */

function digihigh_lite_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'digihigh_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'digihigh-lite' ),
	    'description' => __( 'Description of what this panel does.', 'digihigh-lite' ),
	) );

	$digihigh_lite_font_array = array(
		'' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface', 
        'Acme' => 'Acme', 
        'Anton' => 'Anton',
        'Architects Daughter' =>'Architects Daughter', 
        'Arimo' => 'Arimo', 
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo', 
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' =>  'Alfa Slab One', 
        'Averia Serif Libre' =>  'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script', 
        'Bitter' =>  'Bitter', 
        'Bree Serif' => 'Bree Serif', 
        'BenchNine' => 'BenchNine',
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo', 
        'Courgette' => 'Courgette', 
        'Cherry Swash' => 'Cherry Swash', 
        'Cormorant Garamond' => 'Cormorant Garamond', 
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One',
        'Dosis' => 'Dosis', 
        'Droid Sans' => 'Droid Sans',
        'Economica' =>  'Economica',
        'Fredoka One' => 'Fredoka One', 
        'Fjalla One' => 'Fjalla One', 
        'Francois One' => 'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' =>  'Great Vibes', 
        'Handlee' => 'Handlee',
        'Hammersmith One' =>'Hammersmith One', 
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC',
        'Julius Sans One' => 'Julius Sans One', 
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans',
        'Kanit' => 'Kanit', 
        'Lobster' =>  'Lobster', 
        'Lato' => 'Lato', 
        'Lora' =>'Lora',
        'Libre Baskerville' =>  'Libre Baskerville', 
        'Lobster Two' => 'Lobster Two',
        'Merriweather' => 'Merriweather', 
        'Monda' => 'Monda', 
        'Montserrat' => 'Montserrat', 
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script', 
        'Noto Serif' => 'Noto Serif', 
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>  'Overpass Mono', 
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron',
        'Patua One' => 'Patua One', 
        'Pacifico' =>  'Pacifico',
        'Padauk' => 'Padauk',
        'Playball' =>  'Playball', 
        'Playfair Display' => 'Playfair Display',
        'PT Sans' => 'PT Sans', 
        'Philosopher' => 'Philosopher', 
        'Permanent Marker' => 'Permanent Marker', 
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro',
        'Shadows Into Light Two' => 'Shadows Into Light Two',
        'Shadows Into Light' => 'Shadows Into Light',
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand',
        'Tangerine' => 'Tangerine', 
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round',
        'Vampiro One' => 'Vampiro One', 
        'Vollkorn' => 'Vollkorn', 
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz', 
    );

	//Typography
	$wp_customize->add_section( 'digihigh_lite_typography', array(
    	'title'      => __( 'Typography', 'digihigh-lite' ),
		'priority'   => 30,
		'panel' => 'digihigh_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_paragraph_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'Paragraph Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	$wp_customize->add_setting('digihigh_lite_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_atag_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( '"a" Tag Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_li_color', array(
		'label' => __('"li" Tag Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_li_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( '"li" Tag Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_h1_color', array(
		'label' => __('H1 Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_h1_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'H1 Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('digihigh_lite_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('digihigh_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_h2_color', array(
		'label' => __('h2 Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_h2_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'h2 Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('digihigh_lite_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_h3_color', array(
		'label' => __('h3 Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_h3_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'h3 Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('digihigh_lite_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_h4_color', array(
		'label' => __('h4 Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_h4_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'h4 Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('digihigh_lite_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_h5_color', array(
		'label' => __('h5 Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_h5_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'h5 Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('digihigh_lite_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'digihigh_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_h6_color', array(
		'label' => __('h6 Color', 'digihigh-lite'),
		'section' => 'digihigh_lite_typography',
		'settings' => 'digihigh_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('digihigh_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'digihigh_lite_h6_font_family', array(
	    'section'  => 'digihigh_lite_typography',
	    'label'    => __( 'h6 Fonts','digihigh-lite'),
	    'type'     => 'select',
	    'choices'  => $digihigh_lite_font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('digihigh_lite_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','digihigh-lite'),
		'section'	=> 'digihigh_lite_typography',
		'setting'	=> 'digihigh_lite_h6_font_size',
		'type'	=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_background_skin_mode',array(
        'default' => 'Transparent Background',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_background_skin_mode',array(
        'type' => 'select',
        'label' => __('Background Type','digihigh-lite'),
        'section' => 'background_image',
        'choices' => array(
            'With Background' => __('With Background','digihigh-lite'),
            'Transparent Background' => __('Transparent Background','digihigh-lite'),
        ),
	) );

	// woocommerce section
	$wp_customize->add_setting('digihigh_lite_show_related_products',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_show_related_products',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Related Product','digihigh-lite'),
       'section' => 'woocommerce_product_catalog',
    ));

	$wp_customize->add_setting('digihigh_lite_show_wooproducts_border',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_show_wooproducts_border',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Product Border','digihigh-lite'),
       'section' => 'woocommerce_product_catalog',
    ));

    $wp_customize->add_setting( 'digihigh_lite_wooproducts_per_columns' , array(
		'default'           => 3,
		'transport'         => 'refresh',
		'sanitize_callback' => 'digihigh_lite_sanitize_choices',
	) );
	$wp_customize->add_control( 'digihigh_lite_wooproducts_per_columns', array(
		'label'    => __( 'Display Product Per Columns', 'digihigh-lite' ),
		'section'  => 'woocommerce_product_catalog',
		'type'     => 'select',
		'choices'  => array(
						'2' => '2',
						'3' => '3',
						'4' => '4',
						'5' => '5',
		),
	)  );

	$wp_customize->add_setting('digihigh_lite_wooproducts_per_page',array(
		'default'	=> 9,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));	
	$wp_customize->add_control('digihigh_lite_wooproducts_per_page',array(
		'label'	=> __('Display Product Per Page','digihigh-lite'),
		'section'	=> 'woocommerce_product_catalog',
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'digihigh_lite_top_bottom_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control( 'digihigh_lite_top_bottom_wooproducts_padding',	array(
		'label' => esc_html__( 'Top Bottom Product Padding','digihigh-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'digihigh_lite_left_right_wooproducts_padding',array(
		'default' => 10,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control( 'digihigh_lite_left_right_wooproducts_padding',	array(
		'label' => esc_html__( 'Right Left Product Padding','digihigh-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number'
	));

	$wp_customize->add_setting( 'digihigh_lite_wooproducts_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'digihigh_lite_sanitize_number_range',
	));
	$wp_customize->add_control('digihigh_lite_wooproducts_border_radius',array(
		'label' => esc_html__( 'Product Border Radius','digihigh-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_setting( 'digihigh_lite_wooproducts_box_shadow',array(
		'default' => 0,
		'sanitize_callback'    => 'digihigh_lite_sanitize_number_range',
	));
	$wp_customize->add_control('digihigh_lite_wooproducts_box_shadow',array(
		'label' => esc_html__( 'Product Box Shadow','digihigh-lite' ),
		'section' => 'woocommerce_product_catalog',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'range'
	));

	$wp_customize->add_section('digihigh_lite_product_button_section', array(
		'title'    => __('Product Button Settings', 'digihigh-lite'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting( 'digihigh_lite_top_bottom_product_button_padding',array(
		'default' => 14.5,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_top_bottom_product_button_padding',	array(
		'label' => esc_html__( 'Product Button Top Bottom Padding','digihigh-lite' ),
		'section' => 'digihigh_lite_product_button_section',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
		'type'		=> 'number',

	));

	$wp_customize->add_setting( 'digihigh_lite_left_right_product_button_padding',array(
		'default' => 14.5,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_left_right_product_button_padding',array(
		'label' => esc_html__( 'Product Button Right Left Padding','digihigh-lite' ),
		'section' => 'digihigh_lite_product_button_section',
		'type'		=> 'number',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_setting( 'digihigh_lite_product_button_border_radius',array(
		'default' => 0,
		'sanitize_callback'    => 'digihigh_lite_sanitize_number_range',
	));
	$wp_customize->add_control('digihigh_lite_product_button_border_radius',array(
		'label' => esc_html__( 'Product Button Border Radius','digihigh-lite' ),
		'section' => 'digihigh_lite_product_button_section',
		'type'		=> 'range',
		'input_attrs' => array(
			'min' => 0,
			'max' => 50,
			'step' => 1,
		),
	));

	$wp_customize->add_section('digihigh_lite_product_sale_section', array(
		'title'    => __('Product Sale Button Settings', 'digihigh-lite'),
		'priority' => null,
		'panel'    => 'woocommerce',
	));

	$wp_customize->add_setting('digihigh_lite_align_product_sale',array(
        'default' => 'Right',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_align_product_sale',array(
        'type' => 'radio',
        'label' => __('Product Sale Button Alignment','digihigh-lite'),
        'section' => 'digihigh_lite_product_sale_section',
        'choices' => array(
            'Right' => __('Right','digihigh-lite'),
            'Left' => __('Left','digihigh-lite'),
        ),
	) );

	$wp_customize->add_setting( 'digihigh_lite_border_radius_product_sale',array(
		'default' => 50,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_border_radius_product_sale', array(
        'label'  => __('Product Sale Button Border Radius','digihigh-lite'),
        'section'  => 'digihigh_lite_product_sale_section',
        'type'        => 'number',
        'input_attrs' => array(
        	'step'=> 1,
            'min' => 0,
            'max' => 50,
        )
    ) );

	$wp_customize->add_setting('digihigh_lite_product_sale_font_size',array(
		'default'=> 14,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float'
	));
	$wp_customize->add_control('digihigh_lite_product_sale_font_size',array(
		'label'	=> __('Product Sale Button Font Size','digihigh-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'digihigh_lite_product_sale_section',
		'type'=> 'number'
	));

	// Add the Theme Color Option section.
	$wp_customize->add_section( 'digihigh_lite_theme_color_option', array( 
		'panel' => 'digihigh_lite_panel_id', 
		'title' => esc_html__( 'Theme Color Option', 'digihigh-lite' ) 
	) );

  	$wp_customize->add_setting( 'digihigh_lite_theme_color', array(
	    'default' => '#51006B',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'digihigh_lite_theme_color', array(
  		'label' => 'Color Option',
	    'description' => __('One can change complete theme color on just one click.', 'digihigh-lite'),
	    'section' => 'digihigh_lite_theme_color_option',
	    'settings' => 'digihigh_lite_theme_color',
  	)));
	
	//Layouts
	$wp_customize->add_section( 'digihigh_lite_left_right', array(
    	'title'      => __( 'Layout Settings', 'digihigh-lite' ),
		'priority'   => null,
		'panel' => 'digihigh_lite_panel_id'
	) );

	$wp_customize->add_setting('digihigh_lite_preloader_option',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_preloader_option',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','digihigh-lite'),
       'section' => 'digihigh_lite_left_right'
    ));

    $wp_customize->add_setting( 'digihigh_lite_shop_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digihigh_lite_shop_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Woocommerce Page Sidebar','digihigh-lite'),
		'section' => 'digihigh_lite_left_right'
    ));

	$wp_customize->add_setting( 'digihigh_lite_wocommerce_single_page_sidebar',array(
		'default' => true,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digihigh_lite_wocommerce_single_page_sidebar',array(
    	'type' => 'checkbox',
       	'label' => __('Show / Hide Single Product Page Sidebar','digihigh-lite'),
		'section' => 'digihigh_lite_left_right'
    ));

	$wp_customize->add_setting('digihigh_lite_layout_options',array(
        'default' => 'Right Sidebar',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'	        
	) );
	$wp_customize->add_control('digihigh_lite_layout_options',array(
        'type' => 'radio',
        'label' => __('Sidebar Layouts','digihigh-lite'),
        'section' => 'digihigh_lite_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','digihigh-lite'),
            'Right Sidebar' => __('Right Sidebar','digihigh-lite'),
            'One Column' => __('One Column','digihigh-lite'),
            'Three Columns' => __('Three Columns','digihigh-lite'),
            'Four Columns' => __('Four Columns','digihigh-lite'),
            'Grid Layout' => __('Grid Layout','digihigh-lite')
        ),
	) );

	$wp_customize->add_setting('digihigh_lite_single_page_sidebar_layout', array(
		'default'           => 'One Column',
		'sanitize_callback' => 'digihigh_lite_sanitize_choices',
	));
	$wp_customize->add_control('digihigh_lite_single_page_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Page Layouts', 'digihigh-lite'),
		'section'        => 'digihigh_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'digihigh-lite'),
			'Right Sidebar' => __('Right Sidebar', 'digihigh-lite'),
			'One Column'    => __('One Column', 'digihigh-lite'),
		),
	));

	$wp_customize->add_setting('digihigh_lite_single_post_sidebar_layout', array(
		'default'           => 'Right Sidebar',
		'sanitize_callback' => 'digihigh_lite_sanitize_choices',
	));
	$wp_customize->add_control('digihigh_lite_single_post_sidebar_layout',array(
		'type'           => 'radio',
		'label'          => __('Single Post Layouts', 'digihigh-lite'),
		'section'        => 'digihigh_lite_left_right',
		'choices'        => array(
			'Left Sidebar'  => __('Left Sidebar', 'digihigh-lite'),
			'Right Sidebar' => __('Right Sidebar', 'digihigh-lite'),
			'One Column'    => __('One Column', 'digihigh-lite'),
		),
	));

	$wp_customize->add_setting('digihigh_lite_theme_options',array(
        'default' => 'Default',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_theme_options',array(
        'type' => 'radio',
        'label' => __('Container Box','digihigh-lite'),
        'description' => __('Here you can change the Width layout. ','digihigh-lite'),
        'section' => 'digihigh_lite_left_right',
        'choices' => array(
            'Default' => __('Default','digihigh-lite'),
            'Container' => __('Container','digihigh-lite'),
            'Box Container' => __('Box Container','digihigh-lite'),
        ),
	) );

	// Button
	$wp_customize->add_section( 'digihigh_lite_theme_button', array(
		'title' => __('Button Option','digihigh-lite'),
		'panel' => 'digihigh_lite_panel_id',
	));

	$wp_customize->add_setting('digihigh_lite_button_padding_top_bottom',array(
		'default'=> '',
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_button_padding_top_bottom',array(
		'label'	=> __('Top and Bottom Padding','digihigh-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'digihigh_lite_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting('digihigh_lite_button_padding_left_right',array(
		'default'=> '',
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_button_padding_left_right',array(
		'label'	=> __('Left and Right Padding','digihigh-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'digihigh_lite_theme_button',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'digihigh_lite_button_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'digihigh_lite_button_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','digihigh-lite' ),
		'section'     => 'digihigh_lite_theme_button',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Top Bar
	$wp_customize->add_section('digihigh_lite_topbar_header',array(
		'title'	=> __('Top Bar Section','digihigh-lite'),
		'description'	=> __('Add Top Bar Content here','digihigh-lite'),
		'priority'	=> null,
		'panel' => 'digihigh_lite_panel_id',
	) );

	//Show /Hide Topbar
	$wp_customize->add_setting( 'digihigh_lite_display_topbar',array(
		'default' => false,
      	'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digihigh_lite_display_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Topbar','digihigh-lite' ),
        'section' => 'digihigh_lite_topbar_header'
    ));

    //Sticky Header
	$wp_customize->add_setting( 'digihigh_lite_sticky_header',array(
		'default' => false,
      	'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ) );
    $wp_customize->add_control('digihigh_lite_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Sticky Header','digihigh-lite' ),
        'section' => 'digihigh_lite_topbar_header'
    ));

	$wp_customize->add_setting('digihigh_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('digihigh_lite_youtube_url',array(
		'label'	=> __('Add Youtube link','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_youtube_url',
		'type'		=> 'url'
	) );

	$wp_customize->add_setting('digihigh_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );
	$wp_customize->add_control('digihigh_lite_facebook_url',array(
		'label'	=> __('Add Facebook link','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_facebook_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('digihigh_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('digihigh_lite_twitter_url',array(
		'label'	=> __('Add Twitter link','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_twitter_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('digihigh_lite_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('digihigh_lite_rss_url',array(
		'label'	=> __('Add RSS link','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_rss_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('digihigh_lite_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('digihigh_lite_insta_url',array(
		'label'	=> __('Add Instagram link','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_insta_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('digihigh_lite_pint_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	) );	
	$wp_customize->add_control('digihigh_lite_pint_url',array(
		'label'	=> __('Add Pintrest link','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_pint_url',
		'type'	=> 'url'
	) );

	$wp_customize->add_setting('digihigh_lite_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'digihigh_lite_sanitize_phone_number'
	));	
	$wp_customize->add_control('digihigh_lite_call',array(
		'label'	=> __('Add Phone Number','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_call',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_time',array(
		'label'	=> __('Add Time','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));
	$wp_customize->add_control('digihigh_lite_email',array(
		'label'	=> __('Add Email','digihigh-lite'),
		'section'	=> 'digihigh_lite_topbar_header',
		'setting'	=> 'digihigh_lite_email',
		'type'		=> 'text'
	));

	//home page slider
	$wp_customize->add_section( 'digihigh_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'digihigh-lite' ),
		'priority'   => null,
		'panel' => 'digihigh_lite_panel_id'
	) );

	$wp_customize->add_setting('digihigh_lite_slider_hide_show',array(
      'default' => false,
      'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('digihigh_lite_slider_hide_show',array(
	  'type' => 'checkbox',
	  'label' => __('Show / Hide slider','digihigh-lite'),
	  'section' => 'digihigh_lite_slidersettings',
	));

    $wp_customize->add_setting('digihigh_lite_slider_title_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_slider_title_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Title','digihigh-lite'),
       'section' => 'digihigh_lite_slidersettings'
    ));

    $wp_customize->add_setting('digihigh_lite_slider_content_Show_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_slider_content_Show_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Slider Content','digihigh-lite'),
       'section' => 'digihigh_lite_slidersettings'
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'digihigh_lite_slidersettings_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'digihigh_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'digihigh_lite_slidersettings_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'digihigh-lite' ),
			'section'  => 'digihigh_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('digihigh_lite_slider_overlay',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_slider_overlay',array(
       'type' => 'checkbox',
       'label' => __('Home Page Slider Overlay','digihigh-lite'),
		'description'    => __('This option will add colors over the slider.','digihigh-lite'),
       'section' => 'digihigh_lite_slidersettings'
    ));

    $wp_customize->add_setting('digihigh_lite_slider_image_overlay_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'digihigh_lite_slider_image_overlay_color', array(
		'label'    => __('Home Page Slider Overlay Color', 'digihigh-lite'),
		'section'  => 'digihigh_lite_slidersettings',
		'description'    => __('It will add the color overlay of the slider. To make it transparent, use the below option.','digihigh-lite'),
		'settings' => 'digihigh_lite_slider_image_overlay_color',
	)));

	//content layout
    $wp_customize->add_setting('digihigh_lite_slider_content_alignment',array(
    'default' => 'Left',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_slider_content_alignment',array(
        'type' => 'radio',
        'label' => __('Slider Content Alignment','digihigh-lite'),
        'section' => 'digihigh_lite_slidersettings',
        'choices' => array(
            'Center' => __('Center','digihigh-lite'),
            'Left' => __('Left','digihigh-lite'),
            'Right' => __('Right','digihigh-lite'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'digihigh_lite_slider_excerpt_length', array(
		'default'              => 20,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	) );
	$wp_customize->add_control( 'digihigh_lite_slider_excerpt_length', array(
		'label'       => esc_html__( 'Slider Excerpt length','digihigh-lite' ),
		'section'     => 'digihigh_lite_slidersettings',
		'type'        => 'number',
		'settings'    => 'digihigh_lite_slider_excerpt_length',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('digihigh_lite_slider_image_opacity',array(
      'default'              => 0.6,
      'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control( 'digihigh_lite_slider_image_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','digihigh-lite' ),
	'section'     => 'digihigh_lite_slidersettings',
	'type'        => 'select',
	'settings'    => 'digihigh_lite_slider_image_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','digihigh-lite'),
		'0.1' =>  esc_attr('0.1','digihigh-lite'),
		'0.2' =>  esc_attr('0.2','digihigh-lite'),
		'0.3' =>  esc_attr('0.3','digihigh-lite'),
		'0.4' =>  esc_attr('0.4','digihigh-lite'),
		'0.5' =>  esc_attr('0.5','digihigh-lite'),
		'0.6' =>  esc_attr('0.6','digihigh-lite'),
		'0.7' =>  esc_attr('0.7','digihigh-lite'),
		'0.8' =>  esc_attr('0.8','digihigh-lite'),
		'0.9' =>  esc_attr('0.9','digihigh-lite')
	),
	));

	$wp_customize->add_setting( 'digihigh_lite_slider_speed_option',array(
		'default' => 3000,
		'sanitize_callback'    => 'digihigh_lite_sanitize_number_range',
	));
	$wp_customize->add_control( 'digihigh_lite_slider_speed_option',array(
		'label' => esc_html__( 'Slider Speed Option','digihigh-lite' ),
		'section' => 'digihigh_lite_slidersettings',
		'type'        => 'range',
		'input_attrs' => array(
			'min' => 1000,
			'max' => 5000,
			'step' => 500,
		),
	));

	$wp_customize->add_setting('digihigh_lite_slider_image_height',array(
		'default'=> __('550','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_slider_image_height',array(
		'label'	=> __('Slider Image Height','digihigh-lite'),
		'section'=> 'digihigh_lite_slidersettings',
		'type'=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_slider_button',array(
		'default'=> __('READ MORE','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_slider_button',array(
		'label'	=> __('Slider Button','digihigh-lite'),
		'section'=> 'digihigh_lite_slidersettings',
		'type'=> 'text'
	));

	//Our Causes
	$wp_customize->add_section('digihigh_lite_causes_section',array(
		'title'	=> __('Our Causes','digihigh-lite'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'digihigh_lite_panel_id',
	));
	
	$wp_customize->add_setting('digihigh_lite_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	$wp_customize->add_control('digihigh_lite_title',array(
		'label'	=> __('Title','digihigh-lite'),
		'section'	=> 'digihigh_lite_causes_section',
		'type'	=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('digihigh_lite_causes_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'digihigh_lite_sanitize_choices',
	));
	$wp_customize->add_control('digihigh_lite_causes_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','digihigh-lite'),
		'section' => 'digihigh_lite_causes_section',
	));

	//404 Page Setting
	$wp_customize->add_section('digihigh_lite_404_page_setting',array(
		'title'	=> __('404 Page','digihigh-lite'),
		'panel' => 'digihigh_lite_panel_id',
	));	

	$wp_customize->add_setting('digihigh_lite_title_404_page',array(
		'default'=> __('404 Not Found','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_title_404_page',array(
		'label'	=> __('404 Page Title','digihigh-lite'),
		'section'=> 'digihigh_lite_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_content_404_page',array(
		'default'=> __('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_content_404_page',array(
		'label'	=> __('404 Page Content','digihigh-lite'),
		'section'=> 'digihigh_lite_404_page_setting',
		'type'=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_button_404_page',array(
		'default'=> __('Back to Home Page','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_button_404_page',array(
		'label'	=> __('404 Page Button','digihigh-lite'),
		'section'=> 'digihigh_lite_404_page_setting',
		'type'=> 'text'
	));

	//Responsive Media Settings
	$wp_customize->add_section('digihigh_lite_responsive_setting',array(
		'title'	=> __('Responsive Settings','digihigh-lite'),
		'panel' => 'digihigh_lite_panel_id',
	));

    $wp_customize->add_setting('digihigh_lite_responsive_sticky_header',array(
       'default' => false,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_responsive_sticky_header',array(
       'type' => 'checkbox',
       'label' => __('Sticky Header','digihigh-lite'),
       'section' => 'digihigh_lite_responsive_setting'
    ));

    $wp_customize->add_setting('digihigh_lite_responsive_slider',array(
       'default' => false,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_responsive_slider',array(
       'type' => 'checkbox',
       'label' => __('Slider','digihigh-lite'),
       'section' => 'digihigh_lite_responsive_setting'
    ));

    $wp_customize->add_setting('digihigh_lite_responsive_scroll',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_responsive_scroll',array(
       'type' => 'checkbox',
       'label' => __('Scroll To Top','digihigh-lite'),
       'section' => 'digihigh_lite_responsive_setting'
    ));

    $wp_customize->add_setting('digihigh_lite_responsive_sidebar',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_responsive_sidebar',array(
       'type' => 'checkbox',
       'label' => __('Sidebar','digihigh-lite'),
       'section' => 'digihigh_lite_responsive_setting'
    ));

    $wp_customize->add_setting('digihigh_lite_responsive_preloader',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_responsive_preloader',array(
       'type' => 'checkbox',
       'label' => __('Preloader','digihigh-lite'),
       'section' => 'digihigh_lite_responsive_setting'
    ));

	//Blog Post
	$wp_customize->add_section('digihigh_lite_blog_post',array(
		'title'	=> __('Blog Page Settings','digihigh-lite'),
		'panel' => 'digihigh_lite_panel_id',
	));	

	$wp_customize->add_setting('digihigh_lite_date_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','digihigh-lite'),
       'section' => 'digihigh_lite_blog_post'
    ));

    $wp_customize->add_setting('digihigh_lite_comment_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Comments','digihigh-lite'),
       'section' => 'digihigh_lite_blog_post'
    ));

    $wp_customize->add_setting('digihigh_lite_author_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Author','digihigh-lite'),
       'section' => 'digihigh_lite_blog_post'
    ));

    $wp_customize->add_setting('digihigh_lite_tags_hide',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Single Post Tags','digihigh-lite'),
       'section' => 'digihigh_lite_blog_post'
    ));

    $wp_customize->add_setting('digihigh_lite_show_featured_image_single_post',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_show_featured_image_single_post',array(
       'type' => 'checkbox',
       'label' => __('Single Post Image','digihigh-lite'),
       'section' => 'digihigh_lite_blog_post'
    ));

    $wp_customize->add_setting('digihigh_lite_blog_post_description_option',array(
    	'default'   => 'Excerpt Content',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_blog_post_description_option',array(
        'type' => 'radio',
        'label' => __('Post Description Length','digihigh-lite'),
        'section' => 'digihigh_lite_blog_post',
        'choices' => array(
            'No Content' => __('No Content','digihigh-lite'),
            'Excerpt Content' => __('Excerpt Content','digihigh-lite'),
            'Full Content' => __('Full Content','digihigh-lite'),
        ),
	) );

    $wp_customize->add_setting( 'digihigh_lite_excerpt_number', array(
		'default'              => 20,
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'digihigh_lite_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','digihigh-lite' ),
		'section'     => 'digihigh_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'digihigh_lite_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting( 'digihigh_lite_post_suffix_option', array(
		'default'   => __('...','digihigh-lite'), 
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'digihigh_lite_post_suffix_option', array(
		'label'       => esc_html__( 'Post Excerpt Indicator Option','digihigh-lite' ),
		'section'     => 'digihigh_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'digihigh_lite_post_suffix_option',
	) );

	$wp_customize->add_setting('digihigh_lite_button_text',array(
		'default'=> __('Read More','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_button_text',array(
		'label'	=> __('Add Button Text','digihigh-lite'),
		'section'=> 'digihigh_lite_blog_post',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'digihigh_lite_metabox_separator_blog_post', array(
		'default'   => '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'digihigh_lite_metabox_separator_blog_post', array(
		'label'       => esc_html__( 'Meta Box Separator','digihigh-lite' ),
		'input_attrs' => array(
            'placeholder' => __( 'Add Meta Separator. e.g.: "|", "/", etc.', 'digihigh-lite' ),
        ),
		'section'     => 'digihigh_lite_blog_post',
		'type'        => 'text',
		'settings'    => 'digihigh_lite_metabox_separator_blog_post',
	) );

	$wp_customize->add_setting('digihigh_lite_display_blog_page_post',array(
        'default' => 'In Box',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_display_blog_page_post',array(
        'type' => 'radio',
        'label' => __('Display Blog Page Post :','digihigh-lite'),
        'section' => 'digihigh_lite_blog_post',
        'choices' => array(
            'In Box' => __('In Box','digihigh-lite'),
            'Without Box' => __('Without Box','digihigh-lite'),
        ),
	) );

	$wp_customize->add_setting('digihigh_lite_blog_post_pagination',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_blog_post_pagination',array(
       'type' => 'checkbox',
       'label' => __('Pagination in Blog Page','digihigh-lite'),
       'section' => 'digihigh_lite_blog_post'
    ));

	//no Result Found
	$wp_customize->add_section('digihigh_lite_noresult_found',array(
		'title'	=> __('No Result Found','digihigh-lite'),
		'panel' => 'digihigh_lite_panel_id',
	));	

	$wp_customize->add_setting('digihigh_lite_nosearch_found_title',array(
		'default'=> __('Nothing Found','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_nosearch_found_title',array(
		'label'	=> __('No Result Found Title','digihigh-lite'),
		'section'=> 'digihigh_lite_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_nosearch_found_content',array(
		'default'=> __('Sorry, but nothing matched your search terms. Please try again with some different keywords.','digihigh-lite'),
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('digihigh_lite_nosearch_found_content',array(
		'label'	=> __('No Result Found Content','digihigh-lite'),
		'section'=> 'digihigh_lite_noresult_found',
		'type'=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_show_noresult_search',array(
       'default' => true,
       'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
    ));
    $wp_customize->add_control('digihigh_lite_show_noresult_search',array(
       'type' => 'checkbox',
       'label' => __('No Result search','digihigh-lite'),
       'section' => 'digihigh_lite_noresult_found'
    ));

	//footer
	$wp_customize->add_section('digihigh_lite_footer_section',array(
		'title'	=> __('Footer Text','digihigh-lite'),
		'priority'	=> null,
		'panel' => 'digihigh_lite_panel_id',
	));

	$wp_customize->add_setting('digihigh_lite_footer_widget_areas',array(
        'default'           => 4,
        'sanitize_callback' => 'digihigh_lite_sanitize_choices',
    ));
    $wp_customize->add_control('digihigh_lite_footer_widget_areas',array(
        'type'        => 'select',
        'label'       => __('Footer widget area', 'digihigh-lite'),
        'section'     => 'digihigh_lite_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'digihigh-lite'),
        'choices' => array(
            '1'     => __('One', 'digihigh-lite'),
            '2'     => __('Two', 'digihigh-lite'),
            '3'     => __('Three', 'digihigh-lite'),
            '4'     => __('Four', 'digihigh-lite')
        ),
    ));

    $wp_customize->add_setting('digihigh_lite_footer_widget_bg_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'digihigh_lite_footer_widget_bg_color', array(
		'label'    => __('Footer Widget Background Color', 'digihigh-lite'),
		'section'  => 'digihigh_lite_footer_section',
	)));

	$wp_customize->add_setting('digihigh_lite_footer_widget_bg_image',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw',
	));
	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'digihigh_lite_footer_widget_bg_image',array(
        'label' => __('Footer Widget Background Image','digihigh-lite'),
        'section' => 'digihigh_lite_footer_section'
	)));
	
	$wp_customize->add_setting('digihigh_lite_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));	
	$wp_customize->add_control('digihigh_lite_footer_copy',array(
		'label'	=> __('Copyright Text','digihigh-lite'),
		'section'	=> 'digihigh_lite_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('digihigh_lite_copyright_content_align',array(
        'default' => 'center',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_copyright_content_align',array(
        'type' => 'select',
        'label' => __('Copyright Text Alignment ','digihigh-lite'),
        'section' => 'digihigh_lite_footer_section',
        'choices' => array(
            'left' => __('Left','digihigh-lite'),
            'right' => __('Right','digihigh-lite'),
            'center' => __('Center','digihigh-lite'),
        ),
	) );

	$wp_customize->add_setting('digihigh_lite_footer_content_font_size',array(
		'default'=> 16,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_footer_content_font_size',array(
		'label' => esc_html__( 'Copyright Font Size','digihigh-lite' ),
		'section'=> 'digihigh_lite_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	));

	$wp_customize->add_setting('digihigh_lite_copyright_padding',array(
		'default'=> 15,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_copyright_padding',array(
		'label'	=> __('Copyright Padding','digihigh-lite'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'digihigh_lite_footer_section',
		'type'=> 'number'
	));

	$wp_customize->add_setting('digihigh_lite_enable_disable_scroll',array(
        'default' => true,
        'sanitize_callback'	=> 'digihigh_lite_sanitize_checkbox'
	));
	$wp_customize->add_control('digihigh_lite_enable_disable_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll Top Button','digihigh-lite'),
      	'section' => 'digihigh_lite_footer_section',
	));

	$wp_customize->add_setting('digihigh_lite_scroll_setting',array(
        'default' => 'Right',
        'sanitize_callback' => 'digihigh_lite_sanitize_choices'
	));
	$wp_customize->add_control('digihigh_lite_scroll_setting',array(
        'type' => 'select',
        'label' => __('Scroll Back to Top Position','digihigh-lite'),
        'section' => 'digihigh_lite_footer_section',
        'choices' => array(
            'Left' => __('Left','digihigh-lite'),
            'Right' => __('Right','digihigh-lite'),
            'Center' => __('Center','digihigh-lite'),
        ),
	) );

	$wp_customize->add_setting('digihigh_lite_scroll_font_size_icon',array(
		'default'=> 20,
		'sanitize_callback'	=> 'digihigh_lite_sanitize_float',
	));
	$wp_customize->add_control('digihigh_lite_scroll_font_size_icon',array(
		'label'	=> __('Scroll Icon Font Size','digihigh-lite'),
		'section'=> 'digihigh_lite_footer_section',
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
        'type' => 'number',
	) );
	
}
add_action( 'customize_register', 'digihigh_lite_customize_register' );	

// logo resize
load_template( trailingslashit( get_template_directory() ) . '/inc/logo/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class DIGIHIGH_Lite_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'DIGIHIGH_Lite_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new DIGIHIGH_Lite_Customize_Section_Pro(
				$manager,
				'digihigh_lite_example_1',
				array(
					'priority'   => 9,
					'title'    => esc_html__( 'Digihigh Pro Theme', 'digihigh-lite' ),
					'pro_text' => esc_html__( 'Go Pro','digihigh-lite' ),
					'pro_url'  => esc_url('https://netnus.com/product/digihigh-pro-wordpress-theme-for-marketing/')
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'digihigh-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'digihigh-lite-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
DIGIHIGH_Lite_Customize::get_instance();