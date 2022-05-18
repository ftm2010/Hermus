<footer class="padding" <?php if(is_front_page()){?> data-scroll-section<?php }?>>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php if (have_rows('phones', 'option')): ?>
                <div class="col-12 d-flex justify-content-end">
                    <div class="footer-numbers">
                        <?php while (have_rows('phones', 'option')):the_row();
                            $phone = get_sub_field('phone'); ?>
                            <a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
                        <?php endwhile; ?>
                    </div>
                </div>
            <?php endif; ?>
            <div class="col-12"><a href="<?php echo home_url('/'); ?>" class="footer-logo"><img
                            src="<?php ThemeAssets('img/logo.svg'); ?>" alt=""></a></div>
            <div class="col-12 d-flex flex-column flex-md-row justify-content-between align-items-start align-items-lg-center">
                <div class="col-12 col-md-5">
                    <div class="footer-text">
                        <p><?php echo get_field('footer_text', 'option'); ?></p>
                    </div>
                    <?php if (have_rows('social_media', 'option')): ?>
                        <div class="footer-socialMedia">
                            <?php while (have_rows('social_media', 'option')):the_row(); ?>
                                <a href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('icon'); ?></a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="col-12 col-md-5">
                    <div class="footer-menu">
                        <?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <?php $footer_img = get_field('footer_img','option');
                if($footer_img):?>
                <div class="footer-img">
                    <?php foreach ($footer_img as $img):?>
                    <img src="<?php echo $img['sizes']['featured_medium']; ?>" alt="<?php echo get_post_meta($img['ID'], '_wp_attachment_image_alt', true); ?>">
                    <?php endforeach;?>
                </div>
                <?php endif;?>
            </div>
            <div class="col-12">
                <div class="footer-DokmehCopy">
                    <div class="dokmeh-copyrights">Made with <span><img draggable="false" class="emoji" alt="💛"
                                                                        src="https://s.w.org/images/core/emoji/11.2.0/svg/1f49b.svg"></span>
                        by <a href="https://www.hidokmeh.com"
                              target="_blank" <?php if (!is_front_page()) { ?> rel="nofollow"<?php } ?>> Dokmeh</a>
                    </div>
                    <div class="footer-rights"><span>All right reserved 2021</span></div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php if(is_front_page()){?>
    </div>
<?php } ?>
</body>
<script src="<?php ThemeAssets('js/jQuery.min.js'); ?>"></script>
<script src="<?php ThemeAssets('js/bootstrap.min.js'); ?>"></script>
<script src="<?php ThemeAssets('js/swiper-bundle.min.js'); ?>"></script>
<?php if(is_front_page()):?>
    <script src="<?php ThemeAssets('js/main.js');?>"></script>
<?php else:?>
<script src="<?php ThemeAssets('js/wow.min.js'); ?>"></script>
<?php  endif;?>
<?php if (is_page_template('tpls/About.php')): ?>
    <script src="<?php ThemeAssets('js/TweenMax.min.js'); ?>"></script>
    <script src="<?php ThemeAssets('js/pixi.min.js'); ?>"></script>
<?php endif;
//if (is_singular('products')):?>
<!--    <script src="--><?php //ThemeAssets('js/flickity.pkgd.min.js'); ?><!--"></script>-->
<!--    <script src="https://unpkg.com/flickity-as-nav-for@3/as-nav-for.js"></script>-->
<?php //endif;
if (is_home() OR is_post_type_archive('lifestyle') OR is_singular('post') OR is_singular('lifestyle') ):?>
    <script src="<?php ThemeAssets('js/bundle.js'); ?>"></script>
    <script src="<?php ThemeAssets('js/slogan-script.js'); ?>"></script>
<?php endif; ?>
<script src="<?php ThemeAssets('js/script.js'); ?>"></script>
<?php wp_footer(); ?>
<?php if(is_front_page()):?>
    <script>
        function loadLS(){
            (function () {
                var scroll = new LocomotiveScroll();
            })();
        }
    </script>
    <script>
        var swiper = new Swiper(".homeBanner-swiper .mySwiper", {
            effect: "fade",
            navigation: {
                nextEl: ".homeBanner-swiper .swiper-button-next",
                prevEl: ".homeBanner-swiper .swiper-button-prev",
            },
            pagination: {
                el: ".homeBanner-swiper .swiper-pagination",
            },
        });
    </script>
    <script>
        var swiper = new Swiper(".homeProduct-container .mySwiper", {
            spaceBetween: 10,
            slidesPerView: 2,
            navigation: {
                nextEl: ".homeProduct-container .swiper-button-next",
                prevEl: ".homeProduct-container .swiper-button-prev",
            },
            breakpoints: {
                769: {
                    spaceBetween: 10,
                    slidesPerView: 3,
                },
                1199: {
                    spaceBetween: 10,
                    slidesPerView: 5,
                },
            },
        });
    </script>
