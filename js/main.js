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


});