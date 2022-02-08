<?php
	
	$digihigh_lite_theme_color = get_theme_mod('digihigh_lite_theme_color');

	$digihigh_lite_custom_css = '';

	$digihigh_lite_custom_css .='a.button, .topbar, #footer input[type="submit"],  #slider .carousel-caption .more-btn a, #slider .carousel-caption .more-btn, #sidebar h3, #sidebar input[type="submit"], #sidebar .tagcloud a:hover, .pagination a:hover, .pagination .current,.woocommerce button.button, .woocommerce button.button.alt, .woocommerce a.button,.woocommerce a.button.alt, .footer-bor-two, #footer .tagcloud a:hover, .content-bttn .second-border a, .content-bttn .second-border, .content-bttn .second-border:hover,#menu-sidebar input[type="submit"],.tags p a:hover,.meta-nav:hover,#comments a.comment-reply-link, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button,.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce .widget_price_filter .ui-slider .ui-slider-range, .woocommerce .widget_price_filter .ui-slider .ui-slider-handle{';
		$digihigh_lite_custom_css .='background-color: '.esc_attr($digihigh_lite_theme_color).';';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_custom_css .='input[type="submit"], .social-media i:hover, .woocommerce-message::before, .woocommerce #respond input#submit .woocommerce input.button,.woocommerce #respond input#submit.alt,  .woocommerce input.button.alt, .causes-box:hover h4,.causes-box:hover i,.our-services .page-box:hover h4 a, #slider .inner_carousel h2 a, h1.entry-title, #footer li a:hover,#slider .inner_carousel h1 a,.primary-navigation a:focus,.metabox a:hover,.tags i,#sidebar ul li a:hover, .causes-box:hover h3 a, .causes-box:hover h3, .causes-box:hover i, .our-services .page-box:hover h3 a, .primary-navigation ul li a:focus{';
		$digihigh_lite_custom_css .='color: '.esc_attr($digihigh_lite_theme_color).';';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_custom_css .='.primary-navigation ul ul{';
		$digihigh_lite_custom_css .='border-top-color: '.esc_attr($digihigh_lite_theme_color).'!important;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_custom_css .='.search-box span, #footer input[type="search"], .footer-bor-two,.primary-navigation ul ul,.tags p a:hover, #footer form.woocommerce-product-search button, #sidebar form.woocommerce-product-search button{';
		$digihigh_lite_custom_css .='border-color: '.esc_attr($digihigh_lite_theme_color).';';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_custom_css .='nav.woocommerce-MyAccount-navigation ul li, .blogbutton-small:hover,  #comments input[type="submit"].submit{';
		$digihigh_lite_custom_css .='background-color: '.esc_attr($digihigh_lite_theme_color).'!important;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_custom_css .='td.product-name a, a.shipping-calculator-button, .woocommerce-info a:hover, .woocommerce-privacy-policy-text a{';
		$digihigh_lite_custom_css .='color: '.esc_attr($digihigh_lite_theme_color).' !important;';
	$digihigh_lite_custom_css .='}';
	

	// media
	$digihigh_lite_custom_css .='@media screen and (max-width:1000px) {';
	if($digihigh_lite_theme_color){
	$digihigh_lite_custom_css .='#contact-info, #menu-sidebar, .primary-navigation ul ul a, .primary-navigation li a:hover, .primary-navigation li:hover a,.primary-navigation ul ul ul ul{
	background-image: linear-gradient(-90deg, #000 0%, '.esc_attr($digihigh_lite_theme_color).' 120%);
		}';
	}
	$digihigh_lite_custom_css .='}';

	/*---------------------------Width Layout -------------------*/
	$digihigh_lite_theme_lay = get_theme_mod( 'digihigh_lite_theme_options','Default');
    if($digihigh_lite_theme_lay == 'Default'){
		$digihigh_lite_custom_css .='body{';
			$digihigh_lite_custom_css .='max-width: 100%;';
		$digihigh_lite_custom_css .='}';
	}else if($digihigh_lite_theme_lay == 'Container'){
		$digihigh_lite_custom_css .='body{';
			$digihigh_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$digihigh_lite_custom_css .='}';
		$digihigh_lite_custom_css .='.serach_outer{';
			$digihigh_lite_custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto';
		$digihigh_lite_custom_css .='}';
	}else if($digihigh_lite_theme_lay == 'Box Container'){
		$digihigh_lite_custom_css .='body{';
			$digihigh_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$digihigh_lite_custom_css .='}';
		$digihigh_lite_custom_css .='.serach_outer{';
			$digihigh_lite_custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto; right:0';
		$digihigh_lite_custom_css .='}';
	}

	/*---------------------------Slider Content Layout -------------------*/
	$digihigh_lite_theme_lay = get_theme_mod( 'digihigh_lite_slider_content_alignment','Left');
    if($digihigh_lite_theme_lay == 'Left'){
		$digihigh_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p,#slider .carousel-caption .more-btn{';
			$digihigh_lite_custom_css .='text-align:left; left:15%; right:45%;';
		$digihigh_lite_custom_css .='}';
	}else if($digihigh_lite_theme_lay == 'Center'){
		$digihigh_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p,#slider .carousel-caption .more-btn{';
			$digihigh_lite_custom_css .='text-align:center !important; left:20%; right:20%;';
		$digihigh_lite_custom_css .='}';
	}else if($digihigh_lite_theme_lay == 'Right'){
		$digihigh_lite_custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p,#slider .carousel-caption .more-btn{';
			$digihigh_lite_custom_css .='text-align:right !important; left:45%; right:15%;';
		$digihigh_lite_custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/
	$digihigh_lite_theme_lay = get_theme_mod( 'digihigh_lite_slider_image_opacity','0.6');
	if($digihigh_lite_theme_lay == '0'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.1'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.1';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.2'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.2';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.3'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.3';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.4'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.4';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.5'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.5';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.6'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.6';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.7'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.7';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.8'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.8';
		$digihigh_lite_custom_css .='}';
		}else if($digihigh_lite_theme_lay == '0.9'){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:0.9';
		$digihigh_lite_custom_css .='}';
	}

	/*------------------------------ Button Settings option-----------------------*/
	$digihigh_lite_button_padding_top_bottom = get_theme_mod('digihigh_lite_button_padding_top_bottom');
	$digihigh_lite_button_padding_left_right = get_theme_mod('digihigh_lite_button_padding_left_right');
	$digihigh_lite_custom_css .='.content-bttn .second-border a, #slider .carousel-caption .more-btn a, #comments .form-submit input[type="submit"]{';
		$digihigh_lite_custom_css .='padding-top: '.esc_attr($digihigh_lite_button_padding_top_bottom).'px !important; padding-bottom: '.esc_attr($digihigh_lite_button_padding_top_bottom).'px !important; padding-left: '.esc_attr($digihigh_lite_button_padding_left_right).'px !important; padding-right: '.esc_attr($digihigh_lite_button_padding_left_right).'px !important; display:inline-block;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_button_border_radius = get_theme_mod('digihigh_lite_button_border_radius');
	$digihigh_lite_custom_css .='.content-bttn .second-border a, .content-bttn .second-border, #slider .carousel-caption .more-btn a,#slider .carousel-caption .more-btn, #comments .form-submit input[type="submit"]{';
		$digihigh_lite_custom_css .='border-radius: '.esc_attr($digihigh_lite_button_border_radius).'px;';
	$digihigh_lite_custom_css .='}';

	/*-----------------------------Responsive Setting --------------------*/
	$digihigh_lite_stickyheader = get_theme_mod( 'digihigh_lite_responsive_sticky_header',false);
	if($digihigh_lite_stickyheader == true && get_theme_mod( 'digihigh_lite_sticky_header', false) == false){
    	$digihigh_lite_custom_css .='.fixed-header{';
			$digihigh_lite_custom_css .='position:static;';
		$digihigh_lite_custom_css .='} ';
	}
    if($digihigh_lite_stickyheader == true){
    	$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='.fixed-header{';
			$digihigh_lite_custom_css .='position:fixed;';
		$digihigh_lite_custom_css .='} }';
	}else if($digihigh_lite_stickyheader == false){
		$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='.fixed-header{';
			$digihigh_lite_custom_css .='position:static;';
		$digihigh_lite_custom_css .='} }';
	}

	$digihigh_lite_slider = get_theme_mod( 'digihigh_lite_responsive_slider',false);
	if($digihigh_lite_slider == true && get_theme_mod( 'digihigh_lite_slider_hide_show', false) == false){
    	$digihigh_lite_custom_css .='#slider{';
			$digihigh_lite_custom_css .='display:none;';
		$digihigh_lite_custom_css .='} ';
	}
    if($digihigh_lite_slider == true){
    	$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#slider{';
			$digihigh_lite_custom_css .='display:block;';
		$digihigh_lite_custom_css .='} }';
	}else if($digihigh_lite_slider == false){
		$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#slider{';
			$digihigh_lite_custom_css .='display:none;';
		$digihigh_lite_custom_css .='} }';
	}

	$digihigh_lite_scroll = get_theme_mod( 'digihigh_lite_responsive_scroll',true);
	if($digihigh_lite_scroll == true && get_theme_mod( 'digihigh_lite_enable_disable_scroll', true) == false){
    	$digihigh_lite_custom_css .='#scroll-top{';
			$digihigh_lite_custom_css .='display:none !important;';
		$digihigh_lite_custom_css .='} ';
	}
    if($digihigh_lite_scroll == true){
    	$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#scroll-top{';
			$digihigh_lite_custom_css .='visibility: visible !important;';
		$digihigh_lite_custom_css .='} }';
	}else if($digihigh_lite_scroll == false){
		$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#scroll-top{';
			$digihigh_lite_custom_css .='visibility: hidden !important;;';
		$digihigh_lite_custom_css .='} }';
	}

	$digihigh_lite_sidebar = get_theme_mod( 'digihigh_lite_responsive_sidebar',true);
    if($digihigh_lite_sidebar == true){
    	$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#sidebar{';
			$digihigh_lite_custom_css .='display:block;';
		$digihigh_lite_custom_css .='} }';
	}else if($digihigh_lite_sidebar == false){
		$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#sidebar{';
			$digihigh_lite_custom_css .='display:none;';
		$digihigh_lite_custom_css .='} }';
	}

	$digihigh_lite_loader = get_theme_mod( 'digihigh_lite_responsive_preloader', true);
	if($digihigh_lite_loader == true && get_theme_mod( 'digihigh_lite_preloader_option', true) == false){
    	$digihigh_lite_custom_css .='#loader-wrapper{';
			$digihigh_lite_custom_css .='display:none;';
		$digihigh_lite_custom_css .='} ';
	}
    if($digihigh_lite_loader == true){
    	$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#loader-wrapper{';
			$digihigh_lite_custom_css .='display:block;';
		$digihigh_lite_custom_css .='} }';
	}else if($digihigh_lite_loader == false){
		$digihigh_lite_custom_css .='@media screen and (max-width:575px) {';
		$digihigh_lite_custom_css .='#loader-wrapper{';
			$digihigh_lite_custom_css .='display:none;';
		$digihigh_lite_custom_css .='} }';
	}

	/*------------------ Skin Option  -------------------*/
	$digihigh_lite_theme_lay = get_theme_mod( 'digihigh_lite_background_skin_mode','Transparent Background');
    if($digihigh_lite_theme_lay == 'With Background'){
		$digihigh_lite_custom_css .='.page-box, #sidebar .widget,.woocommerce ul.products li.product, .woocommerce-page ul.products li.product,.front-page-content,.background-img-skin, .causes-box, .noresult-content{';
			$digihigh_lite_custom_css .='background-color: #fff; padding:10px;';
		$digihigh_lite_custom_css .='}';
	}else if($digihigh_lite_theme_lay == 'Transparent Background'){
		$digihigh_lite_custom_css .='.page-box-single{';
			$digihigh_lite_custom_css .='background-color: transparent;';
		$digihigh_lite_custom_css .='}';
	}

	/*------------ Woocommerce Settings  --------------*/
	$digihigh_lite_top_bottom_product_button_padding = get_theme_mod('digihigh_lite_top_bottom_product_button_padding', 14.5);
	$digihigh_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$digihigh_lite_custom_css .='padding-top: '.esc_attr($digihigh_lite_top_bottom_product_button_padding).'px; padding-bottom: '.esc_attr($digihigh_lite_top_bottom_product_button_padding).'px;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_left_right_product_button_padding = get_theme_mod('digihigh_lite_left_right_product_button_padding', 14.5);
	$digihigh_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$digihigh_lite_custom_css .='padding-left: '.esc_attr($digihigh_lite_left_right_product_button_padding).'px; padding-right: '.esc_attr($digihigh_lite_left_right_product_button_padding).'px;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_product_button_border_radius = get_theme_mod('digihigh_lite_product_button_border_radius', 0);
	$digihigh_lite_custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce input.button.alt, .woocommerce button.button:disabled, .woocommerce button.button:disabled[disabled]{';
		$digihigh_lite_custom_css .='border-radius: '.esc_attr($digihigh_lite_product_button_border_radius).'px;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_show_related_products = get_theme_mod('digihigh_lite_show_related_products',true);
	if($digihigh_lite_show_related_products == false){
		$digihigh_lite_custom_css .='.related.products{';
			$digihigh_lite_custom_css .='display: none;';
		$digihigh_lite_custom_css .='}';
	}

	$digihigh_lite_show_wooproducts_border = get_theme_mod('digihigh_lite_show_wooproducts_border', true);
	if($digihigh_lite_show_wooproducts_border == false){
		$digihigh_lite_custom_css .='.products li{';
			$digihigh_lite_custom_css .='border: none;';
		$digihigh_lite_custom_css .='}';
	}

	$digihigh_lite_top_bottom_wooproducts_padding = get_theme_mod('digihigh_lite_top_bottom_wooproducts_padding',10);
	$digihigh_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$digihigh_lite_custom_css .='padding-top: '.esc_attr($digihigh_lite_top_bottom_wooproducts_padding).'px !important; padding-bottom: '.esc_attr($digihigh_lite_top_bottom_wooproducts_padding).'px !important;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_left_right_wooproducts_padding = get_theme_mod('digihigh_lite_left_right_wooproducts_padding',10);
	$digihigh_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$digihigh_lite_custom_css .='padding-left: '.esc_attr($digihigh_lite_left_right_wooproducts_padding).'px !important; padding-right: '.esc_attr($digihigh_lite_left_right_wooproducts_padding).'px !important;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_wooproducts_border_radius = get_theme_mod('digihigh_lite_wooproducts_border_radius',0);
	$digihigh_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$digihigh_lite_custom_css .='border-radius: '.esc_attr($digihigh_lite_wooproducts_border_radius).'px;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_wooproducts_box_shadow = get_theme_mod('digihigh_lite_wooproducts_box_shadow',0);
	$digihigh_lite_custom_css .='.woocommerce ul.products li.product, .woocommerce-page ul.products li.product{';
		$digihigh_lite_custom_css .='box-shadow: '.esc_attr($digihigh_lite_wooproducts_box_shadow).'px '.esc_attr($digihigh_lite_wooproducts_box_shadow).'px '.esc_attr($digihigh_lite_wooproducts_box_shadow).'px #eee;';
	$digihigh_lite_custom_css .='}';

	/*-------------- Footer Text -------------------*/
	$digihigh_lite_copyright_content_align = get_theme_mod('digihigh_lite_copyright_content_align');
	if($digihigh_lite_copyright_content_align != false){
		$digihigh_lite_custom_css .='.footer-bor-two{';
			$digihigh_lite_custom_css .='text-align: '.esc_attr($digihigh_lite_copyright_content_align).';';
		$digihigh_lite_custom_css .='}';
	}

	$digihigh_lite_footer_content_font_size = get_theme_mod('digihigh_lite_footer_content_font_size', 16);
	$digihigh_lite_custom_css .='.copyright p{';
		$digihigh_lite_custom_css .='font-size: '.esc_attr($digihigh_lite_footer_content_font_size).'px !important;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_copyright_padding = get_theme_mod('digihigh_lite_copyright_padding', 15);
	$digihigh_lite_custom_css .='.footer-bor-two{';
		$digihigh_lite_custom_css .='padding-top: '.esc_attr($digihigh_lite_copyright_padding).'px; padding-bottom: '.esc_attr($digihigh_lite_copyright_padding).'px;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_footer_widget_bg_color = get_theme_mod('digihigh_lite_footer_widget_bg_color');
	$digihigh_lite_custom_css .='#footer{';
		$digihigh_lite_custom_css .='background-color: '.esc_attr($digihigh_lite_footer_widget_bg_color).';';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_footer_widget_bg_image = get_theme_mod('digihigh_lite_footer_widget_bg_image');
	if($digihigh_lite_footer_widget_bg_image != false){
		$digihigh_lite_custom_css .='#footer{';
			$digihigh_lite_custom_css .='background: url('.esc_attr($digihigh_lite_footer_widget_bg_image).');';
		$digihigh_lite_custom_css .='}';
	}

	// scroll to top
	$digihigh_lite_scroll_font_size_icon = get_theme_mod('digihigh_lite_scroll_font_size_icon', 22);
	$digihigh_lite_custom_css .='#scroll-top .fas{';
		$digihigh_lite_custom_css .='font-size: '.esc_attr($digihigh_lite_scroll_font_size_icon).'px;';
	$digihigh_lite_custom_css .='}';

	// Slider Height 
	$digihigh_lite_slider_image_height = get_theme_mod('digihigh_lite_slider_image_height');
	$digihigh_lite_custom_css .='#slider img{';
		$digihigh_lite_custom_css .='height: '.esc_attr($digihigh_lite_slider_image_height).'px;';
	$digihigh_lite_custom_css .='}';

	// Display Blog Post 
	$digihigh_lite_display_blog_page_post = get_theme_mod( 'digihigh_lite_display_blog_page_post','In Box');
    if($digihigh_lite_display_blog_page_post == 'Without Box'){
		$digihigh_lite_custom_css .='.our-services .page-box{';
			$digihigh_lite_custom_css .='border:none; margin:25px 0;';
		$digihigh_lite_custom_css .='}';
	}

	// slider overlay
	$digihigh_lite_slider_overlay = get_theme_mod('digihigh_lite_slider_overlay', true);
	if($digihigh_lite_slider_overlay == false){
		$digihigh_lite_custom_css .='#slider img{';
			$digihigh_lite_custom_css .='opacity:1;';
		$digihigh_lite_custom_css .='}';
	} 
	$digihigh_lite_slider_image_overlay_color = get_theme_mod('digihigh_lite_slider_image_overlay_color', true);
	if($digihigh_lite_slider_overlay != false){
		$digihigh_lite_custom_css .='#slider{';
			$digihigh_lite_custom_css .='background-color: '.esc_attr($digihigh_lite_slider_image_overlay_color).';';
		$digihigh_lite_custom_css .='}';
	}

	// site title and tagline font size option
	$digihigh_lite_site_title_size_option = get_theme_mod('digihigh_lite_site_title_size_option', 25);{
	$digihigh_lite_custom_css .='#header .logo h1, .logo p.site-title a{';
	$digihigh_lite_custom_css .='font-size: '.esc_attr($digihigh_lite_site_title_size_option).'px;';
		$digihigh_lite_custom_css .='}';
	}

	$digihigh_lite_site_tagline_size_option = get_theme_mod('digihigh_lite_site_tagline_size_option', 12);{
	$digihigh_lite_custom_css .='#header .logo p{';
	$digihigh_lite_custom_css .='font-size: '.esc_attr($digihigh_lite_site_tagline_size_option).'px;';
		$digihigh_lite_custom_css .='}';
	}

	// woocommerce product sale settings
	$digihigh_lite_border_radius_product_sale = get_theme_mod('digihigh_lite_border_radius_product_sale',50);
	$digihigh_lite_custom_css .='.woocommerce span.onsale {';
		$digihigh_lite_custom_css .='border-radius: '.esc_attr($digihigh_lite_border_radius_product_sale).'%;';
	$digihigh_lite_custom_css .='}';

	$digihigh_lite_align_product_sale = get_theme_mod('digihigh_lite_align_product_sale', 'Right');
	if($digihigh_lite_align_product_sale == 'Right' ){
		$digihigh_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$digihigh_lite_custom_css .=' left:auto; right:0;';
		$digihigh_lite_custom_css .='}';
	}elseif($digihigh_lite_align_product_sale == 'Left' ){
		$digihigh_lite_custom_css .='.woocommerce ul.products li.product .onsale{';
			$digihigh_lite_custom_css .=' left:0; right:auto;';
		$digihigh_lite_custom_css .='}';
	}

	$digihigh_lite_product_sale_font_size = get_theme_mod('digihigh_lite_product_sale_font_size',14);
	$digihigh_lite_custom_css .='.woocommerce span.onsale{';
		$digihigh_lite_custom_css .='font-size: '.esc_attr($digihigh_lite_product_sale_font_size).'px;';
	$digihigh_lite_custom_css .='}';












		
