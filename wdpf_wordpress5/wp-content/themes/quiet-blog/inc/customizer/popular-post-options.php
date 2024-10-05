<?php

// Popular Post section
$wp_customize->add_section('popular_posts_section', array(    
	'title'       => __('Popular Post Options', 'quiet-blog'),
	'panel'       => 'theme_option_panel'    
));

$wp_customize->add_setting('popular_posts', 
	array(
		'default' 			=> true,
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_blog_sanitize_checkbox',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('popular_posts', 
	array(		
		'label' 	=> __('Enable Popular Posts', 'quiet-blog'),
		'section' 	=> 'popular_posts_section',
		'settings'  => 'popular_posts',
		'type' 		=> 'checkbox',
	)
);

$wp_customize->add_setting('popular_posts_section_title', 
	array(
		'default'           => esc_html__('Popular Posts', 'quiet-blog'),
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',	
		'sanitize_callback' => 'sanitize_text_field'
	)
);

$wp_customize->add_control('popular_posts_section_title', 
	array(
		'label'       => __('Section Title', 'quiet-blog'),
		'section'     => 'popular_posts_section',   
		'settings'    => 'popular_posts_section_title',	
		'type'        => 'text'
	)
);

$wp_customize->add_setting('popular_posts_category', 
	array(
		'default' 			=> '',
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'cube_blog_sanitize_select',
		'transport'         => 'refresh',
	)
);

$wp_customize->add_control('popular_posts_category', 
	array(		
		'label' 	=> __('Select Categories', 'quiet-blog'),
		'section' 	=> 'popular_posts_section',
		'settings'  => 'popular_posts_category',
		'type' 		=> 'select',
		'choices' 	=> quiet_blog_get_post_categories(),
	)
);