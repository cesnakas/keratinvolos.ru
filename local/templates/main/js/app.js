$( document ).ready(function() {
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
      $('.cert_slider').slick('setPosition');
    })
    $('img[data-src]').each( function(){
        $(this).attr("src",$(this).attr("data-src"));
    });
    $(".filter_mob").click(function(){
        $(".aside-content").toggleClass("is-active");
    });
    $(".close_aside").click(function(){
        $(".aside-content").removeClass("is-active");
    });
    $(".search_closed").click(function(){
        $(".search_form").removeClass("search_form__active");
    });
    //order item
    $('.order-table .open').on('click', function() {
        $(this).toggleClass('active');
        $(this).closest('tr').toggleClass('parent');
        $(this).closest('tr').next('.hidden').slideToggle('fast').toggleClass('opened');
    });
    $('.title_dropdown').click( function () {
        const cartMenu = $(this).parent();
        cartMenu.toggleClass('active');
        cartMenu.find('.default_submenu').slideToggle();
    });
    $('.title_dropdown--inner').click( function () {
        const cartMenu = $(this).parent();
        cartMenu.toggleClass('active');
        cartMenu.find('.default_submenu--inner').slideToggle();
    });
    //styler
    $('.styler').styler();
     //filter content
    $(document).on('click', '.js-toggle-title', function() {
        $(this).closest('.aside-elem').find('.js-toggle-title').toggleClass('toggled');
        $(this).closest('.aside-elem').find('.toggled-content').slideToggle();
    });
    $(".btn_yellow__bordered").click(function(){
        $(".modal").modal("hide");
    });
    $(".content").click(function(){
        $(".mob_nav").removeClass("is-active");
        $(".menu_box").removeClass("is-active");
        $(".hamburger").removeClass("is-active");
    });
    //SEARCH
    $(".search_icon").click(function(){
        $(".search_form").toggleClass("search_form__active");
    });
    $(function() {
      header_bottom = $('.header_bottom').offset().top;
      $(window).scroll(function () {
        if ($(window).scrollTop() > header_bottom) { 
          $(".header_bottom").addClass("header_bottom__fixed");
          $("body").addClass("body_w_header");
        } else {
          $(".header_bottom").removeClass("header_bottom__fixed");
          $("body").removeClass("body_w_header");
        }
      });
    });
    //menu
    $(".menu_box").click(function(){
        $(this).toggleClass("is-active");
        $(this).find('.hamburger').toggleClass("is-active");
        $('.mob_nav').toggleClass('is-active');
    });
    
    //anchor
    $("#scroll").on("click","a", function (event) {
      event.preventDefault();
      var id  = $(this).attr('href'),
      top = $(id).offset().top;
      $('body,html').animate({scrollTop: top}, 1000);
    });
    
    //sliders
    $('.carousel').not('.unslick').each(function() {
        var slickInduvidual = $(this);
        var slideCount = null;
        slickInduvidual.on('init', function(event, slick) {
            slideCount = slick.slideCount;
            setSlideCount();
            setCurrentSlideNumber(slick.currentSlide);
        });
        slickInduvidual.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            setCurrentSlideNumber(nextSlide);
        });
        slickInduvidual.slick({
            infinite: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: +$(this).attr('data-items-xl'),
            slidesToScroll: +$(this).attr('data-scroll-xl'),
            responsive: [{
                breakpoint: 1920,
                settings: {
                    slidesToShow: +$(this).attr('data-items-xl'),
                    slidesToScroll: +$(this).attr('data-scroll-xl'),
                }
            },
            {
                breakpoint: 1365,
                settings: {
                    slidesToShow: +$(this).attr('data-items-lg'),
                    slidesToScroll: +$(this).attr('data-scroll-lg'),
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: +$(this).attr('data-items-md'),
                    slidesToScroll: +$(this).attr('data-scroll-md'),
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: +$(this).attr('data-items-sm'),
                    slidesToScroll: +$(this).attr('data-scroll-sm'),
                }
            }
            ]
        });

        function setSlideCount() {
            var $el = slickInduvidual.closest('.section').find('.to');
            $el.text((slideCount > 9) ? slideCount : '0' + +slideCount);
        }

        function setCurrentSlideNumber(currentSlide) {
            var $el = slickInduvidual.closest('.section').find('.from');
            $el.text((currentSlide > 8) ? currentSlide + 1 : '0' + +(currentSlide + 1));
        }

        
        $(' button.prev').click(function() {
            $(this).closest('.section').find(".carousel").slick('slickPrev');
        });
        $(' button.next').click(function() {
            $(this).closest('.section').find(".carousel").slick('slickNext');
        });
        //console.log(slideCount);
    });

    //sliders
    $('.carouselInner').not('.unslick').each(function() {
        var slickInduvidual = $(this);
        var slideCount = null;
        slickInduvidual.on('init', function(event, slick) {
            slideCount = slick.slideCount;
            setSlideCount();
            setCurrentSlideNumber(slick.currentSlide);
        });
        slickInduvidual.on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            setCurrentSlideNumber(nextSlide);
        });
        slickInduvidual.slick({
            infinite: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 5000,
            slidesToShow: +$(this).attr('data-items-xl'),
            slidesToScroll: +$(this).attr('data-scroll-xl'),
            responsive: [{
                breakpoint: 1920,
                settings: {
                    slidesToShow: +$(this).attr('data-items-xl'),
                    slidesToScroll: +$(this).attr('data-scroll-xl'),
                }
            },
            {
                breakpoint: 1365,
                settings: {
                    slidesToShow: +$(this).attr('data-items-lg'),
                    slidesToScroll: +$(this).attr('data-scroll-lg'),
                }
            },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: +$(this).attr('data-items-md'),
                    slidesToScroll: +$(this).attr('data-scroll-md'),
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: +$(this).attr('data-items-sm'),
                    slidesToScroll: +$(this).attr('data-scroll-sm'),
                }
            }
            ]
        });

        function setSlideCount() {
            var $el = slickInduvidual.closest('.section').find('.to');
            $el.text((slideCount > 9) ? slideCount : '0' + +slideCount);
        }

        function setCurrentSlideNumber(currentSlide) {
            var $el = slickInduvidual.closest('.section').find('.from');
            $el.text((currentSlide > 8) ? currentSlide + 1 : '0' + +(currentSlide + 1));
        }

        
        $(' button.prev').click(function() {
            $(this).closest('.slider_wrapper').find(".carouselInner").slick('slickPrev');
        });
        $(' button.next').click(function() {
            $(this).closest('.slider_wrapper').find(".carouselInner").slick('slickNext');
        });
        //console.log(slideCount);
    });

    $('.slider-for-inner').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: '.slider-nav-inner',
      responsive: [{
         breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }
    ]
    });
    $('.slider-nav-inner').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: '.slider-for-inner',
      dots: true,
      centerMode: true,
      focusOnSelect: true,
    });
    $(' button.prev').click(function() {
        $(this).closest('.product_slider').find(".slider").slick('slickPrev');
    });
    $(' button.next').click(function() {
        $(this).closest('.product_slider').find(".slider").slick('slickNext');
    });
});
