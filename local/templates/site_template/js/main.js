resizeSlider();


//initImagesSlider('#photo-slider');

var current_slider = 1;
var max_sliders=3;


function isMobileMode() {
    return ($('#mobile-mode').height()>0);
}


function resizeSlider() {
    if (!isMobileMode()) {
        var wheight=$(window).height();
        var fheight=$('footer').height();
        var hheight=$('nav').height();
        if (fheight==0) hheight=0;
        if (fheight!=undefined) {
            $('#main-slider ul li').css('height',wheight-fheight-hheight+'px');
            $('.wrapper-inner').css('height',wheight-fheight-hheight+'px');
            $('.banners-container').css('height',wheight-fheight-hheight+'px');
            $('.skyslider').css('height',wheight-fheight-hheight+'px');
            $('.page-header').css('min-height',(wheight-fheight-hheight)/2+'px');
        } else {
            $('#main-slider ul li').css('height',wheight+'px');
            $('.wrapper-inner').css('height',wheight+'px');
            $('.banners-container').css('height',wheight+'px');
            $('.skyslider').css('height',wheight+'px');
            $('.page-header').css('min-height',(wheight)/2+'px');
        }
    } else {
        var wheight=$(window).height();
        $('#main-slider ul li').css('height','auto');
        $('.wrapper-inner').css('height','auto');
        $('.banners-container').css('height','auto');
        $('.skyslider').css('height','auto');
        $('.page-header').css('min-height','400px');

    }
}


function resizeTourPage() {
    var wheight=$(window).height();
    var fheight=$('footer').height();
    var hheight=$('nav').height();
    if (fheight==0) hheight=0;
    if (fheight>0) {
        $('.tour-page').css('height',wheight-fheight-hheight+'px');
    } else {
        $('.tour-page').css('height','auto');

    }
}

$(window).resize(function(){
    resizeSlider();
    resizeTourPage();
});

$(document).ready(function(){
    resizeSlider();
    resizeTourPage();

    $('.slider-hover-block').removeClass('slider-hover-hidden');
    $('.images-slider').removeClass('images-slider-hidden');

    //$('ul.catalog-fixed li').each(function (idx){
    //   $(this).fadeOut(100).delay(500*(idx+1)).fadeIn(100).removeClass('hidden-item');
    //});

    setTimeout("$('ul.catalog-fixed li:nth-child(1)').removeClass('hidden-item');",300);
    setTimeout("$('ul.catalog-fixed li:nth-child(3)').removeClass('hidden-item');",600);
    setTimeout("$('ul.catalog-fixed li:nth-child(2)').removeClass('hidden-item');",1200);
    setTimeout("$('ul.catalog-fixed li:nth-child(4)').removeClass('hidden-item');",1500);
    setTimeout("$('ul.catalog-fixed li').removeClass('hidden-item');",1500);

    setTimeout("$('ul.catalog-fixed li').removeClass('hidden-hover');",1500);
    //setTimeout("$('ul.catalog-fixed li').removeClass('hidden-link');",3000);

    });


$('#tour-open').click(
    function (event) {

        var fheight=$('footer').height();
        if (fheight>0) {
            event.stopPropagation();
            event.preventDefault();
            console.log('tour-open');
            $('.tour-page').removeClass('closed');
        }
    }
);

/*$('#compass').click(
    function (event) {
        if (isMobileMode()) return;
        event.stopPropagation();
        event.preventDefault();
        $('#wrapper').toggleClass('slideup');
        //$('#hotel-map').toggleClass('hidden');
    }
);*/

$('.mm-contacts').click(
    function (event) {
        if (isMobileMode()) return;
        event.stopPropagation();
        event.preventDefault();
        $('#wrapper').toggleClass('slideup');
    }
);


$('#tour-close').click(
    function (event) {
        event.stopPropagation();
        event.preventDefault();
        console.log('tour-close');
        $('.tour-page').addClass('closed');
    }
);

