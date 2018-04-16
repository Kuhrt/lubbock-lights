export default {
  init() {
    // JavaScript to be fired on all pages
    console.log('Firing');
    $(".banner .hamburger").click(function(){
      console.log('Clicked!');
      $(this).toggleClass("is-active");
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
  },
};
