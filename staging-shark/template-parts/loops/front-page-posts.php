<?php
//  Display html5 markup for single posts in loop
?>

<div class="single-crime">
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
</div>
