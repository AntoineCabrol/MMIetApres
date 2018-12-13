$(document).ready(function(){




//////////////////////////////////////////////////
//
//        Menu sticky desktop
//
//////////////////////////////////////////////////

var nav = $(".logo_menu");
var scroll;

$(window).scroll(function() {
  scroll = $(window).scrollTop();

  if(scroll > 560) {
    nav.addClass("sticky");
    $("body, .menu, .presentation, .logo, .logo_mmietapres").addClass("noanimation");
  } else {
    nav.removeClass("sticky");
  }
});

$(".logo").click(function() {
  if(nav.hasClass("sticky--open")) {
    nav.removeClass("sticky--open");
  } else if ( (nav.hasClass("sticky--open")==false) && (scroll>560)) {
    nav.addClass("sticky--open");
  }
});




//////////////////////////////////////////////////
//
//        Programme cliquable
//
//////////////////////////////////////////////////

var screenWidth = $(window).width();

if(screenWidth > 1024) {
  $(".programme__event:first-of-type").addClass("focused");
  $(".programme__event:not(.programme__contenu--sup)").click(function() {
      $(".programme__event").removeClass("focused");
      $(this).addClass("focused");
  });
} else {
  var indic = 0;
  $(".programme__event:not(.programme__contenu--sup)").click(function() {
    if(indic == 0) {
      $(".programme").addClass("focused");
      $(".popDetails").addClass("popDetails--opened");
      $(this).addClass("focused");
      indic = 1;
    } else {
      $(".programme").removeClass("focused");
      $(".popDetails").removeClass("popDetails--opened");
      $(this).removeClass("focused");
      indic = 0;
    }
  });
}





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
