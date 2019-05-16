<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
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
<section class="news_layout1">
    <div class="container_v2" style=" padding: 30px !important; margin: 0 auto;">

        <div class="news-detail" style="display:grid;">

            <h1><?= $arResult["NAME"] ?></h1><br/>

            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arResult["DETAIL_PICTURE"])): ?>
                <img
                        class="detail_picture"
                        border="0"
                        src="<?= $arResult["DETAIL_PICTURE"]["SRC"] ?>"
                        width="<?= $arResult["DETAIL_PICTURE"]["WIDTH"] ?>"
                        height="<?= $arResult["DETAIL_PICTURE"]["HEIGHT"] ?>"
                        alt="<?= $arResult["DETAIL_PICTURE"]["ALT"] ?>"
                        title="<?= $arResult["DETAIL_PICTURE"]["TITLE"] ?>"
                        style="text-align:center; margin: 0 auto;"
                />
            <? endif ?>

            <div style="width:100%; height:1px; clear:both;"></div>

            <table cellpadding="0" cellspacing="0" width="100">
                <tr>
                    <td width="0%" style="padding-right: 5px"><?
                        $image = $templateFolder . "/images/" . strtolower($arResult["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_XML_ID"]) . ".gif";
                        if (file_exists($_SERVER["DOCUMENT_ROOT"] . $image)):
                            ?><img border="0"
                                   src="<?= $image ?>"
                                   width="30"
                                   height="30"
                                   alt="<?= $arResult["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_ENUM"] ?>"
                                   hspace="0"
                                   vspace="0"
                                   title="<?= $arResult["DISPLAY_PROPERTIES"]["DOC_TYPE"]["VALUE_ENUM"] ?>"
                                   style="float:left" /><?
                        endif ?><br/></td>
                    <td width="100%" valign="top" class="news-date-time"><? if ($arParams["DISPLAY_DATE"] != "N" && $arResult["DISPLAY_ACTIVE_FROM"]): ?>
                            <span style="white-space: nowrap;"><?= $arResult["DISPLAY_ACTIVE_FROM"] ?></span><? endif; ?></td>
                </tr>
            </table>
            <br/>

            <? if (false && $arParams["DISPLAY_NAME"] != "N" && $arResult["NAME"]): ?>
                <h3><?= $arResult["NAME"] ?></h3><br/>
            <? endif; ?>
            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arResult["FIELDS"]["PREVIEW_TEXT"]): ?>
                <p><?= $arResult["FIELDS"]["PREVIEW_TEXT"];
                    unset($arResult["FIELDS"]["PREVIEW_TEXT"]); ?></p>
            <? endif; ?>
            <? if ($arResult["NAV_RESULT"]): ?>
                <? if ($arParams["DISPLAY_TOP_PAGER"]): ?><?= $arResult["NAV_STRING"] ?><br/><? endif; ?>
                <? echo $arResult["NAV_TEXT"]; ?>
                <? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?><br/><?= $arResult["NAV_STRING"] ?><? endif; ?>
            <? elseif (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
                <? echo $arResult["DETAIL_TEXT"]; ?>
            <? else: ?>
                <? echo $arResult["PREVIEW_TEXT"]; ?>
            <? endif ?>
            <div style="clear:both"></div>

            <p><a href="<? echo $arResult["LIST_PAGE_URL"]; ?>"><?= GetMessage("NEWS_BACK_TEXT") ?></a></p>
        </div>
    </div>
</section>