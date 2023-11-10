<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_Framework
 */

get_header();
?>
    <section class="l-content">
		<?php

		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

            if (is_home() && !is_front_page()) {
                echo '<section class="l-grid">';
            }

			/* Start the Loop */
			while ( have_posts() ) :

				the_post();

				if (is_home() && ! is_front_page()) {
                    get_template_part( 'template-parts/content', get_post_type() . '-card' );
                } else {
                    get_template_part( 'template-parts/content', get_post_type() );
                }

			endwhile;

            if (is_home() && !is_front_page()) {
                echo '</section>';
            }

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

    </section>

<?php
//get_sidebar();
get_footer();
