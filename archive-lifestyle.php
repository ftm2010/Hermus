<?php get_header(); ?>
    <main>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-12">
                    <?php $args = array(
                        'post_type' => 'lifestyle',
                        'posts_per_page' => 1,
                    );
                    $latest = new WP_Query($args);
                    if ($latest->have_posts()):
                        while ($latest->have_posts()): $latest->the_post();
                            $latestID = get_the_ID(); ?>
                            <section class="bannerWrapper">
                                <div class="banner-image">
                                    <div id="canvas"></div>
                                    <?php echo get_the_post_thumbnail($latestID, 'full'); ?>
                                </div>
                                <div class="banner-info padding">
                                    <div class="banner-info-text">
                                        <h1 class="span3 wow flipInX center"
                                            data-wow-delay="0.25s"><?php the_title(); ?></h1>
                                        <div class="des span3 wow flipInX center" data-wow-delay="0.75s">
                                            <?php $summary = get_field('summary'); ?>
                                            <p><?php echo $summary ? $summary : wp_trim_words(get_the_content(), 25, ' + ...'); ?></p>
                                        </div>
                                    </div>
                                    <a href="<?php the_permalink(); ?>" class="banner-button pan3 wow flipInX center"
                                       data-wow-delay="1s" data-wow-duration="1s"><?php _e('more','dokmeh');?></a>
                                </div>
                            </section>
                        <?php endwhile;
                        wp_reset_postdata();
                    endif; ?>
                    <?php $args = array(
                        'post_type' => 'lifestyle',
                        'posts_per_page' => -1,
                        'post__not_in' => array($latestID),
                    );
                    $Posts = new WP_Query($args);
                    if ($Posts->have_posts()):?>
                        <section class="lifeContent padding">
                            <?php while ($Posts->have_posts()): $Posts->the_post();
                                $postsID = get_the_ID(); ?>
                                <a href="<?php the_permalink(); ?>" class="lifeBox">
                                    <div class="lifeBox-image" data-wow-duration="2s">
                                        <?php echo get_the_post_thumbnail($postsID, 'featured_medium'); ?>
                                    </div>
                                    <div class="lifeBox-text" data-wow-duration="2s">
                                        <h2><?php the_title(); ?></h2>
                                        <?php $summary = get_field('summary'); ?>
                                        <p><?php echo $summary ? $summary : wp_trim_words(get_the_content(), 25, ' + ...'); ?></p>
                                    </div>
                                </a>
                            <?php endwhile;
                            wp_reset_postdata(); ?>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php include get_template_directory() . '/footer.php';
