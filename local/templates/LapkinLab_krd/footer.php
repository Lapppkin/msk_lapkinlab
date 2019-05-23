

<a class="tm_pb_more_button tm_btn_1 tm_pb_button" id="aside1" style="padding: 10px 30px; color: #fff; border-radius: 5px; background-color: green;" href="#cccallk">Уникальный SEO Калькулятор</a>
<? if($APPLICATION->GetCurPage(false) != '/' and  
		$APPLICATION->GetCurPage(false) != '/kalkulyator-stoimosti-sajtov/' and  
		$APPLICATION->GetCurPage(false) != '/calc/' and 
		$APPLICATION->GetCurPage(false) != '/contacts/' and 
		$APPLICATION->GetCurPage(false) != '/kontekstnaya-reklama/' and  
		$APPLICATION->GetCurPage(false) != '/reviews/'and 
		$APPLICATION->GetCurPage(false) != '/seo/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/checklist/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/brif/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/o-produkte/' and 
		$APPLICATION->GetCurPage(false) != '/rekr/' and 
		$APPLICATION->GetCurPage(false) != '/chat-bot/' and 
		$APPLICATION->GetCurPage(false) != '/seo-page/'){ ?> 


<footer>
   <section class="footer_top">
      <div class="container_v2">
         <div class="footer_top_wrapper">
            <aside class="widget widget_logo">
               <a href="/"> <img alt="LapkinLAb" src="/image/logo-new-350x158.png"> </a>
               <p>
                  Профессиональное поисковое продвижение и реклама
               </p>
            </aside>
            <aside class="widget widget_nav_menu">
               <ul id="menu-footer-menu-custom" class="menu">
                  <li><a href="/seo">SEO</a></li>
                  <li><a href="/smm">SMM</a></li>
                  <li><a href="/kontekstnaya-reklama">Контекстная реклама</a></li>
                  <li><a href="/kalkulyator-stoimosti-sajtov">Разработка сайтов</a></li>
                  <li><a href="/telegram">Telegram</a></li>
                  <li><a href="/novosti">Блог</a></li>
                  <li class="menu-item menu-item-type-post_type"><a href="/contacts">Контакты</a></li>
               </ul>
            </aside>
            <aside class="widget widget_text">
               <p class="widget_title">
                  Подписка на новости
               </p>
               <form action="/mail_post.php" method="post" class="wpcf7-form">
                  <div style="display: none;">
                     <input type="hidden" name="url" value="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">
                  </div>
                  <div>
                     <label for="footer_email">email</label> <input type="email" id="footer_email" name="your-email" placeholder="Ваш e-mail" required=""> <label for="submit_footer">Подписаться</label>
                     <p style="display:none;">
                        <input type="text" name="name" value="">
                     </p>
                     <input type="submit" id="submit_footer" value="Подписаться" style="-webkit-appearance: none;">
                  </div>
                  <div class="check">
                     <input type="checkbox" name="acceptance-check" value="1" required=""> <label>Я принимаю <a href="/privacy-policy" target="_blank">условия передачи информации</a></label>
                  </div>
               </form>
            </aside>
         </div>
      </div>
   </section>
   <section class="site_info">
      <div class="container_v2">
         <div class="site_info_wrapper">
            <div class="footer_copyright">
               <p>
                  © 2015 - 2019 Все права защищены. LapkinLAb
               </p>
               <a href="/privacy-policy/">Политика в отношении обработки персональных данных</a>
            </div>
            <div>
<!--               <a href="/image/Сертификат_Бизнес_Партнера_1с_битрикс.pdf" style="padding-right:10px;"> -->
                   <img width="100px" src="/image/0021-039-.png">
<!--               </a>-->
               <div class="social_list_footer">
                  <ul>
                     <li><a href="https://www.facebook.com/lapppkin"><span class="screen-reader-text">facebook</span></a></li>
                     <li><a href="https://vk.com/lapkinlab"><span class="screen-reader-text">vkontakte</span></a></li>
                     <li><a href="https://twitter.com/lapking"><span class="screen-reader-text">twitter</span></a></li>
                     <li><a href="https://www.instagram.com/lapkin___lab/"><span class="screen-reader-text">instagram</span></a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>
</footer>
<? } ?> 

