$(function($) {
	$('.header-label').click(function() {
        if ($('#accordion-menu').prop("checked") == false) {
            $('.header-label-size > img').css('filter','brightness(50%) sepia(100) saturate(100) hue-rotate(25deg)');
            $('#business-prg').css('position','fixed');
            $('.arrow').css({
                'border-color':'transparent #484848 #484848 transparent',
                'transform':'rotate(225deg)'
            });
        } else {
            $('.header-label-size > img').css('filter','');
            $('#business-prg').css('position','absolute');
            $('.arrow').css({
                'border-color':'transparent #ffffff #ffffff transparent',
                'transform':'rotate(45deg)'
            });        
        }
    });
});