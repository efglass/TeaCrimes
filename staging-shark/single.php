<?php
/**
 * Single Post Template: postConnector
 *
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Under_Tea_Crimes
 */

get_header(); ?>


<div id="primary" class="content-area">

	<main id="main" class="site-main" role="main">


		<?php
		if ( has_post_thumbnail() ):;?>
			<div class="feature-hero">
				<?php the_post_thumbnail(); ?>
			</div>

		<?php else:; ?>
			<div class="home-hero"></div>
		<?php endif; ?>

		<div id="tabs">

			<div class="c-tab wysiwyg-editor" id="crime">
				<h1><?php the_field( 'crime_title' ); ?></h1>
				<div class="entry-meta">
					<small>
						<?php the_time( 'F jS, Y' ) ?>
						<?php the_category( ', ' ) ?>
					</small>
				</div>
				<?php the_field( 'crime_post' ); ?>
				<?php if ( ! get_field( 'punishment_title' ) || ! get_field( 'punishment_post' ) ) {
					$author_id = $post->post_author;
					include( locate_template( 'template-parts/author-bio.php' ) );

				} ?>

			</div>
			<!-- /.crime-post -->
			<?php if ( get_field( 'punishment_title' ) || get_field( 'punishment_post' ) ): ?>
				<div id="punishment-tab">
					<h3>
						<a href="#punishment"><?php if ( in_category( 'Myth' ) ) {
								; ?> True or False?
							<?php } else {
								; ?> Solve The Crime!
							<?php } ?></a></h3>
				</div>
				<!-- /#punishment-tab -->
				<div class="p-tab yes-punish wysiwyg-editor" id="punishment">
					<h1><?php the_field( 'punishment_title' ); ?></h1>
					<?php the_field( 'punishment_post' ); ?>
					<?php
					$author_id = $post->post_author;
					$author_name = get_the_author();
					include( locate_template( 'template-parts/author-bio.php' ) );
					?>
					<!--<div class="posts-boxes">-->
					<div class="comments-of-post">
						<?php // If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif; ?>
					</div>
					<!-- /.comments-of-post -->
					<!--</div>-->
				</div>
				<!-- /.punishement-post -->

			<?php else:; ?>
				<div class="no-punish">
					<div class="posts-boxes">
						<div class="comments-of-post">
							<?php // If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif; ?>
						</div>
						<!-- /.comments-of-post -->
					</div>
				</div>
			<?php endif; ?>
		</div>
		<!-- /#tabs -->

	</main>
	<!-- /#main -->

	<div class="aside-bar" id="tabs">
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
		<div class="addthis_inline_share_toolbox"></div>
	</div>
	<!-- /.aside-bar-->

</div>
<!-- /#primary -->

<?php get_footer(); ?>
