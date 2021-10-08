<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>

    <div class="section section_basket">
        <div class="container">
            <div class="basket-content">
                <div class="left-side">
                    <div class="basket-table">
                        <table>
                            <thead>
                            <tr>
                                <th> </th>
                                <th>ТОВАР</th>
                                <th>ЦЕНА</th>
                                <th>КОЛИЧЕСТВО</th>
                                <th>СУММА</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    <a href="#" class="remove">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.7998 1.81445L8.94043 7.625L14.7998 13.4355L13.335 14.9004L7.47559 9.08984L1.66504 14.9004L0.200195 13.4355L6.01074 7.625L0.200195 1.81445L1.66504 0.349609L7.47559 6.16016L13.335 0.349609L14.7998 1.81445Z" fill="#a7a7a7"/>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <div class="product-info">
                                        <div class="product-img">
                                            <img data-src="img/basket_1.jpg" alt="">
                                        </div>
                                        <div class="product-right">
                                            <p class="title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>556.79 P</p>
                                </td>
                                <td >
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
                                </td>
                                <td >
                                    <p class="subtotal">556.79 P</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="remove">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.7998 1.81445L8.94043 7.625L14.7998 13.4355L13.335 14.9004L7.47559 9.08984L1.66504 14.9004L0.200195 13.4355L6.01074 7.625L0.200195 1.81445L1.66504 0.349609L7.47559 6.16016L13.335 0.349609L14.7998 1.81445Z" fill="#a7a7a7"/>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <div class="product-info">
                                        <div class="product-img">
                                            <img data-src="img/basket_1.jpg" alt="">
                                        </div>
                                        <div class="product-right">
                                            <p class="title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>556.79 P</p>
                                </td>
                                <td>
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
                                </td>
                                <td>
                                    <p class="subtotal">556.79 P</p>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="#" class="remove">
                                        <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.7998 1.81445L8.94043 7.625L14.7998 13.4355L13.335 14.9004L7.47559 9.08984L1.66504 14.9004L0.200195 13.4355L6.01074 7.625L0.200195 1.81445L1.66504 0.349609L7.47559 6.16016L13.335 0.349609L14.7998 1.81445Z" fill="#a7a7a7"/>
                                        </svg>
                                    </a>
                                </td>
                                <td>
                                    <div class="product-info">
                                        <div class="product-img">
                                            <img data-src="img/basket_1.jpg" alt="">
                                        </div>
                                        <div class="product-right">
                                            <p class="title">CBD Кондиционер GKhair: CBD Conditioner Vegan Line</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>556.79 P</p>
                                </td>
                                <td >
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
                                </td>
                                <td>
                                    <p class="subtotal">556.79 P</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="btn_wrapper__inner">
                        <form method="post">
                            <div class="form_input">
                                <input type="text" name="promocode" required="" placeholder="Введите код купона">
                                <p class="form_input__error">
                                    Заполните это поле!
                                </p>
                            </div>
                            <button type="submit" class="btn btn_fiol">
                                ПРИМЕНИТЬ КОД
                            </button>
                        </form>
                        <a href="#" class="btn btn_fiol__bordered" data-toggle="modal" data-target="#giftModal">
                            ВЫБРАТЬ ПОДАРОК
                        </a>
                    </div>
                </div>
                <div class="right-side">
                    <div class="summary">
                        <p class="title"><span>СУММА ЗАКАЗА:</span></p>
                        <ul>
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
                            <a href="#" class="btn btn_yellow__bordered">
                                КУПИТЬ В 1 КЛИК
                            </a>
                            <a href="#" class="btn btn_yellow">
                                ОФОРМИТЬ ЗАКАЗ
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>