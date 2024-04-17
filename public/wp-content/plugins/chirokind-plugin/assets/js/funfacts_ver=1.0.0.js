(function($) {
	
	"use strict";
	var funfact_js = function($scope, $) {
		
		//Fact Counter + Text Count
		  if ($(".count-box").length) {
			$(".count-box").appear(
			  function () {
				var $t = $(this),
				  n = $t.find(".count-text").attr("data-stop"),
				  r = parseInt($t.find(".count-text").attr("data-speed"), 10);
		
				if (!$t.hasClass("counted")) {
				  $t.addClass("counted");
				  $({
					countNum: $t.find(".count-text").text()
				  }).animate({
					countNum: n
				  }, {
					duration: r,
					easing: "linear",
					step: function () {
					  $t.find(".count-text").text(Math.floor(this.countNum));
					},
					complete: function () {
					  $t.find(".count-text").text(this.countNum);
					}
				  });
				}
			  }, {
				accY: 0
			  }
			);
		  }
		  
		  //Progress Bar / Levels
		  if ($('.progress-levels .progress-box .bar-fill').length) {
			$(".progress-box .bar-fill").each(function () {
			  $('.progress-box .bar-fill').appear(function () {
				var progressWidth = $(this).attr('data-percent');
				$(this).css('width', progressWidth + '%');
			  });
		
			}, {
			  accY: 0
			});
		  }
		
	};
	$(window).on('elementor/frontend/init', function () {
            elementorFrontend.hooks.addAction('frontend/element_ready/chirokind_our_funfacts.default', funfact_js);
    });
	$(window).on('elementor/frontend/init', function () {
            elementorFrontend.hooks.addAction('frontend/element_ready/chirokind_special_offer.default', funfact_js);
    });	

})(window.jQuery);



