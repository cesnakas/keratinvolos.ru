<?php $home = true; ?>
<?include( 'tpl/header.php' );?>
	<!-- START CONTENT -->
	<section class="content">
		<div class="section section_page_title">
			<div class="container">
				<p class="page_title">
					КОРЗИНА <i class="fas fa-chevron-right"></i> ПОДТВЕРЖДЕНИЕ
				</p>
			</div>
		</div>
		<div class="section section_basket">
			<div class="container">
				<div class="basket-content">
					<div class="left-side">
						<form method="post" class="payment_form">
                            <ul class="dropdown_menu">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="title_dropdown"> ПОКУПАТЕЛЬ <img data-src="img/dropdown_arr.png" alt="" /> </a>
                                    <div class="default_submenu">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form_input_wrapper">
                                                    <div class="form_input">
                                                        <input type="text" name="name" required="" placeholder="ФИО*">
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
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <textarea name="comment" placeholder="Комментарий к заказу"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="title_dropdown"> ДОСТАВКА <img data-src="img/dropdown_arr.png" alt="" /> </a>
                                    <div class="default_submenu">
                                        <div class="row">
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form_input_wrapper">
                                                    <div class="form_input">
                                                        <input type="text" name="town" placeholder="Город доставки">
                                                        <p class="form_input__error">
                                                            Заполните это поле!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                                <div class="form_input_wrapper">
                                                    <div class="form_input">
                                                        <input type="text" name="address" placeholder="Адрес доставки">
                                                        <p class="form_input__error">
                                                            Заполните это поле!
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="radio_block">
                                            <p class="radio_title">
                                                Способ доставки
                                            </p>
                                            <div class="radio_btn_wrapper__inner">
                                                <div class="radio_btn">
                                                    <label class="wrapper">
                                                        Boxberry Курьер — 387 р.
                                                        <input type="radio" checked="checked" name="delivery_method" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="radio_btn">
                                                    <label class="wrapper">
                                                        CDEK Курьер — 276 р.
                                                        <input type="radio" name="delivery_method" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="radio_btn">
                                                    <label class="wrapper">
                                                        IML Курьер — 314 р.
                                                        <input type="radio" name="delivery_method" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="radio_btn">
                                                    <label class="wrapper">
                                                        Сберкурьер — 261 р.
                                                        <input type="radio" name="delivery_method" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="title_dropdown"> ОПЛАТА <img data-src="img/dropdown_arr.png" alt="" /> </a>
                                    <div class="default_submenu">
                                        <div class="radio_block">
                                            <div class="radio_btn_wrapper__inner">
                                                <div class="radio_btn">
                                                    <label class="wrapper">
                                                        <span class="radio_title__payment">Онлайн оплата Paymaster <small>(5% СКИДКА ПРИ ОПЛАТЕ ОНЛАЙН)</small></span> <span class="radio_descr__payment">С помощью банковских карт VISA и MasterCard, а так же Яндекс деньги и тд через систему электронных платежей Paymaster.</span>
                                                        <input type="radio" name="payment_method" checked="" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                                <div class="radio_btn">
                                                    <label class="wrapper">
                                                        <span class="radio_title__payment">Оплата банковской картой</span><span class="radio_descr__payment"> Оплата банковской картой курьеру при получении заказа.</span>
                                                        <input type="radio" name="payment_method" />
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </form>
					</div>
					<div class="right-side">
						<div class="summary">
							<p class="title"><span>СУММА ЗАКАЗА:</span></p>
							<ul>
                                <li class="summary_details">
                                    <p>CBD Кондиционер GKhair: CBD Conditioner Vegan Line <b>x2</b></p>
                                    <span>1 690 Р</span>
                                </li>
                                <li class="summary_details">
                                    <p>CBD Кондиционер GKhair: CBD Conditioner Vegan Line <b>x2</b></p>
                                    <span>1 690 Р</span>
                                </li>
								<li>
									<p>СУММА</p>
									<span>1 000 Р</span>
								</li>
								<li>
									<p>ДОСТАВКА</p>
                                    <span>1 000 Р</span>
								</li>
								<li>
									<p>КУПОН</p>
                                    <span>1 000 Р</span>
								</li>
                                <li class="total">
                                    <p>ИТОГО (с доставкой)</p>
                                    <span>1 000 Р</span>
                                </li>
							</ul>
                            <div class="btns">
                                <a href="#" class="btn btn_yellow">
                                    ПОДТВЕРДИТЬ ЗАКАЗ
                                </a>
                            </div>
						</div>
					</div>													
				</div>																							
			</div>
		</div>
	</section>
	<!-- END CONTENT -->
