<?php

use LapkinLab\Helper;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

$this->setFrameMode(true);
?>
<div class="portfolio-cards">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $link = $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];
        $areas = $arItem['DISPLAY_PROPERTIES']['AREA']['VALUE'];
        $logo = $arItem['DISPLAY_PROPERTIES']['LOGO']['VALUE'];

        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

        $previewImageResized = Helper::resizeImage($arItem['PREVIEW_PICTURE'], false, 380, 230);
        ?>
        <div class="portfolio-card">
            <?php if ($link) { ?>
                <noindex>
                    <a href="<?= $link ?>" rel="nofollow" target="_blank" class="portfolio-card__image"
                       style="background-image: url(<?= $previewImageResized['src'] ?>);">
                        <? if ($logo) : ?>
                            <img src="<?= $logo ?>"
                                 class="portfolio-card__logo">
                        <? endif; ?>
                    </a>
                </noindex>
            <? } else { ?>
                <div class="portfolio-card__image">
                    <img src="<?= $previewImageResized['src'] ?>" alt="<?= $arItem['NAME'] ?>"
                         class="portfolio-card__image">
                </div>
            <? } ?>
            <div class="portfolio-card__content">
                <div class="portfolio-card__name">
                    <?= $arItem["NAME"] ?>
                </div>
                <?php if ($link): ?>
                    <noindex>
                        <a href="<?= $link ?>" rel="nofollow" target="_blank" class="portfolio-card__more">
                            Перейти на сайт
                        </a>
                    </noindex>
                <? endif; ?>
                <? if (!empty($areas)): ?>
                    <div class="portfolio-card__tags">
                        <? foreach ($areas as $area): ?>
                            <span><?= $area ?></span>
                        <? endforeach; ?>
                    </div>
                <? endif ?>
            </div>
        </div>
    <? endforeach; ?>
</div>
