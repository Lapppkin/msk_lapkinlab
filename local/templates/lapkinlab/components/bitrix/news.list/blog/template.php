<?php

use LapkinLab\Helper;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<? if ($arParams["DISPLAY_TOP_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>

<div class="blog--list">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <article class="blog--list--item">
            <div class="blog--list--item-content">
                <?
                $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
                $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                $previewImageResized = Helper::resizeImage($arItem['PREVIEW_PICTURE'], false, 490, 300);
                if ($arParams["DISPLAY_PICTURE"] != "N"): ?>
                    <? if (is_array($arItem["PREVIEW_PICTURE"])): ?>
                        <figure class="blog--list--item-thumbnail">
                            <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                                <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>">
                                    <img src="<?= $previewImageResized['src'] ?>" alt="<?= $arItem['NAME'] ?>" class="img-fluid">
                                </a>
                            <? else: ?>
                                <img src="<?= $previewImageResized['src'] ?>" alt="<?= $arItem['NAME'] ?>" class="img-fluid">
                            <? endif; ?>
                        </figure>
                    <? endif; ?>
                <? endif; ?>

                <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                    <h2 class="blog--list--item-title">
        				<? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                            <a href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= $arItem["NAME"] ?></a>
                        <? else: ?>
                            <?= $arItem["NAME"] ?>
                        <? endif; ?>
                    </h2>
                <? endif; ?>

                <div class="blog--list--item-info">
                    <div class="blog--list--item-date"><?= $arItem['TIMESTAMP_X'] ?></div>
                    <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                        <a class="btn btn-sm" href="<?= $arItem["DETAIL_PAGE_URL"] ?>"><?= GetMessage("CT_BNL_GOTO_DETAIL") ?></a>
                    <? endif; ?>
                </div>
            </div>
        </article>
    <? endforeach; ?>
</div>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
    <?= $arResult["NAV_STRING"] ?>
<? endif; ?>

