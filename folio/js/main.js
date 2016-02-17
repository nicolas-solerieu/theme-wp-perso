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
$('.responsive-menu-bt').click(function(){
  $('.site-nav').fadeIn(600);
  $('.close-responsive-menu-bt').show();
});

// --------------------------------------------------------- //
// CLOSE APPSTORE FRAME
// --------------------------------------------------------- //
$('.close-responsive-menu-bt').click(function(){
  $('.site-nav').fadeOut(300);
  $('.close-responsive-menu-bt').hide();
});