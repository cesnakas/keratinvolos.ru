<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global \CMain $APPLICATION */
/** @global \CUser $USER */
/** @global \CDatabase $DB */
/** @var \CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var array $templateData */
/** @var \CBitrixComponent $component */
$this->setFrameMode(true);
?>

<ul class="user_nav user_nav__left">
	<li>
		<a href="<?=SITE_DIR?>about/">О GKHAIR</a>
	</li>
	<li class="nav_item__dropdown">
		<a href="<?=SITE_DIR?>catalog/">
			Каталог
			<i class="fas fa-chevron-down"></i>
		</a>
		<div class="catalog_submenu">
			<a href="#">Домашний уход с кератином</a>
			<a href="#">Окрашивание волос</a>
			<a href="#">Инструменты и аксессуары</a>
			<a href="#">Кератиновое выпрямление и восстановление волос</a>
		</div>
	</li>
	<li class="nav_item__dropdown">
		<a href="#">
			ИНФОРМАЦИЯ
			<i class="fas fa-chevron-down"></i>
		</a>
		<div class="catalog_submenu">
			<div class="catalog_submenu__left">
				<a href="#">О GKhair</a>
				<a href="#">Доставка и оплата</a>
				<a href="<?=SITE_DIR?>news/">Новости</a>
				<div class="nav_item__dropdown__inner">
					<a href="<?=SITE_DIR?>articles/">
						Статьи
						<i class="fas fa-chevron-down"></i>
					</a>
					<div class="catalog_submenu__inner">
						<a href="#">Семинар мастер-класс GKhair</a>
						<a href="#">Кератиновое выпрямление волос</a>
					</div>
				</div>
				<div class="nav_item__dropdown__inner">
					<a href="<?=SITE_DIR?>school/">
						Обучение
						<i class="fas fa-chevron-down"></i>
					</a>
					<div class="catalog_submenu__inner">
						<a href="#">Расписание семинаров GKhair</a>
					</div>
				</div>
				<div class="nav_item__dropdown__inner">
					<a href="<?=SITE_DIR?>gallery/">
						Галерии
						<i class="fas fa-chevron-down"></i>
					</a>
					<div class="catalog_submenu__inner">
						<a href="#">Видеоролики</a>
						<a href="#">Фотографии</a>
					</div>
				</div>
				<a href="<?=SITE_DIR?>certificates/">Сертификаты</a>
			</div>
			<div class="catalog_submenu__right">
				<a href="<?=SITE_DIR?>faq/">Вопросы и ответы</a>
				<a href="<?=SITE_DIR?>cooperation/">Сотрудничество</a>
				<a href="<?=SITE_DIR?>refund/">Возврат и Обмен</a>
				<a href="<?=SITE_DIR?>privacy/">Политика конфиденциальности</a>
			</div>
		</div>
	</li>
</ul>