<? if($APPLICATION->GetCurPage(false) === '/' or 
		$APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/' or 
		$APPLICATION->GetCurPage(false) === '/calc/'or 
		$APPLICATION->GetCurPage(false) === '/contacts/' or 
		$APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/' or 
		$APPLICATION->GetCurPage(false) === '/reviews/' or 
		$APPLICATION->GetCurPage(false) === '/seo/' or 
		$APPLICATION->GetCurPage(false) === '/amocrm/' or
		$APPLICATION->GetCurPage(false) === '/amocrm/checklist/' or
		$APPLICATION->GetCurPage(false) === '/amocrm/brif/' or 
		$APPLICATION->GetCurPage(false) === '/amocrm/o-produkte/' or 
		$APPLICATION->GetCurPage(false) === '/rekr/' or 
		$APPLICATION->GetCurPage(false) === '/chat-bot/' or 
		$APPLICATION->GetCurPage(false) === '/seo-page/'){ ?> 
<footer class="footer">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <div class="col-md-6">
               <p class="ttt">
                  Услуги
               </p>
               <ul>
                  <li><a href="/seo-page/">Seo продвижение</a></li>
                  <li><a href="/kalkulyator-stoimosti-sajtov/">Создание сайтов</a></li>
                  <li><a href="/kontekstnaya-reklama/">Контекстная реклама</a></li>
                  <li><a href="/smm/">SMM продвижение</a></li>
                  <li><a href="/chat-bot/">Чат боты</a></li>
               </ul>
            </div>
            <div class="col-md-6">
               <p class="ttt">
                  Компания
               </p>
               <ul>
                  <li><a href="#">О нас</a></li>
                  <li><a href="https://msk.lapkinlab.ru/novosti/">Статьи</a></li>
                  <li><a href="https://msk.lapkinlab.ru/telegram/">Телеграм</a></li>
                  <li><a href="https://msk.lapkinlab.ru/kalkulyator-stoimosti-sajtov/#portfolio">Портфолио</a></li>
                  <li><a href="#">Отзывы</a></li>
               </ul>
            </div>
         </div>
         <div class="col-md-6">
            <div class="col-md-6">
               <p class="te">
                  <a class="roistat-phone" href="tel:88003010019">8 (800) 301-00-19</a>
               </p>
               <a href="" class="jre">Заказать звонок</a>
            </div>
            <div class="col-md-6">
               <p class="te">
                  <a href="mailto:mail@lapkinlab.ru">mail@lapkinlab.ru</a>
               </p>
               <a href="#win1" class="jre">Быстро отвечаем</a>
            </div>
            <div class="col-md-12">
               <p class="ccss">
                  Москва, Ленинская Слобода, д. 26
               </p>
               <p class="sscc">
                  5 мин от метро "Автозаводская"
               </p>
            </div>
         </div>
         <div class="col-md-6">
            <div class="footer_copyright">
               <p>
                  © 2015 - 2019 Все права защищены. LapkinLAb
               </p>
               <a href="/privacy-policy/">Политика в отношении обработки персональных данных</a>
            </div>
         </div>
         <div class="col-md-6">
			 <a href="//msk.lapkinlab.ru/amoCRM.jpeg" style="padding-right:10px; padding-top:20px; float: right;" class="fancybox"> <img width="80px" src="//msk.lapkinlab.ru/amoCRM.jpeg" class="lazyload" data-src="//msk.lapkinlab.ru/amoCRM.jpeg"> </a>
            <a href="/image/Сертификат_Бизнес_Партнера_1с_битрикс.pdf" style="padding-right:10px; padding-top:20px; float: right;"> <img width="100px" src="/image/0021-039-.png" class="lazyload" data-src="/image/0021-039-.png"> </a>
         </div>
      </div>
   </div>
</footer>

<? } ?> 

