$(document).ready(function(){




//////////////////////////////////////////////////
//
//        Menu sticky desktop
//
//////////////////////////////////////////////////

nav = $(".logo_menu");

$(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if(scroll > 560) {
      nav.addClass("sticky");
    } else {
      nav.removeClass("sticky");
    }
});

$(".logo").click(function() {
  if(nav.hasClass("sticky")) {
    nav.removeClass("sticky--open");
  } else {
    nav.addClass("sticky--open");
  }
});



//////////////////////////////////////////////////
//
//        Slider entreprises ordinateur
//
//////////////////////////////////////////////////

$('.slider').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: '<button type="button" class="slick-prev"></button',
  nextArrow: '<button type="button" class="slick-next"></button',
  centerMode: true,
  initialSlide: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: "unslick"
    }
  ]
});




//////////////////////////////////////////////////
//
//        Entreprises mobile
//
//////////////////////////////////////////////////

$(".sliderMob__elem").click(function() {

  var elem = $(this);
  var elemPosition = elem.position().left;

  var slider = $('.sliderMob');
  slider.scrollLeft( elemPosition );

  var parent = slider.parent();

  if (elem.hasClass("focused")) {
    $(".sliderMob__elem").removeClass("focused");
    slider.removeClass("focused");
    parent.removeClass("focused");
    $(".logo_menu").removeClass("focused");
  } else {
    $(".sliderMob__elem").removeClass("focused");
    $(this).addClass("focused");
    slider.addClass("focused");
    parent.addClass("focused");
    $(".logo_menu").addClass("focused");
  }

});




//////////////////////////////////////////////////
//
//        Service Worker
//
//////////////////////////////////////////////////

window.addEventListener('load', e => {
  registerSW(); // <-- Add this
});

async function registerSW() { // (1)
  if ('serviceWorker' in navigator) { // (2)
    try {
      await navigator.serviceWorker.register('sw.js'); // (3)
    } catch (e) {
      alert('ServiceWorker registration failed. Sorry about that.'); // (4)
    }
  } else {
    document.querySelector('.alert').removeAttribute('hidden'); //(5)
  }
}




});
