<?php
///////////////////////////////////////////////
//------- Custom Post type Products -----------//
///////////////////////////////////////////////
function Dokmeh_custom_post_type_products()
{
    $labels = array(
        'name'              => 'محصولات',
        'singular_name'     => 'محصول',
        'menu_name'         => 'محصولات',
        'name_admin_bar'    => 'محصولات',
        'add_new'           => 'افزودن محصول',
        'add_new_item'      => 'افزودن آیتم جدید',
        'new_item'          => 'محصول جدید',
        'edit_item'         => 'ویرایش محصول',
        'view_item'         => 'مشاهده محصول',
        'all_items'         => 'محصولات',
        'search_items'      => 'جستجوی محصول',
        'parent_item_colon' => 'محصول والد',
        'not_found'         => 'محصولی پیدا نشد',
        'not_found_in_trash'=> 'محصولی در زباله دان پیدا نشد.'
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
        'taxonomies'        => array('product-types'),
        'query_var'         => true,
        'rewrite'           => array('slug' => 'products'),
        'capability_type'   => 'post',
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-screenoptions',
        'hierarchical'      => false,
        'menu_position'     => null,
        'supports'          => array('title', 'editor', 'author', 'thumbnail','excerpt')

    );
    register_post_type('products', $args);
}
add_action('init','Dokmeh_custom_post_type_products');
