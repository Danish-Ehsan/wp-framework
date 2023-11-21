<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Framework
 */

?>
    </main>

	<footer id="colophon" class="c-footer">
		<div class="c-footer__content">
            <div class="c-footer__col c-footer__col--logo">
                <div class="c-footer__logo"><?php the_custom_logo(); ?></div>
            </div>
            <div class="c-footer__col c-footer__col--contact">
                <section class="c-footer__contact">
                    <?php 
                        if (get_field('company_name', 'options')) : ?>
                        <p class="c-footer__companyname"><strong><?= get_field('company_name', 'options') ?></strong></p>
                    <?php 
                        endif;
                        if (get_field('address', 'options')) : ?>
                        <p class="c-footer__address"><?= get_field('address', 'options') ?></p>
                    <?php 
                        endif; 
                        if (get_field('phone', 'options')) : ?>
                        <p class="c-footer__phone"><a href="tel:<?= get_field('phone', 'options') ?>"><?= get_field('phone', 'options') ?></a></p>
                    <?php 
                        endif; 
                        if (get_field('email', 'options')) : ?>
                        <p class="c-footer__email"><a href="mailto:<?= get_field('email', 'options') ?>"><?= get_field('email', 'options') ?></a></p>
                    <?php endif; ?>
                </section>
                <p class="c-footer__copyright">&copy; <?= date('Y') ?> <?= get_field('company_name', 'options') ?></p>
            </div>
            <div class="c-footer__col c-footer__col--socials">
                <?php
                    if (get_field('facebook', 'options')) : ?>
                    <a href="<?= get_field('facebook', 'options')['url'] ?>" aria-label="Facebook" <?= get_field('facebook', 'options')['target'] ? 'target="' . get_field('facebook', 'options')['target'] . '"' : '' ?> class="c-footer__socials__link"><span class="dashicons dashicons-facebook"></span></a>
                <?php 
                    endif; 
                    if (get_field('instagram', 'options')) : ?>
                    <a href="<?= get_field('instagram', 'options')['url'] ?>" aria-label="Instagram" <?= get_field('instagram', 'options')['target'] ? 'target="' . get_field('instagram', 'options')['target'] . '"' : '' ?> class="c-footer__socials__link"><span class="dashicons dashicons-instagram"></span></a>
                <?php 
                    endif; 
                    if (get_field('twitter', 'options')) : ?>
                    <a href="<?= get_field('twitter', 'options')['url'] ?>" aria-label="Twitter" <?= get_field('twitter', 'options')['target'] ? 'target="' . get_field('twitter', 'options')['target'] . '"' : '' ?> class="c-footer__socials__link"><span class="dashicons dashicons-twitter"></span></a>
                <?php
                    endif; 
                    if (get_field('youtube', 'options')) : ?>
                    <a href="<?= get_field('youtube', 'options')['url'] ?>" aria-label="Youtube" <?= get_field('youtube', 'options')['target'] ? 'target="' . get_field('youtube', 'options')['target'] . '"' : '' ?> class="c-footer__socials__link"><span class="dashicons dashicons-youtube"></span></a>
                <?php endif; ?>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
