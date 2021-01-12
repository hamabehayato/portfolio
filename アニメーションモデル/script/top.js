$(function() {
	"use strict";
	
	$(function () {
		var slide = function () {
			$(".pic-img.on").fadeOut('slow', function () {
				$(this).removeClass('on');
				if ($(this).next('.pic-img').length === 1) {
					$(this).next('.pic-img').fadeIn('slow').addClass('on');
				} else {
					$(".pic-img:first").fadeIn('slow').addClass('on');
				}
			});
			$(".pic-txt.on").fadeOut('slow', function () {
				$(this).removeClass('on');
				if ($(this).next('.pic-txt').length === 1) {
					$(this).next('.pic-txt').fadeIn('slow').addClass('on');
				} else {
					$(".pic-txt:first").fadeIn('slow').addClass('on');
				}
			});
		};
		setInterval(slide, 7000);
	});
	$(window).on('load resize', function(){
		var d_w = ($(window).width());
		var d_h = ($(window).height());
	
		if(d_w <= 620){
			if(d_h <= 480){
				$('#index-kv').css('height',d_h);
			}else{
				$('#index-kv').css('height',d_h);
			}
	
		}else{
			$('#index-kv').css('height',d_h);
		}
	
	});
	


	  var $win = $(window),
		  $nav = $('#tpl-header'),
		  navPos = $nav.offset().top,
		  fixedClass = 'is-fixed';

	  $win.on('load scroll', function() {
		//var dh =$win.height();
		var value = $(this).scrollTop();
		if ( value > navPos ) {
		  $nav.addClass(fixedClass);
		} else {
		  $nav.removeClass(fixedClass);
		}
	  });
	
});