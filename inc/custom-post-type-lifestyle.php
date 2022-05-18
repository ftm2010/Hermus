<?php
///////////////////////////////////////////////
//------- Custom Post type lifestyle -----------//
///////////////////////////////////////////////
function Dokmeh_custom_post_type_lifestyle()
{
    $labels = array(
        'name'              => 'هنر زندگی',
        'singular_name'     => 'هنر زندگی',
        'menu_name'         => 'هنر زندگی',
        'name_admin_bar'    => 'هنر زندگی',
        'add_new'           => 'افزودن هنر زندگی',
        'add_new_item'      => 'افزودن آیتم جدید',
        'new_item'          => 'هنر زندگی جدید',
        'edit_item'         => 'ویرایش هنر زندگی',
        'view_item'         => 'مشاهده هنر زندگی',
        'all_items'         => 'هنر زندگی',
        'search_items'      => 'جستجوی هنر زندگی',
        'parent_item_colon' => 'هنر زندگی والد',
        'not_found'         => 'پست هنر زندگی ای پیدا نشد',
        'not_found_in_trash'=> 'پست هنر زندگی در زباله دان پیدا نشد.'
    );
    $args = array(
        'labels'            => $labels,
        'description'       => 'Description.',
        'public'            => true,
        'publicly_queryable'=> true,
        'show_ui'           => true,
        'show_in_menu'      => true,
        'show_in_nav_menus' => true,
        'show_in_rest'      => true,
//        'taxonomies'        => array('product-types'),
        'query_var'         => true,
        'rewrite'           => array('slug' => 'lifestyle'),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-universal-access',
        'hierarchical'      => false,
        'menu_position'     => null,
        'supports'          => array('title', 'editor', 'author', 'thumbnail','excerpt')

    );
    register_post_type('lifestyle', $args);
}
add_action('init','Dokmeh_custom_post_type_lifestyle');
