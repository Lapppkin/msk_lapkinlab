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

<?foreach($arResult["ITEMS"] as $arItem):?>
						<div class="col-sm-12 col-md-4 block_news" style="min-height: 365px; max-height:365px;">
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
						<a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
							<div class="img" style="background: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>'); background-size: cover; background-repeat: no-repeat;">
							</div>
						</a>
							<div class="tit"><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"> <?echo $arItem["NAME"]?> </a></div>
							<div class="bottit">  </div>
							<div class="botfff">
								<p style="float: left;"><?=$arItem["TIMESTAMP_X"]?></p>
								<p style="float: right;">Статьи</p>
							</div>
						</div>
<?endforeach;?>

