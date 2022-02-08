<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package digihigh-lite
 */

get_header(); ?>

<main id="maincontent" role="main" class="content-ts">
	<div class="container middle-align">
		<h1><?php echo esc_html(get_theme_mod('digihigh_lite_title_404_page',__('404 Not Found','digihigh-lite')));?></h1>
		<p class="text-404"><?php echo esc_html(get_theme_mod('digihigh_lite_content_404_page',__('Looks like you have taken a wrong turn&hellip. Dont worry&hellip it happens to the best of us.','digihigh-lite')));?></p>
		<?php if( get_theme_mod('digihigh_lite_button_404_page','Back to Home Page') != ''){ ?>
			<div class="read-moresec">
        		<a href="<?php echo esc_url(home_url()); ?>" class="button"><?php echo esc_html(get_theme_mod('digihigh_lite_button_404_page',__('Back to Home Page','digihigh-lite')));?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('digihigh_lite_button_404_page',__('Back to Home Page','digihigh-lite')));?></span></a>
        	</div>
    	<?php } ?>
	</div>
	<div class="clearfix"></div>
</main>

<?php get_footer(); ?>