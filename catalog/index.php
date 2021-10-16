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

        "SECTION_COUNT_ELEMENTS" => "N",
        "SHOW_TOP_ELEMENTS" => "N",

		// catalog.section
		"ELEMENT_SORT_ORDER" => "ASC",
		"ELEMENT_SORT_FIELD" => "NAME",
		"ELEMENT_SORT_ORDER2" => "DESC",
		"ELEMENT_SORT_FIELD2" => "SORT",

		"USE_MAIN_ELEMENT_SECTION" => "Y",
        "DETAIL_STRICT_SECTION_CHECK" => "N",
        "SET_LAST_MODIFIED" => "Y",

		"SET_TITLE" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "Y",

        "USE_SALE_BESTSELLERS" => "N",

        "USE_FILTER" => "Y",
        "FILTER_NAME" => "",
        "FILTER_VIEW_MODE" => "VERTICAL",
        "FILTER_HIDE_ON_MOBILE" => "Y",
        "AJAX_OPTION_ADDITIONAL" => "Y",

        "PRICE_CODE" => ["BASE"],
        "USE_PRICE_COUNT" => "Y",
        "SHOW_PRICE_COUNT" => "1",
        "PRICE_VAT_INCLUDE" => "Y",
        "PRICE_VAT_SHOW_VALUE" => "N",

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
        "CACHE_TIME" => "360000",
        "CACHE_FILTER" => "Y",
        "CACHE_GROUPS" => "Y",

	],
	false
);?>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>