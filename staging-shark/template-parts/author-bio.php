<?php
/**
 * The template for displaying Author bios
 */
?>

<?php

$slug = get_post_field( 'single-guest_authors', $author_id );

$website_author = get_the_author_meta( 'user_url', $author_id );
$google_plus    = get_the_author_meta( 'googleplus_profile', $author_id );
$twitter        = get_the_author_meta( 'twitter_profile', $author_id );
$facebook       = get_the_author_meta( 'facebook_profile', $author_id );
$instagram      = get_the_author_meta( 'instagram_profile', $author_id );
$email_author = get_the_author_meta('user_email', $author_id);


?>

<div class="author-box">
	<div class="a-identity">
		<h4>Written by: </h4>
		<a id="a-box-img-link"
		   href="<?php echo get_site_url() ?>/author/<?php echo get_the_author_meta( 'user_nicename', $author_id ) ?>">
			<img class="a-box-pic"
			     src="<?php the_field( 'author_pic', 'user_' . $author_id ); ?>">
		</a>
		<h3>
			<a href="<?php echo get_site_url() ?>/author/<?php echo get_the_author_meta( 'user_nicename', $author_id ) ?>"><?php the_field( 'author_name', 'user_' . $author_id ); ?></a>
		</h3>
		<ul class="social-profiles">
			<!-- Google Plus -->
			<?php if ( ! empty( $google_plus ) ) { ?>
				<li><a href="<?php echo $google_plus ?>" target="_blank"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/googlePlus.png"></a>
				</li>
			<?php }
			/* Twitter */
			if ( ! empty( $twitter ) ) { ?>
				<li><a href="<?php echo $twitter ?>" target="_blank"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/twitter.png"></a>
				</li>
			<?php }
			/* Facebook */
			if ( ! empty( $facebook ) ) { ?>
				<li><a href="<?php echo $facebook ?>" target="_blank"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/faceBook.png"></a>
				</li>
			<?php }
			/* Intagram */
			if ( ! empty( $instagram ) ) { ?>
				<li><a href="<?php echo $instagram ?>" target="_blank"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/instagram.png"></a>
				</li>
			<?php }
			/* Website */
			if ( ! empty( $website_author ) ) { ?>
				<li><a href="<?php echo $website_author ?>"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/website.png"></a>
				</li>
			<?php }
			/* Email */
			if ( ! empty( $email_author ) ) { ?>
				<li><a href="mailto:<?php echo $email_author ?>" target="_blank"><img
								src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/email.png"></a>
				</li>
			<?php }; ?>
		</ul>
	</div>
	<p><?php the_field( 'box_description', 'user_' . $author_id ); ?></p>
</div>
<!-- /.author-box
