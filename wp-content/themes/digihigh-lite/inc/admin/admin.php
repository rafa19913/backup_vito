<?php
//about theme info
add_action( 'admin_menu', 'digihigh_lite_abouttheme' );
function digihigh_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Digihigh Theme', 'digihigh-lite'), esc_html__('About Digihigh Theme', 'digihigh-lite'), 'edit_theme_options', 'digihigh_lite_guide', 'digihigh_lite_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function digihigh_lite_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) .'/inc/admin/admin.css');
}
add_action('admin_enqueue_scripts', 'digihigh_lite_admin_theme_style');

//guidline for about theme
function digihigh_lite_mostrar_guide() {
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
 <div class="wrapper-info">
	 <div class="header">
	 	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/logo.png" alt="" />
 		<p><?php esc_html_e('Most of our outstanding theme is elegant, responsive, multifunctional, SEO friendly has amazing features and functionalities that make them highly demanding for designers and bloggers, who ought to excel in web development domain. Our Netnus has got everything that an individual and group need to be successful in their venture.', 'digihigh-lite'); ?></p>
		<div class="main-button">
			<a href="<?php echo esc_url( DIGIHIGH_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'digihigh-lite'); ?></a>
			<a href="<?php echo esc_url( DIGIHIGH_LITE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'digihigh-lite'); ?></a>
			<a href="<?php echo esc_url( DIGIHIGH_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'digihigh-lite'); ?></a>
		</div>
	</div>
	<div class="button-bg">
	<button class="tablink" onclick="openPage('Home', this, '')"><?php esc_html_e('Lite Theme Setup', 'digihigh-lite'); ?></button>
	<button class="tablink" onclick="openPage('Contact', this, '')"><?php esc_html_e('Premium Theme info', 'digihigh-lite'); ?></button>
	</div>
	<div id="Home" class="tabcontent tab1">
	  	<h3><?php esc_html_e('How to set up homepage', 'digihigh-lite'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( DIGIHIGH_LITE_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'digihigh-lite'); ?></a>
			<a href="<?php echo esc_url( DIGIHIGH_LITE_CONTACT ); ?>"><?php esc_html_e('Support', 'digihigh-lite'); ?></a>
			<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Start Customizing', 'digihigh-lite'); ?></a>
		</div>
	  	<div class="documentation">
		  	<div class="image-docs">
				<ul>
					<li> <b><?php esc_html_e('Step 1.', 'digihigh-lite'); ?></b> <?php esc_html_e('Follow these instructions to setup Home page.', 'digihigh-lite'); ?></li>
					<li> <b><?php esc_html_e('Step 2.', 'digihigh-lite'); ?></b> <?php esc_html_e(' Create Page to set template: Go to Dashboard >> Pages >> Add New Page.Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.', 'digihigh-lite'); ?></li>
				</ul>
		  	</div>
		  	<div class="doc-image">
		  		<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/home-page-template.png" alt="" />	
		  	</div>
		  	<div class="clearfixed">
				<div class="doc-image1">
					<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/set-front-page.png" alt="" />	
			    </div>
			    <div class="image-docs1">
				    <ul>
						<li> <b><?php esc_html_e('Step 3.', 'digihigh-lite'); ?></b> <?php esc_html_e('Set the front page: Go to Setting >> Reading >> Set the front page display static page to home page', 'digihigh-lite'); ?></li>
					</ul>
			  	</div>
			</div>
		</div>
	</div>

	<div id="Contact" class="tabcontent">
	 	<h3><?php esc_html_e('Premium Theme Info', 'digihigh-lite'); ?></h3>
	  	<div class="sec-button">
			<a href="<?php echo esc_url( DIGIHIGH_LITE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'digihigh-lite'); ?></a>
			<a href="<?php echo esc_url( DIGIHIGH_LITE_LIVE_DEMO ); ?>"><?php esc_html_e('Live Demo', 'digihigh-lite'); ?></a>
			<a href="<?php echo esc_url( DIGIHIGH_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'digihigh-lite'); ?></a>
		</div>
	  	<div class="features-section">
	  		<div class="col-4">
	  			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/admin/images/Responsive.jpg" alt="" />
	  			<p><?php esc_html_e( 'Digihigh lite WordPress Theme , the ideal choice for anyone looking for a tech theme streamlined for their startup, software or saas dedicated website, or an app landing page. Digihigh is fully compatible with both Elementor and WPBakery plugins, so you can build your pages the way you choose! Whether you are a beginner or a pro, you are sure to find exactly what you need to create your website the easiest way possible and present your tech business in a captivating manner.', 'digihigh-lite' ); ?></p>
	  		</div>
	  		<div class="col-4">
	  			<h4><?php esc_html_e( 'Theme Features', 'digihigh-lite' ); ?></h4>
				<ul>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Theme options using customizer API', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Responsive Design', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Favicon, Logo, Title and Tagline Customization', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advanced Color Options and Color Pallets', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( '100+ Font Family Options', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Slider with a Number of Slider Images Upload Option Available.', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Support to Add Custom CSS/JS', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'SEO Friendly', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Pagination Option', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Compatible With Different WordPress Famous Plugins Like Contact Form 7 and Woocommerce', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Enable-Disable Options on All Sections', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Footer Customization Options', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Fully Integrated with Font Awesome Icon', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Short Codes', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Background Image Option', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Page Templates', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Featured Product Images, HD Images and Video display', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Allow To Set Site Title, Tagline, Logo', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Make Post About Firms News, Events, Achievements and So On.', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Left and Right Sidebar', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Sticky Post & Comment Threads', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Parallax Image-Background Section', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Custom Backgrounds, Colors, Headers, Logo & Menu', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Customizable Home Page', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Full-Width Template', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Gallery, Banner & Post Type Plugin Functionality', 'digihigh-lite' ); ?></li>
					<li><span class="dashicons dashicons-arrow-right"></span><?php esc_html_e( 'Advance Social Media Feature', 'digihigh-lite' ); ?></li>
				</ul>
			</div>
		</div>
	</div>

<script type="text/javascript">
	function openPage(pageName,elmnt,color) {
	    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablink");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].style.backgroundColor = "";
	    }
	    document.getElementById(pageName).style.display = "block";
	    elmnt.style.backgroundColor = color;

	}
	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
</script>

<?php } ?>