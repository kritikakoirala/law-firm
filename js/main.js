"use strict";
jQuery(function ($) {
  /*------------------
		Navigation
	--------------------*/
  $(".mobile-menu").slicknav({
    prependTo: "#mobile-menu-wrap",
    allowParentLinks: true,
  });

  $("img.lazy").lazyload({
    effect: "fadeIn",
    effectTime: 1500,
    threshold: 0,
  });

  // the animated down arrow
  var down = document.querySelectorAll(".dropdown-icon");
  down.forEach((d) => {
    var icon = d.firstElementChild;
    var iclass = document.createElement("i");
    iclass.setAttribute("class", "fa fa-angle-down 2x");
    icon.appendChild(iclass);
  });

  // Arrow in widgets

  var getUls = document.querySelectorAll(".widget li");
  getUls.forEach((getUl) => {
    var iclass = document.createElement("i");
    iclass.setAttribute("class", "fa fa-angle-right");
    getUl.prepend(iclass);
  });
});