<?php else:?>
<script>
    new WOW().init();
</script>
<?php endif;?>
<script>
    var swiper = new Swiper("#products-navTabs .mySwiper", {
        slidesPerView: 3,
        grid: {
            rows: 2,
        },
        loop: false,
        breakpoints: {
            769: {
                slidesPerView: 5,
                spaceBetween: 15,
            },
        },
        breakpoints: {
            1024: {
                slidesPerView: 8,
                spaceBetween: 15,
                grid: {
                    rows: 1,
                },
            },
        },
        navigation: {
            nextEl: "#products-navTabs .swiper-button-next",
            prevEl: "#products-navTabs .swiper-button-prev",
        },
        pagination: {
            el: "#products-navTabs .swiper-pagination",
            clickable: true,
        },
    });
</script>
<?php if (is_singular('products')): ?>
    <script>
        var swiperps = new Swiper(".productSingle-image .mySwiper", {
            // loop: true,
            spaceBetween: 10,
            slidesPerView: 3,
            freeMode: true,
            watchSlidesProgress: true,
        });
        var swiper2 = new Swiper(".productSingle-image .mySwiper2", {
            loop: true,
            spaceBetween: 10,
            thumbs: {
                swiper: swiperps,
            },
        });
    </script>
    <script>
        var pdding = '<?php echo is_rtl()? 'padding-left' : 'padding-right';?>';
        var piPadding= $('.productSingle-image .carousel-nav .swiper-slide').outerWidth() / 2;
        $('.productSingle-image .carousel.carousel-nav.swiper-thumbs').css(pdding , piPadding)
    </script>
<!--    <script>-->
<!--        // asNavFor can be set a selector string-->
<!--        asNavFor: '.carousel-main'-->
<!--        // or an element-->
<!--        asNavFor: $('.carousel-main')[0]-->
<!--        asNavFor: document.querySelector('.carousel-main')-->
<!--        $('.carousel-main').flickity();-->
<!--        // 2nd carousel, navigation-->
<!--        $('.carousel-nav').flickity({-->
<!--            asNavFor: '.carousel-main',-->
<!--            contain: true,-->
<!--            pageDots: false-->
<!--        });-->
<!--    </script>-->
    <script>
        $('select').each(function () {
            var $this = $(this), numberOfOptions = $(this).children('option').length;

            $this.addClass('select-hidden');
            $this.wrap('<div class="select"></div>');
            $this.after('<div class="select-styled"></div>');

            var $styledSelect = $this.next('div.select-styled');
            $styledSelect.text($this.children('option').eq(0).text());

            var $list = $('<ul />', {
                'class': 'select-options'
            }).insertAfter($styledSelect);

            for (var i = 0; i < numberOfOptions; i++) {
                $('<li />', {
                    text: $this.children('option').eq(i).html(),
                    rel: $this.children('option').eq(i).val()
                }).appendTo($list);
            }

            var $listItems = $list.children('li');

            $styledSelect.click(function (e) {
                e.stopPropagation();
                $('div.select-styled.active').not(this).each(function () {
                    $(this).removeClass('active').next('ul.select-options').hide();
                });
                $(this).toggleClass('active').next('ul.select-options').toggle();
            });

            $listItems.click(function (e) {
                e.stopPropagation();
                $styledSelect.text($(this).text()).removeClass('active');
                $this.val($(this).attr('rel'));
                $list.hide();
                //console.log($this.val());
            });

            $(document).click(function () {
                $styledSelect.removeClass('active');
                $list.hide();
            });

        });
    </script>
    <script>
        $(document).ready(function () {
            $('.select-options li:first-child').css("display", "none");
        });
    </script>
