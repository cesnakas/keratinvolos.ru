<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
?>

    <!--<div class="section section_page_title">
        <div class="container">
            <p class="page_title">
                НОВОСТИ
            </p>
            <div class="breadcrumbs">
                <ul>
                    <li>
                        <a href="index.php">
                            ГЛАВНАЯ
                        </a>
                    </li>
                    <li>
							<span>
								НАШИ НОВОСТИ
							</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->

    <?$APPLICATION->IncludeComponent("bitrix:news.list", "news",
        [
            "IBLOCK_ID" => "3",
			"IBLOCK_TYPE" => "news",
            "NEWS_COUNT" => "9",

			"PARENT_SECTION" => $_REQUEST["SECTION_ID"],
			"PARENT_SECTION_CODE" => $_REQUEST["SECTION_CODE"],
            // "DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#/",
			"DETAIL_URL" => "/news/#ELEMENT_CODE#/",

			"SORT_ORDER1" => "DESC",
			"SORT_BY1" => "ACTIVE_FROM",
			"SORT_ORDER2" => "ASC",
			"SORT_BY2" => "SORT",

			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "Y",
			"AJAX_OPTION_ADDITIONAL" => "",
        ],
        false
    );?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>