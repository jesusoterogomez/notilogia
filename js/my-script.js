jQuery(document).ready(function ($) {

  $('.my-color-field').wpColorPicker();

  var navOffset = $('.headernav').offset().top;
  $(window).scroll(function (event) {

    if($(this).scrollTop() >= navOffset) {
      $('.headernav').addClass('fixed');
      console.log('yiss');
    } else {
      $('.headernav').removeClass('fixed');
    }


  });

});
