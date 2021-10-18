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
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="section section_main">
    <div class="main_slider carousel" data-items-xl="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-scroll-xl="1" data-scroll-lg="1" data-scroll-md="1" data-scroll-sm="1" data-slick='{"dots": true, "fade": false}'>

    <?php
    foreach($arResult["ITEMS"] as $arItem):
    ?>

        <?php
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>

        <?php
        if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):
        ?>

        <div id="<?=$this->GetEditAreaId($arItem['ID']);?>" class="slider_item"
            style="background: url('<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>') center no-repeat;background-size: cover;"
        >

            <div class="container">

                <?if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
                <h1 class="main_slider__title">
                    <?=$arItem["PREVIEW_TEXT"];?>
                </h1>
                <?endif;?>

                <?if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
                <a href="<?=SITE_DIR.'catalog/'?>" class="btn btn_yellow">
                    СМОТРЕТЬ КАТАЛОГ
                </a>
                <?endif;?>
            </div>
        </div>

        <? endif; ?>

    <? endforeach; ?>

    </div>
    <div class="section__sliderNav d-flex">
        <div class="section__sliderNav--arrows">
            <button class="prev" tabindex="-1">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="next" tabindex="-1">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>
</div>