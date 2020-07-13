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

    // $('.owl-carousel').owlCarousel({
    //     loop: true,
    //     margin: 10,
    //     nav: true,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         600: {
    //             items: 3
    //         },
    //         1000: {
    //             items: 5
    //         }
    //     }
    // })


});