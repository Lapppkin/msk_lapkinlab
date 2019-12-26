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
<div class="section--article--items col-xl-10 offset-xl-1 col-lg-12 offset-lg-0">

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <article class="section--article--item" id="<?=$this->GetEditAreaId($arItem['ID'])?>">
        <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
        <div class="section--article--item-image">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
            </a>
        </div>
        <?endif;?>
        <?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
        <div class="section--article--item-title">
            <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                <h3><?=$arItem["NAME"]?></h3>
            </a>
        </div>
        <?endif;?>
        <div class="section--article--item-info">
            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["TIMESTAMP_X"]):?>
            <div class="section--article--item-info--date"><?=$arItem["TIMESTAMP_X"]?></div>
            <?endif;?>
            <div class="section--article--item-info--type">Статьи</div>
        </div>
    </article>
<?endforeach;?>

</div>
