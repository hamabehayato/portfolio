$(function() {
    // 画面サイズ取得用
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
        if(width <= 744){
            $('.slide-list').not('.slick-initialized').slick({
                autoplay:false,
                infinite: false,
                speed: 500,
                arrows: false,
                dots: true,
            });
        } else {
            $('.slick-initialized').slick('unslick');
        }
    }
    sliderSetting();
    $(window).resize( function() {
        sliderSetting();
    });
    // main2
    // art-slide
    // pc-size スライドしたら、ぼかしを加える
    $('.art-slide').scroll(function () {
        var width = $(window).width();
        if (width > 774) {
            if($('.art-slide').scrollLeft() > 1) {
                $('.slide-blur').addClass('blur-on');
            } else {
                $('.slide-blur').removeClass('blur-on');
            }
        }
    });
});