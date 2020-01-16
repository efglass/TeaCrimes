<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Under_Tea_Crimes
 */

?>

<article class="single-crime"
         id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="single-img">
		<a href="<?php the_permalink(); ?>"
		   title="<?php the_title_attribute(); ?>">
			<img src="<?php the_post_thumbnail(); ?>"/>
		</a>
	</div>
	<div class="single-crime-text">
		<h3>
			<a href="<?php the_permalink(); ?>"
			   title="<?php the_title_attribute(); ?>">
				<?php the_title(); ?>
			</a>
		</h3>
		<div class="the-excerpt"><?php the_excerpt(); ?></div>
		<h3 class="author-name">
			<?php the_author_posts_link(); ?>
		</h3>
		<p class="post-time">
			<?php the_date( 'F j, Y' ); ?>
		</p>
	</div>
</article><!-- #post-## -->
