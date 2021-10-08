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

<ul class="mobile_nav">
	<li>
		<a href="<?=SITE_DIR?>about/">О GKHAIR</a>
	</li>
	<li>
		<ul>
			<li class="w-mob-menu">
				<a href="javascript:void(0);" class="title_dropdown">
					КАТАЛОГ
                    <i class="fas fa-chevron-down"></i>
				</a>
				<div class="default_submenu">
					<a href="<?=SITE_DIR?>catalog/">Домашний уход с кератином</a>
					<a href="<?=SITE_DIR?>catalog/">Окрашивание волос</a>
					<a href="<?=SITE_DIR?>catalog/">Инструменты и аксессуары</a>
					<a href="<?=SITE_DIR?>catalog/">Кератиновое выпрямление и восстановление волос</a>
				</div>
			</li>
		</ul>
	</li>
	<li>
		<ul>
			<li class="w-mob-menu">
				<a href="javascript:void(0);" class="title_dropdown">
					ИНФОРМАЦИЯ
                    <i class="fas fa-chevron-down"></i>
				</a>
				<div class="default_submenu">
					<a href="<?=SITE_DIR?>about/">О GKhair</a>
					<a href="<?=SITE_DIR?>delivery/">Доставка и оплата</a>
					<a href="<?=SITE_DIR?>news/">Новости</a>
					<ul>
						<li class="w-mob-menu--inner">
							<a href="javascript:void(0);" class="title_dropdown--inner">
								Статьи
                                <i class="fas fa-chevron-down"></i>
							</a>
							<div class="default_submenu--inner">
								<a href="<?=SITE_DIR?>articles/">Семинар мастер-класс GKhair</a>
								<a href="<?=SITE_DIR?>articles/">Кератиновое выпрямление волос</a>
							</div>
						</li>
					</ul>
					<ul>
						<li class="w-mob-menu--inner">
							<a href="javascript:void(0);" class="title_dropdown--inner">
								Обучение
                                <i class="fas fa-chevron-down"></i>
							</a>
							<div class="default_submenu--inner">
								<a href="<?=SITE_DIR?>school/">Расписание семинаров GKhair</a>
							</div>
						</li>
					</ul>
					<ul>
						<li class="w-mob-menu--inner">
							<a href="javascript:void(0);" class="title_dropdown--inner">
								Галерии
                                <i class="fas fa-chevron-down"></i>
							</a>
							<div class="default_submenu--inner">
								<a href="<?=SITE_DIR?>gallery/">Видеоролики</a>
								<a href="<?=SITE_DIR?>gallery/">Фотографии</a>
							</div>
						</li>
					</ul>
					<a href="<?=SITE_DIR?>certificates/">Сертификаты</a>
					<a href="<?=SITE_DIR?>faq/">Вопросы и ответы</a>
					<a href="<?=SITE_DIR?>cooperation/">Сотрудничество</a>
					<a href="<?=SITE_DIR?>refund/">Возврат и Обмен</a>
					<a href="<?=SITE_DIR?>privacy/">Политика конфиденциальности</a>
				</div>
			</li>
		</ul>
	</li>
	<li>
		<a href="<?=SITE_DIR?>salonam/">САЛОНАМ</a>
	</li>
	<li>
		<a href="<?=SITE_DIR?>dealers/">ДИЛЛЕРАМ</a>
	</li>
	<li>
		<a href="<?=SITE_DIR?>contacts/">КОНТАКТЫ</a>
	</li>
</ul>