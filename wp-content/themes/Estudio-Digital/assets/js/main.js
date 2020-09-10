let ubicationP = window.pageYOffset;
window.onscroll = function(){
  let ScrollA = window.pageYOffset;
  if(ubicationP >= ScrollA){
    document.getElementById('header').style.top = '0';
  }
  else{
    document.getElementById('header').style.top = '-150px';
  }
  ubicationP = ScrollA;
}



$(function () {
  'use strict'

  $('[data-toggle="offcanvas"]').on('click', function () {
    $('.offcanvas-collapse').toggleClass('open');
    $('body').toggleClass('over')
  })
})

$(function () {
  'use strict'

  $('.nav-link__mobile').on('click', function () {
    $('.offcanvas-collapse').removeClass('open')
    $('.hamburger').removeClass("is-active");
    $('body').removeClass("over");
  })
})

// menu hambuger

$(".hamburger").on("click", function () {
  if (!$(this).hasClass("is-active")) {
    $(this).addClass("is-active")
    $('.navbar-fixed-js').addClass('fixed');
    $('.hamburger-inner').addClass('js-hamburger');
    $('.nav-link').addClass('fixed-color');
  } else {
    $(this).removeClass("is-active")
    if ($(document).scrollTop() <= 70 && ($(window).width() >= 0)) {
      $('.navbar-fixed-js').removeClass('fixed');
      $('.hamburger-inner').removeClass('js-hamburger');
      $('.nav-link').removeClass('fixed-color');

    }
  }
});

// Menú fixed
$(window).scroll(function () {
  if ($(document).scrollTop() > 70 && ($(window).width() >= 0)) {
    $('#header').addClass('fixed');
  } else {
    $('#header').removeClass('fixed');
  }
});


wow = new WOW();
wow.init();

