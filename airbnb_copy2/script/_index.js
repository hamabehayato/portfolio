$(function() {
    // index-header
    // slide-down
    $('.slide-down').click(function() {
        $('.hide-form').show();
        $('.slide-down').hide();
        if($(window).width() > 774) {
            $('.form-tablet-scroll').animate({scrollTop:$('.building-type').offset().top});
        }
    });

    $('.slide-down2').click(function() {
        $('.hide-form2').show();
        $('.slide-down2').hide();
        if($(window).width() > 774) {
            $('.form-tablet-scroll').animate({scrollTop:$('.bath-room').offset().top});
        }
    });

    // main1
    // slide-show
    function sliderSetting(){
        
            var width = $(window).width();
        
            if(width <= 745){
                $('.slide-list').not('.slick-initialized').slick({
                    autoplay:false,
                    infinite: false,
                    speed: 500,
                    prevArrow: false,
                    nextArrow: false,
                    dots: true,
                    swip: true
                });
            } else {
                $('.slide.slick-initialized').slick('unslick');
            }
        }
        
        sliderSetting();
        
        $(window).resize( function() {
            sliderSetting();
        });
});