<?php get_header();?>
<main>
<?php while (have_posts()) : the_post();
    $lifeID = get_the_ID(); ?>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12">
                <section class="bannerWrapper">
                    <div class="banner-image">
                            <div id="canvas"></div>
                     <?php echo get_the_post_thumbnail($lifeID,'full');?>
                    </div>
                    <div class="banner-info padding">
                        <div class="banner-info-text">
                            <h1 class="span3 wow flipInX center" data-wow-delay="0.2 5s"><?php the_title();?></h1>
                            <div class="des span3 wow flipInX center" data-wow-delay="0.75s">
                                <p><?php echo get_field('summary');?></p>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="row lifeContent padding justify-content-center align-items-center span10 wow bounceInUp center" data-wow-delay="0s" data-wow-duration="2s">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <?php the_content();?>
                    </div>
                </section>
            </div>
        </div>
    </div>
<?php endwhile;?>
</main>
<?php get_footer();
