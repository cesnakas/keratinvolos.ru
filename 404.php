<?php
include_once ($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/urlrewrite.php');

CHTTP::SetStatus("404 Not Found");
@define("ERROR_404", "Y");

require ($_SERVER['DOCUMENT_ROOT'].'/bitrix/header.php');
$APPLICATION->SetTitle('404 Not Found');

$APPLICATION->SetPageProperty("not_show_nav_chain", "Y");
?>

    <!--<div class="section section_page_title">
        <div class="container">
            <p class="page_title">
                ОШИБКА
            </p>
        </div>
    </div>-->

    <div class="section_error">
        <div class="container">
            <p class="title">404</p>
            <p class="subtitle">Запрашиваемая страница не найдена.</p>
            <p class="descr">
                Предлагаем вам вернуться на <a href="<?=SITE_DIR?>">Главную страницу</a> сайта <br> или связаться с нами по телефону: <a href="tel:+78007074868">+7(800) 707 48 68</a> , <a href="tel:+79629210355">+7(962) 921 03 55</a>, <a href="tel:+79690697755">+7(969) 069 77 55</a>
            </p>
        </div>
    </div>

<?php
require ($_SERVER['DOCUMENT_ROOT'].'/bitrix/footer.php');
?>