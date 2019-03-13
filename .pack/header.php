<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Vertex
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
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'vertex' ); ?></a> -->

	<header id="header" class="header">
		<div class="container header__container">
            <div class="branding">
                <h1 class="branding__name">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
            </div><!-- branding -->

            <button class="toggler header__toggler" aria-controls="menu-primary" aria-expanded="false">
                <i class="toggler__icon"></i>
                <i class="toggler__icon"></i>
                <i class="toggler__icon"></i>
            </button><!-- .toggler -->

            <div class="header__collapse">
                <nav id="nav" class="nav">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-primary',
                        'menu_id'        => 'menu-primary',
                        'menu_class'     => 'nav__items',
                    ) );
                    ?>
                </nav><!-- #nav -->
            </div><!-- .header__collapse -->
        </div><!-- .container -->
	</header><!-- #header -->

	<div id="content" class="site-content">
