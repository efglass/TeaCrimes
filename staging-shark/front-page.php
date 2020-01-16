<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="home-hero">
			<h1 class="hero-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					<?php bloginfo( 'name' ); ?>
				</a>
			</h1>
			<p class="hero-description">
				<?php bloginfo( 'description' ); ?>
			</p>
		</div><!-- END .home-hero -->

		<!-- Show Crime Posts -->
		<h2 class="post-title"><a href="<?php get_site_url();?>/category/crime" >Crimes &amp; Punishments</a><br>
			<span><a class="more-posts" href="<?php get_site_url();?>/category/crime" >&mdash; View More Posts &mdash;</a><br>
				<small><em>Solving Tea Felonies & Busting Their Myths</em></small></span></h2>
		<div class="new-posts">
			<?php
			$category_id_to_post     = 3;
			$number_of_posts_to_show = 2;
			$authors_posts           = 0;
			include( locate_template( 'template-parts/loops/loop-sleuth.php' ) );
			?>
		</div>


		<!-- Show Crime Labs Posts -->
		<?php while ( have_posts() ) : the_post(); ?>
		<?php endwhile;
		wp_reset_query(); ?>
		<h2 class="post-title"><a href="<?php get_site_url();?>/category/crime_lab" >The Crime Lab</a><br>
			<span><a class="more-posts" href="<?php get_site_url();?>/category/crime_lab" >&mdash; View More Posts &mdash;</a><br>
				<small><em>Step by Step Investigations</em></small></span></h2>
		<div class="new-posts">
			<?php
			$category_id_to_post     = 15;
			$number_of_posts_to_show = 2;
			$authors_posts           = 0;
			include( locate_template( 'template-parts/loops/loop-sleuth.php' ) );
			?>
		</div>

		<!-- Show Case Files Posts -->
		<?php while ( have_posts() ) : the_post(); ?>
		<?php endwhile;
		wp_reset_query(); ?>
		<h2 class="post-title"><a href="<?php get_site_url();?>/category/case_files" >Case Files</a><br>
			<span><a class="more-posts" href="<?php get_site_url();?>/category/case_files" >&mdash; View More Posts &mdash;</a><br>
				<small><em>Contemplating Tea’s General Mysteries</em></small></span></h2>
		<div class="new-posts">
			<?php
			$category_id_to_post     = 16;
			$number_of_posts_to_show = 2;
			$authors_posts           = 0;
			include( locate_template( 'template-parts/loops/loop-sleuth.php' ) );
			wp_reset_query();  ?>
		</div>
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="home-page-content wysiwyg-editor">
				<?php the_content(); ?>
			</div>
		<?php endwhile;
		wp_reset_query(); ?>

	</main><!-- END #main .content-area -->
</div><!-- END #primary .site-main-->

<?php get_footer(); ?>
