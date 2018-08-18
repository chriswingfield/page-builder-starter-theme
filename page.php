<?php
/**
 * Page template
 *
 * @package WordPress
 * @subpackage Page Builder Starter
 * @since Page Builder Starter 1.0
 */
get_header();

do_action('zx_page_before_loop');

	while ( have_posts() ) : the_post();
		get_template_part( 'template-parts/content', 'page' );
	endwhile;

do_action('zx_page_after_loop');

get_footer();
