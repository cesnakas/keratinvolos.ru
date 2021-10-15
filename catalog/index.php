<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Каталог");
?>
	<style>
		.content {
			min-height: 100vh;
		}
	</style>

<?php
$APPLICATION->IncludeComponent(
	"bitrix:catalog",
	"",
	[
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "catalog",

		"HIDE_NOT_AVAILABLE" => "N",

		"SEF_MODE" => "Y",
		"SEF_FOLDER" => "/catalog/",
		"SEF_URL_TEMPLATES" => [
			"sections" => "",
			"section" => "#SECTION_CODE#/",
			"element" => "#SECTION_CODE#/#ELEMENT_CODE#/",
			"compare" => "compare/",
		],

		"USE_MAIN_ELEMENT_SECTION" => "Y",
        "DETAIL_STRICT_SECTION_CHECK" => "N",
        "SET_LAST_MODIFIED" => "Y",

		"SET_TITLE" => "Y",

		"ADD_PICT_PROP" => "",
		"LABEL_PROP" => "",
        "COMMON_SHOW_CLOSE_POPUP" => "Y",
        "PRODUCT_SUBSCRIPTION" => "Y",
        "DETAIL_SHOW_MAX_QUANTITY" => "N",
		"SHOW_MAX_QUANTITY" => "N",
        "MESS_BTN_BUY" => "Купить",
		"AJAX_MODE" => "N",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "Y",

        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",

	],
	false
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>