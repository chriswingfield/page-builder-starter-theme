<?php
/**
 * Main template file
 *
 * @package WordPress
 * @subpackage Page Builder Starter
 * @since Page Builder Starter 1.0
 */
get_header();

	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) : the_post();
			/*
				* Include the Post-Format-specific template for the content.
				* If you want to override this in a child theme, then include a file
				* called content-___.php (where ___ is the Post Format name) and that will be used instead.
				*/
			the_title();
		endwhile;
	else :
		esc_html_e( 'Nothing Found', 'startertheme' );
	endif;

get_footer();
