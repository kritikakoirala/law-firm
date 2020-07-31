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



    $('#blog_posts').owlCarousel({
        loop: true,
        center: true,
        items: 3,
        margin: 30,

        dots: true,
        nav: true,

        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 2
            },
            1170: {
                items: 3
            }
        }
    });

    // When the user scrolls the page, execute myFunction
    window.onscroll = function () {
        myFunction()
    };

    // Get the navbar
    var navbar = document.getElementById("header_middle");

    // Get the offset position of the navbar
    var sticky = navbar.offsetTop;

    // Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

});