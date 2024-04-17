(function ($) {
  "use strict";


  $(function () {
    var galleryThumbs = new Swiper(".gallery-thumbs", {
      centeredSlides: false,
      centeredSlidesBounds: false,
      direction: "horizontal",
      spaceBetween: 20,
      slidesPerView: 5,
      freeMode: false,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      watchOverflow: true,
      breakpoints: {
        480: {
          direction: "vertical",
          slidesPerView: 4
        }
      }
    });

    var galleryTop = new Swiper(".gallery-main", {
      direction: "horizontal",
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      a11y: {
        prevSlideMessage: "Previous slide",
        nextSlideMessage: "Next slide",
      },
      keyboard: {
        enabled: true,
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
    galleryTop.on("slideChangeTransitionStart", function () {
      galleryThumbs.slideTo(galleryTop.activeIndex);
    });
    galleryThumbs.on("transitionStart", function () {
      galleryTop.slideTo(galleryThumbs.activeIndex);
    });
  });




  $(function () {
    var galleryThumbs = new Swiper(".banner-style11-gallery-thumbs", {
      centeredSlides: false,
      centeredSlidesBounds: false,
      direction: "horizontal",
      spaceBetween: 0,
      slidesPerView: 4,
      freeMode: false,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      watchOverflow: true,
      breakpoints: {
        480: {
          direction: "vertical",
          slidesPerView: 4
        }
      }
    });

    var galleryTop = new Swiper(".banner-style11-gallery", {
      direction: "horizontal",

      speed: 1500,
      effect: 'fade',

      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      a11y: {
        prevSlideMessage: "Previous slide",
        nextSlideMessage: "Next slide",
      },
      keyboard: {
        enabled: true,
      },
      thumbs: {
        swiper: galleryThumbs
      }
    });
    galleryTop.on("slideChangeTransitionStart", function () {
      galleryThumbs.slideTo(galleryTop.activeIndex);
    });
    galleryThumbs.on("transitionStart", function () {
      galleryTop.slideTo(galleryThumbs.activeIndex);
    });
  });




  if ($("#banner-style12-items-thumb").length) {
    let learningcoursesThumb = new Swiper("#banner-style12-items-thumb", {
      direction: "vertical",
      slidesPerView: 7,
      spaceBetween: 0,
      speed: 1400,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      loop: false,
      autoplay: {
        delay: 5000000000
      },
    });

    let learningcoursesCarousel = new Swiper("#banner-style12-items-carousel", {
      observer: true,
      observeParents: true,
      loop: false,
      speed: 1400,
      mousewheel: true,
      slidesPerView: 1,
      spaceBetween: 0,
      autoplay: {
        delay: 5000000000
      },
      thumbs: {
        swiper: learningcoursesThumb
      },
      pagination: {
        el: '#learning-courses-carousel-pagination',
        type: 'bullets',
        clickable: true
      },

      "navigation": {
        "nextEl": "#learning-courses__swiper-button-next",
        "prevEl": "#learning-courses__swiper-button-prev"
      },

    });
  }





  // Tab Box
  function tabBox() {
    if ($('.tabs-box').length) {
      $('.tabs-box .tab-buttons .tab-btn').on('click', function (e) {
        e.preventDefault();
        var target = $($(this).attr('data-tab'));

        if ($(target).is(':visible')) {
          return false;
        } else {
          target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
          $(this).addClass('active-btn');
          target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
          target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
          $(target).fadeIn(300);
          $(target).addClass('active-tab');
        }
      });
    }
  }




  function fullHeight() {
    $('.full-height').css("height", $(window).height());
  }



  // Loan Filter
  function loanFilter() {
    $(function () {
      $("#slider-range-min").slider({
        range: "min",
        value: 950,
        min: 500,
        max: 1500,
        slide: function (event, ui) {
          $("#amount").val("sq feet " + ui.value);
        }
      });
      $("#amount").val("sq feet " + $("#slider-range-min").slider("value"));
    });


    $(function () {
      $("#slider-range-max").slider({
        range: "max",
        min: 1,
        max: 10,
        value: 2,
        slide: function (event, ui) {
          $("#j").val(ui.value);
        }
      });
      $("#j").val($("#slider-range-max").slider("value"));
    });
  }




  // Time picker
  function timepicker() {
    if ($('input[name="time"]').length) {
      $('input[name="time"]').ptTimeSelect();
    }
  }



  //Hide Loading Box (Preloader)
  function handlePreloader() {
    if ($('.loader-wrap').length) {
      $('.loader-wrap').delay(1000).fadeOut(1000);
    }
    TweenMax.to($(".loader-wrap .overlay"), 1.2, {
      force3D: true,
      left: "100%",
      ease: Expo.easeInOut,
    });
  }



  //Bottom Parallax
  function bottomParallax() {
    if ($('.bottom-parallax').length) {
      var windowpos = $(window).scrollTop();
      var siteFooter = $('.footer-area').height();
      var sitebodyHeight = $('.boxed_wrapper').height();
      var finalHeight = sitebodyHeight - siteFooter - 1000;
      if (windowpos >= finalHeight) {
        $('body').addClass('parallax-visible');
      } else {
        $('body').removeClass('parallax-visible');
      }
    }
  }


  //===Language switcher===
  function languageSwitcher() {
    if ($("#polyglot-language-options").length) {
      $('#polyglotLanguageSwitcher').polyglotLanguageSwitcher({
        effect: 'slide',
        animSpeed: 100,
        testMode: true,
        onChange: function (evt) {
          alert("The selected language is: " + evt.selectedItem);
        }

      });
    };
  }


  //Scrool To Top Bar
  function handleScrollbar() {
    const bHeight = $('body').height();
    const scrolled = $(window).innerHeight() + $(window).scrollTop();

    let percentage = ((scrolled / bHeight) * 100);

    if (percentage > 100) percentage = 100;

    $('.scroll-top-inner .bar-inner').css('width', percentage + '%');
  }



  if ($(".main-menu__list").length && $(".mobile-nav__container").length) {
    let navContent = document.querySelector(".main-menu__list").outerHTML;
    let mobileNavContainer = document.querySelector(".mobile-nav__container");
    mobileNavContainer.innerHTML = navContent;
  }



  if ($(".sticky-header__content").length) {
    let navContent = document.querySelector(".main-menu").innerHTML;
    let mobileNavContainer = document.querySelector(".sticky-header__content");
    mobileNavContainer.innerHTML = navContent;
  }


  if ($(".mobile-nav__container .main-menu__list").length) {
    let dropdownAnchor = $(
      ".mobile-nav__container .main-menu__list .dropdown > a"
    );
    dropdownAnchor.each(function () {
      let self = $(this);
      let toggleBtn = document.createElement("BUTTON");
      toggleBtn.setAttribute("aria-label", "dropdown toggler");
      toggleBtn.innerHTML = "<i class='fa fa-angle-down'></i>";
      self.append(function () {
        return toggleBtn;
      });
      self.find("button").on("click", function (e) {
        e.preventDefault();
        let self = $(this);
        self.toggleClass("expanded");
        self.parent().toggleClass("expanded");
        self.parent().parent().children("ul").slideToggle();
      });
    });
  }



  if ($(".mobile-nav__toggler").length) {
    $(".mobile-nav__toggler").on("click", function (e) {
      e.preventDefault();
      $(".mobile-nav__wrapper").toggleClass("expanded");
      $("body").toggleClass("locked");
    });
  }


  // Scroll top button
  $('.scroll-top-inner').on("click", function () {
    $('html, body').animate({
      scrollTop: 0
    }, 500);
    return false;
  });



  // Vegas Slider
  if ($(".banner-bg-slide").length) {
    $(".banner-bg-slide").each(function () {
      var Self = $(this);
      var bgSlideOptions = Self.data("options");
      var bannerTwoSlides = Self.vegas(bgSlideOptions);
    });
  }











  


  // Cart Touch Spin
  if ($('.quantity-spinner').length) {
    $("input.quantity-spinner").TouchSpin({
      verticalbuttons: true
    });
  }



  //Main Slider Two Height
  function mainSliderTwoHeight() {
    if ($('.banner-style8').length) {
      var FullScreenHeight = $(window).height();
      var MainHeaderHeight = $('.main-header').height();
      $('.banner-style8 .gallery-main .swiper-slide').css('min-height', 450);
      $('.banner-style8 .gallery-main .swiper-slide').css('height', FullScreenHeight - MainHeaderHeight - 70);
    }
  }






// ===Project //  masonary===
		  function projectMasonaryLayout() {
			if ($('.masonary-layout').length) {
			  $('.masonary-layout').isotope({
				layoutMode: 'masonry'
			  });
			}
			if ($('.post-filter').length) {
			  $('.post-filter li').children('.filter-text').on('click', function () {
				var Self = $(this);
				var selector = Self.parent().attr('data-filter');
				$('.post-filter li').removeClass('active');
				Self.parent().addClass('active');
				$('.filter-layout').isotope({
				  filter: selector,
				  animationOptions: {
					duration: 500,
					easing: 'linear',
					queue: false
				  }
				});
				return false;
			  });
			}
		
			if ($('.post-filter.has-dynamic-filters-counter').length) {
			  // var allItem = $('.single-filter-item').length;
			  var activeFilterItem = $('.post-filter.has-dynamic-filters-counter').find('li');
			  activeFilterItem.each(function () {
				var filterElement = $(this).data('filter');
				var count = $('.filter-layout').find(filterElement).length;
				$(this).children('.filter-text').append('<span class="count">' + count + '</span>');
			  });
			};
		  }
		
		
		
		  //Masonary
		  function enableMasonry() {
			if ($('.masonry-items-container').length) {
		
			  var winDow = $(window);
			  // Needed variables
			  var $container = $('.masonry-items-container');
		
			  $container.isotope({
				itemSelector: '.masonry-item',
				masonry: {
				  columnWidth: '.gallery-item'
				},
				animationOptions: {
				  duration: 500,
				  easing: 'linear'
				}
			  });
		
			  winDow.bind('resize', function () {
		
				$container.isotope({
				  itemSelector: '.masonry-item',
				  animationOptions: {
					duration: 500,
					easing: 'linear',
					queue: false
				  }
				});
			  });
			}
		  }
		
		  enableMasonry();








  // Service Style1 Tab
  if ($('.service-style1-tab').length) {
    $('.service-style1-tab .tabs-button-box .tab-btn-item').on('click', function (e) {
      e.preventDefault();
      var target = $($(this).attr('data-tab'));

      if ($(target).hasClass('actve-tab')) {
        return false;
      } else {
        $('.service-style1-tab .tabs-button-box .tab-btn-item').removeClass('active-btn-item');
        $(this).addClass('active-btn-item');
        $('.service-style1-tab .tabs-content-box .tab-content-box-item').removeClass('tab-content-box-item-active');
        $(target).addClass('tab-content-box-item-active');
      }
    });
  }




  // === Round Progress Bar===
  if ($('.dial').length) {
    $('.dial').appear(function () {
      var elm = $(this);
      var color = elm.attr('data-fgColor');
      var perc = elm.attr('value');
      elm.knob({
        'value': 0,
        'min': 0,
        'max': 100,
        'skin': 'tron',
        'readOnly': true,
        'thickness': 0.12,
        'dynamicDraw': true,
        'displayInput': false
      });
      $({
        value: 0
      }).animate({
        value: perc
      }, {
        duration: 2000,
        easing: 'swing',
        progress: function () {
          elm.val(Math.ceil(this.value)).trigger('change');
        }
      });
      $(this).append(function () {});
    }, {
      accY: 20
    });
  }



  





  //Add One Page nav
  if ($('.scroll-nav').length) {
    $('.scroll-nav').onePageNav();
  }



  // Branch Atm Tab
  if ($('.features-style2-tab').length) {
    $('.features-style2-tab .tabs-button-box .tab-btn-item').on('click', function (e) {
      e.preventDefault();
      var target = $($(this).attr('data-tab'));

      if ($(target).hasClass('actve-tab')) {
        return false;
      } else {
        $('.features-style2-tab .tabs-button-box .tab-btn-item').removeClass('active-btn-item');
        $(this).addClass('active-btn-item');
        $('.features-style2-tab .tabs-content-box .tab-content-box-item').removeClass('tab-content-box-item-active');
        $(target).addClass('tab-content-box-item-active');
      }
    });
  }















  //Hidden Sidebar
  if ($('.hidden-sidebar').length) {
    var animButton = $(".sidemenu-nav-toggler"),
      hiddenBar = $(".hidden-sidebar"),
      navOverlay = $(".nav-overlay"),
      hiddenBarClose = $(".hidden-sidebar-close");

    function showMenu() {
      TweenMax.to(hiddenBar, 0.6, {
        force3D: false,
        left: "0",
        ease: Expo.easeInOut
      });
      hiddenBar.removeClass("close-sidebar");
      navOverlay.fadeIn(500);
    }

    function hideMenu() {
      TweenMax.to(hiddenBar, 0.6, {
        force3D: false,
        left: "-480px",
        ease: Expo.easeInOut
      });
      hiddenBar.addClass("close-sidebar");
      navOverlay.fadeOut(500);
    }
    animButton.on("click", function () {
      if (hiddenBar.hasClass("close-sidebar")) showMenu();
      else hideMenu();
    });
    navOverlay.on("click", function () {
      hideMenu();
    });
    hiddenBarClose.on("click", function () {
      hideMenu();
    });
  }



  if ($('.nav-overlay').length) {
    // / cursor /
    var cursor = $(".nav-overlay .cursor"),
      follower = $(".nav-overlay .cursor-follower");

    var posX = 0,
      posY = 0;

    var mouseX = 0,
      mouseY = 0;

    TweenMax.to({}, 0.016, {
      repeat: -1,
      onRepeat: function () {
        posX += (mouseX - posX) / 9;
        posY += (mouseY - posY) / 9;

        TweenMax.set(follower, {
          css: {
            left: posX - 22,
            top: posY - 22
          }
        });

        TweenMax.set(cursor, {
          css: {
            left: mouseX,
            top: mouseY
          }
        });

      }
    });

    $(document).on("mousemove", function (e) {
      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      mouseX = e.pageX;
      mouseY = e.pageY - scrollTop;
    });
    $("button, a").on("mouseenter", function () {
      cursor.addClass("active");
      follower.addClass("active");
    });
    $("button, a").on("mouseleave", function () {
      cursor.removeClass("active");
      follower.removeClass("active");
    });
    $(".nav-overlay").on("mouseenter", function () {
      cursor.addClass("close-cursor");
      follower.addClass("close-cursor");
    });
    $(".nav-overlay").on("mouseleave", function () {
      cursor.removeClass("close-cursor");
      follower.removeClass("close-cursor");
    });
  }


  //====== Magnific Popup
  if ($(".video-popup").length) {
    $(".video-popup").magnificPopup({
      type: "iframe",
      mainClass: "mfp-fade",
      removalDelay: 160,
      preloader: true,

      fixedContentPos: false
    });
  }



  if ($(".img-popup").length) {
    var groups = {};
    $(".img-popup").each(function () {
      var id = parseInt($(this).attr("data-group"), 10);

      if (!groups[id]) {
        groups[id] = [];
      }

      groups[id].push(this);
    });

    $.each(groups, function () {
      $(this).magnificPopup({
        type: "image",
        closeOnContentClick: true,
        closeBtnInside: false,
        gallery: {
          enabled: true
        }
      });
    });
  }


  //LightBox / Fancybox
  if ($('.lightbox-image').length) {
    $('.lightbox-image').fancybox({
      openEffect: 'fade',
      closeEffect: 'fade',

      youtube: {
        controls: 0,
        showinfo: 0
      },

      helpers: {
        media: {}
      }
    });
  }


  // AOS Animation
  if ($("[data-aos]").length) {
    AOS.init({
      duration: '1000',
      disable: 'false',
      easing: 'ease',
      mirror: true
    });
  }




  if ($("#datepicker").length) {
    $("#datepicker").datepicker();
  }
  
  if ($(".wow").length) {
    var wow = new WOW({
      boxClass: "wow", // animated element css class (default is wow)
      animateClass: "animated", // animation css class (default is animated)
      mobile: true, // trigger animations on mobile devices (default is true)
      live: true // act on asynchronously loaded content (default is true)
    });
    wow.init();
  }



  if ($(".search-toggler").length) {
    $(".search-toggler").on("click", function (e) {
      e.preventDefault();
      $(".search-popup").toggleClass("active");
      $(".mobile-nav__wrapper").removeClass("expanded");
      $("body").toggleClass("locked");
    });
  }



  //Accordion Box
  if ($('.accordion-box').length) {
    $(".accordion-box").on('click', '.acc-btn', function () {

      var outerBox = $(this).parents('.accordion-box');
      var target = $(this).parents('.accordion');

      if ($(this).hasClass('active') !== true) {
        $(outerBox).find('.accordion .acc-btn').removeClass('active');
      }

      if ($(this).next('.acc-content').is(':visible')) {
        return false;
      } else {
        $(this).addClass('active');
        $(outerBox).children('.accordion').removeClass('active-block');
        $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
        target.addClass('active-block');
        $(this).next('.acc-content').slideDown(300);
      }
    });
  }



  function SmoothMenuScroll() {
    var anchor = $(".scrollToLink");
    if (anchor.length) {
      anchor.children("a").bind("click", function (event) {
        if ($(window).scrollTop() > 10) {
          var headerH = "80";
        } else {
          var headerH = "80";
        }
        var target = $(this);
        $("html, body")
          .stop()
          .animate({
              scrollTop: $(target.attr("href")).offset().top - headerH + "px"
            },
            900,
            "easeInSine"
          );
        anchor.removeClass("current");
        anchor.removeClass("current-menu-ancestor");
        anchor.removeClass("current_page_item");
        anchor.removeClass("current-menu-parent");
        target.parent().addClass("current");
        event.preventDefault();
      });
    }
  }
  SmoothMenuScroll();




 




  // window load event
  $(window).on("load", function () {

    handlePreloader();
    languageSwitcher();
    projectMasonaryLayout();
    timepicker();
    onHoverthreeDmovement();
    enableMasonry();
    fullHeight();
    mainSliderTwoHeight();



    //Jquery Spinner / Quantity Spinner
    if ($('.quantity-spinner').length) {
      $("input.quantity-spinner").TouchSpin({
        verticalbuttons: true
      });
    }

    //Jquery Curved Circle
    if ($('.curved-circle').length) {
      $('.curved-circle').circleType({
        position: 'absolute',
        dir: 1,
        radius: 70,
        forceHeight: true,
        forceWidth: true
      });
    }

  });

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


  // window scroll event
  $(window).on("scroll", function () {

    //Stricked Menu Fixed
    if ($(".stricked-menu").length) {
      var headerScrollPos = 130;
      var stricky = $(".stricked-menu");
      if ($(window).scrollTop() > headerScrollPos) {
        stricky.addClass("stricky-fixed");
      } else if ($(this).scrollTop() <= headerScrollPos) {
        stricky.removeClass("stricky-fixed");
      }
    }



    //Scrool To Top
    if ($(window).scrollTop() > 200) {
      $('.scroll-top-inner').addClass('visible');
    } else {
      $('.scroll-top-inner').removeClass('visible');
    }




    bottomParallax();
    handleScrollbar();



  });







  if ($('.paroller').length) {
    $('.paroller').paroller({
      factor: -0.1, // multiplier for scrolling speed and offset, +- values for direction control  
      factorLg: -0.1, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
      type: 'foreground', // background, foreground  
      direction: 'vertical' // vertical, horizontal  
    });
  }



  if ($('.paroller-2').length) {
    $('.paroller-2').paroller({
      factor: 0.05, // multiplier for scrolling speed and offset, +- values for direction control  
      factorLg: 0.05, // multiplier for scrolling speed and offset if window width is less than 1200px, +- values for direction control  
      type: 'foreground', // background, foreground  
      direction: 'horizontal' // vertical, horizontal  
    });
  }



  // Scroll To Explore Div
  if ($('.scroll-to-explore').length) {
    $(".scroll-to-explore").on('click', function () {
      var target = $(this).attr('data-target');
      // animate
      $('html, body').animate({
        scrollTop: $(target).offset().top
      }, 1500);

    });
  }




  $(document).ready(function () {
    $('select:not(.ignore)').niceSelect();

  });



  // Dom Ready Function
  jQuery(document).on('ready', function () {
    (function ($) {

      // add your functions
      loanFilter();
      tabBox();




    })(jQuery);
  });




  /* ==========================================================================
     When Screen is Resized, do
     ========================================================================== */

  $(window).on('resize', function () {
    mainSliderTwoHeight();


  });






})(jQuery);