$('#swipemenubutton').click(
    function (event) {
        event.stopPropagation();
        event.preventDefault();
        console.log('swipemenubutton');
        $('#wrapper').toggleClass('openmenu');
        //$('.swipe-menu').toggleClass('hidden');
        $('#swipemenubutton').toggleClass('close');
    }
);

$('.tour-price a').click(
    function (event) {
        event.stopPropagation();
        event.preventDefault();
        var data=$(this).attr('data');
        $('.tour-inner table.active').removeClass('active');
        $('.tour-inner #tour'+data).addClass('active');

        $('.tour-inner a.active').removeClass('active');
        $('.tour-inner a.btn-'+data).addClass('active');


    }
);


function rotateMainSlider() {

    if (isMobileMode()>0) return;

    var cnt=$('#main-slider ul li').length;
    if (cnt<2) return;

    var el=$('#main-slider ul li:first-child');

    $(el).fadeOut(1000,function () {
        var list=$('#main-slider ul');
        $(el).appendTo(list);

        $('#main-slider ul li').each(function (idx) {
            console.log('each '+idx);
            $(this).css('z-index',300-idx);

        });

        $('#main-slider ul li:last-child').css('display','block');

    });

}

setInterval('rotateMainSlider()',10000);

// main slider

function setMainSliderHeight() {
    

    
    var $galleryWrap = $('.main-slider__wrap');
    
    if ($(window).width() > 840) {
        var windowHeight = $(window).height();
        var footerHeight = $('#wrapper > footer').height();
        var headerheight = parseFloat($('.main-slider').css('padding-top'));
        $galleryWrap.height(windowHeight - footerHeight - headerheight);
    } else {
        $galleryWrap.attr('style', '');
    }
    
}

