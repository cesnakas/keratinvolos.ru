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
/** @var array $templateData */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if (is_array($arResult["DETAIL_PICTURE"])):?>
<div class="section secton_articles_single">
	<div class="container">
		<div class="row">

			<div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">

                <p class="page_title_details">
                    ОКРАШИВАНИЕ ВОЛОС
                </p>

			</div>
			<div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">

			</div>

		</div>
	</div>
</div>
<?endif;?>