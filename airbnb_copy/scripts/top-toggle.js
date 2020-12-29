$(function() {
    // airbnbアイコンが押下、トグルの開け閉め
    $('.header-label').click(function() {
        if ($(this).hasClass('toggle-off')) {
            $(this).removeClass('toggle-off');
            // アコーディオンメニューより下の階層を固定。スクロールバーを非表示に
            $('*').css('overflow','hidden');
            $('.accordion-contents-zone').slideToggle(250);
            $('.header-label-size').css('filter','brightness(50%) sepia(100) saturate(100) hue-rotate(25deg)');
            $('.header-label-zone').css('position','fixed');
            $('.header-label-zone').addClass('toggle-on');
            $('.header-arrow').css({
                'border-color':'transparent #484848 #484848 transparent',
                'transform':'rotate(225deg)'
            });
        } else {
            $(this).addClass('toggle-off');
            // アコーディオンメニューより下の階層の固定解除。
            $('*').css('overflow','visible');
            $('.accordion-contents-zone').slideToggle(250);
            $('.header-label-size').css('filter','');
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
        var sareaHeight = $('.language-select');
        $('.language-select').fadeIn(500);
        $('.language-slide-down').hide();
        $('.language-select-zone').slideDown(1500);
        $('.language-slide-down').slideDown(1500);
    });
    // 言語ボタンが押下後、外黒枠か、×ボタンで閉じる
    $('.language-cancel-icon, .language-out').click(function() {
        $('.language-select').hide();
    });
    
    // ＊、通貨ボタンが押された時
    $('.currency').click(function() {
        var sareaHeight = $('.currency-select');
        $('.currency-select').fadeIn(500);
        $('.currency-slide-down').hide();
        $('.currency-select-zone').slideDown(1500);
        $('.currency-slide-down').slideDown(1500);
    });
    // ＊、外黒枠か、×ボタンで閉じる
    $('.currency-cancel-icon, .currency-out').click(function() {
        $('.currency-select').hide();
    });
});

