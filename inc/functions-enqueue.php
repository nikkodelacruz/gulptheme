<?php

function webt_enqueue()
{  
    // Enqueue Styles
    // wp_enqueue_style( handle, src, deps, media );
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/vendors/bootstrap/css/bootstrap.min.css' );

    // Enqueue Scripts
    // wp_enqueue_script( handle, src, deps, in_footer );
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() .'/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );

    // Libraries
    // MMENU
    // wp_enqueue_style( 'mm-css', get_template_directory_uri() .'/vendors/mmenu/dist/jquery.mmenu.all.css','',null );
    // wp_enqueue_script( 'mm-js', get_template_directory_uri() .'/vendors/mmenu/dist/jquery.mmenu.all.js', array( 'jquery' ), '', true );
   
    // OWL CAROUSEL
    // wp_enqueue_style( 'oc-css', get_template_directory_uri() .'/vendors/OwlCarousel2-2_3_4/dist/assets/owl.carousel.min.css','',null );
    // wp_enqueue_style( 'oc-theme-css', get_template_directory_uri() .'/vendors/OwlCarousel2-2_3_4/dist/assets/owl.theme.default.min.css','',null );
    // wp_enqueue_script( 'oc-js', get_template_directory_uri() .'/vendors/OwlCarousel2-2_3_4/dist/owl.carousel.min.js', array( 'jquery' ), '', true );

    // FONT AWESOME
    // wp_enqueue_style( 'fa-css', get_template_directory_uri() .'/vendors/font-awesome-master/css/font-awesome.min.css' );

    // FANCYBOX
    // wp_enqueue_style( 'fb-css', get_template_directory_uri() .'/vendors/fancybox-master/dist/jquery.fancybox.min.css','',null );
    // wp_enqueue_script( 'fb-js', get_template_directory_uri() .'/vendors/fancybox-master/dist/jquery.fancybox.min.js', array( 'jquery' ), '', true );

    // AJAX
    // wp_enqueue_script( 'ajax-js', get_template_directory_uri() .'/inc/ajax/ajax.js', array('jquery'), null, true );


    // Custom scripts
    wp_enqueue_script( 'script-js', get_template_directory_uri() .'/assets/js/script.js', array('jquery'), null, true );


    // Custom styles
    wp_enqueue_style( 'styles-css', get_template_directory_uri() .'/assets/css/general.css' );



}
add_action( 'wp_enqueue_scripts', 'webt_enqueue' );