<?php endif; ?>
<?php if (is_home()) { ?>
    <?php if(is_rtl()){?>
        <script>
            $('main#blogMain .lifeBox:nth-child(odd)').addClass('reverse');
            $('main#blogMain .lifeBox:nth-child(odd) .lifeBox-image').addClass('span3 wow bounceInLeft');
            $('main#blogMain .lifeBox:nth-child(odd) .lifeBox-text').addClass('span3 wow bounceInRight');
            $('main#blogMain .lifeBox:nth-child(even) .lifeBox-image').addClass('span3 wow bounceInRight');
            $('main#blogMain .lifeBox:nth-child(even) .lifeBox-text').addClass('span3 wow bounceInLeft');
        </script>
    <?php }else{?>
        <script>
            $('main#blogMain .lifeBox:nth-child(odd)').addClass('reverse');
            $('main#blogMain .lifeBox:nth-child(odd) .lifeBox-image').addClass('span3 wow bounceInRight');
            $('main#blogMain .lifeBox:nth-child(odd) .lifeBox-text').addClass('span3 wow bounceInLeft');
            $('main#blogMain .lifeBox:nth-child(even) .lifeBox-image').addClass('span3 wow bounceInLeft');
            $('main#blogMain .lifeBox:nth-child(even) .lifeBox-text').addClass('span3 wow bounceInRight');
        </script>
    <?php } ?>

    <script>
        var imgBgurl = "<?php echo get_the_post_thumbnail_url($latestID, 'full'); ?>";
    </script>
<?php }
if (is_post_type_archive('lifestyle')):?>
    <script>
        <?php if(is_rtl()){?>
        $('.lifeBox:nth-child(even)').addClass('reverse');
        $('.lifeBox:nth-child(even) .lifeBox-image').addClass('span3 wow bounceInLeft');
        $('.lifeBox:nth-child(even) .lifeBox-text').addClass('span3 wow bounceInRight');
        $('.lifeBox:nth-child(odd) .lifeBox-image').addClass('span3 wow bounceInRight');
        $('.lifeBox:nth-child(odd) .lifeBox-text').addClass('span3 wow bounceInLeft');
        <?php }else{?>
        $('.lifeBox:nth-child(even)').addClass('reverse');
        $('.lifeBox:nth-child(even) .lifeBox-image').addClass('span3 wow bounceInRight');
        $('.lifeBox:nth-child(even) .lifeBox-text').addClass('span3 wow bounceInLeft');
        $('.lifeBox:nth-child(odd) .lifeBox-image').addClass('span3 wow bounceInLeft');
        $('.lifeBox:nth-child(odd) .lifeBox-text').addClass('span3 wow bounceInRight');
        <?php } ?>

    </script>
    <script>
        var imgBgurl = "<?php echo get_the_post_thumbnail_url($latestID, 'full'); ?>";
    </script>
<?php endif; ?>
<?php if(is_singular('') OR is_singular('lifestyle')):
    $pageID = get_the_ID();?>
    <script>
        var imgBgurl = "<?php echo get_the_post_thumbnail_url($pageID, 'full'); ?>";
    </script>
