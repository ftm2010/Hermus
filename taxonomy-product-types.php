<?php get_header();
$queryObject = get_queried_object();
$selectedID = $queryObject->term_id;?>
    <main>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-12">
                    <section class="products-header">
                        <?php $header_img = get_field('header_img', 'option');
                        if ($header_img) {
                            ?>
                            <img src="<?php echo $header_img['sizes']['large']; ?>" alt="">
                        <?php } ?>
                        <h1 class="span3 wow flipInX center"><?php echo get_field('product_header_title','option');?></h1>
                    </section>
                    <section class="row products-content padding">
                        <?php $cats = get_terms([
                            'taxonomy' => 'product-types',
                            'hide_empty' => false,
                            'parent' => 0
                        ]);
                        if ($cats):?>
                            <div id="productFilter">
                                <div class="productFilter-icon wow pulse" data-wow-iteration="50"
                                     data-wow-duration="0.15">
                                    <span><?php _e('filter','dokmeh');?></span>
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
                                <div class="productFilter-panel" lang="<?php echo is_rtl() ? 'fa': 'en'; ?>">
                                    <div class="productFilter-panel-close"><img
                                                src="<?php ThemeAssets('img/close.svg'); ?>" alt=""></div>
                                    <?php foreach ($cats as $cat):
                                        $CatID = $cat->term_id ?>
                                        <div class="productFilter-panel-item">
                                            <a href=""
                                               class="productFilter-panel-item-title <?php if($CatID==$selectedID){?>checked<?php }?>"><?php echo $cat->name; ?></a>
                                            <?php $children = get_terms([
                                                'taxonomy' => 'product-types',
                                                'hide_empty' => false,
                                                'parent' => $CatID
                                            ]);
                                            if ($children):?>
                                                <div class="productFilter-panel-item-list">
                                                    <?php foreach ($children as $child): ?>
                                                        <label>
                                                            <input type="checkbox" class="product-filter" <?php if($CatID==$selectedID){?>checked<?php }?> data-id="<?php echo $child->term_id;?>">
                                                            <span class="checkmark"></span>
                                                            <span><?php echo $child->name;?></span>
                                                        </label>
                                                    <?php endforeach; ?>

                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="col-12">
                            <div class="productSingle_loading">
                            </div>
                            <?php $page_num = 3;
                            if($selectedID){
                                $args = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => $page_num,
                                    'paged' => 1,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'product-types',
                                            'field' => 'term_id',
                                            'terms' => $selectedID,
                                        ),
                                    ),
                                );
                            }else {
                                $args = array(
                                    'post_type' => 'products',
                                    'posts_per_page' => $page_num,
                                    'paged' => 1,
                                );
                            }
                            $Products = new WP_Query($args);
                            if ($Products->have_posts()):$count = $Products->found_posts; ?>
                                <div class="row productsBoxes">
                                    <?php while ($Products->have_posts()): $Products->the_post();
                                        $product_ID = get_the_ID(); ?>
                                        <div class="col-12 col-md-6 col-lg-4">
                                            <a href="<?php the_permalink(); ?>"
                                               class="productsBox span10 wow bounceInUp center"
                                               data-wow-delay="0s" data-wow-duration="2s">
                                                <div class="productsBox-image">
                                                    <?php echo get_the_post_thumbnail($product_ID, 'featured_medium'); ?>
                                                </div>
                                                <div class="productsBox-info">
                                                    <h2 class="productsBox-info-title"><?php the_title(); ?></h2>
                                                    <?php $args = array(
                                                        'parent' => 0
                                                    );
                                                    $terms = wp_get_object_terms($product_ID, 'product-types', $args);
                                                    if ($terms):?>
                                                        <span class="productsBox-info-category"><?php echo $terms[0]->name; ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </a>
                                        </div>
                                        <?php wp_reset_postdata();
                                    endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </section>
                    <?php if ($count > $page_num): ?>
                        <section class="products-more padding">
                            <div class="products-pagination">
                                <span class="page-numbers"><?php echo $page_num; ?></span><span><?php echo __(' from ', 'dokmeh'); ?></span><span class="total-page"><?php echo $count;?></span>
                            </div>
                            <a href="#" class="hvr-pulse"  current="<?php echo $page_num; ?>"><?php _e('view more','dokmeh');?></a>
                        </section>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>
<?php get_footer();
