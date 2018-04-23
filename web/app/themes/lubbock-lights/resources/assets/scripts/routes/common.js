export default {
  init() {
    // JavaScript to be fired on all pages
    $(".banner .hamburger").click(function(){
      $(this).toggleClass("is-active");
      $('nav.nav-primary').toggleClass("active");
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
