<?php //Template Name: Home tpls
get_header(); ?>
    <div class="o-scroll" id="js-scroll" data-scroll-container>
    <main data-scroll-container>
        <?php while (have_posts()) : the_post();
            $pageID = get_the_ID();
            if (have_rows('slider')):
                $counter = 1; ?>
                <section class="homeBanner-swiper" data-scroll-section>
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php while (have_rows('slider')):the_row();
                                $counter++;
                                $right_media = get_sub_field('media');
                                $left_media = get_sub_field('left_media'); ?>
                                <div class="swiper-slide">
                                    <div class="swiper-slide-image twoPare">
                                        <?php switch ($right_media):
                                            case 'video':
                                                $video = get_sub_field('video')['url'];
                                                if ($video) {
                                                    ?>
                                                    <video autoplay muted>
                                                        <source src="<?php echo $video; ?>"
                                                                type="video/mp4">
                                                    </video>
                                                <?php }
                                                break;
                                            default:
                                                $img = get_sub_field('img');
                                                if ($img) {
                                                    ?>
                                                    <img src="<?php echo $img['sizes']['large']; ?>"
                                                         alt="<?php echo get_post_meta($img['ID'], '_wp_attachment_image_alt', true); ?>">
                                                <?php }
                                                break;
                                        endswitch; ?>
                                        <?php switch ($left_media):
                                            case 'video':
                                                $video = get_sub_field('video_left')['url'];
                                                if ($video) {
                                                    ?>
                                                    <video autoplay muted>
                                                        <source src="<?php echo get_sub_field('video_left')['url']; ?>"
                                                                type="video/mp4">
                                                    </video>
                                                <?php }
                                                break;
                                            default:
                                                $img = get_sub_field('left_img');
                                                if ($img) {
                                                    ?>
                                                    <img src="<?php echo $img['sizes']['large']; ?>"
                                                         alt="<?php echo get_post_meta($img['ID'], '_wp_attachment_image_alt', true); ?>">
                                                <?php }
                                                break;
                                        endswitch; ?>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                        <?php if ($counter > 1): ?>
                            <div class="homeBanner-swiper-button">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endif;
            $img = get_field('img');
            $Text = get_field('text');
            if ($Text OR $img):?>
                <section class="homeAbout padding" data-scroll-section>
                    <h2 class="homeTitle" data-scroll=""><?php echo get_field('title'); ?></h2>
                    <div class="homeAbout-content">
                        <?php if ($img): ?>
                            <div class="homeAbout-image">
                                <img src="<?php echo $img['sizes']['large']; ?>"
                                     alt="<?php echo get_post_meta($img['ID'], '_wp_attachment_image_alt', true); ?>">
                            </div>
                        <?php endif;
                        if ($Text):?>
                            <div class="homeAbout-text">
                                <p><?php echo $Text; ?></p>
                            </div>
                        <?php endif; ?>
                    </div>
                </section>
            <?php endif;
            $show_product = get_field('product_show'); ?>
            <section class="homeProduct-container" data-scroll-section>
                <div class="homeProduct-tileLine-swiper-button-container">
                    <div class="homeProduct-tileLine-swiper-button">
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
                <div class="homeProduct">
                    <div id="direction">
                        <h2 class="homeTitle" data-scroll=""><?php echo get_field('product_title');?></h2>
                        <div data-scroll data-scroll-direction="horizontal" data-scroll-speed="-10"
                             data-scroll-target="#direction">
                            <div class="swiper mySwiper homeProduct-tileLine">
                                <div class="swiper-wrapper">
                                    <?php switch ($show_product):
                                        case 'custom':
                                            $products = get_field('products');
                                            if ($products):
                                                foreach ($products as $productID):?>
                                                    <a href="<?php echo get_the_permalink($productID); ?>"
                                                       class="swiper-slide">
                                                        <div class="homeProduct-tileLine-img">
                                                            <?php echo get_the_post_thumbnail($productID, 'featured_medium'); ?>
                                                        </div>
                                                    </a>
                                                <?php endforeach;
                                            endif;
                                            break;
                                        default:
                                            $args = array(
                                                'post_type' => 'products',
                                                'posts_per_page' => 10,
                                            );
                                            $Products = new WP_Query($args);
                                            if ($Products->have_posts()):
                                            while ($Products->have_posts()): $Products->the_post();
                                                $productID = get_the_ID();?>
                                                <a href="<?php the_permalink(); ?>" class="swiper-slide">
                                                    <div class="homeProduct-tileLine-img">
                                                        <?php echo get_the_post_thumbnail($productID, 'featured_medium'); ?>
                                                    </div>
                                                </a>
                                            <?php endwhile;
                                                wp_reset_postdata();
                                            endif;
                                            break;
                                    endswitch; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php $footer_img = get_field('footer_img');
        if($footer_img):?>
            <section class="homeHistory" data-scroll-section>
                <h2 class="homeTitle" data-scroll=""><?php echo get_field('footer_title');?></h2>
                <div class="c-fixed_wrapper" data-scroll="" data-scroll-call="dynamicBackground" data-scroll-repeat="">
                    <div class="c-fixed_target" id="fixed-target"></div>
                    <div class="c-fixed homeHistory-image" data-scroll="" data-scroll-sticky=""
                         data-scroll-target="#fixed-target"
                         style="background-image:url('<?php echo $footer_img['url'];?>')"></div>
                    <div class="homeHistory-image-mobile">
                        <img src="<?php echo $footer_img['url'];?>" alt="<?php echo get_post_meta($footer_img['ID'], '_wp_attachment_image_alt', true); ?>">
                    </div>
                </div>
            </section>
            <?php endif;?>
        <?php endwhile; ?>
    </main>
<?php get_footer();
