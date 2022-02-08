<?php
/**
 * @package digihigh-lite
 * @subpackage digihigh-lite
 * @since digihigh-lite 1.0
 * Setup the WordPress core custom header feature.
 *
 * @uses digihigh_lite_header_style()
*/

function digihigh_lite_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'digihigh_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1355,
		'height'                 => 105,
		'flex-width'         	=> true,
        'flex-height'        	=> true,
		'wp-head-callback'       => 'digihigh_lite_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'digihigh_lite_custom_header_setup' );

if ( ! function_exists( 'digihigh_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see digihigh_lite_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'digihigh_lite_header_style' );
function digihigh_lite_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$digihigh_lite_custom_css = "
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'digihigh-lite-basic-style', $digihigh_lite_custom_css );
	endif;
}
endif; // digihigh_lite_header_style