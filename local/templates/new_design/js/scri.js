
$(document).ready(function(){
    $('.view_question_btn .img, .ask_item .txt .span').on('click',function(){
        $(this).parent().parent().find('.img').toggleClass('active');
        $(this).parent().parent().find('.question_dn').toggle();
    });
$(".rocket1").click(function(){
   $("html, body").animate({ scrollTop: 0 }, "slow");

   function func() {
     if( $('.form_banner').hasClass('overMe') ){
          $('.form_banner').removeClass('overMe');
     }else{
        $('.form_banner').addClass('overMe');
        $('.form_banner').addClass('shakeMe');
     }
   }
   setTimeout(func,700);
});

$('.form_banner').hover(function(){
  if( $('.form_banner').hasClass('shakeMe') ){
       $('.form_banner').removeClass('shakeMe');
  }
});
			var all_1 = $('body').height();
			var screen_1 = screen.height-540;
			var bot = 0;
			$(window).scroll(function () {
				if ($(window).scrollTop() > 1100){
					var pos_1 = $(window).scrollTop();
						bot = ( pos_1 / 10 ) + 5;
						if ( bot <= screen_1 ){
							document.querySelector('.rocket1').style.bottom = bot+"px";
						}
				}
			});


					$(function(){
						$('.menuToggle').on('click', function() {
						   $('.nav_mobi').slideToggle(300, function(){
								if( $(this).css('display') === "none"){
									$(this).removeAttr('style');
								}
						   });
						});
					});
				$('.textlogo').click(function(){
							if($('.newb').hasClass('cgjfjgkf1')){
								$('.newb').removeClass('cgjfjgkf1');
								$('.newb').addClass('cgjfjgkf2');
						  	}else {
								$('.newb').removeClass('cgjfjgkf2');
								$('.newb').addClass('cgjfjgkf1');
						  	}
				});

				$('.butt').click(function(){
					$('.butt').removeClass('active');
					$(this).addClass('active');

					$('#ban1').removeClass('active_ban'); $('#ban1').addClass('noactive_ban');
					$('#ban2').removeClass('active_ban'); $('#ban2').addClass('noactive_ban');
					$('#ban3').removeClass('active_ban'); $('#ban3').addClass('noactive_ban');
					$('#ban4').removeClass('active_ban'); $('#ban4').addClass('noactive_ban');

					var id = $(this).attr("id");
					$('#'+id+'').removeClass('noactive_ban');
					$('#'+id+'').addClass('active_ban');
				});

				$('.bbcd').click(function(){
					$('.bbcd').removeClass('activeb');
					$(this).addClass('activeb');

					$('#ibbc1').removeClass('activebi'); $('#ibbc1').addClass('activebin');
					$('#ibbc2').removeClass('activebi'); $('#ibbc2').addClass('activebin');
					$('#ibbc3').removeClass('activebi'); $('#ibbc3').addClass('activebin');
					$('#ibbc4').removeClass('activebi'); $('#ibbc4').addClass('activebin');

					var id = $(this).attr("id");
					var num = $(this).attr("data-id");
					$('#i'+id+num+'').removeClass('activebin');
					$('#i'+id+num+'').addClass('activebi');
				});

				$('.tabs').click(function(){
					$('.tabs').removeClass('active_t');
					$(this).addClass('active_t');

					$('#ff1').removeClass('active_ta'); $('#ff1').addClass('active_tan');
					$('#ff2').removeClass('active_ta'); $('#ff2').addClass('active_tan');
					$('#ff3').removeClass('active_ta'); $('#ff3').addClass('active_tan');
					$('#ff4').removeClass('active_ta'); $('#ff4').addClass('active_tan');

					var id = $(this).attr("id");
					var num = $(this).attr("data-id");
					$('#ff'+num+'').removeClass('active_tan');
					$('#ff'+num+'').addClass('active_ta');
				});

				$('.Ptabs').click(function(){
					$('.Ptabs').removeClass('Pactive_t');
					$(this).addClass('Pactive_t');

					$('#Pff1').removeClass('Pactive_ta'); $('#Pff1').addClass('Pactive_tan');
					$('#Pff2').removeClass('Pactive_ta'); $('#Pff2').addClass('Pactive_tan');
					$('#Pff3').removeClass('Pactive_ta'); $('#Pff3').addClass('Pactive_tan');
					$('#Pff4').removeClass('Pactive_ta'); $('#Pff4').addClass('Pactive_tan');

					var id = $(this).attr("id");
					var num = $(this).attr("data-id");
					$('#Pff'+num+'').removeClass('Pactive_tan');
					$('#Pff'+num+'').addClass('Pactive_ta');
				});

				$('.Ktabs').click(function(){
					$('.Ktabs').removeClass('Kactive_t');
					$(this).addClass('Kactive_t');

					$('#Kff1').removeClass('Kactive_ta'); $('#Kff1').addClass('Kactive_tan');
					$('#Kff2').removeClass('Kactive_ta'); $('#Kff2').addClass('Kactive_tan');
					$('#Kff3').removeClass('Kactive_ta'); $('#Kff3').addClass('Kactive_tan');

					var id = $(this).attr("id");
					var num = $(this).attr("data-id");
					$('#Kff'+num+'').removeClass('Kactive_tan');
					$('#Kff'+num+'').addClass('Kactive_ta');
				});

				$('.navar').click(function(){
					var num = $(this).attr("data-id");
					$('.Ktabs').removeClass('Kactive_t');
					$('#Kta'+num+'').addClass('Kactive_t');

					$('#Kff1').removeClass('Kactive_ta'); $('#Kff1').addClass('Kactive_tan');
					$('#Kff2').removeClass('Kactive_ta'); $('#Kff2').addClass('Kactive_tan');
					$('#Kff3').removeClass('Kactive_ta'); $('#Kff3').addClass('Kactive_tan');

					$('#Kff'+num+'').removeClass('Kactive_tan');
					$('#Kff'+num+'').addClass('Kactive_ta');
				});

				$('.map').click(function(){
					if($(this).hasClass('hid')){$(this).removeClass('hid');}else{$(this).toggleClass('hid');};
				});
		});
