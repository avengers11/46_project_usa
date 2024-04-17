(function($) {

	

	"use strict";

	var accordian_scripts_js = function($scope, $) {

		 //Accordion Active
		  function accordionActive() {
			if ($('.accordion-box-style1').length) {
			  $(".accordion-box-style1").on('click', '.accord-btn', function () {
		
				if ($(this).hasClass('active') !== true) {
				  $('.accordion .accord-btn').removeClass('active');
		
				}
		
				if ($(this).next('.accord-content').is(':visible')) {
				  $(this).removeClass('active');
				  $(this).next('.accord-content').slideUp(500);
				} else {
				  $(this).addClass('active');
				  $('.accordion .accord-content').slideUp(500);
				  $(this).next('.accord-content').slideDown(500);
				}
			  });
			}
		  }

		  accordionActive();

	};

	$(window).on('elementor/frontend/init', function () {

            elementorFrontend.hooks.addAction('frontend/element_ready/chirokind_our_faqs.default', accordian_scripts_js);

    });	



})(window.jQuery);