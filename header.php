<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Framework
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="l-wrapper">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'wp-framework' ); ?></a>

	<header class="c-header js-header">
        <div class="c-header__content l-row">
            <div class="c-header__logo">
                <?php
                the_custom_logo();
                ?>
            </div><!-- .site-branding -->

            <nav id="primary-menu" class="c-nav js-nav">
                <?php
                //See inc/navigation-functions.php for other css class definitions
                wp_nav_menu(
                    array(
                        'theme_location'    => 'menu-1',
                        'container'         => false,
                        'menu_id'           => 'primary-menu',
                        'menu_class'        => 'c-nav__list',
                        'list_item_class'   => 'c-nav__item',
                        'link_class'        => 'c-nav__btn'
                    )
                );
                ?>
            </nav><!-- #site-navigation -->
            <button class="c-nav__show js-navtoggle" data-nav="standard" aria-expanded="false" aria-controls="primary-menu" aria-label="Navigation expand button">
                <div class="c-nav__showbtn">
                    <div class="c-nav__showbtn-line"></div>
                    <div class="c-nav__showbtn-line"></div>
                    <div class="c-nav__showbtn-line"></div>
                </div>
            </button>
        </div>
	</header><!-- #masthead -->

    <main class="c-main">
