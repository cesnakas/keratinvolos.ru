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
    ],
    false
);?>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>