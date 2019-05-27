<?php

// Add visibility option for field labels "Gravity Form"
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// Pagination
// $query = new WP_Query( $args );
// echo webt_pagination($query);

function webt_pagination( $total_query_num_pages ) {

    // before args
    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    // inside wp_query
    // 'paged' => $paged

    // global $wp_query;
    // $total = $total_query_num_pages ? $total_query_num_pages : $wp_query->max_num_pages;
    
    $total = $total_query_num_pages->max_num_pages;

    $big = 999999999; // need an unlikely integer

    $args = array(
        'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'             => '?paged=%#%',
        'total'              => $total,
        'current'            => max( 1, get_query_var('paged') ),
        'show_all'           => false,
        'end_size'           => 1,
        'mid_size'           => 2,
        'prev_next'          => true,
        'prev_text'          => __('Prev'),
        'next_text'          => __('Next'),
        'type'               => 'plain',
        'add_args'           => false,
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => ''
    );

    echo '<div class="webt-pagination">'.paginate_links( $args ).'</div>';
}
function webp_thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){

    if ( !$crop ) return null; // let the wordpress default function handle this

    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);

    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );

    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'webp_thumbnail_upscale', 10, 6 );


/**
 * Custom backend login
 */

// logo
function site_login_logo() { 

    // Get the logo
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

    // $bg_image = get_template_directory_uri().'/assets/images/image.png';
    ?>
    <style type="text/css">
        body.login{
            /* background: #fffafa; */
            background-image: url(<?php //echo $bg_image; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right;
        }
        #login{
            /* padding-top: 0px !important; */
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo $logo[0]; ?>);
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            /* padding-bottom: 30px; */
        }
        .login h1 a:active,
        .login h1 a:focus{
            /* border:none; */
            box-shadow: none;
            /* text-decoration: none; */
        }

        #loginform{
            border: 3px solid #fabfb9;
            background: rgba(255,255,255,0.5);
        }

        #loginform .input:active,
        #loginform .input:focus{
            /* border:2px solid #fabfb9; */
            box-shadow: none;
            /* text-decoration: none; */
        }


        .submit #wp-submit{
            background: #fabfb9;
            text-shadow: none;
            box-shadow: none;
            border: 1px solid #DA9FA0;
        }
        .submit #wp-submit:hover{
            background: #DA9FA0;

        }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'site_login_logo' );

// link
function site_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'site_login_logo_url' );

// title
function site_login_logo_url_title() {
    return  get_bloginfo('name');
}
add_filter( 'login_headertitle', 'site_login_logo_url_title' );
