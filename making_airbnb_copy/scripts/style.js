$(function($) {
//     $('.header-label').click(function() {
//         if ($('#accordion-menu').prop("checked") == false) {
//             $('.header-label-size > img').css('filter','brightness(50%) sepia(100) saturate(100) hue-rotate(25deg)');
//             $('#business-prg').css('position','fixed');
//             $('.arrow').css({
//                 'border-color':'transparent #484848 #484848 transparent',
//                 'transform':'rotate(225deg)'
//             });
//         } else {
//             $('.header-label-size > img').css('filter','');
//             $('#business-prg').css('position','absolute');
//             $('.arrow').css({
//                 'border-color':'transparent #ffffff #ffffff transparent',
//                 'transform':'rotate(45deg)'
//             });
//         }
//     });

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

    // body1-movie-link
    $(".body1-link-video-button").click(function() {
        $(".body1-link-video").show();
        $('html *').css('overflow','hidden');
        $(window).on('touchmove.noScroll', function(e) {
            e.preventDefault();
        });
    });

    // link-movie-out
    $(".cancel-icon, .link-video-out").click(function() {
        $(".body1-link-video").hide();
        $('html *').css('overflow','visible');
        $(window).off('.noScroll');
    });

    // body1-video-button
    $("#video-button").click(function() {
        var video = $('#body1-bg-video').get(0);
        if ($(this).hasClass('play')) {
            video.pause();
            $(this).removeClass('play').html('再生<i class="fas fa-play video-icon"></i>');
        } else {
            video.play();
            $(this).addClass('play').html('停止<i class="fas fa-stop video-icon"></i>');
        }
    });
});