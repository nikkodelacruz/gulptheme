<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3">
                    <?php
                    $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                            echo '<a href="'.get_bloginfo('home').'"><img src="'. esc_url( $logo[0] ) .'" class="img-fluid"></a>';
                    } else {
                            echo '<h1><a href="'.get_bloginfo('home').'">'. get_bloginfo( 'name' ) .'</a></h1>';
                    }
                    ?>
                </div>
                <div class="col-md-9">
                    <?php
                    $menu_args = array(
                        'menu_class' => 'top-menu',
                        'theme_location' => 'top'
                    );
                    wp_nav_menu( $menu_args );
                    ?>
                </div>
            </div>
        </div>
    </div>

 