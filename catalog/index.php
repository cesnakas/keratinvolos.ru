<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle("Каталог");
?>

    <div class="section section_catalog__page">
        <div class="container">
            <div class="catalog-block">

                <aside class="catalog-left">
                    <p class="catalog-title">КАТЕГОРИ ТОВАРОВ</p>

					<?php
					$APPLICATION->IncludeComponent(
						"bitrix:catalog.smart.filter",
						".default",
						[
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "catalog",
							"SECTION_ID" => "",
							"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
							"FILTER_NAME" => "arrFilter",
							"COMPONENT_TEMPLATE" => ".default",
							"HIDE_NOT_AVAILABLE" => "Y",
							"TEMPLATE_THEME" => "",
							"FILTER_VIEW_MODE" => "vertical",
							"POPUP_POSITION" => "right",
							"DISPLAY_ELEMENT_COUNT" => "Y",
							"SEF_MODE" => "Y",
							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "360000",
							"CACHE_GROUPS" => "Y",
							"SAVE_IN_SESSION" => "N",
							"INSTANT_RELOAD" => "Y",
							"PAGER_PARAMS_NAME" => "arrPager",
							"PRICE_CODE" => [
								0 => "BASE",
							],
							"CONVERT_CURRENCY" => "N",
							"XML_EXPORT" => "N",
							"SECTION_TITLE" => "-",
							"SECTION_DESCRIPTION" => "-",
							"SEF_RULE" => "/catalog/#SECTION_CODE#/filter/#SMART_FILTER_PATH#/apply/",
							"SECTION_CODE_PATH" => "",
							"SMART_FILTER_PATH" => $_REQUEST["SMART_FILTER_PATH"],
							"CURRENCY_ID" => "RUB",
                            "SHOW_ALL_WO_SECTION" => "Y",
							"PREFILTER_NAME" => "smartPreFilter"
						],
						false
					);?>
                </aside>

                <div class="catalog-right">

                    <!--catalog-right__header-->

					<?php
					$APPLICATION->IncludeComponent("bitrix:catalog.section", "",
						[
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "catalog",
							// "SECTION_ID" => $_REQUEST["SECTION_ID"],
							"SECTION_CODE" => $_REQUEST["SECTION_CODE"],

							"SEF_MODE" => "Y",
							"SECTION_ID_VARIABLE" => "SECTION_ID",
							"SECTION_URL" => "/catalog/#SECTION_CODE#/",
							"DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",

							"ELEMENT_SORT_ORDER" => "asc",
							"ELEMENT_SORT_FIELD" => "SCALED_PRICE_1",
							"ELEMENT_SORT_ORDER2" => "asc",
							"ELEMENT_SORT_FIELD2" => "name",

							"TEMPLATE_THEME" => "",

							"PRODUCT_SUBSCRIPTION" => "Y",

							"AJAX_MODE" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"AJAX_OPTION_HISTORY" => "Y",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "Y",

							"CACHE_TYPE" => "A",
							"CACHE_TIME" => "360000",
							"CACHE_GROUPS" => "Y",

							"PRICE_CODE" => ["BASE"],
							"USE_PRICE_COUNT" => "N",
							"SHOW_PRICE_COUNT" => "1",
							"PRICE_VAT_INCLUDE" => "Y",
							"CONVERT_CURRENCY" => "N",

							"BASKET_URL" => "/basket/",
							"USE_PRODUCT_QUANTITY" => "Y",
							"PRODUCT_QUANTITY_VARIABLE" => "quantity",
							"ADD_PROPERTIES_TO_BASKET" => "Y",
							"ADD_TO_BASKET_ACTION" => "ADD",
							"PRODUCT_PROPS_VARIABLE" => "prop",
							"PARTIAL_PRODUCT_PROPERTIES" => "N",


							"ACTION_VARIABLE" => "action",
							"ADD_PICT_PROP" => "-",
							"ADD_SECTIONS_CHAIN" => "N",
							"BACKGROUND_IMAGE" => "-",
							"BROWSER_TITLE" => "-",
							"CACHE_FILTER" => "N",
							"COMPATIBLE_MODE" => "Y",
							"CUSTOM_FILTER" => "",
							"DISABLE_INIT_JS_IN_COMPONENT" => "N",
							"DISPLAY_BOTTOM_PAGER" => "Y",
							"DISPLAY_COMPARE" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"ENLARGE_PRODUCT" => "STRICT",
							"FILTER_NAME" => "arrFilter",
							"HIDE_NOT_AVAILABLE" => "N",
							"HIDE_NOT_AVAILABLE_OFFERS" => "N",
							"INCLUDE_SUBSECTIONS" => "Y",
							"LABEL_PROP" => array(),
							"LAZY_LOAD" => "N",
							"LINE_ELEMENT_COUNT" => "3",
							"LOAD_ON_SCROLL" => "N",
							"MESSAGE_404" => "",
							"MESS_BTN_ADD_TO_BASKET" => "В корзину",
							"MESS_BTN_BUY" => "Купить",
							"MESS_BTN_DETAIL" => "Подробнее",
							"MESS_BTN_LAZY_LOAD" => "Показать ещё",
							"MESS_BTN_SUBSCRIBE" => "Подписаться",
							"MESS_NOT_AVAILABLE" => "Нет в наличии",
							"META_DESCRIPTION" => "-",
							"META_KEYWORDS" => "-",
							"OFFERS_LIMIT" => "5",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => ".default",
							"PAGER_TITLE" => "Товары",
							"PAGE_ELEMENT_COUNT" => "18",
							"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
							"PRODUCT_ID_VARIABLE" => "id",
							"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
							"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
							"RCM_TYPE" => "personal",
							"SECTION_USER_FIELDS" => array("",""),
							"SET_BROWSER_TITLE" => "Y",
							"SET_LAST_MODIFIED" => "N",
							"SET_META_DESCRIPTION" => "Y",
							"SET_META_KEYWORDS" => "Y",
							"SET_STATUS_404" => "N",
							"SET_TITLE" => "Y",
							"SHOW_404" => "N",
							"SHOW_ALL_WO_SECTION" => "N",
							"SHOW_CLOSE_POPUP" => "N",
							"SHOW_DISCOUNT_PERCENT" => "N",
							"SHOW_FROM_SECTION" => "N",
							"SHOW_MAX_QUANTITY" => "N",
							"SHOW_OLD_PRICE" => "N",
							"SHOW_SLIDER" => "Y",
							"SLIDER_INTERVAL" => "3000",
							"SLIDER_PROGRESS" => "N",
							"USE_ENHANCED_ECOMMERCE" => "N",
							"USE_MAIN_ELEMENT_SECTION" => "N",
						],
						false
					);?>

                </div>

            </div>
        </div>
    </div>

<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>