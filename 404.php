<?php get_header();?>
<main id="not-found">
    <div class="container-fluid p-0">
        <div class="button-boxes">
            <a href="<?php echo home_url();?>"><?php _e('Home page','dokmeh');?></a>
            <a href="<?php echo get_post_type_archive_link('products');?>" ><?php _e('Products','dokmeh');?></a>
        </div>
    </div>
</main>
<?php get_footer();?>
