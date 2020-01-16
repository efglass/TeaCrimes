<?php
/**
 * Author Page
 */
?>

<?php get_header(); ?>
<!-- Set the $curauth variable -->
<?php
$curauth = ( isset( $_GET['author_name'] ) ) ? get_user_by( 'slug', $author_name ) : get_userdata( intval( $author ) );
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<!-- hero banner w/ img from user profile -->
		<div class="hero-author">
			<img class="author-banner"
			     src="<?php the_field( 'background_banner', 'user_' . $curauth->ID ); ?>">
		</div>
		<div class="author-look">
			<!-- round profile image from user profile -->
			<img class="author-round"
			     src="<?php the_field( 'author_pic', 'user_' . $curauth->ID ); ?>">
			<!-- desired name entered in custom name field in user profile -->
			<h1 class="author-name"><?php the_field( 'author_name', 'user_' . $curauth->ID ); ?></h1>
		</div>
		<!-- bio text -->
		<div class="author-content wysiwyg-editor">
			<?php the_field( 'author_bio', 'user_' . $curauth->ID ); ?>
		</div>
		
		<!-- post loop credited to author -->
		<div class="new-posts">
			
			<?php
			$category_id_to_post     = 0;
			$number_of_posts_to_show = 0;
			$authors_posts           = $curauth->ID;
			include( locate_template( 'template-parts/loops/loop-sleuth.php' ) )
			?>
		</div>
	</main><!-- END .content-area -->
</div><!-- END .site-main-->


<?php get_footer(); ?>
