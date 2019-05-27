<?php 

// ===============================
// Add acf options and sub page
// ===============================


// Option page
// acf_add_options_page(
//     array(
//         'page_title' => 'Theme Settings',
//         'menu_title' => 'Theme Settings',
//         'menu_slug' => 'theme-settings',
//         'capability' => 'manage_options',
//         'position' => 2,
//     )
// );


/*Subpage menu to option page*/
// acf_add_options_sub_page(
//     array(
//         'page_title'    => 'Submenu Settings',
//         'menu_title'    => 'Submenu Settings',
//         'parent_slug'   => 'theme-settings',
//     )
// );


/*Add sub menu option under post type*/
// acf_add_options_sub_page( array(
//     'page_title'    => 'Submenu Settings',
//     'menu_title'    => 'Submenu Settings',
//     'menu_slug'     => 'menu-settings',
//     'capability'    => 'manage_options',
//     'parent_slug'   => 'edit.php?post_type=post-slug',
// ));