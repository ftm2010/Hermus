<?php get_header(); ?>
    <main>
        <?php while (have_posts()) : the_post();
            $pageID = get_the_ID(); ?>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <section class="bannerWrapper">
                            <div class="banner-image">
                                <div id="canvas"></div>
                                <?php echo get_the_post_thumbnail($pageID, 'full'); ?>
                            </div>
                            <div class="banner-info padding">
                                <div class="banner-info-text">
                                    <h1 class="span3 wow flipInX center"
                                        data-wow-delay="0.25s"><?php the_title(); ?></h1>
                                    <?php $summary = get_field('summary');
                                    if ($summary):?>
                                        <div class="des span3 wow flipInX center" data-wow-delay="0.75s">
                                            <?php echo $summary; ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <span class="banner-date pan3 wow flipInX center"
                                      data-wow-delay="1s"
                                      data-wow-duration="1s"><?php echo get_the_date('d M Y'); ?></span>
                            </div>
                        </section>
                        <section
                                class="row blogContent padding justify-content-center align-items-center padding span10 wow bounceInUp center"
                                data-wow-delay="0s" data-wow-duration="2s">
                            <div class="col-12">
                                <?php the_content(); ?>
                            </div>
                        </section>
                        <?php $related = get_posts(array(
                            'category__in' => wp_get_post_categories($pageID),
                            'numberposts' => 3, 'post__not_in' => array($pageID)
                        ));
                        if ($related): ?>
                            <aside class="row blogBoxes_related padding">
                                <?php foreach ($related as $post) {
                                    setup_postdata($post);
                                    $relatedID = get_the_ID();?>
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <a href="<?php the_permalink();?>" class="blogBox_related span10 wow bounceInUp center"
                                           data-wow-delay="0s" data-wow-duration="2s">
                                            <div class="blogBox_related-image">
                                                <?php echo get_the_post_thumbnail($relatedID,'featured_medium');?>
                                            </div>
                                            <div class="blogBox_related-info">
                                                <h2><?php the_title();?></h2>
                                                <?php $summary = get_field('summary');?>
                                                <div class="des">
                                                    <p><?php echo $summary? $summary : wp_trim_words(get_the_content(),25,' + ...');?></p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php wp_reset_postdata();
                                } ?>
                            </aside>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </main>
<?php get_footer();
