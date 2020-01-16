<?php
/**
	Display heaeder for mobile views in 480px to 980px
 */
?>
<div class="mobile-header">
        <div class="mobile-logo">
			<?php the_custom_logo(); ?>
</div>
<h1 class="mobile-title">
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
</h1>
	<div class="addthis_inline_follow_toolbox"></div>
</div>