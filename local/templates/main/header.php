<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>

	<?php
	$APPLICATION->ShowHead();
	Asset::getInstance()->addString('<meta http-equiv="X-UA-Compatible" content="IE=edge">');
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width">');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/fontawesome/all.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/bootstrap/bootstrap.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-ui.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/slick/slick.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/libs/formstyler/jquery.formstyler.css');
	Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/css/app.css');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-2.2.4.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/jquery/jquery-ui.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/bootstrap/bootstrap.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/slick/slick.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/fancybox/jquery.fancybox.min.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/js/app.js');
	Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/libs/formstyler/jquery.formstyler.min.js');
	?>

	<title><?$APPLICATION->ShowTitle()?></title>

	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">

</head>
<body>

    <?$APPLICATION->ShowPanel()?>

    <!-- START HEADER -->
    <header id="main">

        <div class="header_top">
            <div class="container">
                <p class="promocode_line">
					<?php
					$APPLICATION->IncludeComponent("bitrix:main.include", "",
						[
							"AREA_FILE_SHOW" => "file",
							"PATH" => SITE_TEMPLATE_PATH."/include/header_top.php"
						]
					);?>
                </p>
            </div>
        </div>

        <div class="header_middle">
            <div class="container">

                <p class="header_middle__info">
                    ОФИЦИАЛЬНЫЙ ДИСТРИБЬЮТОР GKHAIR / GLOBAL KERATIN В РОССИИ
                </p>

                <div class="header_middle__contacts">
                    <p class="contact">
                        <span>ОПТ:</span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/phone_icon__gold.png" alt="">
						<?php
						$APPLICATION->IncludeComponent("bitrix:main.include", "",
							[
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include/phone_opt.php"
							]
						);?>
                    </p>
                    <p class="contact">
                        <span>ИНТЕРНЕТ МАГАЗИН:</span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/phone_icon__gold.png" alt="">
						<?php
						$APPLICATION->IncludeComponent("bitrix:main.include", "",
							[
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include/phone_shop.php"
							]
						);?>
                    </p>
                </div>

            </div>
        </div>

        <div class="header_bottom">
            <div class="container">

                <div class="menu_box">
                    <div class="hamburger">
                        <span class="line"></span>
                        <span class="line"></span>
                        <span class="line"></span>
                    </div>
                </div>

                <div class="mob_nav">

                    <form method="post"  class="search_form">
                        <input type="search" name="search" required="" placeholder="Поиск...">
                        <button type="submit" class="search_btn">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                        </button>
                    </form>

                    <?php
                    $APPLICATION->IncludeComponent("bitrix:menu", "nav_header-mobile",
                        [

                        ]
					);?>

                    <ul class="social">
                        <li>
                            <a href="https://www.instagram.com/gkhair_russia/" target="_blank">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/inst_fiol.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://vk.com/gkhairrussia" target="_blank">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/vk_fiol.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/GkhairRussiaMoscow/" target="_blank">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/fb_fiol.png" alt="">
                            </a>
                        </li>
                    </ul>
                    <p class="contact">
                        <span>ОПТ:</span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/phone_icon__gold.png" alt="">
						<?php
						$APPLICATION->IncludeComponent("bitrix:main.include", "",
							[
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include/phone_opt.php"
							]
						);?>
                    </p>
                    <p class="contact">
                        <span>ИНТЕРНЕТ МАГАЗИН:</span>
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/phone_icon__gold.png" alt="">
						<?php
						$APPLICATION->IncludeComponent("bitrix:main.include", "",
							[
								"AREA_FILE_SHOW" => "file",
								"PATH" => SITE_TEMPLATE_PATH."/include/phone_shop.php"
							]
						);?>
                    </p>
                </div>

                <ul class="social">
                    <li>
                        <a href="https://www.instagram.com/gkhair_russia/" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/inst_fiol.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://vk.com/gkhairrussia" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/vk_fiol.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/GkhairRussiaMoscow/" target="_blank">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/fb_fiol.png" alt="">
                        </a>
                    </li>
                </ul>
                <div class="header_center_nav">
                    <?php
                    $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "nav_header-left",
                        [
							"ROOT_MENU_TYPE" => "header-left",
							"MAX_LEVEL" => "2",
							"CHILD_MENU_TYPE" => "header-left",
							"MENU_CACHE_TYPE" => "Y",
							"MENU_CACHE_TIME" => "3600",
						]
                    );?>
                    <a href="<?=SITE_DIR?>" class="logo">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
                    </a>

                    <ul class="user_nav user_nav__right">
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

                </div>

                <ul class="user_panel">
                    <li>
                        <div class="search_wrapper">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="" class="search_icon">

							<?php
							$APPLICATION->IncludeComponent("bitrix:search.form", "",
								[
									"USE_SUGGEST" => "Y",
									"PAGE" => "#SITE_DIR#search/"
								]
							);?>

                            <!--<form method="post" class="search_form">
                                <input type="search" name="search" required="" placeholder="Поиск...">
                                <button type="submit" class="search_btn">
                                    <img src="<?/*=SITE_TEMPLATE_PATH*/?>/img/search_icon.png" alt="">
                                </button>
                                <div class="search_closed"></div>
                            </form>-->

                        </div>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                            <span class="amount">99</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#loginModal">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/user_icon.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" data-toggle="modal" data-target="#cartModal">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_icon.png" alt="">
                            <span class="amount">0</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </header>
    <!-- END HEADER -->

    <section class="content">

    <?php
    if (
        !CSite::InDir(SITE_DIR.'index.php') &&
        !CSite::InDir(SITE_DIR.'catalog/')
    ):
    ?>
        <div class="section section_page_title">
            <div class="container">
                <p class="page_title">
                    <?php
                    $APPLICATION->ShowTitle(false);
                    ?>
                </p>
                <div class="breadcrumbs">
					<?php
                    $APPLICATION->IncludeComponent("bitrix:breadcrumb", "",
                        [
							"SITE_ID" => "s1",
							"START_FROM" => "0",
							"PATH" => ""
						]
					);?>
                </div>
            </div>
        </div>
    <?php
    endif;
    ?>
