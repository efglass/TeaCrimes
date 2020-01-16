<?php

function wp_tea_enqueue_styles() {
	
	// enqueue parent styles
	wp_enqueue_style( 'under_tea_crimes', get_template_directory_uri() . '/style.css' );
	
	// enqueue child styles
	//wp_enqueue_style('under_tea_child', get_stylesheet_directory_uri() .'/style.css', array('under_tea_crimes'));
	
	// enqueue local fonts
	wp_enqueue_style( 'under_tea_child-local-fonts', get_stylesheet_directory_uri() . '/assets/fonts/custom-fonts.css' );
	
	// enqueue font awesome
	wp_enqueue_style( 'load-fa', get_stylesheet_directory_uri() . '/assets/fonts/fontAwesome/font-awesome.min.css' );
	
	// enqueue web font awesome
	//wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	
	// enqueue child scripts TABS
	wp_enqueue_script( 'under_tea_child-myTopScripts', get_stylesheet_directory_uri() . '/assets/js/singleTabs.js', array( 'jquery' ), false );
	// enqueue child navigation js
	wp_enqueue_script( 'under_tea_child-navigation', get_stylesheet_directory_uri() . '/assets/js/navigation.js', array( 'jquery' ), false );
}

add_action( 'wp_enqueue_scripts', 'wp_tea_enqueue_styles' );

/**=================================================================================
 * Adding customizer functionality for Company Logo
 *          fixing size of featured image
 * =================================================================================*/
function wp_tea_theme_prefix_setup() {
	add_theme_support( 'custom-logo', array(
		'height'     => 184,
		'width'      => 184,
		'flex-width' => true,
	) );
	add_image_size( 'Post Image', 1000, 562.5, true );
}

add_action( 'after_setup_theme', 'wp_tea_theme_prefix_setup' );


/**=================================================================================
 * Flush rewrite rules to add "review" as a permalink slug
 * =================================================================================*/
function my_rewrite_flush() {
	wp_tea_custom_posttype();
	flush_rewrite_rules();
}

register_activation_hook( __FILE__, 'my_rewrite_flush' );


/**=================================================================================
 * sidebar widget area
 * =================================================================================*/
function wp_tea_widgets_init() {
	
	register_sidebar( array(
		'name'          => 'Sidebar Widget Area',
		'id'            => 'sidebar_widget',
		'before_widget' => '<div class="single-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
}

add_action( 'widgets_init', 'wp_tea_widgets_init' );


/**===================================================================================
 * Add Author Links
 * =================================================================================*/
function add_to_author_profile( $contactmethods ) {
	
	$contactmethods['googleplus_profile'] = 'Google Plus Profile URL';
	$contactmethods['twitter_profile']    = 'Twitter Profile URL';
	$contactmethods['facebook_profile']   = 'Facebook Profile URL';
	$contactmethods['instagram_profile']  = 'Instagram Profile URL';
	$contactmethods['instagram_profile']  = 'Instagram Profile URL';
	
	return $contactmethods;
}

add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1 );

/**=================================================================================
 * Template redirects FOR sitemap_xml
 * =================================================================================*/
function under_tea_crimes_template_redirect( $template ) {
	
	global $wp;
	
	if ( $wp->request === 'sitemap.xml' ) {
		return get_stylesheet_directory() . '/assets/sitemap.php';
	}
	
	return $template;
}

add_filter( 'template_include', 'under_tea_crimes_template_redirect' );