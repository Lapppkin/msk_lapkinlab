<?php

use LapkinLab\Core;
use LapkinLab\Helper;

?>
<!--header topbar-->
<div class="header--top">

    <?php if ($USER->IsAdmin()): ?>
    <div id="panel"><?php $APPLICATION->ShowPanel() ?></div>
    <?php endif; ?>

    <div class="container">
        <div class="row">
            <div class="header--top-wrapper col-12">
                <div class="header--top-logo">
                    <a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.png" alt="LapkinLab"></a>
                </div>
                <div class="header--top-location">
                    <div class="header--top-location--current">
                        <?= renderSprite('location') ?><span class="label">Ваш город:</span> <span class="city">Москва</span>
                        <div class="header--top-location--select">
                            <ul>
                                <li class="active"><a class="active" href="/">Москва</a></li>
                                <li><a href="https://lapkinlab.ru/">Краснодар</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header--top-phones">
                    <?= renderSprite('call') ?>
                    <?= Helper::parsePhone(SITE_CONFIG['phone'], 'link', 'roistat_phone') ?>
                </div>
                <div class="header--nav-hamburger js-mobile-menu"><?= renderSprite('menu') ?></div>
                <div class="header--top-buttons">
                    <div class="header--top-buttons--callback">
                        <a class="btn btn-noradius js-open-modal" href="#" data-action="openModal" data-modal="callback">
                            <?= renderSprite('call-white') ?>
                            Заказать звонок
                        </a>
                    </div>
                    <div class="header--top-buttons--audit">
                        <a class="btn btn-noradius btn-dark js-open-modal" href="#" data-action="openModal" data-modal="audit">Заказать аудит</a>
                    </div>
                    <div class="header--top-buttons--brief">
                        <a class="btn btn-noradius btn-darken" href="<?= Core::getBriefLink() ?>" target="_blank">Заполнить бриф</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
