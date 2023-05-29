let swiper = new Swiper(".mySwiper", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

let swiper2 = new Swiper(".mySwiper2", {
  slidesPerView: 1,
  spaceBetween: 0,
  centeredSlides: false,
  autoplay: {
    delay: 4500,
    disableOnInteraction: false,
  },
  // pagination: {
  //   el: ".swiper-pagination.swiper-pagination-2",
  //   clickable: false,
  // },
  navigation: {
    nextEl: ".swiper-button-next.swiper-button-next-2",
    prevEl: ".swiper-button-prev.swiper-button-prev-2",
  },
  breakpoints: {
    // when window width is >= 750
    750: {
      slidesPerView: 5,
      spaceBetween: 10
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 3,
      spaceBetween: 10
    }
  }
});