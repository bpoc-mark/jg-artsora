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
$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [{
    breakpoint: 769,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 2,
      infinite: true,
      dots: false
    }
  }, {
    breakpoint: 750,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
});
$('.sect_3__slider').slick({
  dots: false,
  infinite: true,
  autoplay: true,
  swipe: false,
  arrows: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 3,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: false
    }
  }, {
    breakpoint: 750,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      infinite: true,
      autoplay: true,
      arrows: true,
      swipe: true
    }
  } // You can unslick at a given breakpoint now by adding:
  // settings: "unslick"
  // instead of a settings object
  ]
}); // BANNER SLIDER PC

var $slide = $(".slide").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  speed: 2000,
  autoplaySpeed: 4000,
  autoplay: true
}).on({
  beforeChange: function beforeChange(event, slick, currentSlide, nextSlide) {
    // $(".slick-slide", this).eq(currentSlide).addClass("preve-slide");
    $(".slick-slide", this).eq(nextSlide).addClass("slide-animation");
  },
  afterChange: function afterChange() {
    $(".preve-slide", this).removeClass("preve-slide　slide-animation");
  }
});
$slide.find(".slick-slide").eq(0).addClass("slide-animation"); // BANNER SLIDER SP

var $slide = $(".slide-sp").slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  speed: 2000,
  autoplaySpeed: 4000,
  autoplay: true
}).on({
  beforeChange: function beforeChange(event, slick, currentSlide, nextSlide) {
    $(".slick-slide", this).eq(currentSlide).addClass("preve-slide");
    $(".slick-slide", this).eq(nextSlide).addClass("slide-animation");
  },
  afterChange: function afterChange() {
    $(".preve-slide", this).removeClass("preve-slide　slide-animation");
  }
});
$slide.find(".slick-slide").eq(0).addClass("slide-animation");