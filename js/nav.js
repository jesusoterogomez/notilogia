jQuery(document).ready(function ($) {

 var wpOffset = 0;
 var navOffset = $('.headernav').offset().top;
 $(window).scroll(function (event) {
    //get admin bar height
    if( $('body').hasClass('admin-bar')){
      wpOffset = $('#wpadminbar').height();
    }
    if($(this).scrollTop() >= navOffset - wpOffset) {
      $('.headernav').addClass('fixed');
      $('body').css('padding-top',$('.headernav').height() + 'px');
    } else {
      $('.headernav').removeClass('fixed');
      $('body').css('padding-top',0);
    }

  });

});
