(function($) {
	
	"use strict";
	var img_count_carousel_js = function($scope, $) {
		
		 // ===Image Hover Script===
		  function onHoverthreeDmovement() {
			var tiltBlock = $('.js-tilt');
			if (tiltBlock.length) {
			  $('.js-tilt').tilt({
				maxTilt: 20,
				perspective: 700,
				glare: true,
				maxGlare: 0
			  })
			}
		  }
		
		if ($(".odometer").length) {
			var odo = $(".odometer");
			odo.each(function () {
			  $(this).appear(function () {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			  });
			});
		  }
		
	};
	$(window).on('elementor/frontend/init', function () {
            elementorFrontend.hooks.addAction('frontend/element_ready/chirokind_image_counter.default', img_count_carousel_js);
    });	

})(window.jQuery);