<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Under_Tea_Crimes
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php esc_html_e( 'Skip to content', 'under_tea_crimes' ); ?>
		</a>
		
		
		<header id="masthead" class="site-header" role="banner">
			<!-- get site branding, logo and title for 980px+-->
			<?php get_template_part( 'template-parts/sidebar/site', 'brand' ); ?>
			<!-- Go to www.addthis.com/dashboard to customize your tools -->
			<div class="desktop addthis_inline_follow_toolbox"></div>
			
			<!-- get navigation for 980px+-->
			<?php get_template_part( 'template-parts/sidebar/navigation', 'main' ); ?>
			<!-- Get site info | copyright info 980px+-->
			<?php get_template_part( 'template-parts/sidebar/site', 'info' ); ?>
			<!-- Get widget area -->
			<?php get_template_part( 'template-parts/sidebar/sidebar', 'widgetarea' ); ?>
		</header>
		<!-- #masthead -->
		<!-- get top bar and logo for 480px to 980px-->
		<?php get_template_part( 'template-parts/mobile/mobile', 'header' ); ?>
		<!--    get top bar for 480px and less-->
		<?php get_template_part( 'template-parts/mobile/cell', 'header' ); ?>
		
		<div id="content" class="site-content">