$(document).ready(function(){

    $('.js__iframe').fancybox({
        fitToView   : false,
        width       : 820,
        height      : 650,
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none',
        padding     : 0
    });
    
    var $window = $(window);
    var $windowWidth = $window.width();
    var $windowHeight = $window.height();
    var $windowInitialWidth = $windowWidth;
    var $windowInitialHeight = $windowHeight;
    var $windowCurrentWidth = $windowInitialWidth;
    var $windowCurrentHeight = $windowInitialHeight;
    
    $('.main-slider__gallery').each(function() {
        setMainSliderHeight();
        
        var $gallery = $(this),
            itemLength = $gallery.find('.main-slider__item').length,
            itemPerView = 2;
            
        $gallery
            .addClass('carousel')
            .wrapInner('<div class="swiper-container"></div>')
            .find('.main-slider__list')
            .addClass('swiper-wrapper')
            .end()
            .find('.main-slider__item')
            .addClass('swiper-slide');
            
        $gallery.find('.main-slider__item').each(function() {
                $slideIndex = $(this).index();
                $(this).find('.main-slider__content-inner')
                    .append('<div class="slider-nav"><div class="slider-nav__inner"><a href="javascript:void(0)" class="slider-control slider-control_prev" title="Назад"><span class="slider-control__icon"></span></a><span class="slider-pagination__list"></span><a href="javascript:;" class="slider-control slider-control_next" title="Вперед"><span class="slider-control__icon"></span></a></div></div>');
            });
        var $prev = $('<a href="javascript:void(0)" class="gallery-control gallery-control_prev" title="Назад"><span class="gallery-control__icon"></span></a>').appendTo($gallery), 
            $next = $('<a href="javascript:void(0)" class="gallery-control gallery-control_next" title="Вперед"><span class="gallery-control__icon"></span></a>').appendTo($gallery);
        var galleryOptions = {
            slidesPerView: itemPerView,
            loop: false,
            autoplay: 5000,
            effect: 'fade',
            speed: 1000,
            paginationClickable: true,
            pagination: '.slider-pagination__list',
            autoHeight: false
        }
        
        if ($(window).width() <= 840) {
            galleryOptions.autoHeight = true;
        }

        var mainCarousel = $gallery.find('.swiper-container').swiper(galleryOptions);
        
        $gallery.find('.slider-control_prev').on('click', function(e) {
            e.preventDefault();
            
            if (mainCarousel.activeIndex != 0) {
                mainCarousel.slidePrev();
            } else {
                mainCarousel.slideTo(itemLength);
            }
            
        });
        
        $gallery.find('.slider-control_next').on('click', function(e) {
            e.preventDefault();
            
            if (mainCarousel.activeIndex != itemLength - 1) {
                mainCarousel.slideNext();
            } else {
                mainCarousel.slideTo(0);
            }
            
        });
    });
    
    $('.js__header-menu-toggle').on('click', function(e) {
        
        if (!$(this).closest('.header').hasClass('header_state_open')) {
            $(this).closest('.header')
                .addClass('header_state_open')
                .find('.header-main')
                .slideDown();
        } else {
            $(this).closest('.header')
                .removeClass('header_state_open')
                .find('.header-main')
                .slideUp(function() {
                    $(this).attr('style', '');
                });
        }
        
    });
    
    var indexBannersCarousel;
    
    function checkIndexBannersSlider() {
        var $prev, $next;
        
        if ($('.index-banners').length > 0) {
            
            if ($windowWidth > 840 && $windowHeight < 860) {
                
                if (typeof indexBannersCarousel == 'undefined') {
                    initIndexBannersSlider();
                }
                
            } else {
                
                if (typeof indexBannersCarousel != 'undefined' && $('.index-banners__gallery').hasClass('index-banners__gallery_initialized')) {
                    
                    $('.index-banners__list').add('.index-banners__item').each(function(e) {
                        $(this).attr('style', '');
                    });
                    indexBannersCarousel.destroy(true, true);
                    indexBannersCarousel = undefined;
                    $('.index-banners__gallery').removeClass('index-banners__gallery_initialized');
                    $('.index-banners__gallery')
                        .find('.gallery-control')
                        .remove()
                        .end()
                        .removeClass('carousel')
                        .find('.index-banners__item')
                        .removeClass('swiper-slide')
                        .closest('.index-banners__list')
                        .removeClass('swiper-wrapper')
                        .unwrap();
                }
                
            }
            
        }
        
    }
    
    function initIndexBannersSlider() {
        $('.index-banners__gallery').each(function() {
            var $gallery = $(this),
                itemPerView = 1,
                itemLength = $gallery.find('.index-banners__item').length;
                
            if (itemLength > itemPerView) {
                
                if (!$gallery.hasClass('carousel')) {
                    $gallery
                        .addClass('carousel')
                        .wrapInner('<div class="swiper-container"></div>')
                        .find('.index-banners__list')
                        .addClass('swiper-wrapper')
                        .end()
                        .find('.index-banners__item')
                        .addClass('swiper-slide');
                    $prev = $('<a href="javascript:;" class="gallery-control gallery-control_prev" title="Назад"></span></a>').appendTo($gallery); 
                    $next = $('<a href="javascript:;" class="gallery-control gallery-control_next" title="Вперед"></span></a>').appendTo($gallery);
                }
                
                indexBannersCarousel = $gallery.find('.swiper-container').swiper({
                    slidesPerView: 1,
                    grabCursor: true,
                    calculateHeight: true,
                    loop: false,
                    preventLinksPropagation: true,
                    autoplay: false,
                    /*onSlideChangeEnd : function(swiper) {
                        
                        if ($(swiper.activeSlide()).index() == 0) {
                            $prev.addClass('gallery-control_state_disabled');
                        } else {
                            $prev.removeClass('gallery-control_state_disabled');
                        }
                        
                        if ($(swiper.activeSlide()).index() == (itemLength - itemPerView)) {
                            $next.addClass('gallery-control_state_disabled');
                        } else {
                            $next.removeClass('gallery-control_state_disabled');
                        }
                        
                    },
                    onTouchEnd : function(swiper) {
                        
                        if ($(swiper.activeSlide()).index() == 0) {
                            $prev.addClass('gallery-control_state_disabled');
                        } else {
                            $prev.removeClass('gallery-control_state_disabled');
                        }
                        
                        if ($(swiper.activeSlide()).index() == (itemLength - itemPerView)) {
                            $next.addClass('gallery-control_state_disabled');
                        } else {
                            $next.removeClass('gallery-control_state_disabled');
                        }
                        
                    }*/
                });
                
                $prev.on('click', function(e) {
                    e.preventDefault();
                    if (!$(this).hasClass('gallery-control_state_disabled')) {
                        indexBannersCarousel.slidePrev();
                    }
                });
    
                $next.on('click', function(e) {
                    e.preventDefault();
                    if (!$(this).hasClass('gallery-control_state_disabled')) {
                        indexBannersCarousel.slideNext();
                    }
                });
                
                $gallery.addClass('index-banners__gallery_initialized');
            }
        });
    }
    
    if ($('.index-banners').length > 0) {
        checkIndexBannersSlider();
    }
    
    /*$('.index-banners__gallery').each(function() {
        setMainSliderHeight();
        
        var $gallery = $(this),
            itemLength = $gallery.find('.index-banners__item').length,
            itemPerView = 1;
            
        $gallery
            .addClass('carousel')
            .wrapInner('<div class="swiper-container"></div>')
            .find('.index-banners__list')
            .addClass('swiper-wrapper')
            .end()
            .find('.index-banners__item')
            .addClass('swiper-slide');
            
        var galleryOptions = {
            slidesPerView: itemPerView,
            loop: false,
            speed: 1000
        }
        
        var indexBannersCarousel = $gallery.find('.swiper-container').swiper(galleryOptions);
        
        $gallery.find('.slider-control_prev').on('click', function(e) {
            e.preventDefault();
            mainCarousel.slidePrev();
        });
        
        $gallery.find('.slider-control_prev').on('click', function(e) {
            e.preventDefault();
            mainCarousel.slideNext();
        });
    });*/
   
    //rating 
    
    (function() {
        
        if ($('.rating_state_active').length > 0) {
            var $ratingBlock = $('.rating_state_active');
            var startRating = +$ratingBlock.attr('data-rating');
            var currentRating = startRating;
            var newRating;
            
            $ratingBlock.find('.rating__item').on('mouseenter', function(e) {
                newRating = $(this).index() + 1;
                $ratingBlock.removeClass('rating_' + currentRating).addClass('rating_' + newRating);
                currentRating = newRating;
                $(this).on('click', function(e) {
                    $ratingBlock.removeClass('rating_state_active');
                    $ratingBlock.attr('data-rating', $(this).index() + 1);
                    $ratingBlock.find('.rating__item').off('mouseenter').off('click');
                });
                
                $ratingBlock.find('.rating__list').on('mouseleave', function(e) {
                    
                    if ($ratingBlock.hasClass('rating_state_active')) {
                        $ratingBlock.removeClass('rating_' + currentRating).addClass('rating_' + startRating);
                        currentRating = startRating;
                    }
                    
                });
                
            });
        }
        
    })();
    
    // reviews massonry
    
    // purchase reviews masonry
    
    if ($('.reviews').length > 0) {
        var $reviewsGrid = $('.reviews__list').masonry({
            itemSelector: '.reviews__item',
            columnWidth: '.reviews__sizer',
            percentPosition: true
        });
    }
    
    $(window).resize(function() {
        $windowWidth = $window.width();
        $windowHeight = $window.height();
        
        if ($windowWidth != $windowCurrentWidth || $windowHeight != $windowCurrentHeight) {
            checkIndexBannersSlider();
            $windowCurrentWidth = $windowWidth;
            $windowCurrentHeihgt = $windowHeight;
        }
        
        if ($('.main-slider__wrap').length > 0) {
            setMainSliderHeight();
        }
        
    });
});
