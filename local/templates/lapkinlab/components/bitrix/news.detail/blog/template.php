<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<section class="blog-detail">
	<div class="container">
        <div class="row">

            <h1 class="blog-detail--title col-12 text-center"><?=$arResult["NAME"]?></h1>

            <div class="blog-detail--content col-md-10 offset-md-1 col-sm-12 offset-sm-0">

                <?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arResult["DETAIL_PICTURE"])):?>
                    <div class="blog-detail--image">
                        <img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>"
                            width="<?=$arResult["DETAIL_PICTURE"]["WIDTH"]?>"
                            height="<?=$arResult["DETAIL_PICTURE"]["HEIGHT"]?>"
                            alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>"
                            title="<?=$arResult["DETAIL_PICTURE"]["TITLE"]?>"
                        >
                    </div>
                <?endif?>

                <? if(!empty($arResult["DISPLAY_ACTIVE_FROM"])): ?>
                <div class="blog-detail--date">
                    <?= $arResult["DISPLAY_ACTIVE_FROM"] ?>
                </div>
                <? endif; ?>
                <div class="blog-detail--body">
                    <?if (strlen($arResult["DETAIL_TEXT"]) > 0): ?>
                        <?= $arResult["DETAIL_TEXT"] ?>
                    <?else:?>
                        <?= $arResult["PREVIEW_TEXT"] ?>
                    <?endif?>
                </div>

                <div class="blog-detail--next">
                    <a href="<?echo $arResult["LIST_PAGE_URL"];?>"><?= GetMessage("NEWS_BACK_TEXT") ?></a>
                </div>

            </div>

        </div>
    </div>
</section>
