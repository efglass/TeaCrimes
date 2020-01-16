<?php

/* 
Template Name: About Page
*/

?>

<?php get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<div class="home-hero">
			<h1 class="page-title"><?php wp_title($sep = '');?></h1>
			<p class="hero-description">
				A lil bit about us
			</p>
		</div><!-- END .home-hero -->
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="home-page-content wysiwyg-editor">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
		<div class="author-posts">
			
			<?php $args = array(
				'role__in' => [ 'author', 'administrator'],
				'orderby' => 'post_count',
				'order'   => 'DESC'
			);
			$authors = get_users( $args );
			
			
			foreach ( $authors as $author ) { ?>
				
				<div class="single-author">
					<!-- author's image and link to page -->
					<div class="author-img">
						<a href="<?php echo get_author_posts_url( $author->ID ); ?>"
						   title="<?php the_field( 'author_name', 'user_' . $author->ID ); ?>">
							<img src="<?php the_field( 'author_pic', 'user_' . $author->ID ); ?>"
							     alt="<?php the_field( 'author_name', 'user_' . $author->ID ); ?>"/>
						</a>
					</div>
					<div class="single-author-text">
						<!-- author's desired name and link to page -->
						<h3>
							<a href="<?php echo get_author_posts_url( $author->ID ); ?>"><?php the_field( 'author_name', 'user_' . $author->ID ); ?></a>
						</h3>
					</div>
				</div><!-- END .single-author -->
			
			<?php } ?>
		
		
		</div>
	</main><!-- .content-area -->
</div><!-- .site-main-->


<?php get_footer(); ?>
