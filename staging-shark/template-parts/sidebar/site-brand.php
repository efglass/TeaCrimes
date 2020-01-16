<?php
/**
 * Display the logo and tile for 980px plus (Desktop)
 */
?>
<div class="site-branding">
    <div class="site-logo">
		<?php the_custom_logo(); ?>
    </div>
    <h1 class="site-title">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
			<?php bloginfo( 'name' ); ?>
        </a>
    </h1>
</div>
<!-- .site-branding -->
