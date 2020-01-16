<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Under_Tea_Crimes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Why No Page Here?!', 'under_tea_crimes' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<h3><?php esc_html_e( 'Of course not! Why would there be a page here? You\'re the crazy one for trying to go to an imaginary place!', 'under_tea_crimes' ); ?></h3>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
