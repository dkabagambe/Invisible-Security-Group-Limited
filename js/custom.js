(function ($) {
  "use strict";

  // NAVBAR
  $(".navbar-nav .nav-link").click(function () {
    $(".navbar-collapse").collapse("hide");
  });

  $(window).scroll(function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
      $(".navbar").addClass("sticky-nav");
    } else {
      $(".navbar").removeClass("sticky-nav");
    }
  });

  // BACKSTRETCH SLIDESHOW
  $("#section_1").backstretch(
    [
      "images/Legal.jpg",
      "images/handcuff.jpg",
      "images/mobile-phones.jpg",
      "images/camerap.jpg",
    ],
    { duration: 3000, fade: 200 }
  );
})(window.jQuery);
