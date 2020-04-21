$(document).ready(function () {
  //Brand Carousel
  var brandCarousel = $('.brandCarousel');
  brandCarousel.owlCarousel({
    loop: true,
    margin: 10,
    nav: false,
    dots: false,
    autoPlay: true,
    autoplaySpeed: 3000,
    autoplayTimeout: 3000,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });
  // scroll to top

  //Check to see if the window is top if not then display button
  $(window).scroll(function () {

    if ($(this).scrollTop() > 350) {
      $('.scroll_top').show()
      $('.scrollToTop').fadeIn();
    } else {
      $('.scrollToTop').fadeOut();
    }
  });

  //Click event to scroll to top
  $('.scrollToTop').click(function () {
    $('html, body').animate({
      scrollTop: 0
    }, 1000);
    return false;
  });

  // scroll to top

}); //ready function