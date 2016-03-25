// --------------------------------------------------------- //
// DOCUMENT READY
// --------------------------------------------------------- //
$(document).ready(function() {

  // MAGNIFIC POPUP
  $('.lightbox').magnificPopup({
    type: 'image',
    mainClass: 'mfp-fade', 
    // Gallery mode
    gallery:{
      enabled:true
    },
  });

});

$(window).load(function() {
  $('.home #page').addClass('loaded');
  $('.site-header').addClass('displayed');
});

// --------------------------------------------------------- //
// OPEN RESPONSIVE MENU
// --------------------------------------------------------- //
$('.one-article__title').click(function(){
  $(this).next().slideToggle(600);
  $(this).toggleClass('unwrapped');
});

// --------------------------------------------------------- //
// OPEN RESPONSIVE MENU
// --------------------------------------------------------- //
$('.menu-bt').click(function(){
  $('.site-nav').addClass('opened');
  $('.overlay-black').addClass('displayed');
});

// --------------------------------------------------------- //
// CLOSE APPSTORE FRAME
// --------------------------------------------------------- //
$('.close-menu-bt').click(function(){
  $('.site-nav').removeClass('opened');
  $('.overlay-black').removeClass('displayed');
});
$('.overlay-black').click(function(){
  $('.site-nav').removeClass('opened');
  $('.overlay-black').removeClass('displayed');
});