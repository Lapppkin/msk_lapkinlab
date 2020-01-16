<?php

use LapkinLab\Helper;

?>
        </main><!--/main-->

        <?php if ($APPLICATION->GetCurDir() === '/'
            || $APPLICATION->GetCurDir() === '/contacts/'
            || $APPLICATION->GetCurDir() === '/ppc/'
            || $APPLICATION->GetCurDir() === '/chat-bot/'
            || $APPLICATION->GetCurDir() === '/sites/calculator/'
        ): ?>
            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
        <?php endif; ?>

        <!--footer-->
        <footer id="footer" class="footer">

            <?php if ($APPLICATION->GetCurDir() !== '/contacts/'): ?>
            <!--footer map-->
            <div class="footer--map">
                <div class="footer--map--title">
                    <?= renderSprite('location-white') ?>
                    LapkinLab на карте
                </div>
                <div class="footer--map--wrapper">
                    <?php $APPLICATION->IncludeFile('/include/yandex_map.php') ?>
                </div>
            </div>
            <?php endif; ?>

            <!--footer navigation-->
            <div class="footer--nav">
                <div class="container">
                    <div class="row">
                        <div class="footer--nav-wrapper col-12">
                            <div class="footer--nav-top">
                                <div class="footer--nav-top--menu">
                                    <div class="footer--menu-item">
                                        <div class="footer--menu-item--title">Услуги</div>
                                        <ul class="footer--menu-item--list">
                                            <li><a href="/seo/">Seo продвижение</a></li>
                                            <li><a href="/sites/">Создание сайтов</a></li>
                                            <li><a href="/ppc/">Контекстная реклама</a></li>
                                            <li><a href="/smm/">SMM продвижение</a></li>
                                            <li><a href="/chat-bot/">Чат боты</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer--menu-item">
                                        <div class="footer--menu-item--title">Компания</div>
                                        <ul class="footer--menu-item--list">
                                            <li><a href="#">О нас</a></li>
                                            <li><a href="/blog/">Статьи</a></li>
                                            <li><a href="/sites/#portfolio">Портфолио</a></li>
                                            <li><a href="/#reviews">Отзывы</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer--nav-top--contacts">
                                    <div class="footer--nav-top--contacts--phone">
                                        <a href="tel:<?= Helper::parsePhone(SITE_CONFIG['phone'], 'full') ?>" class="roistat_phone">
                                            <?= renderSprite('call-white') ?><?= Helper::parsePhone(SITE_CONFIG['phone'], 'formatted') ?></a>
                                        <br>
                                        <a href="#" class="js-open-modal" data-action="openModal" data-modal="callback">Заказать звонок</a>
                                    </div>
                                    <div class="footer--nav-top--contacts--email">
                                        <?= Helper::renderEmail(SITE_CONFIG['email']) ?>
                                        <br>
                                        <a href="#" class="js-open-modal" data-action="openModal" data-modal="audit">Быстро отвечаем</a>
                                    </div>
                                    <div class="footer--nav-top--contacts--address">
                                        <p>
                                            <?= renderSprite('location-white') ?><?= SITE_CONFIG['address'] ?><br><span><?= SITE_CONFIG['metro'] ?></span>
                                        </p>
                                        <p class="social"><span>Мы в соцсетях:</span></p>
                                        <p>
                                            <a href="<?= SITE_CONFIG['social_telegram_bot'] ?>" rel="nofollow" target="_blank" title="Telegram Bot"><?= renderSprite('icon-circle-telegram') ?></a>
                                            <a href="<?= SITE_CONFIG['social_instagram'] ?>" rel="nofollow" target="_blank" title="Instagram"><?= renderSprite('icon-circle-instagram') ?></a>
                                            <a href="<?= SITE_CONFIG['social_vk'] ?>" rel="nofollow" target="_blank" title="Вконтакте"><?= renderSprite('icon-circle-vk') ?></a>
                                            <a href="<?= SITE_CONFIG['social_facebook'] ?>" rel="nofollow" target="_blank" title="Facebook"><?= renderSprite('icon-circle-facebook') ?></a>
                                           </p>
                                    </div>
                                </div>
                            </div>
                            <div class="footer--nav-bottom">
                                <div class="footer--nav-bottom--copyrights">
                                    <p>© <?= Helper::autoCopyright(SITE_CONFIG['since']) ?> Все права защищены. <a href="/">LapkinLab</a></p>
                                    <p><a class="privacy-policy" href="/privacy-policy/">Политика в отношении обработки персональных данных</a></p>
                                </div>
                                <div class="footer--nav-bottom--partners">
                                    <p>
                                        <a href="/documents/Sertifikat_Biznes_Partnera_1C_Bitrix.pdf" title="Бизнес-партнер 1С-Битрикс" target="_blank">
                                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix-partner.png" alt="Бизнес-партнер 1С-Битрикс"></a>
                                        <a class="fancybox" data-fancybox href="<?= SITE_TEMPLATE_PATH ?>/images/amocrm.jpg" title="Партнер amoCRM">
                                            <img class="fancybox" src="<?= SITE_TEMPLATE_PATH ?>/images/amocrm-partner.jpg" alt="Партнер amoCRM"></a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </footer><!--/footer-->

        <!--scroll to top-->
        <div class="hidden-xs" id="scroll-to-top"><a href="#top" title="наверх" rel="nofollow">↑</a></div>

    </div><!--/#top-->

    <!--modals container-->
    <div id="ajax-modals-container"></div>

    <?php $APPLICATION->IncludeFile('/include/yandex_metrika.php') ?>
    <?php $APPLICATION->IncludeFile('/include/seo.php') ?>

</body>
</html>
