jQuery(document).ready(function($) {
    var scroll = $(window).scrollTop();
    var scrollup = $('.scroll-top');
    /*------------------------------------------------
              Scroll Top
    ------------------------------------------------*/
    scrollup.click(function () {
      $('html, body').animate({
        scrollTop: '0px'
      }, 800);
      return false;
    });
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();
      if (scroll >= 200) {
        scrollup.fadeIn();
      } else {
        scrollup.fadeOut();
      }
    });

    /*------------------------------------------------
              Homepage Testimonial
    ------------------------------------------------*/
    var cyber_security_blocks_testimonial_Slider = new Swiper(".cyber-security-blocks-testimonial-swiper", {
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      600: {
        slidesPerView: 2,
      },
      992: {
        slidesPerView: 3,
      },
      1100: {
        slidesPerView: 4,
      }
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".cyber-security-blocks-testimonial-pagination",
      clickable: true,
    },
    spaceBetween: 30,
    loop: true,
    navigation: {
      nextEl: ".cyber-security-blocks-testimonial-swiper-button-next",
      prevEl: ".cyber-security-blocks-testimonial-swiper-button-prev",
    },
  });

});
