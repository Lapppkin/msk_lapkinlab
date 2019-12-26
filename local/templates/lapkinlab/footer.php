<?php

use LapkinLab\Helper;

?>
        </main>

        <?php if ($APPLICATION->GetCurDir() == '/'): ?>
            <?php //$APPLICATION->IncludeFile('/include/calculator.php', array(), array('SHOW_BORDER' => true)) ?>
        <?php endif; ?>

        <!--footer-->
        <footer id="footer" class="footer">

            <?php if ($APPLICATION->GetCurDir() == '/'): ?>
            <!--footer map-->
            <div class="footer--map">
                <div class="footer--map--title">
                    <?= renderSprite('location-white') ?>
                    LapkinLab на карте
                </div>
                <div class="footer--map--wrapper">
                    <script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac6d4f483f8fbaf970c92434e432b8e8ec5c4538ec998e13dc167818cf13dbafd&amp;amp;width=100%25&amp;amp;height=450&amp;amp;lang=ru_RU&amp;amp;scroll=true"></script>
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
                                            <li><a href="/kalkulyator-stoimosti-sajtov/">Создание сайтов</a></li>
                                            <li><a href="/kontekstnaya-reklama/">Контекстная реклама</a></li>
                                            <li><a href="/smm/">SMM продвижение</a></li>
                                            <li><a href="/chat-bot/">Чат боты</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer--menu-item">
                                        <div class="footer--menu-item--title">Компания</div>
                                        <ul class="footer--menu-item--list">
                                            <li><a href="#">О нас</a></li>
                                            <li><a href="/novosti/">Статьи</a></li>
                                            <li><a href="/telegram/">Телеграм</a></li>
                                            <li><a href="/kalkulyator-stoimosti-sajtov/#portfolio">Портфолио</a></li>
                                            <li><a href="/chat-bot/">Отзывы</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="footer--nav-top--contacts">
                                    <div class="footer--nav-top--contacts--phone">
                                        <a href="tel:<?= Helper::parsePhone(SITE_CONFIG['phone'], 'full') ?>">
                                            <?= renderSprite('call-white') ?><?= Helper::parsePhone(SITE_CONFIG['phone'], 'formatted') ?></a><br><a href="#">Заказать звонок</a>
                                    </div>
                                    <div class="footer--nav-top--contacts--email">
                                        <a href="mailto:<?= SITE_CONFIG['email'] ?>"><?= SITE_CONFIG['email'] ?></a>
                                        <br>
                                        <a href="#win1">Быстро отвечаем</a>
                                    </div>
                                    <div class="footer--nav-top--contacts--address">
                                        <p>
                                            <?= renderSprite('location-white') ?><?= SITE_CONFIG['address'] ?><br><span><?= SITE_CONFIG['metro'] ?></span>
                                        </p>
                                        <p class="social"><span>Мы в соцсетях:</span></p>
                                        <p>
                                            <a href="<?= SITE_CONFIG['social_telegram'] ?>" rel="nofollow" target="_blank" title="Telegram"><?= renderSprite('icon-circle-telegram') ?></a>
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

        </footer>
        <!--/footer-->

        <!--scroll to top-->
        <div class="hidden-xs" id="scroll-to-top"><a href="#top" title="наверх" rel="nofollow">↑</a></div>

        <!--modals container-->
        <div id="ajax-modals-container"></div>

    </div><!--/#top-->

    <?php if (!$USER->IsAdmin()): ?>
        <?php $APPLICATION->IncludeFile('/include/seo.php') ?>
        <?php $APPLICATION->IncludeFile('/include/ym_reachgoal.php') ?>
    <?php endif; ?>

</body>
</html>
