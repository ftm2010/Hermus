<?php /* Template Name:About Tpl*/
get_header(); ?>
    <main id="aboutMain" class="padding">
        <?php while (have_posts()) : the_post();
            $pageID = get_the_ID(); ?>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <?php $text_r_1 = get_field('text_r_1');
                        $text_l_1 = get_field('text_l_1');
                        $text_l_2 = get_field('text_l_2');
                        $text_r_2 = get_field('text_r_2');
                        $image = get_field('image');
                        if ($text_l_1 OR $text_l_2 OR $text_r_1 OR $text_r_2 OR $image):?>
                            <section class="aboutContent">
                                <div class="aboutContent-text-boxes">
                                    <?php if ($text_r_1): ?>
                                        <div class="aboutContent-text span3 wow bounceInRight" data-wow-duration="2s">
                                            <p><?php echo $text_r_1; ?></p>
                                        </div>
                                    <?php endif;
                                    if ($text_l_1):?>
                                        <div class="aboutContent-text span3 wow bounceInLeft" data-wow-duration="2s">
                                            <p><?php echo $text_l_1; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <?php if ($image): ?>
                                    <div class="aboutContent-image span3 wow bounceInUp center" data-wow-duration="2s">
                                        <div id="canvas"></div>
                                    </div>
                                <?php endif; ?>
                                <h2 class="aboutTitle span3 wow flipInX center"><?php echo get_field('title'); ?></h2>

                                <div class="aboutContent-text-boxes">
                                    <?php if ($text_r_2): ?>
                                        <div class="aboutContent-text span3 wow bounceInRight" data-wow-duration="2s">
                                            <p><?php echo $text_r_2; ?></p>
                                        </div>
                                    <?php endif;
                                    if ($text_l_2):?>
                                        <div class="aboutContent-text span3 wow bounceInLeft" data-wow-duration="2s">
                                            <p><?php echo $text_l_2; ?></p>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (have_rows('history')): ?>
                            <section class="history-container">
                                <h2 class="aboutTitle span3 wow flipInX center"><?php echo get_field('history_title');?></h2>
                                <div class="history">
                                    <?php while (have_rows('history')):the_row();
                                        $img = get_sub_field('img'); ?>
                                        <div class="historyBox">
                                            <p class="year"
                                               data-wow-duration="2s"><?php echo get_sub_field('year'); ?></p>
                                            <div class="historyBox-text" data-wow-duration="2s">
                                                <p><?php echo get_sub_field('text'); ?></p>
                                            </div>
                                            <div class="historyBox-image" data-wow-duration="2s">
                                                <img src="<?php echo $img['sizes']['featured_medium']; ?>"
                                                     alt="<?php echo get_post_meta($img['ID'], '_wp_attachment_image_alt', true); ?>">
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php $certificates = get_field('certificates');
                        if ($certificates):?>
                            <section class="row certificate-container">
                                <h2 class="aboutTitle span3 wow flipInX center"><?php echo get_field('certificate_title'); ?></h2>
                                <div class="col-12">
                                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                                        <?php foreach ($certificates as $certificate_img): ?>
                                            <div class="col">
                                                <div class="certificate-image span3 wow swing center"><img
                                                            src="<?php echo $certificate_img['sizes']['featured_medium']; ?>"
                                                            alt="<?php echo get_post_meta($certificate_img['ID'], '_wp_attachment_image_alt', true); ?>">
                                                </div>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </section>
                        <?php endif; ?>
                        <?php if (have_rows('reviews')): ?>
                            <section class="row Comments-container justify-content-center">
                                <h2 class="aboutTitle span3 wow flipInX center"><?php echo get_field('review_title'); ?></h2>
                                <div class="comments-swiper-button">
                                    <div class="swiper-button-next"></div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-button-prev"></div>
                                </div>
                                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                    <div class="comments">
                                        <div class="swiper mySwiper">
                                            <div class="swiper-wrapper">
                                                <?php while (have_rows('reviews')):the_row();
                                                    $img = get_sub_field('img');?>
                                                    <div class="swiper-slide">
                                                        <div class="commentBox">
                                                            <div class="commentBox-image"><img
                                                                        src="<?php echo $img['sizes']['featured_medium']; ?>"
                                                                        alt="<?php echo get_post_meta($certificate_img['ID'], '_wp_attachment_image_alt', true); ?>">
                                                            </div>
                                                            <div class="commentText">
                                                                <div class="title">
                                                                    <p><?php echo get_sub_field('name'); ?></p>
                                                                    <p><?php echo get_sub_field('position'); ?></p>
                                                                </div>
                                                                <div class="des">
                                                                    <p><?php echo get_sub_field('text'); ?></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endwhile; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        <?php endif;
                        if (have_rows('members')):the_row();
                            $i = 0; ?>
                            <section class="row member-container">
                                <h2 class="aboutTitle span3 wow flipInX center"><?php echo get_field('member_title'); ?></h2>
                                <div class="col-12">
                                    <?php while (have_rows('members')):the_row();
                                        $img = get_sub_field('img');
                                        if ($i % 3 == 0):
                                            if($i!=0){?>
                                            </div>
                                            <?php }?>
                                            <div class="row members justify-content-between">
                                        <?php endif; ?>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <div class="memberBox span10 wow bounceInUp center" data-wow-duration="2s">
                                                <div class="memberBox-image"><img src="<?php echo $img['sizes']['featured_medium']; ?>"
                                                                                  alt="<?php echo get_post_meta($img['ID'], '_wp_attachment_image_alt', true); ?>">
                                                </div>
                                                <div class="memberBox-text">
                                                    <p class="name"><?php echo get_sub_field('name'); ?></p>
                                                    <span class="position"><?php echo get_sub_field('job'); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                      <?php $i++;
                                    endwhile; ?>
                                            </div>
                                </div>
                            </section>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </main>
<?php get_footer();
