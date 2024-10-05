<?php
/**
 * Theme functions and definitions
 *
 */

/**
 * Enqueues Styles
 */
function quiet_blog_enqueue_styles() {

	wp_enqueue_style( 'quiet-blog-style-parent', get_template_directory_uri() . '/style.css',
		array(
			'cube-blog-blocks',
		)
	);
}
add_action( 'wp_enqueue_scripts', 'quiet_blog_enqueue_styles', 10 );


require get_stylesheet_directory() . '/inc/customizer.php';

require get_stylesheet_directory() . '/inc/child-functions.php';

add_filter( 'cube_blog_get_fonts_url', 'quiet_blog_modify_font' );
/**
 * Modify enqueued font
 */
function quiet_blog_modify_font( $font ){
	return str_replace( 'Jost', 'Karla', $font);
}

function quiet_blog_setup() {
    add_theme_support('title-tag');
    add_theme_support( 'automatic-feed-links' );
}
add_action('after_setup_theme', 'quiet_blog_setup');