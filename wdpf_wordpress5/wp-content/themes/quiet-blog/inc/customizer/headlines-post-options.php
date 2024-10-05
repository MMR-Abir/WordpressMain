<?php

// Headlines Post section
$wp_customize->add_section('headlines_posts_section', array(    
	'title'       => __('Headlines Post Options', 'quiet-blog'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('headlines_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_blog_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('headlines_posts', 
	array(		
		'label' 	=> __('Enable Headlines Posts', 'quiet-blog'),
		'section' 	=> 'headlines_posts_section',
		'settings'  => 'headlines_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('headlines_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_blog_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('headlines_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'quiet-blog'),
		'section' 	=> 'headlines_posts_section',
		'settings'  => 'headlines_posts_category',
		'type' 		=> 'select',
		'choices' 	=> quiet_blog_get_post_categories(),
	)
);