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

$arViewModeList = $arResult['VIEW_MODE_LIST'];

$arViewStyles = array(
	'LIST' => array(
		'CONT' => 'bx_sitemap',
		'TITLE' => 'bx_sitemap_title',
		'LIST' => 'bx_sitemap_ul',
	),
	'LINE' => array(
		'CONT' => 'bx_catalog_line',
		'TITLE' => 'bx_catalog_line_category_title',
		'LIST' => 'bx_catalog_line_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/line-empty.png'
	),
	'TEXT' => array(
		'CONT' => 'bx_catalog_text',
		'TITLE' => 'bx_catalog_text_category_title',
		'LIST' => 'bx_catalog_text_ul'
	),
	'TILE' => array(
		'CONT' => 'bx_catalog_tile',
		'TITLE' => 'bx_catalog_tile_category_title',
		'LIST' => 'bx_catalog_tile_ul',
		'EMPTY_IMG' => $this->GetFolder().'/images/tile-empty.png'
	)
);
$arCurView = $arViewStyles[$arParams['VIEW_MODE']];

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>

<div class="product_list__wrapper">

	<div class="product_list__left">
		<div class="product_list__item">

			<a href="#" class="product_list__title">
                <?=$arResult['SECTIONS']['0']['NAME']?>
            </a>

			<ul class="product_list__descr">
				<? foreach ($arResult['SECTIONS'] as $arSection): ?>
				<li>
                    <!--<pre><?/*var_dump($arSection)*/?></pre>-->
                    <a href="<?=$arSection['SECTION_PAGE_URL']?>">
                        <?=$arSection['NAME']?>
                    </a>
                </li>
                <!--
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
				-->
                <? endforeach; ?>
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

<?php
// foreach ($arResult['SECTIONS'] as &$arSection) {
?>

<?php
// }
?>
