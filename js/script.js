let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu-btn');

menuBtn.onclick = () =>{
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};
let swiper = new Swiper(".home-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  let swiper2 = new Swiper(".comida-slider", {
    grabCursor:true,
    loop:true,
    centeredSlides:true,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
  },
    breakpoints: {
      0: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      700: {
        slidesPerView: 2,
        spaceBetween: 40,
      },
      1000: {
        slidesPerView: 3,
        spaceBetween: 50,
      },
    },
  });
  