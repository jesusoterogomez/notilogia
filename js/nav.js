jQuery(document).ready(function ($) {
  
 var wpOffset = 0;
 var navOffset = $('.headernav').offset().top;
   $(window).scroll(function (event) {

    wpOffset = $('#wpadminbar').height();
    
    if($(this).scrollTop() >= navOffset - wpOffset) {
      $('.headernav').addClass('fixed');
    } else {
      $('.headernav').removeClass('fixed');
    }

  });

});
