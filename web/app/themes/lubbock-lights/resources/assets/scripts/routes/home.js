import 'slick-carousel';

export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
    if ($(window).width() < 1200) {
      $('.home__news').slick({
        slide: 'section',
        rows: 0,
        autoplay: true,
        autoplaySpeed: 6000,
        dots: false,
        arrows: false,
      });
    }
  },
};
