<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
?>

    </section>

    <div id="scroll">
        <a href="#main">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>

    <div class="right_side__buttons">
        <a href="https://api.whatsapp.com/send?phone=79690697755&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83..." target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/whatsupp.png" alt="">
        </a>
        <a href="#" data-toggle="modal" data-target="#callModal">
            <img src="<?=SITE_TEMPLATE_PATH?>/img/phone.png" alt="">
        </a>
    </div>

    <footer>
        <div class="footer_top">
            <a href="<?=SITE_DIR?>" class="logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="">
            </a>
            <div class="container">
                <div class="contact_socials_block">
                    <div class="contact_block">
                        <p class="footer_title">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_before.png" alt="">
                            КОНТАКТЫ
                        </p>
                        <p class="contact_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_phone.png" alt="">
							<?php
							$APPLICATION->IncludeComponent("bitrix:main.include", "",
								[
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include/phone_opt.php"
								]
							);?>
                        </p>
                        <p class="contact_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_phone.png" alt="">
                            <a href="tel:+79269210355">+7 (926) 921 03 55</a>
                        </p>
                        <p class="contact_item">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_phone.png" alt="">
							<?php
							$APPLICATION->IncludeComponent("bitrix:main.include", "",
								[
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_TEMPLATE_PATH."/include/phone_shop.php"
								]
							);?>
                        </p>
                    </div>
                    <div class="social_block">
                        <p class="social_name">МЫ В СОЦИАЛЬНЫХ СЕТЯХ:</p>
                        <ul class="socials">
                            <li>
                                <a href="#">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_inst.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_vk.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_fb.png" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer_menu__block">
                    <p class="footer_title">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_before.png" alt="">
                        МЕНЮ
                    </p>
                    <ul class="footer_menu">
                        <li>
                            <a href="<?=SITE_DIR?>about/">О GKhair</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>delivery/">Доставка и оплата</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>news/">Новости</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>articles/">Статьи</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>school/">Обучение</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>gallery/">Галерии</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>certificates/">Сертификаты</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_menu__block">
                    <p class="footer_title">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_before.png" alt="">
                        МЕНЮ
                    </p>
                    <ul class="footer_menu">
                        <li>
                            <a href="<?=SITE_DIR?>faq/">Вопросы и ответы</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>cooperation/">Сотрудничество</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>salonam/">Салонам</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>dealers/">Диллерам</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>refund/">Возврат и Обмен</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>privacy/">Политика конфиденциальности</a>
                        </li>
                        <li>
                            <a href="<?=SITE_DIR?>contacts/">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="footer_menu__block">
                    <p class="footer_title">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/footer_before.png" alt="">
                        КАТАЛОГ
                    </p>
                    <ul class="footer_menu">
                        <li>
                            <a href="#">Домашний уход</a>
                        </li>
                        <li>
                            <a href="#">Приборы и аксессуары для волос</a>
                        </li>
                        <li>
                            <a href="#">Выпрямление и восстановление</a>
                        </li>
                        <li>
                            <a href="#">Системы окрашивания</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer_bottom">
            <div class="container">
                <a href="#" class="site_map">
                    Карта сайта
                </a>
                <a href="#" class="logo_jw" target="_blank">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/logo_jw.png" alt="">
                </a>
            </div>
        </div>
    </footer>

    <div class="modal fade login-modal" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt="">
                </a>
                <form method="post">
                    <p class="modal_title">
                        ВОЙТИ
                    </p>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <label>Имя пользователя или телефон*</label>
                            <input type="text" name="name" required="">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <label>Пароль*</label>
                            <input type="password" name="password" required="">
                            <p class="form_input__error">
                                Неверный пароль!
                            </p>
                        </div>
                    </div>
                    <button type="submit" class="btn btn_yellow">
                        ВОЙТИ
                    </button>
                    <label class="check">
                        Запомнить меня <a href="#">Забыли пароль?</a>
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                    <div class="registered_block">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/user_login_icon.png" alt="">
                        <p>Нет аккаунта?</p>
                        <a href="#">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade empty-cart-modal" id="emptyCartModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt="">
                </a>
                <p class="modal_title">
                    КОРЗИНА
                </p>
                <div class="empty_cart_block">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/empty_cart_icon.png" alt="">
                    <p class="empty_info">
                        КОРЗИНА ПУСТА
                    </p>
                    <a href="#" class="btn btn_yellow">
                        В КАТАЛОГ
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade cart-modal" id="cartModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt="">
                </a>
                <p class="modal_title">
                    КОРЗИНА
                </p>
                <div class="cart_item_wrapper">
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                    <a href="#" class="cart_item">
                            <span class="cart_item__img">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/cart_img_1.png" alt="">
                            </span>
                        <span class="cart_item__right">
                                <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                                <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                            </span>
                    </a>
                </div>
                <p class="cart_total">
                    СУММА:
                    <span>
                            5 000 Р
                        </span>
                </p>
                <a href="#" class="btn btn_yellow__bordered" data-toggle="modal" data-target="#clickModal">
                    КУПИТЬ В 1 КЛИК
                </a>
                <a href="#" class="btn btn_yellow">
                    ОФОРМИТЬ ЗАКАЗ
                </a>
            </div>
        </div>
    </div>

    <div class="modal fade click-modal" id="clickModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    КУПИТЬ В 1 КЛИК
                </p>
                <form method="post">
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="name" required="" placeholder="Имя*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="email" name="email" required="" placeholder="Email*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="tel" name="phone" required="" placeholder="Телефон*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <label class="check">
                        <input type="checkbox" name="policy" checked="">
                        <span class="checkmark"></span>
                        <p>Я даю согласие на обработку моих персональных данных, по ФЗ №152.<a href="#" href="policy.php" target="_blank">Политика конфеденциальности</a></p>
                    </label>
                    <div class="btn_wrapper">
                        <button type="submit" class="btn btn_yellow">
                            КУПИТЬ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade click-modal" id="callModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    ЗАКАЗАТЬ ЗВОНОК
                </p>
                <form method="post">
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="name" required="" placeholder="Имя*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="tel" name="phone" required="" placeholder="Телефон*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <label class="check">
                        <input type="checkbox" name="policy" checked="">
                        <span class="checkmark"></span>
                        <p>Я даю согласие на обработку моих персональных данных, по ФЗ №152.<a href="#" href="policy.php" target="_blank">Политика конфеденциальности</a></p>
                    </label>
                    <div class="btn_wrapper">
                        <button type="submit" class="btn btn_yellow">
                            ЖДУ ЗВОНКА
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade click-modal" id="priceModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    ЗАПРОСИТЬ ПРАЙС-ЛИСТ
                </p>
                <form method="post">
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="name" required="" placeholder="Имя*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="city" required="" placeholder="Город*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="email" name="email" required="" placeholder="Email*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="tel" name="phone" required="" placeholder="Телефон*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <label class="check">
                        <input type="checkbox" name="policy" checked="">
                        <span class="checkmark"></span>
                        <p>Я даю согласие на обработку моих персональных данных, по ФЗ №152.<a href="#" href="policy.php" target="_blank">Политика конфеденциальности</a></p>
                    </label>
                    <div class="btn_wrapper">
                        <button type="submit" class="btn btn_yellow">
                            ЗАПРОСИТЬ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade click-modal" id="questionModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    ЗАДАТЬ ВОПРОС
                </p>
                <form method="post">
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="name" required="" placeholder="Имя*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="city" required="" placeholder="Город*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="email" name="email" required="" placeholder="Email*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="tel" name="phone" required="" placeholder="Телефон*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <textarea name="question" placeholder="Комментарий"></textarea>
                    <label class="check">
                        <input type="checkbox" name="policy" checked="">
                        <span class="checkmark"></span>
                        <p>Я даю согласие на обработку моих персональных данных, по ФЗ №152.<a href="policy.php" target="_blank">Политика конфеденциальности</a></p>
                    </label>
                    <div class="btn_wrapper">
                        <button type="submit" class="btn btn_yellow">
                            ЗАДАТЬ ВОПРОС
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade more-modal" id="moreModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt="">
                </a>
                <div class="modal_wrapper">
                    <div class="modal_left">
                        <img src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="">
                        <div class="hover_block">
                            <a href="#" class="btn btn_yellow">
                                Подробнее
                            </a>
                        </div>
                    </div>
                    <div class="modal_right product_right">
                        <div class="product_title_block">
                            <p class="product_title">
                                CBD Кондиционер GKhair: CBD Conditioner Vegan Line
                            </p>
                            <a href="#" class="add_favorite">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/favorite_icon.png" alt="">
                            </a>
                        </div>
                        <div class="product_status_block">
                            <p class="product_status">
                                <img src="<?=SITE_TEMPLATE_PATH?>/img/accept.png" alt="">
                                В наличии
                            </p>
                            <div class="stars_block">
                                <a href="#" class="star current_star">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png" alt="">
                                </a>
                                <a href="#" class="star">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png" alt="">
                                </a>
                                <a href="#" class="star">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png" alt="">
                                </a>
                                <a href="#" class="star">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png" alt="">
                                </a>
                                <a href="#" class="star">
                                    <img src="<?=SITE_TEMPLATE_PATH?>/img/star.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="price_wrapper">
                            <div class="old_price_wrapper">
                                <p class="old_price">
                                    2 590 Р/шт
                                </p>
                                <p class="code">
                                    Цена с промокодом - <span>LETO21</span>
                                </p>
                            </div>
                            <div class="new_price_wrapper">
                                <p class="new_price">
                                    1 690 Р/шт
                                </p>
                                <p class="price_w_code">
                                    1352 Р/шт
                                </p>
                            </div>
                            <div class="product_nav">
                                <div class="qty">
                                    <button class="number-minus" type="button" onclick="this.closest('.qty').querySelectorAll('.number')[0].stepDown();">
                                        -
                                    </button>
                                    <div class="input">
                                        <input type="number" class="number" step="1" min="0" value="1" readonly="">
                                    </div>
                                    <button class="number-plus" type="button" onclick="this.closest('.qty').querySelectorAll('.number')[0].stepUp();">
                                        +
                                    </button>
                                </div>
                                <a href="#" class="btn btn_yellow">
                                    В КОРЗИНУ
                                </a>
                                <a href="#" class="btn btn_yellow__bordered">
                                    КУПИТЬ В 1 КЛИК
                                </a>
                            </div>
                            <div class="more_modal__descr">
                                <p class="descr">
                                    Современное, актуальное решение, которое отвечает выбранному образу жизни, ценностям, и делает волосы невероятно красивыми и ухоженными. Кондиционер смягчает, предотвращает ломкость, восстанавливает, дарит шелковый блеск и гладкость. Средство блестяще справляется с задачей быть этичным продуктом, а также выполняет функцию super food для здоровья и ухоженного вида волос. Благодаря совместному действию масла каннабиса и смеси веганского протеина из Киноа и Гороха, кондиционер отлично “кормит” их изнутри и ухаживает по всей длине от корней до кончиков.
                                </p>
                                <ul>
                                    <li>
                                        <p>
                                            Продукт интересен:
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            - 100% актуальностью
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            - салонным качеством
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            - эффектным результатом на волосах
                                        </p>
                                    </li>
                                    <li>
                                        <p>
                                            - простотой и комфортом во время использования
                                        </p>
                                    </li>
                                </ul>
                                <p class="descr_inner">
                                    Кондиционер CBD Shampoo усиливается, действуя вместе с шампунем из веганской линии Vegan-Line: дуэт окружает волосы максимальной заботой, дарит красоту, блеск, силу и здоровье.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade click-modal" id="deelersModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    СТАТЬ ПАРТНЕРОМ
                </p>
                <form method="post">
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="name" required="" placeholder="Имя*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="city" required="" placeholder="Город*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="email" name="email" required="" placeholder="Email*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="tel" name="phone" required="" placeholder="Телефон*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <textarea name="question" placeholder="Комментарий"></textarea>
                    <label class="check">
                        <input type="checkbox" name="policy" checked="">
                        <span class="checkmark"></span>
                        <p>Я даю согласие на обработку моих персональных данных, по ФЗ №152.<a href="#" href="policy.php" target="_blank">Политика конфеденциальности</a></p>
                    </label>
                    <div class="btn_wrapper">
                        <button type="submit" class="btn btn_yellow">
                            СТАТЬ ПАРТНЕРОМ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade thx-modal" id="thanksModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    БЛАГОДАРИМ ЗА ДОВЕРИЕ
                </p>
                <p class="modal_click__descr">
                    В ближайшее время наши специалисты свяжутся с Вами.
                </p>
                <ul class="modal_socials">
                    <li>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/inst_fiol.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/vk_fiol.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="<?=SITE_TEMPLATE_PATH?>/img/fb_fiol.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade click-modal" id="proModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/close_white.png" alt="">
                </a>
                <p class="modal_click__title">
                    ЗАПРОСИТЬ ПРАЙС-ЛИСТ
                </p>
                <form method="post">
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="name" required="" placeholder="Имя*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="tel" name="phone" required="" placeholder="Телефон*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="select-block">
                        <select name="1" class="styler">
                            <option value="1">Мастер профессионал</option>
                            <option value="2">Представитель салона красоты</option>
                            <option value="3">Оптовый покупатель</option>
                        </select>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="text" name="city" required="" placeholder="Город*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <div class="form_input_wrapper">
                        <div class="form_input">
                            <input type="email" name="email" required="" placeholder="Email*">
                            <p class="form_input__error">
                                Заполните это поле!
                            </p>
                        </div>
                    </div>
                    <textarea name="question" placeholder="Комментарий"></textarea>
                    <label class="check">
                        <input type="checkbox" name="policy" checked="">
                        <span class="checkmark"></span>
                        <p>Я даю согласие на обработку моих персональных данных, по ФЗ №152.<a href="#" href="policy.php" target="_blank">Политика конфеденциальности</a></p>
                    </label>
                    <div class="btn_wrapper">
                        <button type="submit" class="btn btn_yellow">
                            ЗАПРОСИТЬ
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>
</html>