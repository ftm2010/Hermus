(function () {var f={};var g=/iPhone/i,i=/iPod/i,j=/iPad/i,k=/\biOS-universal(?:.+)Mac\b/i,h=/\bAndroid(?:.+)Mobile\b/i,m=/Android/i,c=/(?:SD4930UR|\bSilk(?:.+)Mobile\b)/i,d=/Silk/i,b=/Windows Phone/i,n=/\bWindows(?:.+)ARM\b/i,p=/BlackBerry/i,q=/BB10/i,s=/Opera Mini/i,t=/\b(CriOS|Chrome)(?:.+)Mobile/i,u=/Mobile(?:.+)Firefox\b/i,v=function(l){return void 0!==l&&"MacIntel"===l.platform&&"number"==typeof l.maxTouchPoints&&l.maxTouchPoints>1&&"undefined"==typeof MSStream};function w(l){return function($){return $.test(l)}}function x(l){var $={userAgent:"",platform:"",maxTouchPoints:0};l||"undefined"==typeof navigator?"string"==typeof l?$.userAgent=l:l&&l.userAgent&&($={userAgent:l.userAgent,platform:l.platform,maxTouchPoints:l.maxTouchPoints||0}):$={userAgent:navigator.userAgent,platform:navigator.platform,maxTouchPoints:navigator.maxTouchPoints||0};var a=$.userAgent,e=a.split("[FBAN");void 0!==e[1]&&(a=e[0]),void 0!==(e=a.split("Twitter"))[1]&&(a=e[0]);var r=w(a),o={apple:{phone:r(g)&&!r(b),ipod:r(i),tablet:!r(g)&&(r(j)||v($))&&!r(b),universal:r(k),device:(r(g)||r(i)||r(j)||r(k)||v($))&&!r(b)},amazon:{phone:r(c),tablet:!r(c)&&r(d),device:r(c)||r(d)},android:{phone:!r(b)&&r(c)||!r(b)&&r(h),tablet:!r(b)&&!r(c)&&!r(h)&&(r(d)||r(m)),device:!r(b)&&(r(c)||r(d)||r(h)||r(m))||r(/\bokhttp\b/i)},windows:{phone:r(b),tablet:r(n),device:r(b)||r(n)},other:{blackberry:r(p),blackberry10:r(q),opera:r(s),firefox:r(u),chrome:r(t),device:r(p)||r(q)||r(s)||r(u)||r(t)},any:!1,phone:!1,tablet:!1};return o.any=o.apple.device||o.android.device||o.windows.device||o.other.device,o.phone=o.apple.phone||o.android.phone||o.windows.phone,o.tablet=o.apple.tablet||o.android.tablet||o.windows.tablet,o}f=x();if(typeof exports==="object"&&typeof module!=="undefined"){module.exports=f}else if(typeof define==="function"&&define.amd){define(function(){return f})}else{this["isMobile"]=f}})();
$('header nav .products-nav').click(function (e){
    e.preventDefault();
})
$('header nav .products-nav').click(function (){
    $(this).toggleClass('active');
    $(this).siblings('#products-navTabs').toggleClass('active');
});
// $('#products-navTabs').slideUp();
// $(document).ready(function(){
//     $('.products-nav').click(function (){
//         $(this).siblings('#products-navTabs').slideToggle();
//     })
// });
$('.mobile-close-productNavTabs').click(function (){
    $('#products-navTabs').removeClass('active');
    $('.products-nav').removeClass('active');
})
$(document).ready(function() {
    setTimeout(function () {
            var piHeight = $('.productsBox-image').outerWidth() * 1.35;
            $('.productsBox-image').css('height', piHeight);
            var apiHeight = $('aside .productsBox-image').outerWidth();
            $('aside .productsBox-image').css('height', apiHeight);
            var tpssiHeight = $('.tab-pane .swiper-slide-image').outerWidth();
            $('.tab-pane .swiper-slide-image').css('height', tpssiHeight);
            var pimpHeight = $('.productSingle-image .carousel.carousel-main').outerWidth();
            $('.productSingle-image .carousel.carousel-main').css('height', pimpHeight);
            var pitpHeight = $('.productSingle-image .carousel-nav .carousel-cell').outerWidth();
            $('.productSingle-image .carousel-nav .carousel-cell').css('height', pitpHeight);
            var briHeight = $('.blogBox_related-image .productSingle-image-thumbnailPic-img ').outerWidth();
            $('.blogBox_related-image').css('height', briHeight);
            var ceriHeight = $('.certificate-image').outerWidth();
            $('.certificate-image').css('height', ceriHeight);
            var miHeight = $('.memberBox-image').outerWidth();
            $('.memberBox-image').css('height', miHeight);
            // var cbiHeight = $('.commentBox-image').outerWidth();
            // $('.commentBox-image').css('height', cbiHeight);
        }
        , 500);
});
// $('.productSingle-image-thumbnailPic .productSingle-image-thumbnailPic-img:first-child').addClass('active');
// var piti = $('.productSingle-image-thumbnailPic .productSingle-image-thumbnailPic-img.active img').attr("src");
// $('.productSingle-image-mainPic img').attr("src" , piti)
// $('.productSingle-image-thumbnailPic .productSingle-image-thumbnailPic-img').each(function (){
//     $(this).click(function (){
//         $(this).siblings('.productSingle-image-thumbnailPic-img').removeClass('active');
//         $(this).addClass('active');
//         var piti = $('.productSingle-image-thumbnailPic .productSingle-image-thumbnailPic-img.active img').attr("src");
//         $('.productSingle-image-mainPic img').attr("src" , piti)
//
//     })
// })

$('.productFilter-icon').click(function (){
    $('.productFilter-icon').find('.list-container').toggleClass('active');
    $('.productFilter-panel').toggleClass('active');
    $('html').toggleClass('opFilter')
})
$('.productFilter-panel-close').click(function (){
    $('.productFilter-icon').find('.list-container').toggleClass('active');
    $('.productFilter-panel').removeClass('active');
    $('html').removeClass('opFilter')
})
$('.mobileMenu-icon').click(function (){
    $('.mobileMenu-icon').find('.list-container').toggleClass('active');
    $('html').toggleClass('opMobileMenu');
    $('#products-navTabs').removeClass('active');
})



$('.productSingle-info .dropDown-box').click(function () {
    $(this).toggleClass('opDrop')
})
$('.banner-info-text').find('h1').addClass('span3 wow flipInX center')
setTimeout(function () {
    $('body').addClass('loaded')
} ,2000 );
var lastScrollTop = 0;
$(window).scroll(function(event){
    var st = $(this).scrollTop();
    if (st > lastScrollTop){
        // downscroll code
        $('html').attr('data-direction', 'down')
    } else {
        // upscroll code
        $('html').attr('data-direction', 'up')
    }
    lastScrollTop = st;
});