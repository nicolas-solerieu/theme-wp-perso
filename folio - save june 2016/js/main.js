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