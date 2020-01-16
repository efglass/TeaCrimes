<?php
if ( is_active_sidebar( 'sidebar_widget' ) ) : ?>
	<div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar_widget' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
