<?
/**
 * Display styled posts
 */
?>
<?php
$what_to_posts = array(
	'cat'            => $category_id_to_post,
	'posts_per_page' => $number_of_posts_to_show,
	'author'         => $authors_posts,
	
);
?>
<!-- Show New Posts Only from Category 'crime' ID=3 -->
<?php query_posts( $what_to_posts ); ?>
<!--Begin Loop -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- Display markup for single post box -->

	<?php get_template_part( 'template-parts/loops/front-page-posts' ); ?>

<?php endwhile;
else : ?>
	<h3><em>OOPS... Posts Coming Soon</em></h3>

<?php endif; ?>
