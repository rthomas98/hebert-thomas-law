// @codekit-prepend quiet "../js/vendor/jquery-3.3.1.min.js";
// @codekit-prepend quiet "../js/vendor/modernizr-3.6.0.min.js";

$(document).ready(function () {
  /*============================================
  Navigation Functions
  ==============================================*/
  if ($(window).scrollTop() === 0) {
    $('#main-nav').removeClass('scrolled');
  } else {
    $('#main-nav').addClass('scrolled');
  }

  $(window).scroll(function () {
    if ($(window).scrollTop() === 0) {
      $('#main-nav').removeClass('scrolled');
    } else {
      $('#main-nav').addClass('scrolled');
    }
  });

  // Select all links with hashes
$(document).on('click', 'a[href^="#"]', function (event) {
    event.preventDefault();

    $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top-100
     }, 500);
});

(function () {
	$('.menu-wrapper').on('click', function() {
		$('.hamburger-menu').toggleClass('animate');
	})
})();

});
