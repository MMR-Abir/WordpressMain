<?php

// add_theme_support('post_thumbnails');

function register_MMR_menu() {
  register_nav_menu( 'primary', __( 'Main location', 'Itachitheme' ) );
}

add_action( 'after_setup_theme', 'register_MMR_menu' );





function wporg_custom_post_type() {
	register_post_type('wporg_product',
		array(
			'labels'      => array(
				'name'          => __('Products', 'textdomain'),
				'singular_name' => __('Product', 'textdomain'),
			),
				'public'      => true,
				'has_archive' => true,
		)
	);
}
add_action('init', 'wporg_custom_post_type');


?>
