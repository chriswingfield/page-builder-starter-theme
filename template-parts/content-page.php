<?php
/**
 * Template part for displaying page content in page.php
 *
 * @package WordPress
 * @subpackage Page Builder Starter
 * @since Page Builder Starter 1.0
 */
do_action('zx_page_before_article'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

	<?php do_action('zx_page_before_content'); ?>

	<header class="">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header>

	<div class="entry-content">
		<?php
		the_content();
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'startertheme' ),
			'after'  => '</div>',
		) );
		?>
	</div>

	<?php do_action('zx_page_after_content'); ?>

</article>

<?php do_action('zx_page_after_article');