<a href="#x" class="overlay" id="win1"></a>
<div class="popup">
   <div id="form_zakaz_audit_primer">
      <div role="form" class="wpcf7">
         <div class="screen-reader-response">
         </div>
         <form action="/mail_post.php" method="post" class="wpcf7-form" id="form000" onsubmit="ym(45994323, 'reachGoal', 'zakazat'); return true;">
            <div style="display: none;">
               <input type="hidden" name="url" value="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">
            </div>
            <p style="font-size: 24px;">
               Оставить заявку
            </p>
            <p>
               <label> Ваше имя (обязательно)<br>
               <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" id="fff" required=""></span> </label>
            </p>
            <p>
               <label> Телефон (обязательно)<br>
               <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required=""></span> </label>
            </p>
            <p>
               <label> Ваш e-mail (обязательно)<br>
               <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" required=""></span> </label>
            </p>
            <p>
               <label> Ваш сайт (обязательно)<br>
               </label>
            </p>
            <p style="display:none;">
               <input type="text" name="name" value="">
            </p>
            <span class="wpcf7-form-control-wrap your-site"><input type="text" name="your-site" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required=""></span>
            <p>
            </p>
            <p>
               <span class="wpcf7-form-control-wrap acceptance-check"><input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span><label>Я принимаю <a href="/privacy-policy/" target="_blank">условия передачи информации</a></label>
            </p>
            <p>
               <input type="submit" id="form_btn" value="Заказать" class="widget_text wpcf7-form-control wpcf7-submit">
            </p>
            <div class="wpcf7-response-output wpcf7-display-none">
            </div>
         </form>
      </div>
   </div>
   <a class="close" title="Закрыть" href="#close"> &#215;</a>
</div>
<a href="#x" class="overlay" id="spasibo"></a>
<div class="popup">
   <p style="font-size: 24px;">
      Спасибо за Вашу заявку!
   </p>
   <p>
      Наши менеджера ее обработаю и сразу свяжутся с Вами.
   </p>
   <a class="close" title="Закрыть" href="#close"> &#215;</a>