<!-- START FOOTER -->
    <div id="scroll">
        <a href="#main">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <div class="right_side__buttons">
        <a href="https://api.whatsapp.com/send?phone=79690697755&text=%D0%94%D0%BE%D0%B1%D1%80%D1%8B%D0%B9%20%D0%B4%D0%B5%D0%BD%D1%8C%2C%20%D1%8F%20%D0%BF%D0%BE%20%D0%BF%D0%BE%D0%B2%D0%BE%D0%B4%D1%83..." target="_blank">
            <img data-src="img/whatsupp.png" alt="">
        </a>
        <a href="#" data-toggle="modal" data-target="#callModal">
            <img data-src="img/phone.png" alt="">
        </a>
    </div>
    <footer>
        <div class="footer_bottom">
            <div class="container">
                <a href="#" class="site_map">
                    Карта сайта
                </a>
                <a href="#" class="logo">
                    <img data-src="img/logo.png" alt="">
                </a>
                <a href="#" class="logo_jw" target="_blank">
                    <img data-src="img/logo_jw.png" alt="">
                </a>
            </div>
        </div>
    </footer>
     <div class="modal fade login-modal" id="loginModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img data-src="img/close.png" alt="">
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
                        <img data-src="img/user_login_icon.png" alt="">
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
                    <img data-src="img/close.png" alt="">
                </a>
                <p class="modal_title">
                    КОРЗИНА
                </p>
                <div class="empty_cart_block">
                    <img data-src="img/empty_cart_icon.png" alt="">
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
                    <img data-src="img/close.png" alt="">
                </a>
                <p class="modal_title">
                    КОРЗИНА
                </p>
                <div class="cart_item_wrapper">
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
                        </span>
                        <span class="cart_item__right">
                            <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                            <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                        </span>
                    </a>
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
                        </span>
                        <span class="cart_item__right">
                            <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                            <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                        </span>
                    </a>
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
                        </span>
                        <span class="cart_item__right">
                            <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                            <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                        </span>
                    </a>
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
                        </span>
                        <span class="cart_item__right">
                            <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                            <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                        </span>
                    </a>
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
                        </span>
                        <span class="cart_item__right">
                            <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                            <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                        </span>
                    </a>
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
                        </span>
                        <span class="cart_item__right">
                            <small class="cart_item__title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</small>
                            <small class="cart_item__price"><b>1 х</b> 1 690 Р</small>
                        </span>
                    </a>
                    <a href="#" class="cart_item">
                        <span class="cart_item__img">
                            <img data-src="img/cart_img_1.png" alt="">
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
                    <img data-src="img/close_white.png" alt="">
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
                    <img data-src="img/close_white.png" alt="">
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
    <div class="modal fade thx-modal" id="thanksModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <a href="#" data-dismiss="modal" class="close">
                    <img src="img/close_white.png" alt="">
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
                            <img src="img/inst_fiol.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/vk_fiol.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/fb_fiol.png" alt="">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
<!-- END FOOTER -->
<script src="libs/jquery/jquery-2.2.4.min.js"></script>
<? include( 'tpl/page-nav.php' );?>
<script src="libs/jquery/jquery-ui.min.js"></script>
<script src="libs/bootstrap/bootstrap.min.js"></script>
<script src="libs/slick/slick.min.js"></script>
<script src="libs/fancybox/jquery.fancybox.min.js"></script>
<script src="js/app.js"></script>
<script src="libs/formstyler/jquery.formstyler.min.js"></script>
</body>
</html>