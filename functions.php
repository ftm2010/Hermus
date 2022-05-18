<?php
function Dokmeh_theme_setup()
{

    if (!defined('_S_VERSION')) {
        define('_S_VERSION', '1.0.0');
    }
    $menus = array(
        'footer-menu' => 'Footer Menu',
    );
    register_nav_menus($menus);
//    add_theme_support('woocommerce');
    load_theme_textdomain('dokmeh', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    if (function_exists('add_image_size')) {
        add_image_size('featured_medium', 600, 600, false);
    }
    //--Remove Admin Bar--//
    show_admin_bar(false);
}

add_action('after_setup_theme', 'Dokmeh_theme_setup');

/////////////////////////////////////////////////
define('ThemeURI', get_template_directory() . '/');
define('ThemeURL', get_template_directory_uri() . '/');
define('ThemeAssets', ThemeURL . 'assets/');
function ThemeAssets($url)
{
    echo ThemeAssets . $url;
}


///////////////////////////////////////////////
//------------ Scripts & Styles -------------//
///////////////////////////////////////////////

function Dokmeh_scripts()
{

    wp_enqueue_style('Hermos-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('Hermos-style', 'rtl', 'replace');

    wp_enqueue_script('frontend-ajax', get_template_directory_uri() . '/assets/js/frontend-ajax.js', array(), '1.0.1', true);
    wp_localize_script('frontend-ajax', 'frontend_ajax_object',
        array(
            'ajaxurl' => admin_url('admin-ajax.php'),
        )
    );

}

add_action('wp_enqueue_scripts', 'Dokmeh_scripts');

///////////////////////////////////////////////
//----------- ACF INIT GOOGLE MAP -----------//
///////////////////////////////////////////////
function my_acf_init()
{
    acf_update_setting('google_api_key', 'AIzaSyCGSjuazfR5jJ4HLuqJ2DmyGkZR766ayRI');
}

add_action('acf/init', 'my_acf_init');


///////////////////////////////////////////////
//-------------- THEME SETTING --------------//
///////////////////////////////////////////////
if (function_exists('acf_add_options_page')) {
    acf_add_options_page(array(
        'page_title' => 'Theme Setting',
        'menu_title' => 'Theme Setting',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false,
        'icon_url' => 'dashicons-images-dokmeh',
        'position' => 3
    ));
}

///////////////////////////////////////////////
//-------------- SVG Support ----------------//
///////////////////////////////////////////////
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}

add_filter('upload_mimes', 'cc_mime_types');

///////////////////////////////////////////////
//Remove Emoji Styles & Scripts in WordPress-//
///////////////////////////////////////////////
///
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');

///////////// Blog filter   /////////////////////
function blog_filter_function()
{
    $selected = $_POST['selected'];
    $lang = $_POST['lang'];
    $outPutHTML = '';
    $count = 0;
    if($lang=='en'){
        global $sitepress;
        $sitepress->switch_lang($lang);
    }

    if ($selected) {
        $args = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'category__in' => ($selected),
        );

    } else {
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1,
            'post_status' => 'publish',
        );
    }
    $Posts = new WP_Query($args);
    if ($Posts->have_posts()): $count = $Posts->found_posts;
        while ($Posts->have_posts()): $Posts->the_post();
            $postsID = get_the_ID();
            $outPutHTML .= '<a href="' . get_the_permalink() . '" class="lifeBox">';
            $outPutHTML .= '<div class="lifeBox-image" data-wow-duration="2s">';
            $outPutHTML .= get_the_post_thumbnail($postsID, 'featured_medium');
            $outPutHTML .= '</div>';
            $outPutHTML .= '<div class="lifeBox-text" data-wow-duration="2s">';
            $outPutHTML .= '<h2>' . get_the_title() . '</h2>';
            $summary = get_field('summary');
            $outPutHTML .= '<p>' . $summary ? $summary : wp_trim_words(get_the_content(), 25, ' + ...') . '</p>';
            $outPutHTML .= '</div>';
            $outPutHTML .= '</a>';
        endwhile;
        wp_reset_postdata();
    else:
        $outPutHTML = '<div class="no-result"><p>' . __('sorry, no posts match with your selected category! please select another category.', 'dokmeh') . '</p></div>';
    endif;

    $results = array();
    $results ['count'] = $count;
    $results ['$selected'] = $selected;
    $results ['content'] = $outPutHTML;
    wp_die(json_encode($results));
}

add_action('wp_ajax_blog_filter', 'blog_filter_function');
add_action('wp_ajax_nopriv_blog_filter', 'blog_filter_function');

