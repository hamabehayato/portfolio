$(function() {
    // body1-movie-link
    $(".body1-link-video-button").click(function() {
        $(".body1-link-video").show();
        $('*').css('overflow','hidden');
        $(window).on('touchmove.noScroll', function(e) {
            e.preventDefault();
        });
    });

    // link-movie-out
    $(".cancel-icon, .link-video-out").click(function() {
        $(".body1-link-video").hide();
        $('*').css('overflow','visible');
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