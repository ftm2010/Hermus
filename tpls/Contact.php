<?php /* Template Name:Contact Tpl*/
get_header(); ?>
    <main>
        <?php while (have_posts()) : the_post();
            $pageID = get_the_ID(); ?>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-12">
                        <section class="bannerWrapper">
                            <div id="map" class="banner-image"></div>
                        </section>
                        <?php if (have_rows('branches')): ?>
                            <section class="row contactContent padding justify-content-center align-items-center">
                                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                                    <?php $locationsArray = array();
                                    while (have_rows('branches')):the_row(); ?>
                                        <div class="contactBox">
                                            <div class="contactBox-info span3 wow flipInX center">
                                                <?php $Email = get_sub_field('email');
                                                if ($Email):?>
                                                    <div class="mail">
                                                        <a href="mailto:<?php echo antispambot($Email); ?>"><?php echo antispambot($Email); ?></a>
                                                    </div>
                                                <?php endif;
                                                $phones = get_sub_field('phones');
                                                if ($phones):?>
                                                    <div class="number">
                                                        <?php foreach ($phones as $phone):
                                                            $phone_num = $phone['phone']; ?>
                                                            <a href="tel:<?php echo $phone_num; ?>"><?php echo $phone_num; ?></a>
                                                        <?php endforeach; ?>
                                                    </div>
                                                <?php endif;
                                                $address = get_sub_field('address');
                                                $location = get_sub_field('location');
                                                $locationsArray[] = array($location, $address);
                                                if ($address):?>
                                                    <div class="address">
                                                        <a href="#map" onclick="NewLocation(<?php echo $location['lat']; ?>,<?php echo $location['lng']; ?>);"><?php echo $address; ?></a>
                                                    </div>
                                                <?php endif; ?>
                                            </div>
                                            <?php $image = get_sub_field('img');
                                            if($image){?>
                                            <div class="contactBox-image span3 wow bounceInUp center"
                                                 data-wow-duration="2s">
                                                 <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo get_post_meta($certificate_img['ID'], '_wp_attachment_image_alt', true); ?>">
                                            </div>
                                                <?php }?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </section>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </main>
<?php include get_template_directory() . '/footer.php';
