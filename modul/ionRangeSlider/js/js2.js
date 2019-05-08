$(document).ready(function() {
var start_pos=$('#aside2').offset().top;
 start_pos=start_pos-35;
 $(window).scroll(function(){
  if ($(window).scrollTop()>=start_pos) {
      if ($('#aside1').hasClass()==false) $('#aside1').addClass('vizible');
  }
  else $('#aside1').removeClass('vizible');
 });
});