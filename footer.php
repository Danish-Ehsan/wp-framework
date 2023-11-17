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
            <div class="c-footer__col c-footer__col--left">
                <div class="c-footer__logo"><?php the_custom_logo(); ?></div>
            </div>
            <div class="c-footer__col c-footer__col--right">
                <section class="c-footer__contact">
                    <?php 
                        if (get_option('company_contact_info_options')['company_name']) : ?>
                        <p class="c-footer__companyname"><strong><?= get_option('company_contact_info_options')['company_name'] ?></strong></p>
                    <?php 
                        endif;
                        if (get_option('company_contact_info_options')['company_address1']) : ?>
                        <p class="c-footer__address"><?= get_option('company_contact_info_options')['company_address1'] ?></p>
                    <?php 
                        endif;
                        if (get_option('company_contact_info_options')['company_address2']) : ?>
                        <p class="c-footer__address"><?= get_option('company_contact_info_options')['company_address2'] ?></p>
                    <?php 
                        endif; 
                        if (get_option('company_contact_info_options')['company_phone']) : ?>
                        <p class="c-footer__phone"><a href="tel:<?= get_option('company_contact_info_options')['company_phone'] ?>"><?= get_option('company_contact_info_options')['company_phone'] ?></a></p>
                    <?php 
                        endif; 
                        if (get_option('company_contact_info_options')['company_email']) : ?>
                        <p class="c-footer__email"><a href="mailto:<?= get_option('company_contact_info_options')['company_email'] ?>"><?= get_option('company_contact_info_options')['company_email'] ?></a></p>
                    <?php endif; ?>
                </section>
                <p class="c-footer__copyright">&copy; <?= date('Y') ?> <?= get_option('company_name') ?></p>
            </div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
