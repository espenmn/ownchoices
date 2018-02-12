<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OwnChoices
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'egnevalg' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div id="topcontainer">
		<div class="site-branding">
			
			<?php
			if ( is_front_page() && is_home() ) : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://egnevalg.no//wp-content/uploads/2016/08/logo.png" height="60" width="auto"> <b>Own Choices</b> <i>Gestalt Therapy</i></a></h1>
			<?php else : ?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="http://egnevalg.no//wp-content/uploads/2016/08/logo.png" height="60" width="auto"> <b>Own Choices</b> <i>Gestalt Therapy</i></a></h1>
			<?php
			endif;

			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">		
<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p></a>
			<?php
			endif; ?>
		</div><!-- .site-branding -->


<div class="bestilltid" >Book now: <a href="mailto:post@egnevalg.no">post@egnevalg.no</a><br />
<a href="tel:+4740229916" target="_blank">+47&nbsp;40&nbsp;22&nbsp;99&nbsp;16</a></div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '=', 'egnevalg' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
<div class="language_switch"><a href="http://egnevalg.no"><img src="http://ownchoices.no/wp-content/uploads/2016/09/flagn.png" width="40" height="32"/></a></div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">