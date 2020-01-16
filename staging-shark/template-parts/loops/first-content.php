<?php
/**
 * Get first paragraph from a WordPress post. Use inside the Loop.
 *
 * @return string
 */
function get_first_paragraph() {
	global $post;

	$str = wpautop( get_the_content() );
	$str = substr( $str, 0, strpos( $str, '</p>' ) + 4 );
	$str = strip_tags( $str, '<a><strong><em>' );

	return '<p>' . $str . '</p>';
}
