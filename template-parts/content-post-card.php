<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Framework
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('c-card'); ?>>
	<header class="c-card__header">
		<?php
            wp_framework_post_thumbnail();
            wp_framework_get_categories();

			the_title( '<h2 class="c-card__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );

		if ( 'post' === get_post_type() ) :
			?>
				<?php
				wp_framework_posted_on();
				//wp_framework_posted_by();
				?>
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="c-card__text">
        <div class="c-card__summary">
            <?php
            the_excerpt();
            ?>
        </div>
	</div><!-- .entry-content -->

	<footer class="c-card__footer">
        <a href="' . get_the_permalink() . '" class="c-btn c-btn--sm">Read More</a>
		<?php //wp_framework_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
