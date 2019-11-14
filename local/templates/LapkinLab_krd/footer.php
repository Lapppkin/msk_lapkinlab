<?

use Bitrix\Main\Page\Asset;

$pages = array(
    '/',
    '/kalkulyator-stoimosti-sajtov/',
    '/calc/',
    '/contacts/',
    '/kontekstnaya-reklama/',
    '/reviews/',
    '/seo/',
    '/amocrm/',
    '/amocrm/checklist/',
    '/amocrm/brif/',
    '/amocrm/o-produkte/',
    '/rekr/',
    '/chat-bot/',
    '/seo-page/',
    '/seo-page/',
    '/privacy-policy/',
);
$isPromoPage = !in_array($APPLICATION->GetCurPage(false), $pages, true);

$asset = Asset::getInstance();
?>

<a class="tm_pb_more_button tm_btn_1 tm_pb_button" id="aside1" style="padding: 10px 30px; color: #fff; border-radius: 5px; background-color: green;" href="#cccallk">Уникальный SEO Калькулятор</a>

<? if ($isPromoPage) { ?>

    <footer>
        <section class="footer_top">
            <div class="container_v2">
                <div class="footer_top_wrapper">
                    <aside class="widget widget_logo">
                        <a href="/"> <img alt="LapkinLAb" src="/local/templates/LapkinLab_krd/images/logo-new-350x158.png"> </a>
                        <p>
                            Профессиональное поисковое продвижение и реклама
                        </p>
                    </aside>
                    <aside class="widget widget_nav_menu">
                        <ul id="menu-footer-menu-custom" class="menu">
                            <li><a href="/seo/">SEO</a></li>
                            <li><a href="/smm/">SMM</a></li>
                            <li><a href="/kontekstnaya-reklama/">Контекстная реклама</a></li>
                            <li><a href="/kalkulyator-stoimosti-sajtov/">Разработка сайтов</a></li>
                            <li><a href="/telegram/">Telegram</a></li>
                            <li><a href="/novosti/">Блог</a></li>
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
                                <input type="checkbox" name="acceptance-check" value="1" required=""> <label>Я принимаю <a href="/privacy-policy/" target="_blank" rel="nofollow">условия передачи информации</a></label>
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
                        <!--noindex-->
                        <a href="/privacy-policy/" rel="nofollow" target="_blank">Политика в отношении обработки персональных данных</a>
                        <!--/noindex-->
                    </div>
                    <div>
                        <!--               <a href="/image/Сертификат_Бизнес_Партнера_1с_битрикс.pdf" style="padding-right:10px;"> -->
                        <img width="100px" src="/local/templates/LapkinLab_krd/images/0021-039-.png">
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

<? } else { ?>

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
                            <li><a href="/novosti/">Статьи</a></li>
                            <li><a href="/telegram/">Телеграм</a></li>
                            <li><a href="/kalkulyator-stoimosti-sajtov/#portfolio">Портфолио</a></li>
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
                        <!--noindex-->
                        <a href="/privacy-policy/" rel="nofollow" target="_blank">Политика в отношении обработки персональных данных</a>
                        <!--/noindex-->
                    </div>
                </div>
                <div class="col-md-6">
                    <a href="/amoCRM.jpeg" style="padding-right:10px; padding-top:20px; float: right;" class="fancybox"> <img width="80px" src="/amoCRM_small.jpeg"> </a>
                    <a href="/documents/Sertifikat_Biznes_Partnera_1C_Bitrix.pdf" style="padding-right:10px; padding-top:20px; float: right;"> <img width="100px" src="/local/templates/LapkinLab_krd/images/0021-039-.png"> </a>
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
                    <span class="wpcf7-form-control-wrap acceptance-check"><input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span><label>Я принимаю <!--noindex--><a href="/privacy-policy/" target="_blank">условия передачи информации</a><!--/noindex--></label>
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
                    <span class="wpcf7-form-control-wrap acceptance-check" style="float: left;"><input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span><label style="float: left;font-size: 16px;color: #fff; padding: 0px;width: unset !important;clear: unset;">Я принимаю <!--noindex--><a href="/privacy-policy/" target="_blank" style="background: #fff;">условия передачи информации</a><!--/noindex--></label>
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
                    <span class="wpcf7-form-control-wrap acceptance-check" style="float: left;"><input type="checkbox" name="acceptance-check" value="1" class="wpcf7-form-control wpcf7-acceptance" required=""></span><label style="float: left;font-size: 16px;color: #fff; padding: 0px;width: unset !important;clear: unset;">Я принимаю <!--noindex--><a href="/privacy-policy/" target="_blank" style="background: #fff;">условия передачи информации</a><!--/noindex--></label>
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

<a style="bottom: 110px; right: 10px; display:none;" class="fixed_link--telegram-group" href="http://t-do.ru/LapkinLAb_Agency_bot" target3"4b1ank"></a>

<script src="https://cdnjs.cloudflare.com/ajax/libs/ion-rangeslider/2.3.0/js/ion.rangeSlider.min.js"></script>

<? if ($isPromoPage) { ?>

    <?
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/scripts.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/common.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/libs/chart/chartist.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/libs/chart/chartist-plugin-tooltip.min.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/libs/chart/charrrt.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/jquery.tm-pb-simple-slider.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/js_block.js');
    $asset->addJs(SITE_TEMPLATE_PATH . '/js/block-price.js');
    ?>

<? } else { ?>

    <script>
        $('.nav-toggle').on('click', function(){
            $('#menu').toggleClass('active');
        });
    </script>
    <script>//lazyload();</script>

<? } ?>

<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script>
    var lazyLoadInstance = new LazyLoad({elements_selector: '.lazy'});
    if (lazyLoadInstance) { lazyLoadInstance.update(); }
    $(document).ready(function () {
        $(document).on('click', 'section.price .other-prices', function () {
            $(this).next('section.price .right-block').css({
                visibility: 'visible',
                height: 'auto'
            });
        });
    });
</script>

<a style="bottom: 110px; right: 10px; position: fixed; z-index: 150; transition-duration: .2s;" class="rocket1" href="#"><img src="/upload/medialibrary/685/Rocket2.png" style="width: 70px;"></a>

<? $asset->addJs('/local/templates/new_design/js/scri.js'); ?>

<? if ($APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/') { ?>
    <? $asset->addJs(SITE_TEMPLATE_PATH . '/libs/owl-carousel/owl.carousel.min.js'); ?>
<? } ?>

<? if ($APPLICATION->GetCurPage(false) === '/telegram/') { ?>
    <script>
        jQuery(document).ready(function() {
            jQuery('#slider_5437').owlCarousel({
                items : 1,
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
    <? $asset->addJs(SITE_TEMPLATE_PATH . '/libs/owl-carousel/owl.carousel.min.js'); ?>
<? } ?>

<?
if ($APPLICATION->GetCurPage(false) === '/' or
    $APPLICATION->GetCurPage(false) === '/calc/' or
    $APPLICATION->GetCurPage(false) === '/seo/'){
    $asset->addJs('/local/templates/new_design/modul/ionRangeSlider/js/js.js');
}
if ($APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/') {
    $asset->addJs('/local/templates/new_design/modul/ionRangeSlider/js/js_dev.js');
}

$APPLICATION->IncludeFile(SITE_DIR . 'include/seo.php'); ?>

</body>
</html>