///////////// gallery change in single product   /////////////////////
function gallery_models_function()
{
    $index = $_POST['index'];
    $pro_id = $_POST['pro_id'];
    $outPutHTML = '';
    $outPutHTML_thumb = '';
    $count = 0;

    if ($index > 0) {
        $gallery = get_field('models', $pro_id)[$index-1];
        $image = $gallery['gallery'];
        foreach ($image as $img):
            $count++;
            $Image = $img['img'];
            $outPutHTML .= '<div class="swiper-slide">';
            $outPutHTML_thumb .= '<div class="swiper-slide">';
            $outPutHTML .= '<img src="' . $Image['sizes']['large'] . '" alt="">';
            $outPutHTML_thumb .= '<img src="' . $Image['sizes']['featured_medium'] . '" alt="">';
            $outPutHTML .= '</div>';
            $outPutHTML_thumb .= '</div>';
        endforeach;
    } else {
        if (have_rows('models', $pro_id)):
            while (have_rows('models', $pro_id)):the_row();
                $gallery = get_sub_field('gallery');
                foreach ($gallery as $img):
                    $count++;
                    $Image = $img['img'];
                    $Image = $img['img'];
                    $outPutHTML .= '<div class="swiper-slide">';
                    $outPutHTML_thumb .= '<div class="swiper-slide">';
                    $outPutHTML .= '<img src="' . $Image['sizes']['large'] . '" alt="">';
                    $outPutHTML_thumb .= '<img src="' . $Image['sizes']['featured_medium'] . '" alt="">';
                    $outPutHTML .= '</div>';
                    $outPutHTML_thumb .= '</div>';
                endforeach;
            endwhile;
        endif;
    }


    $results = array();
    $results ['count'] = $count;
    $results ['content'] = $outPutHTML;
    $results ['content_thumb'] = $outPutHTML_thumb;
    wp_die(json_encode($results));
}

add_action('wp_ajax_gallery_models', 'gallery_models_function');
add_action('wp_ajax_nopriv_gallery_models', 'gallery_models_function');

///////////// Archive product filter   /////////////////////
function filter_function()
{
    $selected = $_POST['selected'];
    $lang = $_POST['lang'];
    $offset = intval($_POST['offset']);
    $outPutHTML = '';
    $page_num = 5;
    $count = 0;
    if($lang=='en'){
        global $sitepress;
        $sitepress->switch_lang($lang);
    }

    if ($selected) {
        $args = array(
            'post_type' => 'products',
            'post_status' => 'publish',
            'posts_per_page' => $page_num,
            'offset' => $offset,
            'tax_query' => array(
                array(
                    'taxonomy' => 'product-types',
                    'field' => 'term_id',
                    'terms' => $selected,
                ),
            ),
        );
    } else {
        $args = array(
            'post_type' => 'products',
            'post_status' => 'publish',
            'posts_per_page' => $page_num,
            'offset' => $offset,
        );
    }
    $Products = new WP_Query($args);
    if ($Products->have_posts()):$count = $Products->found_posts;
        while ($Products->have_posts()): $Products->the_post();
            $product_ID = get_the_ID();
            $outPutHTML .= '<div class="col-12 col-md-6 col-lg-4">';
            $outPutHTML .= '<a href="' . get_the_permalink() . '" class="productsBox span10 wow bounceInUp center"  data-wow-delay="0s" data-wow-duration="2s">';
            $outPutHTML .= '<div class="productsBox-image">';
            $outPutHTML .= get_the_post_thumbnail($product_ID, 'featured_medium');
            $outPutHTML .= '</div>';
            $outPutHTML .= '<div class="productsBox-info">';
            $outPutHTML .= '<h2 class="productsBox-info-title">' . get_the_title() . '</h2>';
            $args = array(
                'parent' => 0
            );
            $terms = wp_get_object_terms($product_ID, 'product-types', $args);
            if ($terms):
                $outPutHTML .= '<span class="productsBox-info-category">' . $terms[0]->name . '</span>';
            endif;
            $outPutHTML .= '</div></a></div>';
            wp_reset_postdata();
        endwhile;
    else:
        $outPutHTML = '<div class="no-result"><p>' . __('sorry, no products match with your selected category! please select another category.', 'dokmeh') . '</p></div>';
    endif;

    $results = array();
    $results ['count'] = $count;
    $number = ($page_num+$offset);
    $results ['number'] = $number> $count ? $count : $number ;
    if($number >= $count){
        $results ['hide'] = true;
    }
    $results ['selected'] = $selected;
    $results ['content'] = $outPutHTML;
    wp_die(json_encode($results));
}

add_action('wp_ajax_product-filter', 'filter_function');
add_action('wp_ajax_nopriv_product-filter', 'filter_function');

///////////////////////////////////////////////
//-------------- Requirements ---------------//
///////////////////////////////////////////////
//INC - Custom post types
include get_template_directory() . '/inc/custom-post-type-products.php';
include get_template_directory() . '/inc/custom-post-type-lifestyle.php';

//////INC - Custom Taxonomies
include get_template_directory() . '/inc/custom-taxonomy-product-types.php';

//// Remove unnecessary image size
function remove_default_image_sizes($sizes)
{
    unset($sizes['1536x1536']);
    unset($sizes['2048x2048']);
    unset($sizes['medium_large']);
    return $sizes;
}

add_filter('intermediate_image_sizes_advanced', 'remove_default_image_sizes');

//--------- change Gutenberg direction in panel admin for ltr lang -------
if (is_admin()) {
    $wpml_current_lang = ICL_LANGUAGE_CODE;
    if ($wpml_current_lang == 'en') {
        wp_enqueue_style('admin-gutenberg-css-rtl', ThemeURL . 'assets/css/gutenberg-style-ltr.css');
    }
}
