<?php

use LapkinLab\Core;

?>
<!--mobile menu-->
<div class="mobile-menu">
    <?= renderSprite('logo-small') ?>
    <div class="about"><?= SITE_CONFIG['about'] ?></div>
    <button class="close btn-noradius js-mobile-menu--close" type="button">
        <?= renderSprite('close') ?>
    </button>
    <div class="mobile-menu--wrapper">
        <div class="mobile-menu--buttons">
            <div class="header--top-buttons--callback">
                <a class="btn btn-noradius js-open-modal" href="#" data-action="openModal" data-modal="callback" onclick="ymReachGoal('zvonok')">
                    <?= renderSprite('call-white') ?>
                    Заказать звонок
                </a>
            </div>
            <div class="header--top-buttons--audit">
                <a class="btn btn-noradius btn-dark js-open-modal" href="#" data-action="openModal" data-modal="audit" onclick="ymReachGoal('audit')">Заказать аудит</a>
            </div>
            <div class="header--top-buttons--brief">
                <a class="btn btn-noradius btn-darken" href="<?= Core::getBriefLink() ?>" target="_blank">Заполнить бриф</a>
            </div>
        </div>
        <!--main menu-->
        <? $APPLICATION->IncludeComponent(
            "bitrix:menu",
            "menu-top",
            [
                "ROOT_MENU_TYPE"        => "top",
                "MAX_LEVEL"             => "2",
                "CHILD_MENU_TYPE"       => "left",
                "USE_EXT"               => "Y",
                "MENU_CACHE_TYPE"       => "A",
                "MENU_CACHE_TIME"       => "36000000",
                "MENU_CACHE_USE_GROUPS" => "Y",
                "MENU_CACHE_GET_VARS"   => [],
                "COMPONENT_TEMPLATE"    => "catalog_horizontal1",
                "DELAY"                 => "N",
                "ALLOW_MULTI_SELECT"    => "N",
                "COMPOSITE_FRAME_MODE"  => "A",
                "COMPOSITE_FRAME_TYPE"  => "AUTO",
                "MENU_THEME"            => "site",
            ],
            false,
            [
                "ACTIVE_COMPONENT" => "Y",
            ]
        ); ?>
    </div>
</div>