</div>
<a href="#x" class="overlay" id="error"></a>
<div class="popup">
   <p style="font-size: 24px;">
      Что-то пошло не так! :(
   </p>
   <p>
      Заполните форму еще раз.
   </p>
   <a class="close" title="Закрыть" href="#close"> &#215;</a>
</div>
<div class="modal">
   <div class="modal__box">
      <button class="modal_close" style="padding: 0px 10px 0px 0px;float: right;">x</button>
      <p style="font-style: normal;font-weight: 300;font-size: 30px !important;line-height: 1.25;font-family: 'Didact Gothic', sans-serif;letter-spacing: 0px;text-align: inherit;color: #3a3a50;">
         Нельзя так просто уйти с сайта!
      </p>
      <p style="font-size: 25px;">
         Ваши потенциальные покупатели уже рядом.
      </p>
      <div role="form" class="wpcf7" id="wpcf7-f6504-o33" lang="ru-RU" dir="ltr">
         <div class="screen-reader-response">
         </div>
         <form action="/mail_post.php" method="post" class="wpcf7-form">
            <div style="display: none;">
               <input type="hidden" name="url" value="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">
            </div>
            <p>
               <label> Ваше имя<br>
               <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" required=""></span> </label>
            </p>
            <p>
               <label> Телефон<br>
               <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required=""></span> </label><br>
            </p>
            <p>
               <span class="wpcf7-form-control-wrap acceptance-check" style="float: left;"><input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span><label style="float: left;font-size: 16px;color: #fff; padding: 0px;width: unset !important;clear: unset;">Я принимаю <a href="/privacy-policy/" target="_blank" style="background: #fff;">условия передачи информации</a></label>
            </p>
            <br>
            &nbsp;<br>
            &nbsp;
            <p style="display:none;">
               <input type="text" name="name" value="">
            </p>
            <div style="text-align:center;">
               <input type="submit" value="Хочу Аудит" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
            </div>
            <div class="wpcf7-response-output wpcf7-display-none">
            </div>
         </form>
      </div>
      <img width="200px" src="/image/winter-is-coming-sticker-pack-telegram-5.png" style="float: right;position: relative;margin-top: -200px;">
   </div>
</div>
<div class="modal2">
   <div class="modal__box2">
      <button class="modal_close2" style="padding: 0px 10px 0px 0px;float: right;">x</button>
      <p style="font-style: normal;font-weight: 300;font-size: 30px !important;line-height: 1.25;font-family: 'Didact Gothic', sans-serif;letter-spacing: 0px;text-align: inherit;color: #3a3a50;">
         Узнайте слабые стороны и точки взрывного роста трафика для Вашего сайта!
      </p>
      <p style="font-size: 21px;">
         Получите экспресс аудит вашего сайта<br>
         стоимостью 5 000 рублей в ПОДАРОК
      </p>
      <div role="form" class="wpcf7" id="wpcf7-f6504-o33" lang="ru-RU" dir="ltr">
         <div class="screen-reader-response">
         </div>
         <form action="/mail_post.php" method="post" class="wpcf7-form">
            <div style="display: none;">
               <input type="hidden" name="url" value="http://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">
            </div>
            <p>
               <label> Ваше имя<br>
               <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text" required=""></span> </label>
            </p>
            <p>
               <label> Телефон<br>
               <span class="wpcf7-form-control-wrap your-phone"><input type="text" name="your-phone" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" required=""></span> </label><br>
            </p>
            <p>
               <span class="wpcf7-form-control-wrap acceptance-check" style="float: left;"><input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span><label style="float: left;font-size: 16px;color: #fff; padding: 0px;width: unset !important;clear: unset;">Я принимаю <a href="/privacy-policy/" target="_blank" style="background: #fff;">условия передачи информации</a></label>
            </p>
            <br>
            &nbsp;<br>
            &nbsp;
            <p style="display:none;">
               <input type="text" name="name" value="">
            </p>
            <div style="text-align:center;">
               <input type="submit" value="Хочу Аудит" class="wpcf7-form-control wpcf7-submit"><span class="ajax-loader"></span>
            </div>
            <div class="wpcf7-response-output wpcf7-display-none">
            </div>
         </form>
      </div>
      <img width="200px" src="/image/meme-sticker-package-6.png" style="float: right;position: relative;margin-top: -200px;">
   </div>
</div>
<a style="bottom: 110px; right: 10px; display:none;" class="fixed_link--telegram-group" href="http://t-do.ru/LapkinLAb_Agency_bot" target="_blank"></a>

<? if($APPLICATION->GetCurPage(false) === '/' or 
		$APPLICATION->GetCurPage(false) === '/calc/' or 
		$APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/' or  
		$APPLICATION->GetCurPage(false) === '/contacts/' or 
		$APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/' or 
		$APPLICATION->GetCurPage(false) === '/reviews/' or 
		$APPLICATION->GetCurPage(false) === '/rekr/' or 
		$APPLICATION->GetCurPage(false) === '/amocrm/' or
		$APPLICATION->GetCurPage(false) === '/amocrm/checklist/' or
		$APPLICATION->GetCurPage(false) === '/amocrm/brif/' or 
		$APPLICATION->GetCurPage(false) === '/seo/' or 
		$APPLICATION->GetCurPage(false) === '/chat-bot/'){ ?> 
	<a style="bottom: 110px; right: 10px; position: fixed; z-index: 150; transition-duration: .2s;" class="rocket1" href="#"> 
		<img src="//msk.lapkinlab.ru/upload/medialibrary/685/Rocket2.png" style="width: 70px;"> 
	</a>
	<script src="/bitrix/templates/new_design/modul/ionRangeSlider/js/ion.rangeSlider.js"></script>
 	<script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script> 
	<script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<? } ?> 

<? if($APPLICATION->GetCurPage(false) === '/' or 
		$APPLICATION->GetCurPage(false) === '/calc/' or 
		$APPLICATION->GetCurPage(false) === '/seo/'){ ?> 
	<script src="/bitrix/templates/new_design/modul/ionRangeSlider/js/js.js"></script> 
<? } ?> 

<? if($APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/'){ ?> 
	<script src="/bitrix/templates/new_design/modul/ionRangeSlider/js/js_dev.js"></script> 
<? } ?>

 <? if($APPLICATION->GetCurPage(false) != '/' and 
		$APPLICATION->GetCurPage(false) != '/calc/' and 
		$APPLICATION->GetCurPage(false) != '/kalkulyator-stoimosti-sajtov/' and 
		$APPLICATION->GetCurPage(false) != '/contacts/' and 
		$APPLICATION->GetCurPage(false) != '/rekr/' and 
		$APPLICATION->GetCurPage(false) != '/kontekstnaya-reklama/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/checklist/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/brif/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/o-produkte/' and 
		$APPLICATION->GetCurPage(false) != '/chat-bot/' and 
		$APPLICATION->GetCurPage(false) != '/seo-page/'){ ?> 
	<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script> 
	<script src="<?=SITE_TEMPLATE_PATH?>/js/common.js"></script> 
	<script>
	$('.nav-toggle').on('click', function(){
	  $('#menu').toggleClass('active');
	});
	</script> 
<? } ?> 

<? if($APPLICATION->GetCurPage(false) === '/telegram/'){ ?> 
	<script type='text/javascript'>
        jQuery(document).ready(function() {
            jQuery('#slider_5437').owlCarousel({
                items : 1,
                smartSpeed : 300,
                autoplay : true,
                autoplayTimeout : 4000,
                smartSpeed : 300,
                fluidSpeed : 300,
                autoplaySpeed : 300,
                navSpeed : 300,
                dotsSpeed : 300,
                loop : true,
                autoplayHoverPause : true,
                nav : true,
                navText : ['',''],
                dots : true,
                responsiveRefreshRate : 200,
                mergeFit : true,
                mouseDrag : true,
                touchDrag : true
            });
            jQuery('#slider_4444').owlCarousel({
                items : 3,
                autoplay : true,
                loop : true,
                dots : true
            });
		});
	</script> 
	<script src='<?=SITE_TEMPLATE_PATH?>/libs/owl-carousel/owl.carousel.min.js'></script> 
<? } ?> 

<? if($APPLICATION->GetCurPage(false) != '/'  and 
		$APPLICATION->GetCurPage(false) != '/kalkulyator-stoimosti-sajtov/' and 
		$APPLICATION->GetCurPage(false) != '/contacts/' and 
		$APPLICATION->GetCurPage(false) != '/kontekstnaya-reklama/'and 
		$APPLICATION->GetCurPage(false) != '/seo/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/checklist/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/brif/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/o-produkte/' and 
		$APPLICATION->GetCurPage(false) != '/rekr/' and 
		$APPLICATION->GetCurPage(false) != '/chat-bot/' and 
		$APPLICATION->GetCurPage(false) != '/seo-page/'){ ?> 
	<script type='text/javascript' src='<?=SITE_TEMPLATE_PATH?>/libs/chart/chartist.min.js'></script> 
	<script type='text/javascript' src='<?=SITE_TEMPLATE_PATH?>/libs/chart/chartist-plugin-tooltip.min.js'></script> 
	<script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/libs/chart/charrrt.js"></script> 
	<script src="<?=SITE_TEMPLATE_PATH?>/js/jquery.tm-pb-simple-slider.js"></script>
 	<script src="<?=SITE_TEMPLATE_PATH?>/js/js_block.js"></script> 
	<script src="<?=SITE_TEMPLATE_PATH?>/js/scripts.js"></script> 
<? } ?> 

<? if($APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/'){ ?> 
	<script src='<?=SITE_TEMPLATE_PATH?>/libs/owl-carousel/owl.carousel.min.js'></script> 
<? } ?>

 <? if($APPLICATION->GetCurPage(false) != '/' and 
		$APPLICATION->GetCurPage(false) != '/calc/' and 
		$APPLICATION->GetCurPage(false) != '/kalkulyator-stoimosti-sajtov/' and 
		$APPLICATION->GetCurPage(false) != '/contacts/' and 
		$APPLICATION->GetCurPage(false) != '/kontekstnaya-reklama/'and 
		$APPLICATION->GetCurPage(false) != '/seo/' and 
		$APPLICATION->GetCurPage(false) != '/rekr/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/checklist/' and
		$APPLICATION->GetCurPage(false) != '/amocrm/brif/' and 
		$APPLICATION->GetCurPage(false) != '/amocrm/o-produkte/' and 
		$APPLICATION->GetCurPage(false) != '/chat-bot/' and 
		$APPLICATION->GetCurPage(false) != '/seo-page/'){ ?> 
	<script src="<?=SITE_TEMPLATE_PATH?>/js/common.js"></script> 
	<script type='text/javascript'>
		lazyload();
	</script> 
<? } ?> 

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://cdn.jsdelivr.net/npm/yandex-metrica-watch/tag.js", "ym");
	
	   ym(45994323, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true,
			trackHash:true
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/45994323" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71801643-15"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-71801643-15');
	</script>

<? if($APPLICATION->GetCurPage(false) === '/' or 
		$APPLICATION->GetCurPage(false) === '/calc/' or 
		$APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/' or  
		$APPLICATION->GetCurPage(false) === '/contacts/' or 
		$APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/' or 
		$APPLICATION->GetCurPage(false) === '/reviews/' or 
		$APPLICATION->GetCurPage(false) === '/seo/' or 
		$APPLICATION->GetCurPage(false) === '/amocrm/' or
		$APPLICATION->GetCurPage(false) === '/amocrm/checklist/' or
		$APPLICATION->GetCurPage(false) === '/amocrm/brif/' or 
		$APPLICATION->GetCurPage(false) === '/amocrm/o-produkte/' or 
		$APPLICATION->GetCurPage(false) === '/chat-bot/' or 
		$APPLICATION->GetCurPage(false) === '/seo-page/'){ ?> 
	<script src='/bitrix/templates/new_design/js/scri.js'></script> 
<? } ?>

<div style="display:none;">
	<div itemscope="" itemtype="http://schema.org/Organization">
 		<span itemprop="name">LapkinLAb</span>
		Контакты:
		<div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
			 Адрес: <span itemprop="streetAddress">Ленинская Слобода, д. 26</span> <span itemprop="postalCode"> 115280</span> <span itemprop="addressLocality">Москва</span>,
		</div>
		 Телефон:<span itemprop="telephone">8 (800) 301-00-19</span>, Электронная почта: <span itemprop="email">mail@lapkinlab.ru</span>
	</div>
</div>

<script>
(function(w, d, s, h, id) {
    w.roistatProjectId = id; w.roistatHost = h;
    var p = d.location.protocol == "https:" ? "https://" : "http://";
    var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
    var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
})(window, document, 'script', 'cloud.roistat.com', 'e15a222f8520098c4edb39b3c778f3d0');
</script>

<script>
        (function(w,d,u){
                var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ru/b8927137/crm/site_button/loader_2_dt8ie7.js');
</script>

	</body>
</html>