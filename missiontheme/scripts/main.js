/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;
var question = $(".question");


$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });

  if (  $('#menu-item-275').hasClass('current-menu-ancestor') || 
        $('#menu-item-281').hasClass('current-menu-ancestor') || 
        $('#menu-item-288').hasClass('current-menu-ancestor') ) { 
    if($('.section--hero_banner').length){
      $('.section--hero_banner').addClass('extra-top-margin');
      $('.main-nav').addClass('extra-top-margin');
    }
  }

  $(document).scroll(function () {
    if (win.innerWidth < 767) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    }
    var topval = $(document).scrollTop();
    if (topval >= mainNavOffset) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    } else {
      stickyWrap.removeClass("sticky");
      mainNav.removeClass("sticky-margin");
    }

    if($('.section--find-a-location').length){
      if ($(window).scrollTop() >= $('.section--find-a-location').offset().top + $('.section--find-a-location').outerHeight() - window.innerHeight) {
        $('.section--find-a-location .pin').addClass('animate-pin');
      }
    }

    

  });

  question.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find(".arrow-down").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find(".arrow-down").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });


  $('.logo-slider').slick({
    arrows: false,
    dots: false,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: false,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      }
    ]
  });

  $('.testimonials-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true
  });
  
  $('.services-slider').slick({
    dots: true,
    slidesPerRow: 4,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesPerRow: 2,
          rows: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesPerRow: 1,
          rows: 1,
        }
      }
    ]
  });

  $('.team-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: '.team-slider-2',
  });

  $('.team-slider-2').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: '.team-slider',
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true
  })

  $('.image-slider').slick({
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 3000,
    slidesToShow: 6,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 3000,
          slidesToShow: 4,
          slidesToScroll: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 3000,
          slidesToShow: 2,
          slidesToScroll: 1,
        }
      }
    ]
  });
  
  $('.positions-slider').slick({
    dots: true,
    slidesPerRow: 4,
    rows: 2,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          slidesPerRow: 2,
          rows: 1,
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesPerRow: 1,
          rows: 1,
        }
      }
    ]
  });
  
  $('.cards-slider').slick({
    arrows: false,
    dots: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 1500,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          arrows: false,
          dots: true,
          infinite: true,
          autoplay: true,
          autoplaySpeed: 1500,
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });

  $('.locations-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true,
    mobileFirst: true,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });
  

});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}


var options = {
  useEasing: true, 
  useGrouping: true, 
  separator: ',', 
  decimal: '.', 
};



function countStart(){
  if($('.section--statistics').length){

    var counterParent = document.getElementById('counter');
    var children = counterParent.children;

    $('#counter').addClass('active');
    for (var i = 0; i < children.length; i++) {
      var item = document.getElementById(children[i].id).querySelector('.number');
      var countValue = item.getAttribute('data-value');

      var countUP = new CountUp(item, 0, countValue, 0, 1, options);
      if (!countUP.error) {
        countUP.start();
      }
    }
  }
}

ScrollReveal().reveal('.section--statistics', { 
  beforeReveal: countStart
});	
