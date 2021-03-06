<?php

define('THEGEM_COIN_CHILD', 1);

add_filter('thegem_icon_userpack_enabled', function() {
	return true;
});

function thegem_child_scripts() {
	wp_register_style('icons-userpack', get_stylesheet_directory_uri() . '/css/icons-userpack.css');
	wp_enqueue_style( 'icons-userpack');
	wp_enqueue_script('react', '//cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react.min.js');
	wp_enqueue_script('react-dom', '//cdnjs.cloudflare.com/ajax/libs/react/15.4.2/react-dom.min.js');
	wp_enqueue_script('particles', '//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js');
}
add_action( 'wp_enqueue_scripts', 'thegem_child_scripts' );

function thegem_child_admin_scripts() {
	wp_register_style('icons-userpack', get_stylesheet_directory_uri() . '/css/icons-userpack.css');
}
add_action( 'admin_enqueue_scripts', 'thegem_child_admin_scripts' );

function thegem_userpack_icons_info_link($link, $pack) {
	if($pack == 'userpack') {
		return esc_url(get_stylesheet_directory_uri().'/fonts/icons-list-userpack.html');

	}
	return $link;
}

function thegem_child_init() {
	add_filter('thegem_user_icons_info_link', 'thegem_userpack_icons_info_link', 10, 2);
	wp_enqueue_style('icons-userpack');
}

