<?php

// Enqueue Stylesheets
function theme_enqueue_styles() {

    $parent_style = 'parent-style';

    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.min.css' );
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/assets/css/login.min.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


// Register Sidebars
if ( function_exists ('register_sidebar')) {
    register_sidebar(array(
		'id' => 'blog',
		'name' => __('Blog', 'jointstheme'),
		'description' => __('The blog sidebar.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));

	register_sidebar(array(
		'id' => 'services',
		'name' => __('Services', 'jointstheme'),
		'description' => __('The blog services pages.', 'jointstheme'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widgettitle">',
		'after_title' => '</h4>',
	));
}

?>