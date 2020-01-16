<?php
/*
*
*Template Name: Single Guest Author
*
*/
?>


<?php get_header(); ?>
<?php
$username = get_field( 'choose_author' ); // this gives us an array of all user data..
$userID   = $username['ID'];   // grabs the user ID
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="hero-author">
				<img class="author-banner"
				     src="<?php the_field( 'background_banner', 'user_' . $userID ); ?>">
			</div>
			<div class="author-look">
				<img class="author-round" src="<?php the_field( 'author_pic', 'user_' . $userID ); ?>">
				<h1 class="author-name"><?php the_field( 'author_name', 'user_' . $userID ); ?></h1>
			</div>
			<div class="author-content">
				<?php the_field( 'author_bio', 'user_' . $userID ); ?>
			</div>
			<div class="new-posts">

				<?php
				$category_id_to_post     = 0;
				$number_of_posts_to_show = 0;
				$authors_posts           = $userID;
				include( locate_template( 'template-parts/loops/loop-sleuth.php' ) )
				?>
			</div>
		</main><!-- .content-area -->
	</div><!-- .site-main-->


<?php get_footer(); ?>