add_action( 'after_setup_theme', 'thegem_child_init' );
add_action( 'wp_enqueue_scripts', 'enqueue_load_fa' );
function enqueue_load_fa() {
	wp_enqueue_style( 'load-fa', '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
}

add_filter( 'thegem_default_theme_options', 'thegem_coin_default_theme_options' );
function thegem_coin_default_theme_options() {
	return array(
		'theme_version' => '3.2.1',
		'page_layout_style' => 'fullwidth',
		'page_padding_top' => '0',
		'page_padding_bottom' => '0',
		'page_padding_left' => '0',
		'page_padding_right' => '0',
		'disable_uppercase_font' => '1',
		'disable_smooth_scroll' => '1',
		'logo_width' => '164',
		'small_logo_width' => '132',
		'logo' => get_stylesheet_directory_uri() . '/images/GemCoin-Logo-3x-Dark.png',
		'small_logo' => get_stylesheet_directory_uri() . '/images/GemCoin-Logo-0.8x3-Dark.png',
		'logo_light' => get_stylesheet_directory_uri() . '/images/GemCoin-Logo-3x-Light-1.png',
		'small_logo_light' => get_stylesheet_directory_uri() . '/images/GemCoin-Logo-0.8x3-Light-1.png',
		'favicon' => get_template_directory_uri() . '/images/favicon.ico',
		'preloader_style' => 'preloader-4',
		'custom_css' => '@media (max-width: 767px) {
	h1,
	.title-h1,
	.page-title-title h1 {
		font-size: 60px;
		line-height: 60px;
	}
}
@media (max-width: 879px) {
	h2,
	.title-h2,
	.pricing-table-style-5 .pricing-price-title,
	.pricing-table-style-6 .pricing-price-title,
	.pricing-table-style-6 .pricing-price-subtitle,
	h3.comment-reply-title,
	.pricing-table-style-2 .pricing-price-title {
		font-size: 50px;
	}
}
@media (max-width: 879px) {
	h2,
	.title-h2,
	.pricing-table-style-6 .pricing-price-title,
	h3.comment-reply-title {
		line-height: 60px;
	}
}
@media (max-width: 599px) {
	.title-xlarge {
		font-size: 70px;
		line-height: 70px;
	}
}
@media (max-width: 400px) {
	.title-xlarge {
		font-size: 56px;
		line-height: 56px;
	}
}

body #page-preloader .page-preloader-spin,
body .block-preloader .page-preloader-spin,
body .preloader-spin {
border: 2px solid transparent;
border-top-color: #45ffdc;
}
body .preloader-spin {
border-top-color: #45ffdc;
}
body #page-preloader .page-preloader-spin:before,
body .block-preloader .page-preloader-spin:before,
body .preloader-spin:before {
border: 2px solid transparent;
border-top-color: #ff458f;
}
body .preloader-spin:before {
border-top-color: #ff458f;
}
body #page-preloader .page-preloader-spin:after,
body .block-preloader .page-preloader-spin:after,
body .preloader-spin:after {
border: 2px solid transparent;
border-top-color: #7e65d0;
}
body .preloader-spin:after {
border-top-color: #7e65d0;
}',
		'custom_js' => '',
		'portfolio_rewrite_slug' => '',
		'news_rewrite_slug' => '',
		'404_page' => '',
		'size_guide_image' => '',
		'product_quick_view' => '',
		'products_pagination' => '',
		'catalog_view' => '',
		'checkout_type' => '',
		'hamburger_menu_cart_position' => '',
		'product_title_listing_font_family' => 'Montserrat',
		'product_title_listing_font_style' => '700',
		'product_title_listing_font_sets' => 'latin,latin-ext',
		'product_title_listing_font_size' => '16',
		'product_title_listing_line_height' => '25',
		'product_title_page_font_family' => 'Montserrat UltraLight',
		'product_title_page_font_style' => 'regular',
		'product_title_page_font_sets' => 'latin,latin-ext',
		'product_title_page_font_size' => '28',
		'product_title_page_line_height' => '42',
		'product_title_widget_font_family' => 'Source Sans Pro',
		'product_title_widget_font_style' => 'regular',
		'product_title_widget_font_sets' => 'latin,latin-ext',
		'product_title_widget_font_size' => '16',
		'product_title_widget_line_height' => '25',
		'product_title_cart_font_family' => 'Source Sans Pro',
		'product_title_cart_font_style' => 'regular',
		'product_title_cart_font_sets' => 'latin,latin-ext',
		'product_title_cart_font_size' => '16',
		'product_title_cart_line_height' => '25',
		'product_price_listing_font_family' => 'Source Sans Pro',
		'product_price_listing_font_style' => 'regular',
		'product_price_listing_font_sets' => 'latin,latin-ext',
		'product_price_listing_font_size' => '16',
		'product_price_listing_line_height' => '25',
		'product_price_page_font_family' => 'Source Sans Pro',
		'product_price_page_font_style' => '300',
		'product_price_page_font_sets' => 'latin,latin-ext',
		'product_price_page_font_size' => '36',
		'product_price_page_line_height' => '36',
		'product_price_widget_font_family' => 'Source Sans Pro',
		'product_price_widget_font_style' => '300',
		'product_price_widget_font_sets' => 'latin,latin-ext',
		'product_price_widget_font_size' => '20',
		'product_price_widget_line_height' => '30',
		'product_price_cart_font_family' => 'Source Sans Pro',
		'product_price_cart_font_style' => '300',
		'product_price_cart_font_sets' => 'latin,latin-ext',
		'product_price_cart_font_size' => '24',
		'product_price_cart_line_height' => '30',
		'product_title_listing_color' => '#5f727f',
		'product_title_page_color' => '#3c3950',
		'product_title_widget_color' => '#5f727f',
		'product_title_cart_color' => '#00bcd4',
		'product_price_listing_color' => '#00bcd4',
		'product_price_page_color' => '#3c3950',
		'product_price_widget_color' => '#3c3950',
		'product_price_cart_color' => '#3c3950',
		'product_separator_listing_color' => '#000000',
		'header_layout' => 'default',
		'header_style' => '3',
		'mobile_menu_layout' => 'default',
		'mobile_menu_layout_style' => 'light',
		'logo_position' => 'left',
		'menu_appearance_tablet_portrait' => 'responsive',
		'menu_appearance_tablet_landscape' => 'responsive',
		'hamburger_menu_icon_size' => '',
		'top_area_style' => '1',
		'top_area_alignment' => 'left',
		'top_area_contacts' => '1',
		'top_area_socials' => '1',
		'top_area_button_text' => 'Join Now',
		'top_area_button_link' => '#',
		'top_area_disable_fixed' => '1',
		'top_area_disable_mobile' => '1',
		'main_menu_font_family' => 'Montserrat UltraLight',
		'main_menu_font_style' => 'regular',
		'main_menu_font_sets' => '',
		'main_menu_font_size' => '15',
		'main_menu_line_height' => '25',
		'submenu_font_family' => 'Source Sans Pro',
		'submenu_font_style' => 'regular',
		'submenu_font_sets' => '',
		'submenu_font_size' => '16',
		'submenu_line_height' => '20',
		'overlay_menu_font_family' => 'Montserrat',
		'overlay_menu_font_style' => '700',
		'overlay_menu_font_sets' => '',
		'overlay_menu_font_size' => '32',
		'overlay_menu_line_height' => '64',
		'mobile_menu_font_family' => 'Source Sans Pro',
		'mobile_menu_font_style' => 'regular',
		'mobile_menu_font_sets' => '',
		'mobile_menu_font_size' => '16',
		'mobile_menu_line_height' => '20',
		'styled_subtitle_font_family' => 'Montserrat UltraLight',
		'styled_subtitle_font_sets' => '',
		'styled_subtitle_font_size' => '21',
		'styled_subtitle_line_height' => '36',
		'h1_font_family' => 'Podkova',
		'h1_font_style' => '700',
		'h1_font_sets' => '',
		'h1_font_size' => '90',
		'h1_line_height' => '50',
		'h2_font_family' => 'Podkova',
		'h2_font_style' => 'regular',
		'h2_font_sets' => '',
		'h2_font_size' => '50',
		'h2_line_height' => '50',
		'h3_font_family' => 'Podkova',
		'h3_font_style' => 'regular',
		'h3_font_sets' => '',
		'h3_font_size' => '36',
		'h3_line_height' => '45',
		'h4_font_family' => 'Podkova',
		'h4_font_style' => 'regular',
		'h4_font_sets' => '',
		'h4_font_size' => '24',
		'h4_line_height' => '38',
		'h5_font_family' => 'Podkova',
		'h5_font_style' => 'regular',
		'h5_font_sets' => '',
		'h5_font_size' => '19',
		'h5_line_height' => '30',
		'h6_font_family' => 'Podkova',
		'h6_font_style' => 'regular',
		'h6_font_sets' => '',
		'h6_font_size' => '16',
		'h6_line_height' => '25',
		'xlarge_title_font_family' => 'Podkova',
		'xlarge_title_font_style' => '700',
		'xlarge_title_font_sets' => 'latin,latin-ext',
		'xlarge_title_font_size' => '110',
		'xlarge_title_line_height' => '110',
		'light_title_font_family' => 'Podkova',
		'light_title_font_style' => '500',
		'light_title_font_sets' => '',
		'body_font_family' => 'Montserrat UltraLight',
		'body_font_style' => 'regular',
		'body_font_sets' => '',
		'body_font_size' => '15',
		'body_line_height' => '26',
		'widget_title_font_family' => 'Podkova',
		'widget_title_font_style' => '700',
		'widget_title_font_sets' => '',
		'widget_title_font_size' => '23',
		'widget_title_line_height' => '30',
		'button_font_family' => 'Podkova',
		'button_font_style' => '700',
		'button_font_sets' => 'latin',
		'button_thin_font_family' => 'Podkova',
		'button_thin_font_style' => 'regular',
		'button_thin_font_sets' => '',
		'portfolio_title_font_family' => 'Podkova',
		'portfolio_title_font_style' => '700',
		'portfolio_title_font_sets' => '',
		'portfolio_title_font_size' => '16',
		'portfolio_title_line_height' => '24',
		'portfolio_description_font_family' => 'Montserrat UltraLight',
		'portfolio_description_font_style' => 'regular',
		'portfolio_description_font_sets' => '',
		'portfolio_description_font_size' => '15',
		'portfolio_description_line_height' => '26',
		'quickfinder_title_font_family' => 'Podkova',
		'quickfinder_title_font_style' => '600',
		'quickfinder_title_font_sets' => 'latin',
		'quickfinder_title_font_size' => '21',
		'quickfinder_title_line_height' => '38',
		'quickfinder_title_thin_font_family' => 'Podkova',
		'quickfinder_title_thin_font_style' => '700',
		'quickfinder_title_thin_font_sets' => '',
		'quickfinder_title_thin_font_size' => '21',
		'quickfinder_title_thin_line_height' => '38',
		'quickfinder_description_font_family' => 'Montserrat UltraLight',
		'quickfinder_description_font_style' => 'regular',
		'quickfinder_description_font_sets' => '',
		'quickfinder_description_font_size' => '12',
		'quickfinder_description_line_height' => '26',
		'gallery_title_font_family' => 'Podkova',
		'gallery_title_font_style' => 'regular',
		'gallery_title_font_sets' => '',
		'gallery_title_font_size' => '24',
		'gallery_title_line_height' => '30',
		'gallery_title_bold_font_family' => 'Podkova',
		'gallery_title_bold_font_style' => '700',
		'gallery_title_bold_font_sets' => 'latin,latin-ext',
		'gallery_title_bold_font_size' => '24',
		'gallery_title_bold_line_height' => '31',
		'gallery_description_font_family' => 'Montserrat UltraLight',
		'gallery_description_font_sets' => '',
		'gallery_description_font_size' => '17',
		'gallery_description_line_height' => '24',
		'testimonial_font_family' => 'Montserrat UltraLight',
		'testimonial_font_sets' => '',
		'testimonial_font_size' => '32',
		'testimonial_line_height' => '50',
		'counter_font_family' => 'Montserrat',
		'counter_font_style' => '700',
		'counter_font_sets' => '',
		'counter_font_size' => '50',
		'counter_line_height' => '69',
		'woocommerce_price_font_family' => 'Montserrat',
		'woocommerce_price_font_style' => 'regular',
		'woocommerce_price_font_sets' => '',
		'woocommerce_price_font_size' => '26',
		'woocommerce_price_line_height' => '36',
		'slideshow_title_font_family' => 'Montserrat',
		'slideshow_title_font_style' => '700',
		'slideshow_title_font_sets' => '',
		'slideshow_title_font_size' => '50',
		'slideshow_title_line_height' => '69',
		'slideshow_description_font_family' => 'Source Sans Pro',
		'slideshow_description_font_style' => 'regular',
		'slideshow_description_font_sets' => '',
		'slideshow_description_font_size' => '16',
		'slideshow_description_line_height' => '25',
		'basic_outer_background_color' => '#f0f3f2',
		'top_background_color' => '#ffffff',
		'main_background_color' => '#ffffff',
		'footer_widget_area_background_color' => '#24262e;',
		'footer_background_color' => '#1a1c21',
		'styled_elements_background_color' => '#f4f6f7',
		'styled_elements_color_1' => '#45ffdc',
		'styled_elements_color_2' => '#99a9b5',
		'styled_elements_color_3' => '#45ffdc',
		'styled_elements_color_4' => '#393d50',
		'divider_default_color' => '#dfe5e8',
		'box_border_color' => '#dfe5e8',
		'main_menu_level1_color' => '#3c3950',
		'main_menu_level1_background_color' => '',
		'main_menu_level1_hover_color' => '#00f7c6',
		'main_menu_level1_hover_background_color' => '',
		'main_menu_level1_active_color' => '#3c3950',
		'main_menu_level1_active_background_color' => '#00f7c6',
		'main_menu_level2_color' => '#5f727f',
		'main_menu_level2_background_color' => '#f4f6f7',
		'main_menu_level2_hover_color' => '#3c3950',
		'main_menu_level2_hover_background_color' => '#ffffff',
		'main_menu_level2_active_color' => '#3c3950',
		'main_menu_level2_active_background_color' => '#ffffff',
		'main_menu_mega_column_title_color' => '#3c3950',
		'main_menu_mega_column_title_hover_color' => '#00f7c6',
		'main_menu_mega_column_title_active_color' => '#00f7c6',
		'main_menu_level3_color' => '#5f727f',
		'main_menu_level3_background_color' => '#ffffff',
		'main_menu_level3_hover_color' => '#ffffff',
		'main_menu_level3_hover_background_color' => '#494c64',
		'main_menu_level3_active_color' => '#00f7c6',
		'main_menu_level3_active_background_color' => '#ffffff',
		'main_menu_level1_light_color' => '#ffffff',
		'main_menu_level1_light_hover_color' => '#1a1c21',
		'main_menu_level1_light_active_color' => '#ffffff',
		'main_menu_level2_border_color' => '#dfe5e8',
		'mega_menu_icons_color' => '',
		'overlay_menu_background_color' => '#212331',
		'overlay_menu_color' => '#ffffff',
		'overlay_menu_hover_color' => '#1a1c21',
		'overlay_menu_active_color' => '#1a1c21',
		'hamburger_menu_icon_color' => '',
		'hamburger_menu_icon_light_color' => '',
		'mobile_menu_button_color' => '',
		'mobile_menu_button_light_color' => '',
		'mobile_menu_background_color' => '',
		'mobile_menu_level1_color' => '#5f727f',
		'mobile_menu_level1_background_color' => '#f4f6f7',
		'mobile_menu_level1_active_color' => '#3c3950',
		'mobile_menu_level1_active_background_color' => '#ffffff',
		'mobile_menu_level2_color' => '#5f727f',
		'mobile_menu_level2_background_color' => '#f4f6f7',
		'mobile_menu_level2_active_color' => '#3c3950',
		'mobile_menu_level2_active_background_color' => '#ffffff',
		'mobile_menu_level3_color' => '#5f727f',
		'mobile_menu_level3_background_color' => '#f4f6f7',
		'mobile_menu_level3_active_color' => '#3c3950',
		'mobile_menu_level3_active_background_color' => '#ffffff',
		'mobile_menu_border_color' => '#dfe5e8',
		'mobile_menu_social_icon_color' => '',
		'mobile_menu_hide_color' => '',
		'top_area_background_color' => '#f4f6f7',
		'top_area_border_color' => '#00bcd4',
		'top_area_separator_color' => '#dfe5e8',
		'top_area_text_color' => '#5f727f',
		'top_area_link_color' => '#5f727f',
		'top_area_link_hover_color' => '#00bcd4',
		'top_area_button_text_color' => '#ffffff',
		'top_area_button_background_color' => '#494c64',
		'top_area_button_hover_text_color' => '#ffffff',
		'top_area_button_hover_background_color' => '#00bcd4',
		'body_color' => '#5f727f',
		'h1_color' => '#24262e',
		'h2_color' => '#24262e',
		'h3_color' => '#24262e',
		'h4_color' => '#24262e',
		'h5_color' => '#24262e',
		'h6_color' => '#24262e',
		'link_color' => '#00f5c4',
		'hover_link_color' => '#384554',
		'active_link_color' => '#00f5c4',
		'footer_text_color' => '#fff',
		'copyright_text_color' => '#fff',
		'copyright_link_color' => '#45ffdc',
		'title_bar_background_color' => '#6c7cd0',
		'title_bar_text_color' => '#ffffff',
		'date_filter_subtitle_color' => '#99a9b5',
		'system_icons_font' => '#99a3b0',
		'system_icons_font_2' => '#b6c6c9',
		'button_text_basic_color' => '#ffffff',
		'button_text_hover_color' => '#ffffff',
		'button_background_basic_color' => '#b6c6c9',
		'button_background_hover_color' => '#3c3950',
		'button_outline_text_basic_color' => '#24262e',
		'button_outline_text_hover_color' => '#ffffff',
		'button_outline_border_basic_color' => '#24262e',
		'widget_title_color' => '#3c3950',
		'widget_link_color' => '#45ffdc',
		'widget_hover_link_color' => '#45ffdc',
		'widget_active_link_color' => '#384554',
		'footer_widget_title_color' => '#feffff',
		'footer_widget_text_color' => '#fff',
		'footer_widget_link_color' => '#fff',
		'footer_widget_hover_link_color' => '#45ffdc',
		'footer_widget_active_link_color' => '#45ffdc',
		'portfolio_title_color' => '#5f727f',
		'portfolio_description_color' => '#5f727f',
		'portfolio_date_color' => '#99a9b5',
		'gallery_caption_background_color' => '#000000',
		'gallery_title_color' => '#ffffff',
		'gallery_description_color' => '#ffffff',
		'slideshow_arrow_background' => '#394050',
		'slideshow_arrow_hover_background' => '#45ffdc',
		'slideshow_arrow_color' => '#ffffff',
		'sliders_arrow_color' => '#3c3950',
		'sliders_arrow_background_color' => '#b6c6c9',
		'sliders_arrow_hover_color' => '#ffffff',
		'sliders_arrow_background_hover_color' => '#45ffdc',
		'hover_effect_default_color' => '#45ffdc',
		'hover_effect_zooming_blur_color' => '#ffffff',
		'hover_effect_horizontal_sliding_color' => '#46485c',
		'hover_effect_vertical_sliding_color' => '#f44336',
		'quickfinder_title_color' => '#4c5867',
		'quickfinder_description_color' => '#5f727f',
		'bullets_symbol_color' => '#5f727f',
		'icons_symbol_color' => '#91a0ac',
		'pagination_basic_color' => '#99a9b5',
		'pagination_basic_background_color' => '#ffffff',
		'pagination_hover_color' => '#45ffdc',
		'pagination_active_color' => '#3c3950',
		'mini_pagination_color' => '#b6c6c9',
		'mini_pagination_active_color' => '#45ffdc',
		'form_elements_background_color' => '#1a1c21',
		'form_elements_text_color' => '#fff',
		'form_elements_border_color' => '#1a1c21',
		'breadcrumbs_default_color' => '',
		'breadcrumbs_active_color' => '',
		'breadcrumbs_hover_color' => '',
		'basic_outer_background_image' => '',
		'top_background_image' => '',
		'top_area_background_image' => '',
		'main_background_image' => '',
		'footer_background_image' => '',
		'footer_widget_area_background_image' => '',
		'slider_effect' => 'random',
		'slider_slices' => '15',
		'slider_boxCols' => '8',
		'slider_boxRows' => '4',
		'slider_animSpeed' => '5',
		'slider_pauseTime' => '20',
		'slider_directionNav' => '1',
		'slider_controlNav' => '1',
		'show_author' => '1',
		'excerpt_length' => '20',
		'footer_active' => '1',
		'footer_html' => '2018 &copy; Copyrights CodexThemes',
		'custom_footer' => '',
		'contacts_address' => '908 New Hampshire Avenue #100, Washington, DC 20037, United States',
		'contacts_phone' => '+1 916-875-2235',
		'contacts_fax' => '+1 916-875-2235',
		'contacts_email' => 'info@domain.tld',
		'contacts_website' => 'codex-themes.com',
		'top_area_contacts_address' => '19th Ave New York, NY 95822, USA',
		'top_area_contacts_phone' => '',
		'top_area_contacts_fax' => '',
		'top_area_contacts_email' => '',
		'top_area_contacts_website' => '',
		'twitter_link' => '#',
		'facebook_link' => '#',
		'linkedin_link' => '#',
		'googleplus_link' => '#',
		'stumbleupon_link' => '#',
		'rss_link' => '#',
		'vimeo_link' => '#',
		'instagram_link' => '#',
		'pinterest_link' => '#',
		'youtube_link' => '#',
		'flickr_link' => '#',
		'show_social_icons' => '1',
	);
}

