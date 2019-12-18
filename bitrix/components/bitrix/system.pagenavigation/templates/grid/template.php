<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

/**
 * @var array $arResult
 * @var array $arParam
 * @var CBitrixComponentTemplate $this
 */

$this->setFrameMode(true);
$this->addExternalCss("/bitrix/css/main/grid/pagenavigation.css");

if(!$arResult["NavShowAlways"])
{
	if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
		return;
}
?>

 <nav class="navigation pagination" role="navigation">
<?
$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"]."&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?".$arResult["NavQueryString"] : "");
?>


	<div class="nav-links">
<?
	if ($arResult["NavPageNomer"] > 1):
		if ($arResult["nStartPage"] > 1):
			if($arResult["bSavePage"]):
?>
				<a style="color:#fff; text-decoration:none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=1"><span class="page-numbers">1</span></a>
<?
			else:
?>
				<a style="color:#fff; text-decoration:none;" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span class="page-numbers">1</span></a>
<?
			endif;
			if ($arResult["nStartPage"] > 2):
?>
				<a style="color:#000; text-decoration:none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nStartPage"] / 2)?>"><span class="page-numbers dots">...</span></a>
<?
			endif;
		endif;
	endif;

	do
	{
		if ($arResult["nStartPage"] == $arResult["NavPageNomer"]):
?>
			<span class="page-numbers current"><?=$arResult["nStartPage"]?></span>
<?
		elseif($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false):
?>
			<a style="color:#fff; text-decoration:none;" href="<?=$arResult["sUrlPath"]?><?=$strNavQueryStringFull?>"><span class="page-numbers"><?=$arResult["nStartPage"]?></span></a>
<?
		else:
?>
			<a style="color:#fff; text-decoration:none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["nStartPage"]?>"><span class="page-numbers"><?=$arResult["nStartPage"]?></span></a>
<?
		endif;
		$arResult["nStartPage"]++;
	}
	while($arResult["nStartPage"] <= $arResult["nEndPage"]);

	if($arResult["NavPageNomer"] < $arResult["NavPageCount"]):
		if ($arResult["nEndPage"] < $arResult["NavPageCount"]):
			if ($arResult["nEndPage"] < ($arResult["NavPageCount"] - 1)):
?>
				<a style="color:#000; text-decoration:none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=round($arResult["nEndPage"] + ($arResult["NavPageCount"] - $arResult["nEndPage"]) / 2)?>"><span class="page-numbers dots">...</span></a>
<?
			endif;
?>
				<a style="color:#fff; text-decoration:none;" href="<?=$arResult["sUrlPath"]?>?<?=$strNavQueryString?>PAGEN_<?=$arResult["NavNum"]?>=<?=$arResult["NavPageCount"]?>"><span class="page-numbers"><?=$arResult["NavPageCount"]?></span></a>
<?
		endif;
	endif;
?>
	</div>

 </nav>