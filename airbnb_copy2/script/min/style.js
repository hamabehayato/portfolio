$(function(){function i(){$(window).width()<=744?$(".slide-list").not(".slick-initialized").slick({autoplay:!1,infinite:!1,speed:500,arrows:!1,dots:!0}):$(".slick-initialized").slick("unslick")}$(".slide-down").click(function(){$(".hide-form").show(),$(".slide-down").hide(),$(window).width()>774&&$(".form-tablet-scroll").animate({scrollTop:$(".building-type").offset().top})}),$(".slide-down2").click(function(){$(".hide-form2").show(),$(".slide-down2").hide(),$(window).width()>774&&$(".form-tablet-scroll").animate({scrollTop:$(".bath-room").offset().top})}),i(),$(window).resize(function(){i()}),$(".art-slide").scroll(function(){$(window).width()>774&&($(".art-slide").scrollLeft()>1?$(".slide-blur").addClass("blur-on"):$(".slide-blur").removeClass("blur-on"))})});