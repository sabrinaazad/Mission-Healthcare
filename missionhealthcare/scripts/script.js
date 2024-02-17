/* global scripts */

// VARIABLES
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var menuOverlay = $(".main-nav__overlay");
var body = $("body");
var win = $(window);
var searchButton = $(".searchbar-button__desktop");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var stickyNavTop = mainNav.offset().top;

$(function () {
  if (
    $("#menu-main-menu-1 .menu-item.current-menu-item").hasClass(
      "menu-item-has-children"
    )
  ) {
    $("#menu-main-menu-1 .menu-item.current-menu-item")
      .siblings()
      .addClass("hide");
  }
  if (
    $("#menu-main-menu-1 .menu-item.current-menu-parent").hasClass(
      "menu-item-has-children"
    )
  ) {
    $("#menu-main-menu-1 .menu-item.current-menu-parent")
      .siblings()
      .addClass("hide");
    $(
      "#menu-main-menu-1 .menu-item.current-menu-parent .sub-menu .menu-item"
    ).removeClass("hide");
  }

  $(".hero--slider").slick({
    prevArrow: '<div class="slick-prev"></div>',
    nextArrow: '<div class="slick-next"></div>',
  });

  
  $(".logo-grid").slick({
      dots: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows: false,
      mobileFirst: true,
    responsive: [
    {
      breakpoint: 1024,
      settings: "unslick", 
    }
    ]
  });


  $(".review-slider").slick({
    dots: true,
    infinite: true,
    speed: 300,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: false
      }
    }
  ]
});


  $(".expand-button").click(function () {
    $(".expand-panel").slideToggle();
  });

  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  $(window).scroll(function () {
    stickyNav();
  });

  searchButton.click(function () {
    $(".search-form").slideToggle();
  });

  $(window).on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });
});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
  menuOverlay.toggleClass("active");
  body.toggleClass("disable-scroll");
}

function stickyNav() {
  var scrollTop = $(window).scrollTop();

  if (scrollTop > stickyNavTop) {
    stickyWrap.addClass("sticky");
    mainNav.addClass("sticky-margin");
  } else {
    stickyWrap.removeClass("sticky");
    mainNav.removeClass("sticky-margin");
  }
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
  menuOverlay.removeClass("active");
  body.removeClass("disable-scroll");
}





var wordStates = document.querySelectorAll(".list-of-states li");
var svgStates = document.querySelectorAll("#states > *");

var wordCounties = document.querySelectorAll(".list-of-counties li");
var svgCounties = document.querySelectorAll(".counties > *");

function removeAllOn() {
  wordStates.forEach(function (el) {
    el.classList.remove("on");
  });
  svgStates.forEach(function (el) {
    el.classList.remove("on");
  });
  wordCounties.forEach(function (el) {
    el.classList.remove("on");
  });
  svgCounties.forEach(function (el) {
    el.classList.remove("on");
  });
}

function addOnFromList(el) {
  var stateCode = el.getAttribute("data-state");
  var svgState = document.querySelector("#" + stateCode);
  el.classList.add("on");
  svgState.classList.add("on");
  
  var countyCode = el.getAttribute("data-state");
  var svgCounty = document.querySelector("#" +countyCode);
  el.classList.add("on");
  svgCounty.classList.add("on");
}

function addOn(el) {
  var stateId = el.getAttribute("id");
  var countyId = el.getAttribute("id");

  var wordState = document.querySelector("[data-state='" + stateId + "']");
  if (wordState == null) {

  } else {
    el.classList.add("on");
    wordState.classList.add("on");
  }

  var countyId = el.getAttribute("id");
  var wordCounty = document.querySelector("[data-state='" + countyId + "']");
  if (wordCounty == null) {

  } else {
    el.classList.add("on");
    wordCounty.classList.add("on");
  }
  
}

wordStates.forEach(function (el) {
  el.addEventListener("mouseenter", function () {
    addOnFromList(el);
  });
  el.addEventListener("mouseleave", function () {
    removeAllOn();
  });

  el.addEventListener("touchstart", function () {
    removeAllOn();
    addOnFromList(el);
  });
});

svgStates.forEach(function (el) {
  el.addEventListener("mouseenter", function () {
    addOn(el);
  });
  el.addEventListener("mouseleave", function () {
    removeAllOn();
  });

  el.addEventListener("touchstart", function () {
    removeAllOn();
    addOn(el);
  });
});

wordCounties.forEach(function (el) {
    el.addEventListener("mouseenter", function () {
      addOnFromList(el);
    });
    el.addEventListener("mouseleave", function () {
      removeAllOn();
    });
  
    el.addEventListener("touchstart", function () {
      removeAllOn();
      addOnFromList(el);
    });
  });
  
  svgCounties.forEach(function (el) {
    el.addEventListener("mouseenter", function () {
      addOn(el);
    });
    el.addEventListener("mouseleave", function () {
      removeAllOn();
    });
  
    el.addEventListener("touchstart", function () {
      removeAllOn();
      addOn(el);
    });
  });
  