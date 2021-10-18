<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Детальная");
?>

<?php
$APPLICATION->IncludeComponent("bitrix:catalog.element", "",
    [
        "IBLOCK_ID" => "1",
        "IBLOCK_TYPE" => "catalog",
        "SEF_MODE" => "Y",
        "ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
        "SECTION_URL" => "/catalog/#SECTION_CODE#/",
        "DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
        "SECTION_ID_VARIABLE" => "SECTION_ID",
    ],
    false
);?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>