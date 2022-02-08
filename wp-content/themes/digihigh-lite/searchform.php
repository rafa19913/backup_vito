<?php
/**
 * The template for displaying search forms in digihigh-lite
 *
 * @package digihigh-lite
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label>
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'digihigh-lite' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder','digihigh-lite' ); ?>" value="<?php echo esc_attr( get_search_query()) ?>" name="s">
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_html_x( 'Search', 'submit button','digihigh-lite' ); ?>">
</form>