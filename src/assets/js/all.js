window.onscroll = function() {headerscroll()};

var header = document.getElementById("nav-header");
var hero_cta = document.getElementById("hero_cta");
var stickyheader = header.offsetTop;

function headerscroll() {
    if (window.pageYOffset > stickyheader) {
        header.classList.add("sticky");
        hero_cta.classList.add("sticky_hero");
    } 
    else {
        header.classList.remove("sticky");
        hero_cta.classList.remove("sticky_hero");
    }
}

// 画面幅が375pxより小さい場合、viewportを再設定
$( window ).on( 'load', function() {


    var w = $( window ).width();
    // if( w <= 450 ) {
    //     $( 'meta[name=viewport]' ).attr( 'content', 'width=480' );
    // }
    if( w <= 750 ) {
        $('.isHome').css({
            "background-position" : "52% 0%",
        })
    }
    else {
        $( 'meta[name=viewport]' ).attr( 'content', 'width=device-width' );

        $('.sect_2 .modal').on('click', function() {
          $('.sect_2 .modal_content').css('display', 'block');
        });
        
        $('.sect_2 .modal_content').on('click', function() {
          $(this).css('display', 'none');
        });
    }
}); 

// 画面幅が375pxより小さい場合、viewportを再設定
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
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location
          .hostname == this.hostname) {
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
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 750,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: false
        }
      }
    ]
  });




  $('.sect_3__slider').slick({
    dots: false,
    infinite: true,
    arrows: true,
    speed: 1000,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        autoplay: true,
      }
    },{
      breakpoint: 769,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        dots: false,
        infinite: true,
        autoplay: true,
        arrows: true,
        swipe: true,
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
        swipe: true,
      }
    }
    ]
  });

  // BANNER SLIDER PC
  var $slide = $(".slide")
  .slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    speed: 2000,
    autoplaySpeed: 4000,
    autoplay: true
  })
  .on({
    beforeChange: function(event, slick, currentSlide, nextSlide) {
      // $(".slick-slide", this).eq(currentSlide).addClass("preve-slide");
      $(".slick-slide", this).eq(nextSlide).addClass("slide-animation");
    },
    afterChange: function(event, slick, currentSlide, nextSlide) {
  
      let prevSlide = currentSlide - 1;
      if(prevSlide == -1){
        prevSlide = 3;
      }
     
      slick.$slides[prevSlide].classList.remove('slide-animation')
    }
  });
$slide.find(".slick-slide").eq(0).addClass("slide-animation");

  // BANNER SLIDER SP
  var $slide = $(".slide-sp")
  .slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    speed: 2000,
    autoplaySpeed: 4000,
    autoplay: true
  })
  .on({
    beforeChange: function(event, slick, currentSlide, nextSlide) {
      $(".slick-slide", this).eq(currentSlide).addClass("preve-slide");
      $(".slick-slide", this).eq(nextSlide).addClass("slide-animation");
    },
    afterChange: function(event, slick, currentSlide, nextSlide) {

      let prevSlide = currentSlide - 1;
      if(prevSlide == -1){
        prevSlide = 3;
      }
     
      slick.$slides[prevSlide].classList.remove('slide-animation')
    }

  });
$slide.find(".slick-slide").eq(0).addClass("slide-animation");

// ADD OPTGROUP ON SELECT
$(function() {
  $('select').append('<optgroup label=""></optgroup>');
});

