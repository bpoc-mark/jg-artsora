"use strict";

window.onscroll = function () {
  headerscroll();
};

var header = document.getElementById("nav-header");
var hero_cta = document.getElementById("hero_cta");
var stickyheader = header.offsetTop;

function headerscroll() {
  if (window.pageYOffset > stickyheader) {
    header.classList.add("sticky");
    hero_cta.classList.add("sticky_hero");
  } else {
    header.classList.remove("sticky");
    hero_cta.classList.remove("sticky_hero");
  }
} // 画面幅が375pxより小さい場合、viewportを再設定


$(window).on('load', function () {
  var w = $(window).width();

  if (w <= 450) {
    $('meta[name=viewport]').attr('content', 'width=480');
  }

  if (w <= 750) {
    $('.isHome').css({
      "background-position": "52% 0%"
    });
  } else {
    $('meta[name=viewport]').attr('content', 'width=device-width');
  }
}); // 画面幅が375pxより小さい場合、viewportを再設定
// $( window ).on( 'load', function() {
//     var w = $( window ).width();
//     if( w <= 750 ) {
//         $('.isHome').css({
//             "background-position" : "52% 0%",
//         })
//     }
//     else {
//     }
// }); 

$(function () {
  $('a[href*=#]:not([href=#])').click(function () {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      console.log(target);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');

      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top(),
          behavior: 'smooth'
        }, 1000);
        return false;
      }
    }
  });
});