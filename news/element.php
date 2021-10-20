<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>

    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "news",
        [
            "IBLOCK_ID" => "3",
            "IBLOCK_TYPE" => "news",
            "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
            "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
            "IBLOCK_URL" => "/news/",
            // "DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#/",
            "DETAIL_URL" => "/news/#ELEMENT_CODE#/",
        ],
        false
    );?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>