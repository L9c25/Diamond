var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 80,
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    pagination: {
      el: ".swiper-pagination",
      type: "fraction",
    },
    breakpoints:{
      0: {
          slidesPerView: 1,
      },
      520: {
          slidesPerView: 2,
      },
      950: {
          slidesPerView: 4,
      },
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  keyboard: true,
  });