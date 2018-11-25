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

  var slider = $('.slider');
  slider.scrollLeft( elemPosition );

  if (elem.hasClass("focused")) {
    $(".entreprise").removeClass("focused");
    slider.removeClass("focused");
    $(".entreprises").removeClass("focused");
    $(".logo_menu").removeClass("focused");
  } else {
    $(".entreprise").removeClass("focused");
    $(this).addClass("focused");
    slider.addClass("focused");
    $(".entreprises").addClass("focused");
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
