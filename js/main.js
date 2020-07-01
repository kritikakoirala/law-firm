'use strict';
jQuery(function ($) {


    /*------------------
		Navigation
	--------------------*/
    $(".mobile-menu").slicknav({

        prependTo: '#mobile-menu-wrap',
        allowParentLinks: true
    });


    $("img.lazy").lazyload({
        effect: "fadeIn",
        effectTime: 1500,
        threshold: 0
    });

    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        items: 4,
        // navText: [
        //     '<i class="fa fa-long-arrow-left fa-2x" aria-hidden="true"></i>',
        //     '<i class="fa fa-long-arrow-right fa-2x" aria-hidden="true"></i>'
        // ],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 2,
                nav: false
            },
            1000: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    })

});