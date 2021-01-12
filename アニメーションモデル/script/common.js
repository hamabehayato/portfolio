$(function() {
	"use strict";
	
	// こちらのloadイベントはTOPでは使用しないため、分岐処理を追加しました
	// #pageに付与されている.topクラスがトリガーとなっています
	$(window).load(function () { 
		if(!$('.top').length){
			$(".index-preloader ").addClass("is-hidden");
			$("#page").addClass("mv");setTimeout( function(){ $("#page").addClass("act"); }, 1000 );
		}
	});

	// 旧ソース
	// $(window).load(function () { 
	// 	$(".index-preloader ").addClass("is-hidden");
	// 	$("#page").addClass("mv");setTimeout( function(){ $("#page").addClass("act"); }, 1000 );
	// });
	
	$('.btn-menu').on('click', function(){
		var $this = $(this);
		var $gnavWrap = $('.gnav-wrap');
		var $tplheader = $('#page');

		$this.toggleClass('active');
		$gnavWrap.toggleClass('active');
		$tplheader.toggleClass('act');

		if($gnavWrap.hasClass('active')){
			$gnavWrap.fadeIn();
			$gnavWrap.find('.delay-fade').each(function(i){
				$(this).delay(60 * i).queue(function(){
					$(this).addClass('active').dequeue();
				});
			});
		} else {
			$gnavWrap.fadeOut();
			$gnavWrap.find('.delay-fade').each(function(i){
				$(this).delay(60 * i).queue(function(){
					$(this).removeClass('active').dequeue();
				});
			});
		}
	});
	
});