add_filter( 'thegem_default_skins_options', 'thegem_coin_default_skins_options' );
function thegem_coin_default_skins_options() {
	return array(
		'light' => array(
			'product_title_listing_font_family' => 'Montserrat',
			'product_title_listing_font_style' => '700',
			'product_title_listing_font_sets' => 'latin,latin-ext',
			'product_title_listing_font_size' => '16',
			'product_title_listing_line_height' => '25',
			'product_title_page_font_family' => 'Montserrat UltraLight',
			'product_title_page_font_style' => 'regular',
			'product_title_page_font_sets' => 'latin,latin-ext',
			'product_title_page_font_size' => '28',
			'product_title_page_line_height' => '42',
			'product_title_widget_font_family' => 'Source Sans Pro',
			'product_title_widget_font_style' => 'regular',
			'product_title_widget_font_sets' => 'latin,latin-ext',
			'product_title_widget_font_size' => '16',
			'product_title_widget_line_height' => '25',
			'product_title_cart_font_family' => 'Source Sans Pro',
			'product_title_cart_font_style' => 'regular',
			'product_title_cart_font_sets' => 'latin,latin-ext',
			'product_title_cart_font_size' => '16',
			'product_title_cart_line_height' => '25',
			'product_price_listing_font_family' => 'Source Sans Pro',
			'product_price_listing_font_style' => 'regular',
			'product_price_listing_font_sets' => 'latin,latin-ext',
			'product_price_listing_font_size' => '16',
			'product_price_listing_line_height' => '25',
			'product_price_page_font_family' => 'Source Sans Pro',
			'product_price_page_font_style' => '300',
			'product_price_page_font_sets' => 'latin,latin-ext',
			'product_price_page_font_size' => '36',
			'product_price_page_line_height' => '36',
			'product_price_widget_font_family' => 'Source Sans Pro',
			'product_price_widget_font_style' => '300',
			'product_price_widget_font_sets' => 'latin,latin-ext',
			'product_price_widget_font_size' => '20',
			'product_price_widget_line_height' => '30',
			'product_price_cart_font_family' => 'Source Sans Pro',
			'product_price_cart_font_style' => '300',
			'product_price_cart_font_sets' => 'latin,latin-ext',
			'product_price_cart_font_size' => '24',
			'product_price_cart_line_height' => '30',
			'product_title_listing_color' => '#5f727f',
			'product_title_page_color' => '#3c3950',
			'product_title_widget_color' => '#5f727f',
			'product_title_cart_color' => '#00bcd4',
			'product_price_listing_color' => '#00bcd4',
			'product_price_page_color' => '#3c3950',
			'product_price_widget_color' => '#3c3950',
			'product_price_cart_color' => '#3c3950',
			'product_separator_listing_color' => '#000000',
			'header_layout' => 'default',
			'header_style' => '3',
			'mobile_menu_layout' => 'default',
			'mobile_menu_layout_style' => 'light',
			'logo_position' => 'left',
			'menu_appearance_tablet_portrait' => 'responsive',
			'menu_appearance_tablet_landscape' => 'responsive',
			'hamburger_menu_icon_size' => '',
			'top_area_style' => '1',
			'top_area_alignment' => 'left',
			'top_area_contacts' => '1',
			'top_area_socials' => '1',
			'top_area_button_text' => 'Join Now',
			'top_area_button_link' => '#',
			'top_area_disable_fixed' => '1',
			'top_area_disable_mobile' => '1',
			'main_menu_font_family' => 'Montserrat UltraLight',
			'main_menu_font_style' => 'regular',
			'main_menu_font_sets' => '',
			'main_menu_font_size' => '15',
			'main_menu_line_height' => '25',
			'submenu_font_family' => 'Source Sans Pro',
			'submenu_font_style' => 'regular',
			'submenu_font_sets' => '',
			'submenu_font_size' => '16',
			'submenu_line_height' => '20',
			'overlay_menu_font_family' => 'Montserrat',
			'overlay_menu_font_style' => '700',
			'overlay_menu_font_sets' => '',
			'overlay_menu_font_size' => '32',
			'overlay_menu_line_height' => '64',
			'mobile_menu_font_family' => 'Source Sans Pro',
			'mobile_menu_font_style' => 'regular',
			'mobile_menu_font_sets' => '',
			'mobile_menu_font_size' => '16',
			'mobile_menu_line_height' => '20',
			'styled_subtitle_font_family' => 'Montserrat UltraLight',
			'styled_subtitle_font_sets' => '',
			'styled_subtitle_font_size' => '21',
			'styled_subtitle_line_height' => '36',
			'h1_font_family' => 'Podkova',
			'h1_font_style' => '700',
			'h1_font_sets' => '',
			'h1_font_size' => '90',
			'h1_line_height' => '50',
			'h2_font_family' => 'Podkova',
			'h2_font_style' => 'regular',
			'h2_font_sets' => '',
			'h2_font_size' => '50',
			'h2_line_height' => '50',
			'h3_font_family' => 'Podkova',
			'h3_font_style' => 'regular',
			'h3_font_sets' => '',
			'h3_font_size' => '36',
			'h3_line_height' => '45',
			'h4_font_family' => 'Podkova',
			'h4_font_style' => 'regular',
			'h4_font_sets' => '',
			'h4_font_size' => '24',
			'h4_line_height' => '38',
			'h5_font_family' => 'Podkova',
			'h5_font_style' => 'regular',
			'h5_font_sets' => '',
			'h5_font_size' => '19',
			'h5_line_height' => '30',
			'h6_font_family' => 'Podkova',
			'h6_font_style' => 'regular',
			'h6_font_sets' => '',
			'h6_font_size' => '16',
			'h6_line_height' => '25',
			'xlarge_title_font_family' => 'Podkova',
			'xlarge_title_font_style' => '700',
			'xlarge_title_font_sets' => 'latin,latin-ext',
			'xlarge_title_font_size' => '110',
			'xlarge_title_line_height' => '110',
			'light_title_font_family' => 'Podkova',
			'light_title_font_style' => '500',
			'light_title_font_sets' => '',
			'body_font_family' => 'Montserrat UltraLight',
			'body_font_style' => 'regular',
			'body_font_sets' => '',
			'body_font_size' => '15',
			'body_line_height' => '26',
			'widget_title_font_family' => 'Podkova',
			'widget_title_font_style' => '700',
			'widget_title_font_sets' => '',
			'widget_title_font_size' => '23',
			'widget_title_line_height' => '30',
			'button_font_family' => 'Podkova',
			'button_font_style' => '700',
			'button_font_sets' => 'latin',
			'button_thin_font_family' => 'Podkova',
			'button_thin_font_style' => 'regular',
			'button_thin_font_sets' => '',
			'portfolio_title_font_family' => 'Podkova',
			'portfolio_title_font_style' => '700',
			'portfolio_title_font_sets' => '',
			'portfolio_title_font_size' => '16',
			'portfolio_title_line_height' => '24',
			'portfolio_description_font_family' => 'Montserrat UltraLight',
			'portfolio_description_font_style' => 'regular',
			'portfolio_description_font_sets' => '',
			'portfolio_description_font_size' => '15',
			'portfolio_description_line_height' => '26',
			'quickfinder_title_font_family' => 'Podkova',
			'quickfinder_title_font_style' => '600',
			'quickfinder_title_font_sets' => 'latin',
			'quickfinder_title_font_size' => '21',
			'quickfinder_title_line_height' => '38',
			'quickfinder_title_thin_font_family' => 'Podkova',
			'quickfinder_title_thin_font_style' => '700',
			'quickfinder_title_thin_font_sets' => '',
			'quickfinder_title_thin_font_size' => '21',
			'quickfinder_title_thin_line_height' => '38',
			'quickfinder_description_font_family' => 'Montserrat UltraLight',
			'quickfinder_description_font_style' => 'regular',
			'quickfinder_description_font_sets' => '',
			'quickfinder_description_font_size' => '12',
			'quickfinder_description_line_height' => '26',
			'gallery_title_font_family' => 'Podkova',
			'gallery_title_font_style' => 'regular',
			'gallery_title_font_sets' => '',
			'gallery_title_font_size' => '24',
			'gallery_title_line_height' => '30',
			'gallery_title_bold_font_family' => 'Podkova',
			'gallery_title_bold_font_style' => '700',
			'gallery_title_bold_font_sets' => 'latin,latin-ext',
			'gallery_title_bold_font_size' => '24',
			'gallery_title_bold_line_height' => '31',
			'gallery_description_font_family' => 'Montserrat UltraLight',
			'gallery_description_font_sets' => '',
			'gallery_description_font_size' => '17',
			'gallery_description_line_height' => '24',
			'testimonial_font_family' => 'Montserrat UltraLight',
			'testimonial_font_sets' => '',
			'testimonial_font_size' => '32',
			'testimonial_line_height' => '50',
			'counter_font_family' => 'Montserrat',
			'counter_font_style' => '700',
			'counter_font_sets' => '',
			'counter_font_size' => '50',
			'counter_line_height' => '69',
			'woocommerce_price_font_family' => 'Montserrat',
			'woocommerce_price_font_style' => 'regular',
			'woocommerce_price_font_sets' => '',
			'woocommerce_price_font_size' => '26',
			'woocommerce_price_line_height' => '36',
			'slideshow_title_font_family' => 'Montserrat',
			'slideshow_title_font_style' => '700',
			'slideshow_title_font_sets' => '',
			'slideshow_title_font_size' => '50',
			'slideshow_title_line_height' => '69',
			'slideshow_description_font_family' => 'Source Sans Pro',
			'slideshow_description_font_style' => 'regular',
			'slideshow_description_font_sets' => '',
			'slideshow_description_font_size' => '16',
			'slideshow_description_line_height' => '25',
			'basic_outer_background_color' => '#f0f3f2',
			'top_background_color' => '#ffffff',
			'main_background_color' => '#ffffff',
			'footer_widget_area_background_color' => '#24262e;',
			'footer_background_color' => '#1a1c21',
			'styled_elements_background_color' => '#f4f6f7',
			'styled_elements_color_1' => '#45ffdc',
			'styled_elements_color_2' => '#99a9b5',
			'styled_elements_color_3' => '#45ffdc',
			'styled_elements_color_4' => '#393d50',
			'divider_default_color' => '#dfe5e8',
			'box_border_color' => '#dfe5e8',
			'main_menu_level1_color' => '#3c3950',
			'main_menu_level1_background_color' => '',
			'main_menu_level1_hover_color' => '#00f7c6',
			'main_menu_level1_hover_background_color' => '',
			'main_menu_level1_active_color' => '#3c3950',
			'main_menu_level1_active_background_color' => '#00f7c6',
			'main_menu_level2_color' => '#5f727f',
			'main_menu_level2_background_color' => '#f4f6f7',
			'main_menu_level2_hover_color' => '#3c3950',
			'main_menu_level2_hover_background_color' => '#ffffff',
			'main_menu_level2_active_color' => '#3c3950',
			'main_menu_level2_active_background_color' => '#ffffff',
			'main_menu_mega_column_title_color' => '#3c3950',
			'main_menu_mega_column_title_hover_color' => '#00f7c6',
			'main_menu_mega_column_title_active_color' => '#00f7c6',
			'main_menu_level3_color' => '#5f727f',
			'main_menu_level3_background_color' => '#ffffff',
			'main_menu_level3_hover_color' => '#ffffff',
			'main_menu_level3_hover_background_color' => '#494c64',
			'main_menu_level3_active_color' => '#00f7c6',
			'main_menu_level3_active_background_color' => '#ffffff',
			'main_menu_level1_light_color' => '#ffffff',
			'main_menu_level1_light_hover_color' => '#1a1c21',
			'main_menu_level1_light_active_color' => '#ffffff',
			'main_menu_level2_border_color' => '#dfe5e8',
			'mega_menu_icons_color' => '',
			'overlay_menu_background_color' => '#212331',
			'overlay_menu_color' => '#ffffff',
			'overlay_menu_hover_color' => '#1a1c21',
			'overlay_menu_active_color' => '#1a1c21',
			'hamburger_menu_icon_color' => '',
			'hamburger_menu_icon_light_color' => '',
			'mobile_menu_button_color' => '',
			'mobile_menu_button_light_color' => '',
			'mobile_menu_background_color' => '',
			'mobile_menu_level1_color' => '#5f727f',
			'mobile_menu_level1_background_color' => '#f4f6f7',
			'mobile_menu_level1_active_color' => '#3c3950',
			'mobile_menu_level1_active_background_color' => '#ffffff',
			'mobile_menu_level2_color' => '#5f727f',
			'mobile_menu_level2_background_color' => '#f4f6f7',
			'mobile_menu_level2_active_color' => '#3c3950',
			'mobile_menu_level2_active_background_color' => '#ffffff',
			'mobile_menu_level3_color' => '#5f727f',
			'mobile_menu_level3_background_color' => '#f4f6f7',
			'mobile_menu_level3_active_color' => '#3c3950',
			'mobile_menu_level3_active_background_color' => '#ffffff',
			'mobile_menu_border_color' => '#dfe5e8',
			'mobile_menu_social_icon_color' => '',
			'mobile_menu_hide_color' => '',
			'top_area_background_color' => '#f4f6f7',
			'top_area_border_color' => '#00bcd4',
			'top_area_separator_color' => '#dfe5e8',
			'top_area_text_color' => '#5f727f',
			'top_area_link_color' => '#5f727f',
			'top_area_link_hover_color' => '#00bcd4',
			'top_area_button_text_color' => '#ffffff',
			'top_area_button_background_color' => '#494c64',
			'top_area_button_hover_text_color' => '#ffffff',
			'top_area_button_hover_background_color' => '#00bcd4',
			'body_color' => '#5f727f',
			'h1_color' => '#24262e',
			'h2_color' => '#24262e',
			'h3_color' => '#24262e',
			'h4_color' => '#24262e',
			'h5_color' => '#24262e',
			'h6_color' => '#24262e',
			'link_color' => '#00f5c4',
			'hover_link_color' => '#384554',
			'active_link_color' => '#00f5c4',
			'footer_text_color' => '#fff',
			'copyright_text_color' => '#fff',
			'copyright_link_color' => '#45ffdc',
			'title_bar_background_color' => '#6c7cd0',
			'title_bar_text_color' => '#ffffff',
			'date_filter_subtitle_color' => '#99a9b5',
			'system_icons_font' => '#99a3b0',
			'system_icons_font_2' => '#b6c6c9',
			'button_text_basic_color' => '#ffffff',
			'button_text_hover_color' => '#ffffff',
			'button_background_basic_color' => '#b6c6c9',
			'button_background_hover_color' => '#3c3950',
			'button_outline_text_basic_color' => '#24262e',
			'button_outline_text_hover_color' => '#ffffff',
			'button_outline_border_basic_color' => '#24262e',
			'widget_title_color' => '#3c3950',
			'widget_link_color' => '#45ffdc',
			'widget_hover_link_color' => '#45ffdc',
			'widget_active_link_color' => '#384554',
			'footer_widget_title_color' => '#feffff',
			'footer_widget_text_color' => '#fff',
			'footer_widget_link_color' => '#fff',
			'footer_widget_hover_link_color' => '#45ffdc',
			'footer_widget_active_link_color' => '#45ffdc',
			'portfolio_title_color' => '#5f727f',
			'portfolio_description_color' => '#5f727f',
			'portfolio_date_color' => '#99a9b5',
			'gallery_caption_background_color' => '#000000',
			'gallery_title_color' => '#ffffff',
			'gallery_description_color' => '#ffffff',
			'slideshow_arrow_background' => '#394050',
			'slideshow_arrow_hover_background' => '#45ffdc',
			'slideshow_arrow_color' => '#ffffff',
			'sliders_arrow_color' => '#3c3950',
			'sliders_arrow_background_color' => '#b6c6c9',
			'sliders_arrow_hover_color' => '#ffffff',
			'sliders_arrow_background_hover_color' => '#45ffdc',
			'hover_effect_default_color' => '#45ffdc',
			'hover_effect_zooming_blur_color' => '#ffffff',
			'hover_effect_horizontal_sliding_color' => '#46485c',
			'hover_effect_vertical_sliding_color' => '#f44336',
			'quickfinder_title_color' => '#4c5867',
			'quickfinder_description_color' => '#5f727f',
			'bullets_symbol_color' => '#5f727f',
			'icons_symbol_color' => '#91a0ac',
			'pagination_basic_color' => '#99a9b5',
			'pagination_basic_background_color' => '#ffffff',
			'pagination_hover_color' => '#45ffdc',
			'pagination_active_color' => '#3c3950',
			'mini_pagination_color' => '#b6c6c9',
			'mini_pagination_active_color' => '#45ffdc',
			'form_elements_background_color' => '#1a1c21',
			'form_elements_text_color' => '#fff',
			'form_elements_border_color' => '#1a1c21',
			'breadcrumbs_default_color' => '',
			'breadcrumbs_active_color' => '',
			'breadcrumbs_hover_color' => '',
			'basic_outer_background_image' => '',
			'top_background_image' => '',
			'top_area_background_image' => '',
			'main_background_image' => '',
			'footer_background_image' => '',
			'footer_widget_area_background_image' => '',
		)
	);
}