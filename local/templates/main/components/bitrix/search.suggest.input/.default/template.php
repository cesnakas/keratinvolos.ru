<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

CJSCore::Init(array("ajax"));
?>

<script>
	BX.ready(function(){
		var input = BX("<?=$arResult["ID"]?>");
		if (input)
			new JsSuggest(input, '<?=$arResult["ADDITIONAL_VALUES"]?>');
	});
</script>

<IFRAME
	style="width:0px; height:0px; border: 0px;"
	src="javascript:''"
	name="<?=$arResult["ID"]?>_div_frame"
	id="<?=$arResult["ID"]?>_div_frame"
></IFRAME>

<input id="<?=$arResult["ID"]?>"
       type="search"
       name="<?=$arParams["NAME"]?>"
	<?php if($arParams["INPUT_SIZE"] > 0) { ?>
		size="<?=$arParams["INPUT_SIZE"]?>"
	<?php } ?>
	    value="<?=$arParams["VALUE"]?>"
        placeholder="Поиск..."
	    autocomplete="off"
/>
