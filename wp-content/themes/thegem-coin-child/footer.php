<?php
/**
 * The template for displaying the footer
 */

	$id = is_singular() ? get_the_ID() : 0;
	$effects_params = thegem_get_sanitize_page_effects_data($id);
	$header_params = thegem_get_sanitize_page_header_data($id);
	if(is_tax() || is_category() || is_tag()) {
		$thegem_term_id = get_queried_object()->term_id;
		if(get_term_meta($thegem_term_id , 'thegem_taxonomy_custom_page_options', true)) {
			$effects_params = thegem_get_sanitize_page_effects_data($thegem_term_id, array(), 'term');
			$header_params = thegem_get_sanitize_page_header_data($thegem_term_id, array(), 'term');
		}
	}
	if($effects_params['effects_parallax_footer']) {
		wp_enqueue_script('thegem-parallax-footer');
	}
?>

		</div><!-- #main -->
		<div id="lazy-loading-point"></div>

		<?php if(!$effects_params['effects_page_scroller'] && !$effects_params['effects_hide_footer']) : ?>
			<?php if($effects_params['effects_parallax_footer']) : ?><div class="parallax-footer"><?php endif; ?>
			<?php
				$thegem_custom_footer = get_post(thegem_get_option('custom_footer'));
				$thegem_q = new WP_Query(array('p' => thegem_get_option('custom_footer'), 'post_type' => 'thegem_footer', 'post_status' => 'private'));
				if($header_params['footer_custom']) {
					$thegem_custom_footer = get_post($header_params['footer_custom']);
					$thegem_q = new WP_Query(array('p' => $header_params['footer_custom'], 'post_type' => 'thegem_footer', 'post_status' => 'private'));
				}
				if((thegem_get_option('custom_footer') || $header_params['footer_custom']) && $thegem_custom_footer && $thegem_q->have_posts()) : $thegem_q->the_post(); ?>
				<footer class="custom-footer"><div class="container"><?php the_content(); ?></div></footer>
			<?php wp_reset_postdata(); endif; ?>
			<?php if(is_active_sidebar('footer-widget-area') && !thegem_get_option('footer_widget_area_hide') && !$header_params['footer_hide_widget_area']) : ?>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="container">
					<?php get_sidebar('footer'); ?>
				</div>
			</footer><!-- #colophon -->
			<?php endif; ?>

			<?php if(thegem_get_option('footer_active') && !$header_params['footer_hide_default']) : ?>

			<footer id="footer-nav" class="site-footer">
				<div class="container"><div class="row">
					<div class="col-md-3"><div class="footer-site-info"><?php echo wp_kses_post(do_shortcode(nl2br(stripslashes(thegem_get_option('footer_html'))))); ?></div></div>

					<div class="col-md-9">
						<?php if(has_nav_menu('footer')) : ?>
						<nav id="footer-navigation" class="site-navigation footer-navigation centered-box" role="navigation">
							<?php wp_nav_menu(array('theme_location' => 'footer', 'menu_id' => 'footer-menu', 'menu_class' => 'nav-menu styled clearfix inline-inside', 'container' => false, 'depth' => 1, 'walker' => new thegem_walker_footer_nav_menu)); ?>
						</nav>
						<?php endif; ?>
					</div>

			
				</div></div>
			</footer><!-- #footer-nav -->
			<?php endif; ?>
			<?php if($effects_params['effects_parallax_footer']) : ?></div><!-- .parallax-footer --><?php endif; ?>

		<?php endif; ?>
	</div><!-- #page -->

	<?php if(thegem_get_option('header_layout') == 'perspective') : ?>
		</div><!-- #perspective -->
	<?php endif; ?>

	<?php wp_footer(); ?>
</body>
</html>
