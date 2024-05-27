var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    spaceBetween: 50,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
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