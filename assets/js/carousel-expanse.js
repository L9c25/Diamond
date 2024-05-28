var swiper = new Swiper(".mySwiper", {
    spaceBetween: 50,
    slidesPerGroupSkip: 1,
    pagination: {
      el: ".swiper-pagination",
      type: "bullets",
      dynamicBullets: true,
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

  var swiper = new Swiper(".mySwiper2", {
      pagination: {
        el: ".swiper-pagination",
        type: "fraction",
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
  });