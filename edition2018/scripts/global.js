$(document).ready(function(){




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

$(".entreprise").click(function() {

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

if('serviceWorker' in navigator) {
  navigator.serviceWorker
           .register('/sw.js')
           .then(function() { console.log("Service Worker Registered"); });
}



});
