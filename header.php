<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php ThemeAssets('css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css">
    <?php if(is_rtl()):?>
    <link href="<?php ThemeAssets('css/bootstrap.rtl.min.css'); ?>" rel="stylesheet" type="text/css">
    <?php endif;?>
    <link href="<?php ThemeAssets('css/swiper-bundle.min.css'); ?>" rel="stylesheet" type="text/css">
<!--    --><?php //if (is_singular('products')): ?>
<!--        <link href="--><?php //ThemeAssets('css/flickity.min.css'); ?><!--" rel="stylesheet" type="text/css">-->
<!--    --><?php //endif; ?>
    <?php if (is_front_page()): ?>
        <link href="<?php ThemeAssets('css/main.css'); ?>" rel="stylesheet" type="text/css">
    <?php else: ?>
        <link href="<?php ThemeAssets('css/animate.css'); ?>" rel="stylesheet" type="text/css">
    <?php endif; ?>
    <?php if(is_rtl()):?>
    <link href="<?php ThemeAssets('css/fonts.css'); ?>" rel="stylesheet" type="text/css">
    <?php else:?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <?php endif;?>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body data-pageType="<?php if (is_page_template('tpls/Contact.php')) {
    echo 'contact_body';
} ?>" <?php if (is_front_page()) { ?> onload="loadLS()" <?php } ?>>
<div id="loading">
    <div class="loading-logo">
        <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6728 5.9707H7.63906H6.35493H5.0708V7.25747H6.35493V12.3016V13.5883H7.63906H12.6728H13.957V7.25747V5.9707H12.6728ZM12.6728 12.3016H7.63906V7.25747H12.6728V12.3016Z"
                  fill="#FBB040"/>
            <path d="M6.35504 12.7132L2.50266 15.9559L1.52672 16.7794L0.550781 17.6029L1.37262 18.5809L2.34856 17.7574L5.58456 21.6177L6.4064 22.5956L7.38234 21.7721L11.2347 18.5294L12.2107 17.7059L8.10145 12.8677L7.27961 11.8897L6.35504 12.7132ZM10.4129 17.5515L6.5605 20.7941L3.27313 16.8824L7.12552 13.6397L10.4129 17.5515Z"
                  fill="#FBB040"/>
            <path d="M5.79002 21.9265L4.91681 26.9191L4.71135 28.1544L4.50589 29.3897L5.73865 29.5956L5.94411 28.3603L10.9265 29.2353L12.1593 29.4412L12.3648 28.2059L13.238 23.2132L13.4434 21.9779L7.22824 20.8456L5.99548 20.6397L5.79002 21.9265ZM12.0052 23.0074L11.132 28L6.14957 27.125L7.02278 22.1324L12.0052 23.0074Z"
                  fill="#FBB040"/>
            <path d="M11.2861 29.3382L13.803 33.7132L14.4194 34.7941L15.0357 35.875L16.1144 35.2574L15.498 34.1765L19.8641 31.6544L20.9427 31.0368L20.3263 29.9559L17.8095 25.5809L17.1931 24.5L11.7484 27.6397L10.6697 28.2574L11.2861 29.3382ZM16.7308 26.1985L19.2477 30.5735L14.8816 33.0956L12.3648 28.7206L16.7308 26.1985Z"
                  fill="#FBB040"/>
            <path d="M20.2236 31.5L24.9492 33.25L26.1306 33.7132L27.312 34.1765L27.7743 32.9927L26.5929 32.5294L28.3393 27.7941L28.8016 26.6103L27.6202 26.1471L22.8946 24.3971L21.7132 23.9338L19.5045 29.853L19.0422 31.0368L20.2236 31.5ZM22.4323 25.6324L27.1579 27.3824L25.4115 32.1177L20.6859 30.3677L22.4323 25.6324Z"
                  fill="#FBB040"/>
            <path d="M28.4935 27.4339L33.219 25.7354L34.4004 25.3236L35.5818 24.9119L35.1709 23.7281L33.9895 24.1398L32.2945 19.4045L31.8835 18.2207L30.7022 18.6325L25.9766 20.331L24.7952 20.7428L26.9011 26.6619L27.3121 27.8457L28.4935 27.4339ZM26.3875 21.5148L31.1131 19.8163L32.8081 24.5516L28.0825 26.2501L26.3875 21.5148Z"
                  fill="#FBB040"/>
            <path d="M32.2431 18.9926L34.8113 14.6691L35.4277 13.5882L36.0441 12.5073L34.9654 11.8382L34.349 12.9191L30.0344 10.3456L28.9557 9.72794L28.2879 10.8088L25.7197 15.1323L25.1033 16.2132L30.4966 19.4559L31.5753 20.0735L32.2431 18.9926ZM26.7984 15.8015L29.3666 11.4779L33.6813 14.0515L31.113 18.375L26.7984 15.8015Z"
                  fill="#FBB040"/>
            <path d="M29.6748 10.0882L28.853 5.14706L28.6475 3.91176L28.442 2.625L27.2093 2.83088L27.4147 4.06618L22.4323 4.88971L21.1996 5.09559L21.405 6.33088L22.2269 11.3235L22.4323 12.5588L28.6475 11.5294L29.8803 11.3235L29.6748 10.0882ZM23.4596 11.1176L22.6378 6.17647L27.6202 5.35294L28.442 10.2941L23.4596 11.1176Z"
                  fill="#FBB040"/>
            <path d="M22.0214 4.94118L18.2204 1.64706L17.2444 0.823529L16.3199 0L15.498 0.977941L16.474 1.80147L13.1866 5.61029L12.3647 6.58824L13.3407 7.41176L17.1417 10.7059L18.1176 11.5294L22.2268 6.74265L23.0487 5.76471L22.0214 4.94118ZM17.9122 9.72794L14.1112 6.43382L17.3985 2.625L21.1995 5.91912L17.9122 9.72794Z"
                  fill="#FBB040"/>
            <path d="M16.3199 13.8456H14.5221H14.0598H13.5975V14.3088H14.0598V16.1103V16.5735H14.5221H16.3199H16.7821V14.3603V13.8971H16.3199V13.8456ZM16.3199 16.1103H14.5221V14.3088H16.3199V16.1103Z"
                  fill="#FBB040"/>
            <path d="M14.0598 16.2133L12.6729 17.3457L12.3134 17.6545L12.0052 17.9633L12.3134 18.3236L12.6729 18.0148L13.803 19.4045L14.1112 19.7648L14.4707 19.456L15.8576 18.3236L16.1144 18.0148L14.6762 16.3163L14.4193 15.956L14.0598 16.2133ZM15.498 17.9633L14.1112 19.0957L12.9811 17.706L14.368 16.5736L15.498 17.9633Z"
                  fill="#FBB040"/>
            <path d="M13.9058 19.5074L13.5462 21.2574L13.4435 21.7206L13.3922 22.1324L13.8544 22.2353L13.9572 21.7721L15.7036 22.0809L16.1659 22.1838L16.2686 21.7206L16.5768 19.9706L16.6795 19.5074L14.4708 19.0956L13.9572 19.0441L13.9058 19.5074ZM16.0631 19.9191L15.7549 21.6691L14.0085 21.3603L14.3167 19.6103L16.0631 19.9191Z"
                  fill="#FBB040"/>
            <path d="M15.8062 22.1323L16.6794 23.6765L16.8849 24.0882L17.0903 24.5L17.5012 24.2941L17.2958 23.8823L18.8367 23.0073L19.2477 22.8015L19.0422 22.3897L18.169 20.8456L17.9635 20.4338L16.0117 21.5662L15.6007 21.7206L15.8062 22.1323ZM17.7581 21L18.6313 22.5441L17.0903 23.4191L16.2171 21.875L17.7581 21Z"
                  fill="#FBB040"/>
            <path d="M18.9908 22.9044L20.6859 23.5221L21.0968 23.6765L21.5077 23.8309L21.6618 23.4191L21.2509 23.2647L21.8673 21.5662L22.0214 21.1544L21.6105 21L19.9154 20.3823L19.5045 20.2279L18.734 22.3382L18.5799 22.75L18.9908 22.9044ZM19.7613 20.7941L21.4564 21.4118L20.84 23.1103L19.1449 22.4926L19.7613 20.7941Z"
                  fill="#FBB040"/>
            <path d="M21.9187 21.4632L23.6137 20.8456L24.0246 20.6912L24.4355 20.5368L24.2815 20.125L23.8705 20.2794L23.2541 18.5809L23.1001 18.1691L22.6891 18.3235L20.9941 18.9412L20.5832 19.0956L21.3023 21.2059L21.4564 21.6177L21.9187 21.4632ZM21.1482 19.353L22.8432 18.7353L23.4596 20.4338L21.7646 21.0515L21.1482 19.353Z"
                  fill="#FBB040"/>
            <path d="M23.2541 18.4779L24.1787 16.9338L24.3842 16.5735L24.5896 16.2132L24.2301 16.0073L24.0246 16.3676L22.4837 15.4412L22.1241 15.2353L21.9186 15.5956L20.9941 17.1397L20.6859 17.5L22.5864 18.6323L22.9459 18.8382L23.2541 18.4779ZM21.3023 17.3456L22.2268 15.8015L23.7678 16.7279L22.8432 18.2721L21.3023 17.3456Z"
                  fill="#FBB040"/>
            <path d="M22.3296 15.3382L22.0214 13.5882L21.97 13.125L21.9187 12.6618L21.4564 12.7132L21.5077 13.1765L19.7613 13.4853L19.299 13.5368L19.3504 14L19.6586 15.75L19.71 16.2132L21.9187 15.8529L22.3809 15.8015L22.3296 15.3382ZM20.1209 15.6985L19.8127 13.9485L21.5591 13.6397L21.8673 15.3897L20.1209 15.6985Z"
                  fill="#FBB040"/>
            <path d="M19.6072 13.4853L18.2717 12.3529L17.9122 12.0441L17.5526 11.7353L17.2444 12.0956L17.6554 12.3529L16.474 13.6912L16.1658 14.0515L16.5253 14.3603L17.8608 15.5441L18.2204 15.8529L19.6586 14.1544L19.9668 13.7941L19.6072 13.4853ZM18.169 15.1838L16.8335 14L18.0149 12.6618L19.3504 13.8456L18.169 15.1838Z"
                  fill="#FBB040"/>
        </svg>
    </div>
