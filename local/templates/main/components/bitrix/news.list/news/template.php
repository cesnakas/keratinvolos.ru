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

<div class="section section_articles">
	<div class="container">

		<div class="row">

			<?foreach($arResult["ITEMS"] as $arItem):?>
			<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
				<div class="news_item">

					<img class="news_img" data-src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>">
					<p class="news_title">
                        <?=$arItem["NAME"]?>
					</p>
                    <p class="news_descr">
                        <?=$arItem["PREVIEW_TEXT"]?>
					</p>
                    <a class="more" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
						ПОДРОБНЕЕ
					</a>

				</div>
			</div>
            <?endforeach;?>

		</div>

	</div>
</div>