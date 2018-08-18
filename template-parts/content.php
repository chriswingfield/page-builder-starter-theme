<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Page Builder Starter
 * @since Page Builder Starter 1.0
 */
do_action('zx_before_article'); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class( '' ); ?>>

	<?php do_action('zx_before_content'); ?>

	<div class="entry-content">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php the_excerpt(); ?>
	</div>

	<?php if ( ! is_singular() ) :?>
		<a href="<?php echo esc_url( get_permalink( get_the_ID() ) ) ?>" class="blue-button read-more"><?php echo esc_html__( 'Read More', 'startertheme' ) ?></a>
	<?php endif;?>

	<?php do_action('zx_after_content'); ?>

</article>

<?php do_action('zx_after_article');
