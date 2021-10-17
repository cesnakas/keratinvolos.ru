<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Разделы");
?>

	<div class="section section_catalog__page">
		<div class="container">
			<div class="catalog-block">

				<aside class="catalog-left">
					<p class="catalog-title">КАТЕГОРИ ТОВАРОВ</p>
					<?php
                    $APPLICATION->IncludeComponent("bitrix:catalog.smart.filter", "",
						[
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "catalog",
							"SECTION_ID" => "1",
							"SECTION_CODE" => "",

							"SEF_MODE" => "Y",

							"FILTER_VIEW_MODE" => "horizontal",
                            "POPUP_POSITION" => "right",

                            "HIDE_NOT_AVAILABLE" => "Y",
                            "DISPLAY_ELEMENT_COUNT" => "Y",
                            
                        ],
                        false
                    );?>
				</aside>

				<div class="catalog-right">
					<?php
					$APPLICATION->IncludeComponent("bitrix:catalog.section", "",
						[
							"IBLOCK_ID" => "1",
							"IBLOCK_TYPE" => "catalog",
							"SECTION_ID" => $_REQUEST["SECTION_ID"],
							"SECTION_CODE" => $_REQUEST["SECTION_CODE"],

							"SEF_MODE" => "Y",
							"SECTION_ID_VARIABLE" => "SECTION_ID",
							"SECTION_URL" => "/catalog/#SECTION_CODE#/",
							"DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",

							"ELEMENT_SORT_ORDER" => "asc",
							"ELEMENT_SORT_FIELD" => "SCALED_PRICE_1",
							"ELEMENT_SORT_ORDER2" => "asc",
							"ELEMENT_SORT_FIELD2" => "name",

							"PRICE_CODE" => ["BASE"],
							"USE_PRICE_COUNT" => "N",
							"SHOW_PRICE_COUNT" => "1",
							"PRICE_VAT_INCLUDE" => "Y",
							"CONVERT_CURRENCY" => "N",
						],
						false
					);?>
				</div>

			</div>
		</div>
	</div>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>