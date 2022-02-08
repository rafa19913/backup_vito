<?php
/**
 * appzend functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package appzend
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'appzend_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function appzend_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on appzend, use a find and replace
		 * to change 'appzend' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'appzend', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable support for post formats
		 *
		 * @link https://developer.wordpress.org/themes/functionality/post-formats/
		 */
		add_theme_support( 'post-formats', array( 'gallery', 'quote', 'audio', 'image', 'video' ) );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary Menu', 'appzend' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		/**
		 * Registers an editor stylesheet for the theme.
		 */
		function appzend_theme_add_editor_styles() {
			add_editor_style( 'appzend-editor-style.css' );
		}
		add_action( 'admin_init', 'appzend_theme_add_editor_styles' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background',
			apply_filters(
				'appzend_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'appzend_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function appzend_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'appzend_content_width', 640 );
}
add_action( 'after_setup_theme', 'appzend_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function appzend_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar Widget Area', 'appzend' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'appzend' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Left Sidebar Widget Area', 'appzend' ),
		'id'            => 'sidebar-2',
		'description'   => esc_html__( 'Add widgets here.', 'appzend' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget Area', 'appzend' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'appzend' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));

}
add_action( 'widgets_init', 'appzend_widgets_init' );


if ( ! function_exists( 'appzend_fonts_url' ) ) :

	/**
	 * Register Google fonts for appzend
	 *
	 * Create your own appzend_fonts_url() function to override in a child theme.
	 *
	 * @since appzend 1.0.0
	 *
	 * @return string Google fonts URL for the theme.
	 */

    function appzend_fonts_url() {

        $fonts_url = '';

        $font_families = array();

        
        if ( 'off' !== _x( 'on', 'Montserrat: on or off', 'appzend' ) ) {
            $font_families[] = 'Montserrat:wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,900';
        }

        if ( 'off' !== _x( 'on', 'Livvic: on or off', 'appzend' ) ) {
            $font_families[] = 'Livvic:wght@100;0,200;0,300;0,400;0,500;0,600;0,700;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,900';
        }

        if( $font_families ) {

            $query_args = array(

                'family' => urlencode( implode( '|', $font_families ) ),
                'subset' => urlencode( 'latin,latin-ext' ),
            );

            $fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
        }

        return esc_url ( $fonts_url );
    }

endif;

/**
 * Enqueue scripts and styles.
 */
function appzend_scripts() {

	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	
	wp_enqueue_style( 'owl-carousel', get_template_directory_uri(). '/assets/library/owlcarousel/css/owl.carousel' . esc_attr( $min ) . '.css');
	
	wp_enqueue_script( 'owl-carousel', get_template_directory_uri() . '/assets/library/owlcarousel/js/owl.carousel' . esc_attr ( $min ) . '.js', array('jquery'),'2.3.4', true );

	wp_enqueue_style( 'appzend-fonts', appzend_fonts_url(), array(), null );

	wp_enqueue_style( 'fontawesome-4-5', get_template_directory_uri(). '/assets/library/fontawesome/css/all' . esc_attr( $min ) . '.css');

	wp_enqueue_style( 'appzend-style', get_stylesheet_uri(), array(), _S_VERSION );

	if (class_exists('woocommerce') && get_theme_mod('appzend_producthotoffer_section', 'disable') == 'enable') {
		/* Countdown */
		wp_enqueue_script('jquery-countdown', get_template_directory_uri() . '/assets/js/jquery.countdown.js', array('jquery'), true);
	}
	
	wp_enqueue_script( 'appzend-custom', get_template_directory_uri() . '/assets/js/appzend-custom.js', array(), _S_VERSION, true );
	wp_localize_script( 'appzend-custom', 'appzend_tabs_ajax_action', array( 'ajaxurl' => admin_url( 'admin-ajax.php') ) );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'appzend_scripts' );

/**
 * Admin Enqueue scripts and styles.
*/
if ( ! function_exists( 'appzend_admin_scripts' ) ) {

    function appzend_admin_scripts( $hook ) {

		wp_enqueue_style( 'wp-color-picker' );

		wp_enqueue_script( 'wp-color-picker' );

		if( $hook != 'edit.php' && $hook != 'post.php' && $hook != 'post-new.php' && 'widgets.php' != $hook ) return;
		
		wp_enqueue_script( 'wp-color-picker-alpha', get_template_directory_uri() . '/assets/js/wp-color-picker-alpha.min.js', array( 'wp-color-picker' ), '3.0.0', true );
        wp_enqueue_style( 'appzend-admin-style', get_template_directory_uri() . '/assets/css/appzend-admin.css');    
    }
}
add_action('admin_enqueue_scripts', 'appzend_admin_scripts');


/**
 * Sets the Appzend Template Instead of front-page.
 */
function appzend_front_page_set( $template ) {

	$appzend_front_page = get_theme_mod( 'appzend_enable_frontpage', 'disable');

	if( 'enable' != $appzend_front_page ){

		if ( 'posts' == get_option( 'show_on_front' ) ) {

		include( get_home_template() );

		} else {

		include( get_page_template() );
		
		}
	}
}
add_filter( 'appzend_enable_front_page', 'appzend_front_page_set' );

/**
 * Load Other Files.
*/
require get_template_directory() . '/inc/init.php';

if ( ! function_exists( 'appzend_admin_scripts_2' ) ) {

    function appzend_admin_scripts_2() {

        wp_enqueue_script( 'appzend-admin-script', get_template_directory_uri() . '/assets/js/admin-custom.js');    
    }
}
add_action('admin_enqueue_scripts', 'appzend_admin_scripts_2');

/** remove widgets block editor */
function appzend_widget_theme_support() {
    remove_theme_support( 'widgets-block-editor' );
}
add_action( 'after_setup_theme', 'appzend_widget_theme_support' );