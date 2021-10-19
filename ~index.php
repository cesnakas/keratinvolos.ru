<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новая страница");
?>

    <?php
    $APPLICATION->IncludeComponent("bitrix:news.list", "slider",
        [
            "IBLOCK_ID" => "2",
            "IBLOCK_TYPE" => "slider",

            "DISPLAY_DATE" => "N",
            "DISPLAY_NAME" => "Y",
            "DISPLAY_PICTURE" => "Y",
            "DISPLAY_PREVIEW_TEXT" => "Y",

            "NEWS_COUNT" => "20",

            "SORT_BY1" => "ACTIVE_FROM",
            "SORT_ORDER1" => "DESC",
            "SORT_BY2" => "SORT",
            "SORT_ORDER2" => "ASC",

            "FILTER_NAME" => "",

            "DETAIL_URL" => "",

            "FIELD_CODE" => Array("ID"),
            "PROPERTY_CODE" => Array("DESCRIPTION"),
            "CHECK_DATES" => "Y",
            "PREVIEW_TRUNCATE_LEN" => "",
            "ACTIVE_DATE_FORMAT" => "d.m.Y",

            "SET_TITLE" => "N",
            "SET_BROWSER_TITLE" => "N",
            "SET_META_KEYWORDS" => "N",
            "SET_META_DESCRIPTION" => "N",

            "SET_LAST_MODIFIED" => "Y",
            "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
            "ADD_SECTIONS_CHAIN" => "Y",
            "HIDE_LINK_WHEN_NO_DETAIL" => "N",
            "PARENT_SECTION" => "",
            "PARENT_SECTION_CODE" => "",
            "INCLUDE_SUBSECTIONS" => "Y",
            "SET_STATUS_404" => "Y",
            "SHOW_404" => "Y",
            "MESSAGE_404" => "",

            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "CACHE_FILTER" => "Y",
            "CACHE_GROUPS" => "Y",

            "PAGER_TITLE" => "Новости",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => "",
            "PAGER_DESC_NUMBERING" => "N",
            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
            "PAGER_BASE_LINK_ENABLE" => "N",
            "PAGER_SHOW_ALL" => "N",
            "PAGER_BASE_LINK" => "",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "N",
            "PAGER_PARAMS_NAME" => "arrPager",

            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => ""
        ],
        false
    );?>

    <div class="section section_previlegues">
        <div class="container">
            <div class="previlegues_block">

                <div class="previlegues_item">
                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_1.png" alt="">
                    <p class="previlegues_title">ПОДАРКИ</p>
                    <p class="previlegues_descr">Образцы и пробники <br> каждому покупателю</p>
                </div>

                <div class="previlegues_item">
                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_2.png" alt="">
                    <p class="previlegues_title">БЕСПЛАТНАЯ ДОСТАВКА</p>
                    <p class="previlegues_descr">Бесплатная доставка <br> по России от 3990 руб.</p>
                </div>

                <div class="previlegues_item">
                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_3.png" alt="">
                    <p class="previlegues_title">СКИДКА 5%</p>
                    <p class="previlegues_descr">Скидка 5% при оплате <br> заказа онлайн</p>
                </div>

                <div class="previlegues_item">
                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_4.png" alt="">
                    <p class="previlegues_title">СПЕЦИАЛЬНЫЕ УСЛОВИЯ</p>
                    <p class="previlegues_descr">Специальные условия <br> для салонов и диллеров</p>
                </div>

            </div>
        </div>
    </div>

    <div class="section section_product_list">
        <div class="container">

            <p class="section_title">НАШИ ТОВАРЫ <span>GKHAIR</span></p>
            <p class="section_subtitle">В нашим интернет-магазне вы можете выбрать и <br> купить любые товары продукции GKhair</p>

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

            <div class="btn_wrapper">
                <a href="#" class="btn btn_transparent">СМОТРЕТЬ ВЕСЬ КАТАЛОГ</a>
            </div>

        </div>
    </div>



<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>