jQuery(function ($) {
    'use strict';
    
    // Mean Menu
	jQuery('.mean-menu').meanmenu({
		meanScreenWidth: '991'
    });
    
    // Menu Shrink 
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 150) {
            $('.main-nav').addClass('menu-shrink');
        } else {
            $('.main-nav').removeClass('menu-shrink');
        }
    });	

	// Nice Select
	$('select').niceSelect();

    // Banner Slider
	$('.banner-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 15,
		singleItem: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    });

    // Apartment Slider
	$('.apartment-slider').owlCarousel({
		loop: true,
		margin: 15,
		singleItem: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
        responsive:{
            0:{
                items: 1,
            },
            768:{
                items: 3,
            },
            992:{
                items: 4,
            }
        }    
    });
    
    // Wow 
    new WOW().init();

    // Odometer 
	$('.odometer').appear(function(e) {
		var odo = $('.odometer');
		odo.each(function() {
			var countNumber = $(this).attr('data-count');
			$(this).html(countNumber);
		});
    });
    
    // Property Slider
	$('.property-slider').owlCarousel({
		loop: true,
		margin: 15,
		singleItem: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
        responsive:{
            0:{
                items: 1,
            },
            768:{
                items: 2,
            },
            992:{
                items: 4,
            }
        }    
    });
    
    // Team Slider
	$('.team-slider').owlCarousel({
		loop: true,
		margin: 20,
		singleItem: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
        responsive:{
            0:{
                items: 1,
            },
            768:{
                items: 2,
            },
            992:{
                items: 3,
            }
        }    
    });

    // Partner Slider
	$('.partner-slider').owlCarousel({
		loop: true,
		margin: 20,
		singleItem: true,
		nav: false,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
        responsive:{
            0:{
                items: 2,
            },
            768:{
                items: 4,
            },
            992:{
                items: 6,
            }
        }    
    });

    // Feature Slider
	$('.feature-slider').owlCarousel({
		items: 1,
		loop: true,
		margin: 15,
		singleItem: true,
		nav: true,
		dots: true,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
		autoplayHoverPause: true,
		navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
    });

    // City Slider
	$('.city-slider').owlCarousel({
		loop: true,
		margin: 20,
		singleItem: true,
		nav: true,
		dots: false,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
        autoplayHoverPause: true,
        navText: [
            "<i class='bx bx-chevron-left'></i>",
            "<i class='bx bx-chevron-right'></i>"
        ],
        responsive:{
            0:{
                items: 1,
            },
            768:{
                items: 3,
            },
            992:{
                items: 4,
            }
        }    
    });

    // Testimonial Slider
	$('.testimonial-slider').owlCarousel({
		loop: true,
		margin: 20,
		singleItem: true,
		nav: false,
		dots: true,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items: 1,
            },
            768:{
                items: 2,
            },
            992:{
                items: 2,
            }
        }    
    });

    // Modal Video
    $('.js-modal-btn').modalVideo();

    // Go Top
	$(function(){
		$(window).on('scroll', function(){
			var scrolled = $(window).scrollTop();
			if (scrolled > 500) $('.go-top').addClass('active');
			if (scrolled < 500) $('.go-top').removeClass('active');
		});  
		$('.go-top').on('click', function() {
			$('html, body').animate({ scrollTop: '0' },  500);
		});
    });
    
    // Loader
	jQuery(window).on('load',function(){
		jQuery('.loader').fadeOut(500);
    });
    
    // Service Details Slider
	$('.service-details-slider').owlCarousel({
        items: 1,
		loop: true,
		margin: 20,
		singleItem: true,
		nav: false,
		dots: true,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
        autoplayHoverPause: true,
    });

    // Property Details Slider
	$('.property-details-slider').owlCarousel({
        items: 1,
		loop: true,
		margin: 20,
		singleItem: true,
		nav: false,
		dots: true,
		smartSpeed: 1000,
		autoplay: false,
		autoplayTimeout: 4000,
        autoplayHoverPause: true,
    });

    // Accordion 
	$('.accordion > li:eq(0) .faq-head').addClass('active').next().slideDown();
	$('.accordion .faq-head').on('click', function(j) {
		var dropDown = $(this).closest('li').find('.faq-content');
		$(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp(300);
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).closest('.accordion').find('.faq-head.active').removeClass('active');
			$(this).addClass('active');
		}
		dropDown.stop(false, true).slideToggle(300);
		j.preventDefault();
    });

    // Timer 
	let getDaysId = document.getElementById('days');
	if(getDaysId !== null){
		
		const second = 1000;
		const minute = second * 60;
		const hour = minute * 60;
		const day = hour * 24;

		let countDown = new Date('December 25, 2022 00:00:00').getTime();
		setInterval(function() {
			let now = new Date().getTime();
			let distance = countDown - now;

			document.getElementById('days').innerText = Math.floor(distance / (day)),
			document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
			document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
			document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);
		}, second);
    };
    
    // Tabs
    $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
    $('.tab ul.tabs li a').on('click', function (g) {
        var tab = $(this).closest('.tab'), 
        index = $(this).closest('li').index();
        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');
        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
        g.preventDefault();
    });
    
    // Subscribe Form
    $(".newsletter-form").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // Hande the invalid form...
            formErrorSub();
            submitMSGSub(false, "Please enter your email correctly.");
        } else {
            // Everything looks good!
            event.preventDefault();
        }
    });
    function callbackFunction (resp) {
        if (resp.result === "success") {
            formSuccessSub();
        }
        else {
            formErrorSub();
        }
    }
    function formSuccessSub(){
        $(".newsletter-form")[0].reset();
        submitMSGSub(true, "Thank you for subscribing!");
        setTimeout(function() {
            $("#validator-newsletter").addClass('hide');
        }, 4000)
    }
    function formErrorSub(){
        $(".newsletter-form").addClass("animated shake");
        setTimeout(function() {
            $(".newsletter-form").removeClass("animated shake");
        }, 1000)
    }
    function submitMSGSub(valid, msg){
        if(valid){
            var msgClasses = "validation-success";
        } else {
            var msgClasses = "validation-danger";
        }
        $("#validator-newsletter").removeClass().addClass(msgClasses).text(msg);
    }

    // AJAX Mail Chimp 
    $(".newsletter-form").ajaxChimp({
        url: "https://envytheme.us20.list-manage.com/subscribe/post?u=60e1ffe2e8a68ce1204cd39a5&amp;id=42d6d188d9", // Your url MailChimp
        callback: callbackFunction
    });

    // Buy Now Btn
	$('body').append("<a href='https://themeforest.net/checkout/from_item/29977874?license=regular&support=bundle_6month&_ga=2.221335899.2131256700.1648234835-1425290503.1590986634' target='_blank' class='buy-now-btn'><img src='assets/images/envato.png' alt='envato'/>Buy Now</a>");

	// Switch Btn
	$('body').append("<div class='switch-box'><label id='switch' class='switch'><input type='checkbox' onchange='toggleTheme()' id='slider'><span class='slider round'></span></label></div>");
}(jQuery));


// function to set a given theme/color-scheme
function setTheme(themeName) {
    localStorage.setItem('snifty_theme', themeName);
    document.documentElement.className = themeName;
}

// function to toggle between light and dark theme
function toggleTheme() {
    if (localStorage.getItem('snifty_theme') === 'theme-dark') {
        setTheme('theme-light');
    } else {
        setTheme('theme-dark');
    }
}

// Immediately invoked function to set the theme on initial load
(function () {
    if (localStorage.getItem('snifty_theme') === 'theme-dark') {
        setTheme('theme-dark');
        document.getElementById('slider').checked = false;
    } else {
        setTheme('theme-light');
      document.getElementById('slider').checked = true;
    }
})();