<?php endif;?>
<?php if (is_page_template('tpls/About.php')):
    $page_ID = get_the_ID(); ?>
    <script>
        $('.historyBox:nth-child(even)').addClass('reverse');
        <?php if(is_rtl()){?>
        $('.historyBox:nth-child(odd) .historyBox-text').addClass('span3 wow bounceInRight');
        $('.historyBox:nth-child(odd) .year').addClass('span3 wow bounceInRight');
        $('.historyBox:nth-child(odd) .historyBox-image').addClass('span3 wow bounceInLeft');
        $('.historyBox:nth-child(even) .historyBox-text').addClass('span3 wow bounceInLeft');
        $('.historyBox:nth-child(even) .year').addClass('span3 wow bounceInLeft');
        $('.historyBox:nth-child(even) .historyBox-image').addClass('span3 wow bounceInRight');
        <?php }else{?>
        $('.historyBox:nth-child(odd) .historyBox-text').addClass('span3 wow bounceInLeft');
        $('.historyBox:nth-child(odd) .year').addClass('span3 wow bounceInLeft');
        $('.historyBox:nth-child(odd) .historyBox-image').addClass('span3 wow bounceInRight');
        $('.historyBox:nth-child(even) .historyBox-text').addClass('span3 wow bounceInRight');
        $('.historyBox:nth-child(even) .year').addClass('span3 wow bounceInRight');
        $('.historyBox:nth-child(even) .historyBox-image').addClass('span3 wow bounceInLeft');
        <?php } ?>
       


    </script>
    <script>
        var swiper = new Swiper(".comments .mySwiper", {
            effect: "fade",
            navigation: {
                nextEl: ".comments-swiper-button .swiper-button-next",
                prevEl: ".comments-swiper-button .swiper-button-prev",
            },
            pagination: {
                el: ".comments-swiper-button .swiper-pagination",
            },
        });
    </script>
    <?php $image = get_field('image', $page_ID);
    if ($image):?>
        <script>
            var img = "<?php ThemeAssets('img/gradient4.png');?>";
            var imgTwo = "<?php echo $image['sizes']['large'];?>";
        </script>
    <?php endif; ?>
    <script>
        /*--------------------
      Init
      --------------------*/
        PIXI.utils.skipHello();
        const app = new PIXI.Application({
                autoResize: true,
                resolution: devicePixelRatio
            }),
            container = new PIXI.Container();

        let posX = 0,
            displacementSprite = '',
            displacementFilter = '',
            bg = '',
            xVelocity = 0,
            text = '';

        function init() {
            document.getElementById('canvas').appendChild(app.view);
            app.stage.interactive = true;
            app.stage.addChild(container);
            PIXI.loader
                .add('displacement', img)
                .add('bg', imgTwo)
                .load(setup);
        }

        init();


        /*--------------------
        Win Resize
        --------------------*/
        function resize() {
            container.removeChildren();

            app.renderer.resize(window.innerWidth, window.innerHeight);
            bg = background({
                x: window.innerWidth,
                y: window.innerHeight
            }, new PIXI.Sprite(PIXI.loader.resources.bg.texture), 'cover');
            container.addChild(bg);
            bg.zOrder = 1;
            bg.filters = [displacementFilter];
        }

        window.addEventListener('resize', resize);
        resize();


        /*--------------------
        Setup
        --------------------*/
        function setup() {
            posX = app.renderer.width / 2;
            displacementSprite = new PIXI.Sprite(PIXI.loader.resources.displacement.texture);
            displacementFilter = new PIXI.filters.DisplacementFilter(displacementSprite);

            displacementSprite.anchor.set(0.5);
            displacementSprite.x = app.renderer.width
                / 2;
            displacementSprite.y = app.renderer.height
                / 2;
            vx = displacementSprite.x;

            app.stage.addChild(displacementSprite);
            displacementFilter.scale.x = 0;
            displacementFilter.scale.y = 0;

            bg = background({
                x: window.innerWidth,
                y: window.innerHeight
            }, new PIXI.Sprite(PIXI.loader.resources.bg.texture), 'cover');
            bg.zOrder = -1;
            container.addChild(bg);
            bg.filters = [displacementFilter];

            app.stage.on('mousemove', onPointerMove).on('touchmove', onPointerMove);
            loop();
        }


        /*--------------------
        Mouse Move
        --------------------*/
        function onPointerMove(eventData) {
            posX = eventData.data.global.x;
        }


        /*--------------------
        Loop
        --------------------*/
        function loop() {
            requestAnimationFrame(loop);
            xVelocity += (posX - displacementSprite.x) * 0.095;
            displacementSprite.x = xVelocity;

            let disp = Math.floor(posX - displacementSprite.x);
            if (disp < 0) {
                disp = -disp;
            }

            let displacementSpriteScale = map(disp, 0, window.innerWidth, 0.1, 1.6),
                displacementFilterScale = map(disp, 0, window.innerWidth, 0, 500);

            displacementSprite.scale.x = displacementSpriteScale;
            displacementFilter.scale.x = displacementFilterScale;
        }


        /*--------------------
        Map
        --------------------*/
        function map(n, start1, stop1, start2, stop2) {
            var newval = (n - start1) / (stop1 - start1) * (stop2 - start2) + start2;
            return newval;
        };


        /*--------------------
        Background Cover
        --------------------*/
        function background(bgSize, inputSprite, type, forceSize) {
            var sprite = inputSprite;
            var bgContainer = new PIXI.Container();
            var mask = new PIXI.Graphics().beginFill(0x8bc5ff).drawRect(0, 0, bgSize.x, bgSize.y).endFill();
            bgContainer.mask = mask;
            bgContainer.addChild(mask);
            bgContainer.addChild(sprite);

            var sp = {x: sprite.width, y: sprite.height};
            if (forceSize) sp = forceSize;
            var winratio = bgSize.x / bgSize.y;
            var spratio = sp.x / sp.y;
            var scale = 1;
            var pos = new PIXI.Point(0, 0);
            if (type == 'cover' ? (winratio > spratio) : (winratio < spratio)) {
                //photo is wider than background
                scale = bgSize.x / sp.x;
                pos.y = -((sp.y * scale) - bgSize.y) / 2
            } else {
                //photo is taller than background
                scale = bgSize.y / sp.y;
                pos.x = -((sp.x * scale) - bgSize.x) / 2
            }

            sprite.scale = new PIXI.Point(scale, scale);
            sprite.position = pos;

            return bgContainer;
        }

        // about card image
    </script>
