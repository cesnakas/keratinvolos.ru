<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<div class="product_list__wrapper">
    <div class="product_list__left">

        <div class="product_list__item">

            <a href="#" class="product_list__title">ДОМАШНИЙ УХОД С КЕРАТИНОМ</a>

            <ul class="product_list__descr">
                <li>
                    <a href="#">Шампуни и кондиционеры</a>
                </li>
                <li>
                    <a href="#">Маски с кератином</a>
                </li>
                <li>
                    <a href="#">Крема для волос</a>
                </li>
                <li>
                    <a href="#">Спреи для волос</a>
                </li>
                <li>
                    <a href="#">Сыворотки и масла</a>
                </li>
                <li>
                    <a href="#">Стайлинг для волос</a>
                </li>
                <li>
                    <a href="#">Наборы GKhair</a>
                </li>
            </ul>

            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_1.png" alt="" class="product_list_img">

        </div>
    </div>

    <div class="product_list__right">
        <div class="product_list__right__branch">

            <div class="product_list__item product_list__item__branch">
                <a href="#" class="product_list__title">ОКРАШИВАНИЕ ВОЛОС</a>
                <ul class="product_list__descr">
                    <li>
                        <a href="#">Крем краситель для волос</a>
                    </li>
                    <li>
                        <a href="#">Осветляющие средства</a>
                    </li>
                    <li>
                        <a href="#">Оксиданты</a>
                    </li>
                    <li>
                        <a href="#">Защитная добавка</a>
                    </li>
                    <li>
                        <a href="#">Фиксатор цвета</a>
                    </li>
                </ul>
                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_2.png" alt="" class="product_list_img">
            </div>

            <div class="product_list__item product_list__item__branch">
                <a href="#" class="product_list__title product_list__title__inner">ИНСТРУМЕНТЫ И АКСЕССУАРЫ</a>
                <ul class="product_list__descr">
                    <li>
                        <a href="#">Электроприборы</a>
                    </li>
                    <li>
                        <a href="#">Расчески</a>
                    </li>
                    <li>
                        <a href="#">Аксессуары</a>
                    </li>
                </ul>
                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_3.png" alt="" class="product_list_img">
            </div>

        </div>

        <div class="product_list__item product_list__item__bottom">
            <a href="#" class="product_list__title">КЕРАТИНОВОЕ ВЫПРЯМЛЕНИЕ И ВОССТАНОВЛЕНИЕ ВОЛОС</a>
            <ul class="product_list__descr">
                <li>
                    <a href="#">Кератин для волос</a>
                </li>
            </ul>
            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_4.webp" alt="" class="product_list_img">
        </div>

    </div>
</div>

<!--//-->
<?/*
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br />
<?endif;?>
<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<p class="news-item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><img
						class="preview_picture"
						border="0"
						src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
						width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
						height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
						alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
						title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
						style="float:left"
						/></a>
			<?else:?>
				<img
					class="preview_picture"
					border="0"
					src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>"
					width="<?=$arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
					height="<?=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
					alt="<?=$arItem["PREVIEW_PICTURE"]["ALT"]?>"
					title="<?=$arItem["PREVIEW_PICTURE"]["TITLE"]?>"
					style="float:left"
					/>
			<?endif;?>
		<?endif?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
			<span class="news-date-time"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></span>
		<?endif?>
		<?if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
			<?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
				<a href="<?echo $arItem["DETAIL_PAGE_URL"]?>"><b><?echo $arItem["NAME"]?></b></a><br />
			<?else:?>
				<b><?echo $arItem["NAME"]?></b><br />
			<?endif;?>
		<?endif;?>
		<?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
			<?echo $arItem["PREVIEW_TEXT"];?>
		<?endif;?>
		<?if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
			<div style="clear:both"></div>
		<?endif?>
		<?foreach($arItem["FIELDS"] as $code=>$value):?>
			<small>
			<?=GetMessage("IBLOCK_FIELD_".$code)?>:&nbsp;<?=$value;?>
			</small><br />
		<?endforeach;?>
		<?foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
			<small>
			<?=$arProperty["NAME"]?>:&nbsp;
			<?if(is_array($arProperty["DISPLAY_VALUE"])):?>
				<?=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
			<?else:?>
				<?=$arProperty["DISPLAY_VALUE"];?>
			<?endif?>
			</small><br />
		<?endforeach;?>
	</p>
<?endforeach;?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
*/?>