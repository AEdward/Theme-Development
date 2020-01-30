<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ocean_wp_child_by_anahom
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1 shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site-container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ocean_wp_child_by_anahom' ); ?></a>

	<header id="masthead" class="site-header">
	
	<nav id = "menu" class = "navbar-expand-md navbar-light" role = "navigation">
	<div class="container">
		
		<div class="site-branding navbar-brand">
			<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="mb-0 site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="mb-0 site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$ocean_wp_child_by_anahom_description = get_bloginfo( 'description', 'display' );
			if ( $ocean_wp_child_by_anahom_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $ocean_wp_child_by_anahom_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->



		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'ocean_wp_child_by_anahom' ); ?></a>
	<nav id="site-navigation"  class="navbar navbar-expand-md  ">
    <a class="navbar-brand" href="#">
    
    </a>
    <button class="navbar-toggler navbar-toggler-icon navbar-toggler-right bg-light" type = "button" data-toggle="collapse" data-target="#bs4navbar" aria-controls = "bs4navbar" aria-expanded="false" aria-label="Toggle navigation"><?php esc_html_e( '', 'ocean_wp_child_by_anahom' ); ?></button>

	
	

<?php

wp_nav_menu([

'menu' => 'primary',
'theme_location' => 'primary',
'container' => 'div',
'container_id' => 'bs4navbar',
'container_class' => 'collapse navbar-collapse',
'menu_id' => 'main-menu',
'menu_class' => 'navbar-nav ml-auto',
'depth' => 4,
'fallback_cb' => 'bs4navwalker::fallback',
'walker' => new wp_bootstrap_navwalker()

]);
?>
	</header><!-- #masthead -->


	<div id="content" class="site-content-row">

	<div> </div>
