<?php

function webt_theme_setup()
{
    // Add title tag
    add_theme_support( 'title-tag' );

    // Add post thumbnail support
    add_theme_support( 'post-thumbnails' );
    //  Add image sizes
    // add_image_size( 'webp-thumbnail-avatar', 100, 100, true );

    // Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

    // Register Navigation Menus
    register_nav_menus( array(
		'top'    => __( 'Top Menu', 'webt' ),
		'social' => __( 'Social Links Menu', 'webt' ),
    ) );
    
}
add_action( 'after_setup_theme', 'webt_theme_setup' );

/**
 * Widgets
 */
function webt_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'webt' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'webt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'webt' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'webt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'webt' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'webt' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'webt_widgets_init' );

include "inc/functions-enqueue.php";
include "inc/functions-post_type.php";
include "inc/functions-custom.php";
include "inc/functions-initialization.php";
// include "inc/functions-acf.php";
include "inc/functions-shortcode.php";
// include "inc/functions-gravity_forms.php";
// include "inc/functions-woocommerce.php";
// include "inc/ajax/ajax.php";


