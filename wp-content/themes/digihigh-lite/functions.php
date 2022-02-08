<?php
/**
 * Digihigh Lite functions and definitions
 *
 * @package digihigh-lite
 */
/**
 * Set the content width based on the theme's design and stylesheet.
 */
 
/* Theme Setup */
if ( ! function_exists( 'digihigh_lite_setup' ) ) :

function digihigh_lite_setup() {
	
	$GLOBALS['content_width'] = apply_filters( 'digihigh_lite_content_width', 640 );

	load_theme_textdomain( 'digihigh-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	add_image_size('digihigh-lite-homepage-thumb',250,145,true);
    register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'digihigh-lite' ),
	) );

	add_theme_support( 'custom-background', array(
		'default-color' => 'f1f1f1'
	) );
	   
	add_editor_style( array( 'css/editor-style.css', digihigh_lite_font_url() ) );
// Theme Activation Notice
	global $pagenow;
	
	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated']) ) {
		add_action( 'admin_notices', 'digihigh_lite_activation_notice' );
	}
}

endif;
add_action( 'after_setup_theme', 'digihigh_lite_setup' );

// Notice after Theme Activation
function digihigh_lite_activation_notice() {
	echo '<div class="notice notice-success is-dismissible get-started">';
		echo '<p>'. esc_html__( 'Thank you for choosing ThemeShopy. We are sincerely obliged to offer our best services to you. Please proceed towards welcome page and give us the privilege to serve you.', 'digihigh-lite' ) .'</p>';
		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=digihigh_lite_guide' ) ) .'" class="button button-primary">'. esc_html__( 'Click here...', 'digihigh-lite' ) .'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function digihigh_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'digihigh-lite' ),
		'description'   => __( 'Appears on blog page sidebar', 'digihigh-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'digihigh-lite' ),
		'description'   => __( 'Appears on page sidebar', 'digihigh-lite' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Third Column Sidebar', 'digihigh-lite' ),
		'description'   => __( 'Appears on page sidebar', 'digihigh-lite' ),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	//Footer widget areas
	$digihigh_lite_widget_areas = get_theme_mod('digihigh_lite_footer_widget_areas', '4');
	for ($i=1; $i<=$digihigh_lite_widget_areas; $i++) {
		register_sidebar( array(
			'name'          => __( 'Footer Nav ', 'digihigh-lite' ) . $i,
			'id'            => 'footer-' . $i,
			'description'   => '',
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		) );
	}

	register_sidebar( array(
		'name'          => __( 'Shop Page Sidebar', 'digihigh-lite' ),
		'description'   => __( 'Appears on shop page', 'digihigh-lite' ),
		'id'            => 'woocommerce_sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Single Product Page Sidebar', 'digihigh-lite' ),
		'description'   => __( 'Appears on shop page', 'digihigh-lite' ),
		'id'            => 'woocommerce-single-sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}

add_action( 'widgets_init', 'digihigh_lite_widgets_init' );

/* Theme Font URL */
function digihigh_lite_font_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */

function digihigh_lite_scripts() {
	wp_enqueue_style( 'digihigh-lite-font', digihigh_lite_font_url(), array() );
	// blocks-css
	wp_enqueue_style( 'digihigh-lite-block-style', get_theme_file_uri('/css/blocks.css') );
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/css/bootstrap.css' );
	wp_enqueue_style( 'digihigh-lite-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'digihigh-lite-effect-css', esc_url(get_template_directory_uri()).'/css/effect.css' );
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/css/fontawesome-all.css' );

	// Paragraph
	    $digihigh_lite_paragraph_color = get_theme_mod('digihigh_lite_paragraph_color', '');
	    $digihigh_lite_paragraph_font_family = get_theme_mod('digihigh_lite_paragraph_font_family', '');
	    $digihigh_lite_paragraph_font_size = get_theme_mod('digihigh_lite_paragraph_font_size', '');
	// "a" tag
		$digihigh_lite_atag_color = get_theme_mod('digihigh_lite_atag_color', '');
	    $digihigh_lite_atag_font_family = get_theme_mod('digihigh_lite_atag_font_family', '');
	// "li" tag
		$digihigh_lite_li_color = get_theme_mod('digihigh_lite_li_color', '');
	    $digihigh_lite_li_font_family = get_theme_mod('digihigh_lite_li_font_family', '');
	// H1
		$digihigh_lite_h1_color = get_theme_mod('digihigh_lite_h1_color', '');
	    $digihigh_lite_h1_font_family = get_theme_mod('digihigh_lite_h1_font_family', '');
	    $digihigh_lite_h1_font_size = get_theme_mod('digihigh_lite_h1_font_size', '');
	// H2
		$digihigh_lite_h2_color = get_theme_mod('digihigh_lite_h2_color', '');
	    $digihigh_lite_h2_font_family = get_theme_mod('digihigh_lite_h2_font_family', '');
	    $digihigh_lite_h2_font_size = get_theme_mod('digihigh_lite_h2_font_size', '');
	// H3
		$digihigh_lite_h3_color = get_theme_mod('digihigh_lite_h3_color', '');
	    $digihigh_lite_h3_font_family = get_theme_mod('digihigh_lite_h3_font_family', '');
	    $digihigh_lite_h3_font_size = get_theme_mod('digihigh_lite_h3_font_size', '');
	// H4
		$digihigh_lite_h4_color = get_theme_mod('digihigh_lite_h4_color', '');
	    $digihigh_lite_h4_font_family = get_theme_mod('digihigh_lite_h4_font_family', '');
	    $digihigh_lite_h4_font_size = get_theme_mod('digihigh_lite_h4_font_size', '');
	// H5
		$digihigh_lite_h5_color = get_theme_mod('digihigh_lite_h5_color', '');
	    $digihigh_lite_h5_font_family = get_theme_mod('digihigh_lite_h5_font_family', '');
	    $digihigh_lite_h5_font_size = get_theme_mod('digihigh_lite_h5_font_size', '');
	// H6
		$digihigh_lite_h6_color = get_theme_mod('digihigh_lite_h6_color', '');
	    $digihigh_lite_h6_font_family = get_theme_mod('digihigh_lite_h6_font_family', '');
	    $digihigh_lite_h6_font_size = get_theme_mod('digihigh_lite_h6_font_size', '');

		$digihigh_lite_custom_css ='
			p,span{
			    color:'.esc_html($digihigh_lite_paragraph_color).'!important;
			    font-family: '.esc_html($digihigh_lite_paragraph_font_family).';
			    font-size: '.esc_html($digihigh_lite_paragraph_font_size).';
			}
			a{
			    color:'.esc_html($digihigh_lite_atag_color).'!important;
			    font-family: '.esc_html($digihigh_lite_atag_font_family).';
			}
			li{
			    color:'.esc_html($digihigh_lite_li_color).'!important;
			    font-family: '.esc_html($digihigh_lite_li_font_family).';
			}
			h1{
			    color:'.esc_html($digihigh_lite_h1_color).'!important;
			    font-family: '.esc_html($digihigh_lite_h1_font_family).'!important;
			    font-size: '.esc_html($digihigh_lite_h1_font_size).'!important;
			}
			h2{
			    color:'.esc_html($digihigh_lite_h2_color).'!important;
			    font-family: '.esc_html($digihigh_lite_h2_font_family).'!important;
			    font-size: '.esc_html($digihigh_lite_h2_font_size).'!important;
			}
			h3{
			    color:'.esc_html($digihigh_lite_h3_color).'!important;
			    font-family: '.esc_html($digihigh_lite_h3_font_family).'!important;
			    font-size: '.esc_html($digihigh_lite_h3_font_size).'!important;
			}
			h4{
			    color:'.esc_html($digihigh_lite_h4_color).'!important;
			    font-family: '.esc_html($digihigh_lite_h4_font_family).'!important;
			    font-size: '.esc_html($digihigh_lite_h4_font_size).'!important;
			}
			h5{
			    color:'.esc_html($digihigh_lite_h5_color).'!important;
			    font-family: '.esc_html($digihigh_lite_h5_font_family).'!important;
			    font-size: '.esc_html($digihigh_lite_h5_font_size).'!important;
			}
			h6{
			    color:'.esc_html($digihigh_lite_h6_color).'!important;
			    font-family: '.esc_html($digihigh_lite_h6_font_family).'!important;
			    font-size: '.esc_html($digihigh_lite_h6_font_size).'!important;
			}
			';

	wp_add_inline_style( 'digihigh-lite-basic-style',$digihigh_lite_custom_css );

	wp_enqueue_script( 'digihigh-lite-customscripts', esc_url(get_template_directory_uri()) . '/js/custom.js', array('jquery') );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/js/jquery.superfish.js', array('jquery') ,'',true);
	require get_parent_theme_file_path( '/inc/ts-color-pallete.php' );
	wp_add_inline_style( 'digihigh-lite-basic-style',$digihigh_lite_custom_css );
	
}
add_action( 'wp_enqueue_scripts', 'digihigh_lite_scripts' );

/*radio button sanitization*/
 function digihigh_lite_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

function digihigh_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function digihigh_lite_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function digihigh_lite_sanitize_checkbox( $input ) {
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function digihigh_lite_sanitize_float( $input ) {
	return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

function digihigh_lite_sanitize_number_range( $number, $setting ) {
	$number = absint( $number );
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

//* Excerpt Limit Begin */
function digihigh_lite_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'digihigh_lite_loop_columns');
if (!function_exists('digihigh_lite_loop_columns')) {
	function digihigh_lite_loop_columns() {
		$columns = get_theme_mod( 'digihigh_lite_wooproducts_per_columns', 3 );
		return $columns; // 3 products per row
	}
}

//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'digihigh_lite_shop_per_page', 20 );
function digihigh_lite_shop_per_page( $cols ) {
  	$cols = get_theme_mod( 'digihigh_lite_wooproducts_per_page', 9 );
	return $cols;
}

define('DIGIHIGH_LITE_BUY_NOW',__('https://netnus.com/product/digihigh-pro-wordpress-theme-for-marketing/','digihigh-lite'));
define('DIGIHIGH_LITE_LIVE_DEMO',__('https://netnus.net/digihigh/','digihigh-lite'));
define('DIGIHIGH_LITE_PRO_DOC',__('https://netnus.com/Documentation/','digihigh-lite'));
define('DIGIHIGH_LITE_FREE_DOC',__('https://netnus.com/Documentation/','digihigh-lite'));
define('DIGIHIGH_LITE_CONTACT',__('https://netnus.com/contact/','digihigh-lite'));
define('DIGIHIGH_LITE_CREDIT',__('https://netnus.com/product/digihigh-lite/','digihigh-lite'));

if ( ! function_exists( 'digihigh_lite_credit' ) ) {
	function digihigh_lite_credit(){
		echo "<a href=".esc_url(DIGIHIGH_LITE_CREDIT).">".esc_html__('Digihigh WordPress Theme','digihigh-lite')."</a>";
	}
}

/* Custom header additions. */
require get_template_directory() . '/inc/custom-header.php';

/* Custom template tags for this theme. */
require get_template_directory() . '/inc/template-tags.php';

/* Customizer additions. */
require get_template_directory() . '/inc/customizer.php';

/* admin file. */
require get_template_directory() . '/inc/admin/admin.php';