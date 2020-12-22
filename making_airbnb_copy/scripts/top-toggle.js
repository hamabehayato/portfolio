$(function() {
    // airbnbアイコンが押された時
    $('.header-label').click(function() {
        if ($('#accordion-menu').prop("checked") == false) {
            $('.accordion-contents-zone').slideToggle(200);
            $('.header-label-size > img').css('filter','brightness(50%) sepia(100) saturate(100) hue-rotate(25deg)');
            $('.header-label-zone').addClass('toggle-on');
            $('.header-arrow').css({
                'border-color':'transparent #484848 #484848 transparent',
                'transform':'rotate(225deg)'
            });
        } else {
            $('.accordion-contents-zone').slideToggle(200);
            $('.header-label-size > img').css('filter','');
            $('.header-label-zone').css('position', 'absolute');
            $('.header-label-zone').removeClass('toggle-on');
            $('.header-arrow').css({
                'border-color':'transparent #ffffff #ffffff transparent',
                'transform':'rotate(45deg)'
            });
        }
    });

    // アコーディングメニュー内、言語ボタンが押された時
    $('.language').click(function() {
        $('.language-select').show();
        $('.slide-down').hide();
        $('.language-select-zone').slideDown(500);
        $('.slide-down').slideDown(1000);
    });
});