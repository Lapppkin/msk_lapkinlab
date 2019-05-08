<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("tags", "noindex");
$APPLICATION->SetTitle("webstat");
?><section class="feedback_contacts">
<div class="container_v2">
	 <?$APPLICATION->IncludeComponent(
	"promosila:webstat.out", 
	".default", 
	array(
		"CACHE_GROUPS" => "N",
		"CACHE_TIME" => "0",
		"CACHE_TYPE" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
</div>
 </section> <br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>