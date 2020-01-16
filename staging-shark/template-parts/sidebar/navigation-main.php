<?php
/**
	Displays nav for main sidebar
 */
?>
<nav id="site-navigation" class="main-navigation " role="navigation">
	<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
		<?php esc_html_e( 'Menu', 'under_tea_crimes' ); ?>
	</button>
	<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
</nav><!-- #site-navigation .main-navigation -->

