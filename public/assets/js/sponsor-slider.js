/*--------------- Sponsor Slider ---------------*/ 
var swiper = new Swiper(".partner-slider", {

  spaceBetween: 10,
  loop:true,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false, 
  },

  breakpoints: {
    0: {
      slidesPerView: 2,
    },
    450: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    1024: {
      slidesPerView: 5,
    },
},

}); 
