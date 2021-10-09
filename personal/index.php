<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Личный кабинет");
?>

    <!--<div class="section section_page_title">
        <div class="container">
            <p class="page_title">
                ЛИЧНЫЙ КАБИНЕТ
            </p>
            <div class="breadcrumbs">
                <ul>
                    <li>
                        <a href="index.php">
                            ГЛАВНАЯ
                        </a>
                    </li>
                    <li>
							<span>
								ЛИЧНЫЙ КАБИНЕТ
							</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->

    <div class="section section_cabinet">
        <div class="container">
            <div class="cabinet_wrapper">
                <div class="cabinet_left">
                    <p class="tabs_title">
                        ЛИЧНЫЙ КАБИНЕТ
                    </p>
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#1" role="tab" aria-controls="1" aria-selected="true">Панель управления</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#2" role="tab" aria-controls="2" aria-selected="false">Профиль</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#3" role="tab" aria-controls="3" aria-selected="false"> История заказов</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#4" role="tab" aria-controls="4" aria-selected="false">Избранные товары</a>
                        </li>
                        <li>
                            <a href="#" class="exit">
                                Выйти
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="cabinet_right">
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="1" role="tabpanel" aria-labelledby="1">
                            <p class="main_descr">
                                Добро пожаловать в личный кабинет!
                            </p>
                            <p class="main_descr">
                                На странице аккаунта вы можете посмотреть ваши недавние заказы, избранные товары, а также изменить пароль и основную информацию вашего профиля.
                            </p>
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <a class="cabinet_item" href="#">
	                						<span class="cabinet_item__title">
	                							ПРОФИЛЬ
	                						</span>
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/user_login_icon.png" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <a class="cabinet_item" href="#">
	                						<span class="cabinet_item__title">
	                							ИСТОРИЯ ЗАКАЗОВ
	                						</span>
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/cabinet_2.png" alt="">
                                    </a>
                                </div>
                                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <a class="cabinet_item" href="#">
	                						<span class="cabinet_item__title">
	                							ИЗБРАННЫЕ ТОВАРЫ
	                						</span>
                                        <img data-src="<?=SITE_TEMPLATE_PATH?>/img/cabinet_3.png" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="2" role="tabpanel" aria-labelledby="2">
                            <p class="main_title__tab">
                                Профиль
                            </p>
                            <form method="post">
                                <div class="cabinet_main__info">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form_input_wrapper">
                                                <div class="form_input">
                                                    <input type="text" name="name" required="" placeholder="Имя *">
                                                    <p class="form_input__error">
                                                        Заполните это поле!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form_input_wrapper">
                                                <div class="form_input">
                                                    <input type="text" name="name" required="" placeholder="Фамилия *">
                                                    <p class="form_input__error">
                                                        Заполните это поле!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form_input_wrapper">
                                                <div class="form_input">
                                                    <input type="text" name="name" required="" placeholder="Отоброжаемое Имя *">
                                                    <p class="form_input__error">
                                                        Заполните это поле!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form_input_wrapper">
                                                <div class="form_input">
                                                    <input type="email" name="email" required="" placeholder="Email *">
                                                    <p class="form_input__error">
                                                        Заполните это поле!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form_input_wrapper">
                                                <div class="form_input">
                                                    <input type="tel" name="phone" required="" placeholder="Телефон *">
                                                    <p class="form_input__error">
                                                        Заполните это поле!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <div class="form_input_wrapper">
                                                <div class="form_input">
                                                    <input type="text" name="name" required="" placeholder="Адрес Доставки *">
                                                    <p class="form_input__error">
                                                        Заполните это поле!
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="main_title__tab">
                                    Смена пароля
                                </p>
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form_input_wrapper">
                                            <div class="form_input">
                                                <input type="password" name="password" required="" placeholder="Действующий пароль *">
                                                <p class="form_input__error">
                                                    Заполните это поле!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form_input_wrapper">
                                            <div class="form_input">
                                                <input type="password" name="new_password" required="" placeholder="Новый пароль *">
                                                <p class="form_input__error">
                                                    Заполните это поле!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form_input_wrapper">
                                            <div class="form_input">
                                                <input type="password" name="accept_new_password" required="" placeholder="Подтвердите новый пароль *">
                                                <p class="form_input__error">
                                                    Заполните это поле!
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn_wrapper">
                                    <button type="submit" class="btn btn_yellow">
                                        Сохранить изменения
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="3" role="tabpanel" aria-labelledby="3">
                            <p class="main_title__tab">
                                История заказов
                            </p>
                            <div class="orders-wrapper">
                                <ul class="order-nav">
                                    <li>
                                        <a href="#" class="active">Все <span>заказы</span></a>
                                    </li>
                                    <li>
                                        <a href="#">Текущие</a>
                                    </li>
                                    <li>
                                        <a href="#">Завершенные</a>
                                    </li>
                                    <li>
                                        <a href="#">Отмененные</a>
                                    </li>
                                </ul>
                                <div class="orders">
                                    <table class="order-table">
                                        <thead>
                                        <tr>
                                            <th>Дата заказа</th>
                                            <th>Номер</th>
                                            <th>Итого</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>18.11.19</td>
                                            <td>№89898</td>
                                            <td>3200</td>
                                            <td class="open"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/order-ico.svg" alt=""></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td colspan="4">
                                                <div class="order-info">
                                                    <ul>
                                                        <li>
                                                            <p>Имя получателя:
                                                                <span>Александр Иванов</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Почта:
                                                                <span>sasha@gmail.com</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Телефон:
                                                                <span>7986744444444</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Отправка:
                                                                <span>СДЭК</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Адрес:
                                                                <span>г. Москва, 1 отделене</span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="product-inner">
                                                        <div class="product-item">
                                                            <div class="product-info">
                                                                <div class="product-img">
                                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_small_1.jpg" alt="">
                                                                </div>
                                                                <div class="product-name">
                                                                    <p>Название товара</p>

                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="detail-item">
                                                                    <p>Кол-во</p>
                                                                    <span>1</span>
                                                                </div>
                                                                <div class="detail-items">
                                                                    <div class="detail-item">
                                                                        <p>Цена</p>
                                                                        <span>2 000 ₽</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <p>Весь заказ</p>
                                                                        <span>2 000 ₽</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18.11.19</td>
                                            <td>№89898</td>
                                            <td>3200</td>
                                            <td class="open"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/order-ico.svg" alt=""></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td colspan="4">
                                                <div class="order-info">
                                                    <ul>
                                                        <li>
                                                            <p>Имя получателя:
                                                                <span>Александр Иванов</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Почта:
                                                                <span>sasha@gmail.com</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Телефон:
                                                                <span>7986744444444</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Отправка:
                                                                <span>СДЭК</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Адрес:
                                                                <span>г. Москва, 1 отделене</span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="product-inner">
                                                        <div class="product-item">
                                                            <div class="product-info">
                                                                <div class="product-img">
                                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_small_1.jpg" alt="">
                                                                </div>
                                                                <div class="product-name">
                                                                    <p>Название товара</p>

                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="detail-item">
                                                                    <p>Кол-во</p>
                                                                    <span>1</span>
                                                                </div>
                                                                <div class="detail-items">
                                                                    <div class="detail-item">
                                                                        <p>Цена</p>
                                                                        <span>2 000 ₽</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <p>Весь заказ</p>
                                                                        <span>2 000 ₽</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>18.11.19</td>
                                            <td>№89898</td>
                                            <td>2500</td>
                                            <td class="open"><img data-src="<?=SITE_TEMPLATE_PATH?>/img/order-ico.svg" alt=""></td>
                                        </tr>
                                        <tr class="hidden">
                                            <td colspan="4">
                                                <div class="order-info">
                                                    <ul>
                                                        <li>
                                                            <p>Имя получателя:
                                                                <span>Александр Иванов</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Почта:
                                                                <span>sasha@gmail.com</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Телефон:
                                                                <span>7986744444444</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Отправка:
                                                                <span>СДЭК</span>
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p>Адрес:
                                                                <span>г. Москва, 1 отделене</span>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <div class="product-inner">
                                                        <div class="product-item">
                                                            <div class="product-info">
                                                                <div class="product-img">
                                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_small_1.jpg" alt="">
                                                                </div>
                                                                <div class="product-name">
                                                                    <p>Название товара</p>

                                                                </div>
                                                            </div>
                                                            <div class="product-details">
                                                                <div class="detail-item">
                                                                    <p>Кол-во</p>
                                                                    <span>1</span>
                                                                </div>
                                                                <div class="detail-items">
                                                                    <div class="detail-item">
                                                                        <p>Цена</p>
                                                                        <span>2 000 ₽</span>
                                                                    </div>
                                                                    <div class="detail-item">
                                                                        <p>Весь заказ</p>
                                                                        <span>2 000 ₽</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="4" role="tabpanel" aria-labelledby="4">
                            <p class="main_title__tab">
                                Избранные товары
                            </p>
                            <div class="row">
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-6">
                                    <div class="product_item">
                                        <div class="product_image">
                                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
                                            <div class="user_action__block">
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/search_icon.png" alt="">
                                                </a>
                                                <a href="#">
                                                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                                                </a>
                                            </div>
                                            <a href="#" class="btn btn_yellow">
                                                <img data-src="<?=SITE_TEMPLATE_PATH?>/img/add_to_cart.png" alt="">
                                                В КОРЗИНУ
                                            </a>
                                        </div>
                                        <a href="#" class="product_descr">
												<span class="product_title">
													CBD Шампунь GKhair: CBD Shampoo Vegan Line
												</span>
                                            <span class="product_price">
													1 690 Р
												</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>