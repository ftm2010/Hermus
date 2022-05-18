<?php
///////////////////////////////////////////////
//----- Register Taxonomy for Product ------//
///////////////////////////////////////////////

function Dokmeh_create_taxonomies_Product()
{
    // Add new taxonomy, make it hierarchical (like categories)

    $labels = array(
        'name'              => 'دسته بندی محصول',
        'singular_name'     => 'دسته بندی محصول',
        'search_items'      => 'جستجوی دسته بندی محصول',
        'all_items'         => 'همه انواع محصول',
        'parent_item'       => 'والد دسته بندی محصول',
        'parent_item_colon' => 'والد دسته بندی محصول:',
        'edit_item'         => 'ویرایش دسته بندی محصول',
        'update_item'       => 'بروزرسانی دسته بندی محصول',
        'add_new_item'      => 'افزودن دسته بندی محصول',
        'new_item_name'     => 'نام دسته بندی محصول جدید',
        'menu_name'         => 'دسته بندی محصول',
    );

    $args = array(
        'hierarchical'      => true,
        'label'             => 'Peoduct Category',
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'query_var'         => true,
        'rewrite'           => array('slug' => 'categories','with_front'=>true,'hierarchical' => true ),
    );

    register_taxonomy('product-types', 'products', $args);
}
// hook into the init action and call create_taxonomies when it fires

add_action( 'init', 'Dokmeh_create_taxonomies_Product', 0 );