<?php endif; ?>
<?php if (is_page_template('tpls/Contact.php')): ?>
    <script type="text/javascript"
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGSjuazfR5jJ4HLuqJ2DmyGkZR766ayRI"></script>
    <script type="text/javascript">
        // When the window has finished loading create our google map below

        var map;
        var infowindow;
        var marker = new Array();
        var i;
        var mapOptions;
        var mapElement;
        var locations = [
            <?php
            foreach ($locationsArray as $location):
            ?>
            [<?php echo $location[0]['lat'];?>, <?php echo $location[0]['lng'];?>, '<h4 class="info-window-content">  <?php echo $location[1];?>   </h4>', '<a href="https://www.google.com/maps/dir/?api=1&destination=<?php echo $location[0]['lat'] . "," . $location[0]['lng'];?>" target="_blank"><?php _e('Get Direction...', 'dokmeh')?></a>'],
            <?php endforeach; ?>
        ];
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var image = new google.maps.MarkerImage("<?php ThemeAssets('img/map-pin.png'); ?>");

            mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(locations[0][0], locations[0][1]), // Tehran 35.6892° N, 51.3890° E
                zoomControl: true,
                mapTypeControl: false,
                scaleControl: false,
                streetViewControl: false,
                rotateControl: false,
                fullscreenControl: false,
                // How you would like to style the map.
                // This is where you would paste any style found on Snazzy Maps.
                styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#fbb752"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "hue": "#ff0000"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "road.local",
                        "elementType": "geometry.fill",
                        "stylers": [
                            {
                                "color": "#ffffff"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#c2c4c4"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]
            };

            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            mapElement = document.getElementById('map');
            map = new google.maps.Map(mapElement, mapOptions);
            // Create the Google Map using our element and options defined above
            infowindow = new google.maps.InfoWindow();
            // Let's also add a marker while we're at it
            for (i = 0; i < locations.length; i++) {
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(locations[i][0], locations[i][1]),
                    map: map,
                    icon: image
                });
                google.maps.event.addListener(marker, 'click', (function (marker, i) {
                    return function () {
                        infowindow.setContent(locations[i][2] + locations[i][3]);
                        infowindow.open(map, marker);
                    }
                })(marker, i));
            }
        }

        function NewLocation(Nlat, Nlng) {
            this.map = map;
            var latLng = new google.maps.LatLng(Nlat, Nlng);
            window.location.href = "#map";
            map.setZoom(15);
            map.panTo(latLng);
        }
    </script>
<?php endif; ?>
<?php if (is_post_type_archive('products') OR is_tax('product-types')): ?>
    <script>
        wow = new WOW(
            {
                boxClass: 'wow',      // default
                animateClass: 'animated', // default
                offset: 0,          // default
                mobile: true,       // default
                live: true        // default
            }
        )
        new WOW().init();
    </script>
    <script>

        var hHeader = $('header').outerHeight();
        var hPHeader = $('section.products-header').outerHeight();
        // var hpi = $('.productFilter-icon').outerHeight();
        var totalH = hHeader + hPHeader;
        $(window).scroll(function () {
            var scroll = $(window).scrollTop();
            if (scroll >= totalH) {
                $(".productFilter-icon").addClass("fixFilter");
            }
            if (scroll < totalH) {
                $(".productFilter-icon").removeClass("fixFilter");
            }
        });

        $(".filter-icon").click(function () {
            $(".filters-boxes").toggleClass("showfilters");
        })
    </script>
<?php endif; ?>
<?php if(is_404()):?>
<?php endif;?>
</body>
</html>
