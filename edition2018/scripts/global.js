$(document).ready(function(){



var screenWidth = $(window).width();


//////////////////////////////////////////////////
//
//        Notifications
//
//////////////////////////////////////////////////

$(".notification").click(function() {
  $(this).addClass("closed");
});




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
//        Programme accordéon desktop
//
//////////////////////////////////////////////////

if(screenWidth > 1024) {
  $(".programme__event:first-of-type").addClass("focused");
  $(".programme__event:not(.programme__contenu--sup)").click(function() {
      $(".programme__event").removeClass("focused");
      $(this).addClass("focused");
  });
}




//////////////////////////////////////////////////
//
//        Navigation mobile
//
//////////////////////////////////////////////////

if(screenWidth < 1024) {

  var trigger = $("*[data-action=trigger]");
  var display = $("*[data-action=display]");
  var hybrid  = $("*[data-action=hybrid]");
  var menu    = $(".logo_menu");
  var name, type, parent, action;
  var indic = 0;

  trigger.click(function(){
    // remise à 0
    $("*").removeClass("displayed", "focused", "softFocused", "soften", "bis");

    name   = $(this).attr("data-name");
    type   = $(this).attr("data-type");
    action = $(this).attr("data-action");

    // TRI SELON TRIGGER
    // Trigger d'affichage normal (section...)
    if (type=="main") {
      console.log("Type displayed");
      menu.removeClass("bis");
      $("[data-name="+name+"]").addClass("displayed");
    }
    // Trigger d'affichage secondaire (contact...)
    else if (type=="bis") {
      console.log("Type displayed--bis");
      menu.addClass("bis");
      $("[data-name="+name+"]").addClass("displayed");
    }
    // Trigger de focus (avec fond rouge) sur un élément
    else if (type=="focus") {
      console.log("Type focused");
      parent = $(this).attr("data-parent");
      $("[data-name="+name+"]").addClass("focused");
      $(menu, parent).addClass("soften");
    }
    // Trigger de focus soft (sans fond rouge) sur un élément
    else {
      console.log("Type softFocused");
      parent = $(this).attr("data-parent");
      $("[data-name="+name+"]").addClass("softFocused");
      $(menu, parent).addClass("soften");
    }
  });

  hybrid.click(function(){
    console.log("Hybrid, indic="+indic);

    type   = $(this).attr("data-type");
    parent = $(this).attr("data-parent");

    // Trigger de focus (avec fond rouge) sur un élément
    if (type=="focus") {
      console.log("Type focused");
      if (indic == 0) {
        $(this).addClass("focused");
        $("[data-action=display][data-name="+parent+"]").addClass("focused");
        $("[data-action=hybrid][data-name="+parent+"]").addClass("displayed");
        $(menu).addClass("soften");
        indic = 1;
        console.log("Ouverture");
      } else {
        $(this).removeClass("focused");
        $("[data-action=display][data-name="+parent+"]").removeClass("focused");
        $("[data-action=hybrid][data-name="+parent+"]").removeClass("displayed");
        $(menu).removeClass("soften");
        indic = 0;
        console.log("Fermeture");
      }
    }
    // Trigger de focus soft (sans fond rouge) sur un élément
    else {
      console.log("Type softFocused");
      if (indic == 0) {
        $(this).addClass("softFocused");
        $("[data-action=display][data-name="+parent+"]").addClass("softFocused");
        $("[data-action=hybrid][data-name="+parent+"]").addClass("displayed");
        $(menu).addClass("soften");
        indic = 1;
        console.log("Ouverture");
      } else {
        $(this).removeClass("softFocused");
        $("[data-action=display][data-name="+parent+"]").removeClass("softFocused");
        $("[data-action=hybrid][data-name="+parent+"]").removeClass("displayed");
        $(menu).removeClass("soften");
        indic = 0;
        console.log("Fermeture");
      }
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
