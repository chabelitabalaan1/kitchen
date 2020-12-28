var swiper = new Swiper(".swiper-container", {
  pagination: {
    el: ".swiper-pagination",
  },
});

document.addEventListener(
  "DOMContentLoaded",
  function () {
    setInterval(function () {
      swiper.slideNext();
    }, 3000);
  },
  false
);