</div>
<header>
    <div class="mobileMenu-icon">
        <div class="list-container">
            <button class="more-button" aria-label="Menu Button">
                <div class="menu-icon-wrapper">
                    <div class="menu-icon-line half first"></div>
                    <div class="menu-icon-line"></div>
                    <div class="menu-icon-line half last"></div>
                </div>
            </button>
        </div>
    </div>
    <div class="navs">
        <nav>
            <a href="<?php echo get_post_type_archive_link('products'); ?>" class="products-nav"><?php _e('Products','dokmeh');?></a>
            <?php $cats = get_terms([
                'taxonomy' => 'product-types',
                'hide_empty' => true,
                'parent' => 0
            ]); ?>
            <div id="products-navTabs">
                <div class="products-navTabs-inner">
                    <div class="mobile-close-productNavTabs"><img src="<?php ThemeAssets('img/arrowRight.svg'); ?>"
                                                                  alt=""></div>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true"><?php _e('All products','dokmeh');?>
                            </button>
                        </li>
                        <?php if ($cats):
                            foreach ($cats as $cat):
                                $CatID = $cat->term_id; ?>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="tab-<?php echo $CatID; ?>" data-bs-toggle="pill"
                                            data-bs-target="#data-<?php echo $CatID; ?>" type="button" role="tab"
                                            aria-controls="<?php echo $CatID; ?>"
                                            aria-selected="false"><?php echo $cat->name; ?></button>
                                </li>
                            <?php endforeach;
                        endif; ?>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <?php $args = array(
                            'post_type' => 'products',
                            'posts_per_page' => 10,
                        );
                        $ProductQuery = new WP_Query($args);
                        if ($ProductQuery->have_posts()):?>
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                 aria-labelledby="pills-home-tab">
                                <div class="swiper mySwiper">
                                    <div class="swiper-wrapper">
                                        <?php while ($ProductQuery->have_posts()):$ProductQuery->the_post();
                                            $productID = get_the_ID(); ?>
                                            <a href="<?php the_permalink(); ?>" class="swiper-slide">
                                                <div class="swiper-slide-image">
                                                    <?php echo get_the_post_thumbnail($productID, 'featured_medium'); ?>
                                                </div>
                                                <div class="swiper-slide-text"><span><?php the_title(); ?></span>
                                                </div>
                                            </a>
                                        <?php endwhile;
                                        wp_reset_postdata(); ?>
                                    </div>
                                    <div class="tab-pane-swiper-button">
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                    </div>
                                </div>
                                <div class="tab-pane-button"><a
                                            href="<?php echo get_post_type_archive_link('products'); ?>"><?php _e('All products','dokmeh');?>
                                        <svg width="59" height="8" viewBox="0 0 59 8" fill="none"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0.646446 3.64644C0.451183 3.8417 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02368 4.53553 6.82842L1.70711 3.99999L4.53553 1.17157C4.7308 0.976306 4.7308 0.659724 4.53553 0.464461C4.34027 0.269199 4.02369 0.269199 3.82843 0.464461L0.646446 3.64644ZM59 3.5L1 3.49999L1 4.49999L59 4.5L59 3.5Z"
                                                  fill="#000000"/>
                                        </svg>
                                    </a></div>
                            </div>
                        <?php endif;
                        if ($cats):
                            foreach ($cats as $cat):
                                $CatID = $cat->term_id;
                                $args = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => -1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product-types',
                                            'field' => 'term_id',
                                            'terms' => $CatID,
                                        ),
                                    ),
                                );
                                $ProductQuery = new WP_Query($args);
                                if ($ProductQuery->have_posts()):?>
                                    <div class="tab-pane fade" id="data-<?php echo $CatID; ?>" role="tabpanel"
                                         aria-labelledby="tab-<?php echo $CatID; ?>">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <?php while ($ProductQuery->have_posts()):$ProductQuery->the_post();
                                                    $productID = get_the_ID(); ?>
                                                    <a href="<?php the_permalink(); ?>" class="swiper-slide">
                                                        <div class="swiper-slide-image">
                                                            <?php echo get_the_post_thumbnail($productID, 'featured_medium'); ?>
                                                        </div>
                                                        <div class="swiper-slide-text">
                                                            <span><?php the_title(); ?></span>
                                                        </div>
                                                    </a>
                                                <?php endwhile;
                                                wp_reset_postdata(); ?>
                                            </div>
                                            <div class="tab-pane-swiper-button">
                                                <div class="swiper-button-next"></div>
                                                <div class="swiper-button-prev"></div>
                                            </div>
                                        </div>
                                        <div class="tab-pane-button"><a href="<?php echo get_term_link($CatID); ?>"><?php _e('All products','dokmeh');?>
                                                <svg width="59" height="8" viewBox="0 0 59 8" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.646446 3.64644C0.451183 3.8417 0.451183 4.15829 0.646446 4.35355L3.82843 7.53553C4.02369 7.73079 4.34027 7.73079 4.53553 7.53553C4.7308 7.34027 4.7308 7.02368 4.53553 6.82842L1.70711 3.99999L4.53553 1.17157C4.7308 0.976306 4.7308 0.659724 4.53553 0.464461C4.34027 0.269199 4.02369 0.269199 3.82843 0.464461L0.646446 3.64644ZM59 3.5L1 3.49999L1 4.49999L59 4.5L59 3.5Z"
                                                          fill="#000000"/>
                                                </svg>
                                            </a></div>
                                    </div>
                                <?php endif;
                            endforeach;
                        endif; ?>
                    </div>
                </div>
            </div>
            <?php if(have_rows('header_right','option')):?>
            <?php while(have_rows('header_right','option')):the_row();?>
            <a href="<?php echo get_sub_field('link')?>"><?php echo get_sub_field('title');?></a>
            <?php endwhile;
            endif;?>
        </nav>
        <nav>
            <?php if(have_rows('header_left','option')):?>
                <?php while(have_rows('header_left','option')):the_row();?>
                    <a href="<?php echo get_sub_field('link')?>"><?php echo get_sub_field('title');?></a>
                <?php endwhile;
            endif;?>
            <?php if (have_rows('social_media', 'option')): ?>
                <div class="socialMedia">
                    <?php while (have_rows('social_media', 'option')):the_row(); ?>
                        <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('icon'); ?></a>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </nav>
    </div>
    <a href="<?php echo home_url('/'); ?>" id="identity" class="rotate-logo">
        <svg width="37" height="36" viewBox="0 0 37 36" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12.6728 5.9707H7.63906H6.35493H5.0708V7.25747H6.35493V12.3016V13.5883H7.63906H12.6728H13.957V7.25747V5.9707H12.6728ZM12.6728 12.3016H7.63906V7.25747H12.6728V12.3016Z"
                  fill="#FBB040"/>
            <path d="M6.35504 12.7132L2.50266 15.9559L1.52672 16.7794L0.550781 17.6029L1.37262 18.5809L2.34856 17.7574L5.58456 21.6177L6.4064 22.5956L7.38234 21.7721L11.2347 18.5294L12.2107 17.7059L8.10145 12.8677L7.27961 11.8897L6.35504 12.7132ZM10.4129 17.5515L6.5605 20.7941L3.27313 16.8824L7.12552 13.6397L10.4129 17.5515Z"
                  fill="#FBB040"/>
            <path d="M5.79002 21.9265L4.91681 26.9191L4.71135 28.1544L4.50589 29.3897L5.73865 29.5956L5.94411 28.3603L10.9265 29.2353L12.1593 29.4412L12.3648 28.2059L13.238 23.2132L13.4434 21.9779L7.22824 20.8456L5.99548 20.6397L5.79002 21.9265ZM12.0052 23.0074L11.132 28L6.14957 27.125L7.02278 22.1324L12.0052 23.0074Z"
                  fill="#FBB040"/>
            <path d="M11.2861 29.3382L13.803 33.7132L14.4194 34.7941L15.0357 35.875L16.1144 35.2574L15.498 34.1765L19.8641 31.6544L20.9427 31.0368L20.3263 29.9559L17.8095 25.5809L17.1931 24.5L11.7484 27.6397L10.6697 28.2574L11.2861 29.3382ZM16.7308 26.1985L19.2477 30.5735L14.8816 33.0956L12.3648 28.7206L16.7308 26.1985Z"
                  fill="#FBB040"/>
            <path d="M20.2236 31.5L24.9492 33.25L26.1306 33.7132L27.312 34.1765L27.7743 32.9927L26.5929 32.5294L28.3393 27.7941L28.8016 26.6103L27.6202 26.1471L22.8946 24.3971L21.7132 23.9338L19.5045 29.853L19.0422 31.0368L20.2236 31.5ZM22.4323 25.6324L27.1579 27.3824L25.4115 32.1177L20.6859 30.3677L22.4323 25.6324Z"
                  fill="#FBB040"/>
            <path d="M28.4935 27.4339L33.219 25.7354L34.4004 25.3236L35.5818 24.9119L35.1709 23.7281L33.9895 24.1398L32.2945 19.4045L31.8835 18.2207L30.7022 18.6325L25.9766 20.331L24.7952 20.7428L26.9011 26.6619L27.3121 27.8457L28.4935 27.4339ZM26.3875 21.5148L31.1131 19.8163L32.8081 24.5516L28.0825 26.2501L26.3875 21.5148Z"
                  fill="#FBB040"/>
            <path d="M32.2431 18.9926L34.8113 14.6691L35.4277 13.5882L36.0441 12.5073L34.9654 11.8382L34.349 12.9191L30.0344 10.3456L28.9557 9.72794L28.2879 10.8088L25.7197 15.1323L25.1033 16.2132L30.4966 19.4559L31.5753 20.0735L32.2431 18.9926ZM26.7984 15.8015L29.3666 11.4779L33.6813 14.0515L31.113 18.375L26.7984 15.8015Z"
                  fill="#FBB040"/>
            <path d="M29.6748 10.0882L28.853 5.14706L28.6475 3.91176L28.442 2.625L27.2093 2.83088L27.4147 4.06618L22.4323 4.88971L21.1996 5.09559L21.405 6.33088L22.2269 11.3235L22.4323 12.5588L28.6475 11.5294L29.8803 11.3235L29.6748 10.0882ZM23.4596 11.1176L22.6378 6.17647L27.6202 5.35294L28.442 10.2941L23.4596 11.1176Z"
                  fill="#FBB040"/>
            <path d="M22.0214 4.94118L18.2204 1.64706L17.2444 0.823529L16.3199 0L15.498 0.977941L16.474 1.80147L13.1866 5.61029L12.3647 6.58824L13.3407 7.41176L17.1417 10.7059L18.1176 11.5294L22.2268 6.74265L23.0487 5.76471L22.0214 4.94118ZM17.9122 9.72794L14.1112 6.43382L17.3985 2.625L21.1995 5.91912L17.9122 9.72794Z"
                  fill="#FBB040"/>
            <path d="M16.3199 13.8456H14.5221H14.0598H13.5975V14.3088H14.0598V16.1103V16.5735H14.5221H16.3199H16.7821V14.3603V13.8971H16.3199V13.8456ZM16.3199 16.1103H14.5221V14.3088H16.3199V16.1103Z"
                  fill="#FBB040"/>
            <path d="M14.0598 16.2133L12.6729 17.3457L12.3134 17.6545L12.0052 17.9633L12.3134 18.3236L12.6729 18.0148L13.803 19.4045L14.1112 19.7648L14.4707 19.456L15.8576 18.3236L16.1144 18.0148L14.6762 16.3163L14.4193 15.956L14.0598 16.2133ZM15.498 17.9633L14.1112 19.0957L12.9811 17.706L14.368 16.5736L15.498 17.9633Z"
                  fill="#FBB040"/>
            <path d="M13.9058 19.5074L13.5462 21.2574L13.4435 21.7206L13.3922 22.1324L13.8544 22.2353L13.9572 21.7721L15.7036 22.0809L16.1659 22.1838L16.2686 21.7206L16.5768 19.9706L16.6795 19.5074L14.4708 19.0956L13.9572 19.0441L13.9058 19.5074ZM16.0631 19.9191L15.7549 21.6691L14.0085 21.3603L14.3167 19.6103L16.0631 19.9191Z"
                  fill="#FBB040"/>
            <path d="M15.8062 22.1323L16.6794 23.6765L16.8849 24.0882L17.0903 24.5L17.5012 24.2941L17.2958 23.8823L18.8367 23.0073L19.2477 22.8015L19.0422 22.3897L18.169 20.8456L17.9635 20.4338L16.0117 21.5662L15.6007 21.7206L15.8062 22.1323ZM17.7581 21L18.6313 22.5441L17.0903 23.4191L16.2171 21.875L17.7581 21Z"
                  fill="#FBB040"/>
            <path d="M18.9908 22.9044L20.6859 23.5221L21.0968 23.6765L21.5077 23.8309L21.6618 23.4191L21.2509 23.2647L21.8673 21.5662L22.0214 21.1544L21.6105 21L19.9154 20.3823L19.5045 20.2279L18.734 22.3382L18.5799 22.75L18.9908 22.9044ZM19.7613 20.7941L21.4564 21.4118L20.84 23.1103L19.1449 22.4926L19.7613 20.7941Z"
                  fill="#FBB040"/>
            <path d="M21.9187 21.4632L23.6137 20.8456L24.0246 20.6912L24.4355 20.5368L24.2815 20.125L23.8705 20.2794L23.2541 18.5809L23.1001 18.1691L22.6891 18.3235L20.9941 18.9412L20.5832 19.0956L21.3023 21.2059L21.4564 21.6177L21.9187 21.4632ZM21.1482 19.353L22.8432 18.7353L23.4596 20.4338L21.7646 21.0515L21.1482 19.353Z"
                  fill="#FBB040"/>
            <path d="M23.2541 18.4779L24.1787 16.9338L24.3842 16.5735L24.5896 16.2132L24.2301 16.0073L24.0246 16.3676L22.4837 15.4412L22.1241 15.2353L21.9186 15.5956L20.9941 17.1397L20.6859 17.5L22.5864 18.6323L22.9459 18.8382L23.2541 18.4779ZM21.3023 17.3456L22.2268 15.8015L23.7678 16.7279L22.8432 18.2721L21.3023 17.3456Z"
                  fill="#FBB040"/>
            <path d="M22.3296 15.3382L22.0214 13.5882L21.97 13.125L21.9187 12.6618L21.4564 12.7132L21.5077 13.1765L19.7613 13.4853L19.299 13.5368L19.3504 14L19.6586 15.75L19.71 16.2132L21.9187 15.8529L22.3809 15.8015L22.3296 15.3382ZM20.1209 15.6985L19.8127 13.9485L21.5591 13.6397L21.8673 15.3897L20.1209 15.6985Z"
                  fill="#FBB040"/>
            <path d="M19.6072 13.4853L18.2717 12.3529L17.9122 12.0441L17.5526 11.7353L17.2444 12.0956L17.6554 12.3529L16.474 13.6912L16.1658 14.0515L16.5253 14.3603L17.8608 15.5441L18.2204 15.8529L19.6586 14.1544L19.9668 13.7941L19.6072 13.4853ZM18.169 15.1838L16.8335 14L18.0149 12.6618L19.3504 13.8456L18.169 15.1838Z"
                  fill="#FBB040"/>
        </svg>
        <img src="<?php ThemeAssets('img/logo.svg'); ?>" alt="">
    </a>
    <?php if (have_rows('social_media', 'option')): ?>
        <div class="socialMedia-mobile">
            <?php while (have_rows('social_media', 'option')):the_row(); ?>
                <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('icon'); ?></a>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
    <div class="language">
        <?php do_action('wpml_add_language_selector'); ?>
    </div>
</header>