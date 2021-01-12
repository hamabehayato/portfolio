jQuery(function($){
	var headerHeight = $('.logo-wrap').outerHeight();
	var urlHash = location.hash;
	if(urlHash) {
		$('body,html').stop().scrollTop(0);
		setTimeout(function(){
			var target = $(urlHash);
			var position = target.offset().top - headerHeight-20;
			$('body,html').stop().animate({scrollTop:position}, 500);
		}, 100);
	}
	$('a[href^="#"]').click(function() {
		var href= $(this).attr("href");
		var target = $(href);
		var position = target.offset().top - headerHeight;
		$('body,html').stop().animate({scrollTop:position}, 500);	
	});
	
	var _window = $(window),
		_header = $('.logo-wrap'),
		heroBottom,
		startPos,
		winScrollTop;

	_window.on('scroll',function(){
		winScrollTop = $(this).scrollTop();
		heroBottom = $('.hero').height();
		if (winScrollTop >= startPos) {
			if(winScrollTop >= heroBottom){
				_header.addClass('hide');
			}
		} else {
			_header.removeClass('hide');
		}
		startPos = winScrollTop;
	});

	_window.trigger('scroll');
	
});	