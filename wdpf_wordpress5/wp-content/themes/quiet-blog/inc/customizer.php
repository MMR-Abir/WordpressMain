<?php
/**
 * Quiet Blog Theme Customizer
 *
 * @package quiet_blog
 */

/**
 * Customizer options
 */
function quiet_blog_customize_register( $wp_customize ) {
    include get_stylesheet_directory() . '/inc/customizer/headlines-post-options.php';
    include get_stylesheet_directory() . '/inc/customizer/top-stories-options.php';
    include get_stylesheet_directory() . '/inc/customizer/popular-post-options.php';
    include get_stylesheet_directory() . '/inc/customizer/trending-post-options.php';
    include get_stylesheet_directory() . '/inc/customizer/recent-post-options.php';
    include get_stylesheet_directory() . '/inc/customizer/editors-choice-options.php';
}
add_action( 'customize_register', 'quiet_blog_customize_register' );