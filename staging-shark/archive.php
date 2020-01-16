<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Under_Tea_Crimes
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) : ?>

			<header class="page-header">
				<div class="home-hero">
					<?php
					if ( in_category( 'crime' ) ) {
						echo '<h1 class="page-title">Crime &amp; Punishment</h1>';
					} else if ( in_category( 'myth' ) ) {
						echo '<h1 class="page-title">Myth Busters</h1>';
					} else if ( in_category( 'crime_lab' ) ) {
						echo '<h1 class="page-title">Crime Lab</h1>';
					} else if ( in_category('case_files')) {
						echo '<h1 class="page-title">Case Files</h1>';
					} else {
						echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';
					}
					//the_archive_description( '<div class="archive-description">', '</div>' );
					?>
				</div>
			</header><!-- .page-header -->
			<div class="archive-post">
				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );

				endwhile; else:
					get_template_part( 'template-parts/content', 'none' );
				endif; ?>
			</div>

			<div class="paging">
				<?php
				the_posts_pagination( array(
					'prev_text'          => __( 'Newer', 'under_tea_crimes' ),
					'next_text'          => __( 'Older', 'under_tea_crimes' ),
					'before_page_number' => '<span class="screen-reader-text">' . __( 'Page ', 'under_tea_crimes' ) . '</span>',
				) );
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
