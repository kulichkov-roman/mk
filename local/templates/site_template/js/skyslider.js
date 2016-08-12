// =================================================================================================================
// =================================================================================================================
// =================================================================================================================

function initImagesSlider(slider_name, options) {

    var opt_cover_image=1;
    var opt_center_image=0;
    var opt_show_hover=1;
    var opt_div_animation=0;
    var opt_zoomout_effect=0;
    var opt_zoomin_effect=0;
    //var opt_height_delta=-100;
    var opt_height_delta=0;


    if (options!==undefined) {

        if (options.opt_cover_image!==undefined) opt_cover_image=options.opt_cover_image;
        if (options.opt_center_image!==undefined) opt_center_image=options.opt_center_image;
        if (options.opt_show_hover!==undefined) opt_show_hover=options.opt_show_hover;
        if (options.opt_div_animation!==undefined) opt_div_animation=options.opt_div_animation;
        if (options.opt_zoomout_effect!==undefined) opt_zoomout_effect=options.opt_zoomout_effect;
        if (options.opt_zoomin_effect!==undefined) opt_zoomin_effect=options.opt_zoomin_effect;

    }

    // IMAGES SLIDER BUILD

    $(slider_name+' ul').css('width','10000px');

    $(slider_name+' ul li img').each(
        function (index)  {
            var src=$(this).attr('src');
            var width=$(window).width();
            var height=$(slider_name+' ul').height();

            $(this).parent().css('width',width+'px').css('height',(height+opt_height_delta)+'px');

            if (opt_cover_image==1) {
                //$(this).parent().css('background-image','url('+src+')');
                $(this).css('display','none');
                $(this).parent().prepend("<div class='skyslider-cover-image'></div>");
                $(this).parent().find('.skyslider-cover-image').css('background-image','url('+src+')');
            }

        }
    );

    if (opt_zoomout_effect) {
        $(slider_name).find('ul li:first-child .skyslider-cover-image').addClass('zoomOutEffect');
    }
    if (opt_zoomin_effect) {
        $(slider_name).find('ul li:first-child .skyslider-cover-image').addClass('zoomInEffect');
    }


    if (opt_center_image==1) {


        console.log('CENTER IMAGE');

        var $img = $(slider_name+' ul li img');

        $img.load(function(){
            var img_w=Math.round(this.width/2);
            var img_h=Math.round(this.height/2);
            $(this).css('margin-left','-'+img_w+'px').css('margin-top','-'+img_h+'px');
        });

        $img.each(function(){
            var img_w=Math.round(this.width/2);
            var img_h=Math.round(this.height/2);
            $(this).css('margin-left','-'+img_w+'px').css('margin-top','-'+img_h+'px');
        });

        $img.each(function() {
            var src = $(this).attr('src');
            $(this).attr('src', '');
            $(this).attr('src', src);
        });
    }


    if (opt_show_hover==1) {
        $(slider_name+' ul').after("<div class='skyslider-hover'></div>");
    }

    $('<a class="skyslider-prev" href="#"></a>').appendTo(slider_name);
    $('<a class="skyslider-next" href="#"></a>').appendTo(slider_name);


    $(window).resize(function(){
        var height=$(slider_name+' ul').height();
        $(slider_name+' ul li').each(
            function (index)  {
                var width=$(window).width();
                $(this).css('width',width+'px').css('height',(height+opt_height_delta)+'px');
            }
        );
    });

    function divAnimationShow(sender) {

        sender.find('ul li div').each(
            function (index) {
                var item=$(this);
                var item_delay=item.attr('show-delay');
                setTimeout(function () {
                    item.fadeIn(350);
                },item_delay*250);
            }
        );

    }

    function divAnimationHide(sender) {
        sender.find('ul li div').fadeOut(100);
    }

    function imagesSliderPrev(sender) {

        if (opt_div_animation) {
            divAnimationHide(sender);
        }

        var el=sender.find('ul li:last-child');
        var first=sender.find('ul li:first-child');
        var w=$(el).width();

        $(el).css('margin-left','-'+w+'px');
        $(el).insertBefore(first);

        var newel=sender.find('ul li:first-child');

        if (opt_zoomout_effect) {
            sender.find('ul li:first-child .skyslider-cover-image').addClass('zoomOutEffect');
        }
        if (opt_zoomin_effect) {
            sender.find('ul li:first-child .skyslider-cover-image').addClass('zoomInEffect');
        }

        $( newel ).animate({
            "margin-left":"0px"
        }, {
            duration: 1000,
            complete: function() {
                if (opt_div_animation) {
                    divAnimationShow(sender);
                }
                sender.find('ul li:not(:first-child) .skyslider-cover-image').removeClass('zoomOutEffect');
                sender.find('ul li:not(:first-child) .skyslider-cover-image').removeClass('zoomInEffect');
            }
        });

    }

    function imagesSliderNext(sender) {

        if (opt_div_animation) {
            divAnimationHide(sender);
        }

        var el=sender.find('ul li:first-child');
        var list=sender.find('ul');
        var w=$(el).width();

        if (opt_zoomout_effect) {
            sender.find('ul li:nth-child(2) .skyslider-cover-image').addClass('zoomOutEffect');
        }
        if (opt_zoomin_effect) {
            sender.find('ul li:nth-child(2) .skyslider-cover-image').addClass('zoomInEffect');
        }

        $(el).animate({
            "margin-left":"-"+w+"px"
        }, {
            duration: 1000,
            complete: function() {
                $(this).css('margin-left','0px').appendTo(list);
                if (opt_div_animation) {
                    divAnimationShow(sender);
                }
                sender.find('ul li:not(:first-child) .skyslider-cover-image').removeClass('zoomOutEffect');
                sender.find('ul li:not(:first-child) .skyslider-cover-image').removeClass('zoomInEffect');
            }
        });

    }

    $(slider_name+' a.skyslider-prev').click(
        function (event) {
            event.stopPropagation();
            event.preventDefault();
            console.log('prev');
            imagesSliderPrev($(this).parent());
        }
    );

    $(slider_name+' a.skyslider-next').click(
        function (event) {
            event.stopPropagation();
            event.preventDefault();
            console.log('next');
            imagesSliderNext($(this).parent());
        }
    );


    //Enable swiping...
    $(slider_name).swipe( {
        swipeRight:function(event, direction, distance, duration, fingerCount) {
            imagesSliderPrev(this);
        },
        swipeLeft:function(event, direction, distance, duration, fingerCount) {
            imagesSliderNext(this);
        },
        //Default is 75px, set to 0 for demo so any distance triggers swipe
        threshold:10
    });

}

