<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("1С-Битрикс: Управление сайтом");
?>

	<div class="section section_main">
		<div class="main_slider carousel" data-items-xl="1" data-items-lg="1" data-items-md="1" data-items-sm="1" data-scroll-xl="1" data-scroll-lg="1" data-scroll-md="1" data-scroll-sm="1" data-slick='{"dots": true, "fade": false}'>
			<div class="slider_item" style="background: url('<?=SITE_TEMPLATE_PATH?>/img/main_slider_bg_1.webp') center no-repeat; background-size: cover;">
				<div class="container">
					<h1 class="main_slider__title">
						<span>GKHAIR</span>
						ОФИЦИАЛЬНАЯ <br> ПРОДУКЦИЯ
					</h1>
					<a href="#" class="btn btn_yellow">
						СМОТРЕТЬ КАТАЛОГ
					</a>
				</div>
			</div>
			<div class="slider_item" style="background: url('<?=SITE_TEMPLATE_PATH?>/img/main_slider_bg_2.webp') center no-repeat; background-size: cover;">
				<div class="container">
					<h1 class="main_slider__title">
						<span>GKHAIR</span>
						ОФИЦИАЛЬНАЯ <br> ПРОДУКЦИЯ
					</h1>
					<a href="#" class="btn btn_yellow">
						СМОТРЕТЬ КАТАЛОГ
					</a>
				</div>
			</div>
			<div class="slider_item" style="background: url('<?=SITE_TEMPLATE_PATH?>/img/main_slider_bg_3.webp') center no-repeat; background-size: cover;">
				<div class="container">
					<h1 class="main_slider__title">
						<span>GKHAIR</span>
						ОФИЦИАЛЬНАЯ <br> ПРОДУКЦИЯ
					</h1>
					<a href="#" class="btn btn_yellow">
						СМОТРЕТЬ КАТАЛОГ
					</a>
				</div>
			</div>
		</div>
		<div class="section__sliderNav d-flex">
			<div class="section__sliderNav--arrows">
				<button class="prev" tabindex="-1">
					<i class="fas fa-chevron-left"></i>
				</button>
				<button class="next" tabindex="-1">
					<i class="fas fa-chevron-right"></i>
				</button>
			</div>
		</div>
	</div>

	<div class="section section_previlegues">
		<div class="container">
			<div class="previlegues_block">
				<div class="previlegues_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_1.png" alt="">
					<p class="previlegues_title">
						ПОДАРКИ
					</p>
					<p class="previlegues_descr">
						Образцы и пробники <br> каждому покупателю
					</p>
				</div>
				<div class="previlegues_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_2.png" alt="">
					<p class="previlegues_title">
						БЕСПЛАТНАЯ ДОСТАВКА
					</p>
					<p class="previlegues_descr">
						Бесплатная доставка <br> по России от 3990 руб.
					</p>
				</div>
				<div class="previlegues_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_3.png" alt="">
					<p class="previlegues_title">
						СКИДКА 5%
					</p>
					<p class="previlegues_descr">
						Скидка 5% при оплате <br> заказа онлайн
					</p>
				</div>
				<div class="previlegues_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/previlegues_4.png" alt="">
					<p class="previlegues_title">
						СПЕЦИАЛЬНЫЕ УСЛОВИЯ
					</p>
					<p class="previlegues_descr">
						Специальные условия <br> для салонов и диллеров
					</p>
				</div>
			</div>
		</div>
	</div>

	<div class="section section_product_list">
		<div class="container">
			<p class="section_title">
				НАШИ ТОВАРЫ <span>GKHAIR</span>
			</p>
			<p class="section_subtitle">
				В нашим интернет-магазне вы можете выбрать и <br> купить любые товары продукции GKhair
			</p>
			<div class="product_list__wrapper">
				<div class="product_list__left">
					<div class="product_list__item">
						<a href="#" class="product_list__title">
							ДОМАШНИЙ УХОД С КЕРАТИНОМ
						</a>
						<ul class="product_list__descr">
							<li>
								<a href="#">
									Шампуни и кондиционеры
								</a>
							</li>
							<li>
								<a href="#">
									Маски с кератином
								</a>
							</li>
							<li>
								<a href="#">
									Крема для волос
								</a>
							</li>
							<li>
								<a href="#">
									Спреи для волос
								</a>
							</li>
							<li>
								<a href="#">
									Сыворотки и масла
								</a>
							</li>
							<li>
								<a href="#">
									Стайлинг для волос
								</a>
							</li>
							<li>
								<a href="#">
									Наборы GKhair
								</a>
							</li>
						</ul>
						<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_1.png" alt="" class="product_list_img">
					</div>
				</div>
				<div class="product_list__right">
					<div class="product_list__right__branch">
						<div class="product_list__item product_list__item__branch">
							<a href="#" class="product_list__title">
								ОКРАШИВАНИЕ ВОЛОС
							</a>
							<ul class="product_list__descr">
								<li>
									<a href="#">
										Крем краситель для волос
									</a>
								</li>
								<li>
									<a href="#">
										Осветляющие средства
									</a>
								</li>
								<li>
									<a href="#">
										Оксиданты
									</a>
								</li>
								<li>
									<a href="#">
										Защитная добавка
									</a>
								</li>
								<li>
									<a href="#">
										Фиксатор цвета
									</a>
								</li>
							</ul>
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_2.png" alt="" class="product_list_img">
						</div>
						<div class="product_list__item product_list__item__branch">
							<a href="#" class="product_list__title product_list__title__inner">
								ИНСТРУМЕНТЫ И АКСЕССУАРЫ
							</a>
							<ul class="product_list__descr">
								<li>
									<a href="#">
										Электроприборы
									</a>
								</li>
								<li>
									<a href="#">
										Расчески
									</a>
								</li>
								<li>
									<a href="#">
										Аксессуары
									</a>
								</li>
							</ul>
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_3.png" alt="" class="product_list_img">
						</div>
					</div>
					<div class="product_list__item product_list__item__bottom">
						<a href="#" class="product_list__title">
							КЕРАТИНОВОЕ ВЫПРЯМЛЕНИЕ И ВОССТАНОВЛЕНИЕ ВОЛОС
						</a>
						<ul class="product_list__descr">
							<li>
								<a href="#">
									Кератин для волос
								</a>
							</li>
						</ul>
						<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_list_4.webp" alt="" class="product_list_img">
					</div>
				</div>
			</div>
			<div class="btn_wrapper">
				<a href="#" class="btn btn_transparent">
					СМОТРЕТЬ ВЕСЬ КАТАЛОГ
				</a>
			</div>
		</div>
	</div>

	<div class="section section_about">
		<div class="container">
			<p class="section_title">
				ОФИЦИАЛЬНЫЙ САЙТ <br> ДИСТРИБЬЮТОРА <span>GKHAIR</span>
			</p>
			<p class="section_subtitle">
				Global keratin в России предлагает уникальные продукты
			</p>
			<p class="about_descr">
				GKhair, и официальный дистрибьютор GKhair в России предлагает профессиональные продукты из натуральных компонентов, которые легки в применении, но с быстрым эффектом — это инновационные средства по уходу за волосами GKhair (Global Keratin). Опытные мастера свидетельствуют: составы GKhair сдействительно способны сделать каждую прядь здоровой, а любую прическу — безупречной!
			</p>
			<p class="about_descr">
				Серии продуктов на официальном сайте GKhair - это средства с кератином для выпрямления и окрашивания, восстановления и лечения - средства с новым уровнем для салонного ухода за волосами и кожей головы. Эффективность формул GKhair доказана клиническими исследованиями и подтверждена многочисленными отзывами. Если ваш салон стремиться к профессиональному совершенству, то продукты GKhair — надежные средства для достижения этой цели. Мы, официальный дистрибьютор GKhair в России, представляем 4 аргумента, которые помогут вам в этом убедиться:
			</p>
			<div class="about_item_wrapper">
				<div class="about_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/guarantee_1.png" alt="">
					<div class="about_item_right">
						<p class="about_item__title">
							ГАРАНТИРОВАННЫЙ РЕЗУЛЬТАТ
						</p>
						<p class="about_item__descr">
							Ошеломительный эффект, стоит лишь попробовать...
						</p>
					</div>
				</div>
				<div class="about_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/guarantee_2.png" alt="">
					<div class="about_item_right">
						<p class="about_item__title">
							ПРЕМИАЛЬНОЕ КАЧЕСТВО
						</p>
						<p class="about_item__descr">
							Содержит натуральный коллаген.
						</p>
					</div>
				</div>
				<div class="about_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/guarantee_3.png" alt="">
					<div class="about_item_right">
						<p class="about_item__title">
							БЕЗОПАСНОСТЬ
						</p>
						<p class="about_item__descr">
							Натуральные и экологичные компоненты.
						</p>
					</div>
				</div>
				<div class="about_item">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/guarantee_4.png" alt="">
					<div class="about_item_right">
						<p class="about_item__title">
							ЭКОНОМИЧНОСТЬ
						</p>
						<p class="about_item__descr">
							Расходуется минимально, благодаря концентрации.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section_product_top">
		<div class="container">
			<p class="section_title">
				ТОП ПРОДУКЦИЯ <span>GKHAIR</span>
			</p>
			<p class="section_subtitle">
				Посмотрите наши лучшие предложения <br>продукции Gkhair
			</p>
			<div class="product_top_slider__wrapper">
				<div class="product_top_slider carousel" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-scroll-xl="1" data-scroll-lg="1" data-scroll-md="1" data-scroll-sm="1" data-slick='{"dots": false, "fade": false}'>
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_4.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
						<div class="product_item">
							<div class="product_image">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_4.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
						<div class="product_item">
							<div class="product_image">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_4.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
						<div class="product_item">
							<div class="product_image">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_4.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
						<div class="product_item">
							<div class="product_image">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_4.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
						<div class="product_item">
							<div class="product_image">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_4.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
						<div class="product_item">
							<div class="product_image">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
				<div class="section__sliderNav d-flex">
					<div class="section__sliderNav--arrows">
						<button class="prev" tabindex="-1">
							<i class="fas fa-chevron-left"></i>
						</button>
						<button class="next" tabindex="-1">
							<i class="fas fa-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="btn_wrapper">
				<a href="#" class="btn btn_transparent">
					ПОСМОТРЕТЬ ВСЕ
				</a>
			</div>
		</div>
	</div>

	<div class="section section_video">
		<div class="container">
			<div class="section_video__wrapper">
				<div class="main_video">
					<a href="#" class="video_block">
						<img data-src="<?=SITE_TEMPLATE_PATH?>/img/video_poster_1.jpg" alt="" class="video_poster">
						<span class="play_btn">
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/play_btn.png" alt="">
							</span>
					</a>
				</div>
				<div class="main_video__descr">
					<p class="title_inner">
						Официальный сайт GKhair представляет видео обзоры о продукции <span>Global Keratin</span>
					</p>
					<p class="descr">
						Как вернуть волосам жизненную силу и блеск? Чем окрасить локоны без вреда для их здоровья? Что поможет выпрямить самые непослушные пряди? Официальный дистрибьютор Global Keratin в России знает ответы на все вопросы по уходу за волосами.
					</p>
					<p class="descr">
						Мы представляем продукцию известного мирового бренда с подробными видео обзорами от технолога компании GKhair Russia. Смотрите наши короткие ролики, чтобы разобраться в многообразии средств и всегда знать, какое именно подойдет для ваших целей.
					</p>
					<p class="descr">
						Производитель рекомендует профессиональную косметику для ухода за волосами в салонах красоты и парикмахерских. Любой мастер сможет использовать продукцию с официального сайта GKhair и получать непревзойденный эффект.
					</p>
					<a href="#" class="btn btn_yellow">
						СМОТРЕТЬ ВСЕ ВИДЕО
					</a>
				</div>
			</div>
			<div class="small_video_block">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<a href="#" class="video_block video_block__small">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/video_poster_2.jpg" alt="" class="video_poster">
							<span class="play_btn">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/play_btn.png" alt="">
								</span>
						</a>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<a href="#" class="video_block video_block__small">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/video_poster_3.jpg" alt="" class="video_poster">
							<span class="play_btn">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/play_btn.png" alt="">
								</span>
						</a>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
						<a href="#" class="video_block video_block__small">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/video_poster_4.jpg" alt="" class="video_poster">
							<span class="play_btn">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/play_btn.png" alt="">
								</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section_product_top section_product_new">
		<div class="container">
			<p class="section_title">
				НОВИНКИ ОТ <span>GKHAIR</span>
			</p>
			<p class="section_subtitle">
				Посмотрите наши новые поступления <br>товаров от продукции Gkhair
			</p>
			<div class="product_top_slider__wrapper">
				<div class="product_top_slider carousel" data-items-xl="4" data-items-lg="3" data-items-md="2" data-items-sm="1" data-scroll-xl="1" data-scroll-lg="1" data-scroll-md="1" data-scroll-sm="1" data-slick='{"dots": false, "fade": false}'>
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_3.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
					<div class="slider_item">
						<div class="product_item">
							<div class="product_image">
								<div class="labels_block">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_1.png" alt="" class="label">
									<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_label_2.png" alt="" class="label">
								</div>
								<img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="" class="product_img">
								<div class="user_action__block">
									<a href="#" data-toggle="modal" data-target="#moreModal">
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
				<div class="section__sliderNav d-flex">
					<div class="section__sliderNav--arrows">
						<button class="prev" tabindex="-1">
							<i class="fas fa-chevron-left"></i>
						</button>
						<button class="next" tabindex="-1">
							<i class="fas fa-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="btn_wrapper">
				<a href="#" class="btn btn_transparent">
					ПОСМОТРЕТЬ ВСЕ
				</a>
			</div>
		</div>
	</div>

	<div class="section section_about section_about__inner">
		<div class="container">
			<p class="section_title">
				<span>Продукция GKhair</span>: купить <br> профессиональные средства <br> для сияющих волос
			</p>
			<p class="about_descr">
				Невзрачный оттенок, секущиеся кончики, жесткая шевелюра — проблемы, которые посетительницы салонов решаются доверить только опытным мастерам. Иной раз дамы приходят к парикмахеру в отчаянии, когда в результате частых укладок, завивки и окраски волосы практически полностью теряют жизненную силу. Профессионалы знают, как справиться даже с самыми сложными ситуациями. На помощь приходит продукция всемирно известного бренда GKhair, купить которую можно у официальных представителей компании Global Keratin.
			</p>
			<p class="section_subtitle">
				Природная сила составов Global Keratin (Глобал Кератин): купить «оружие» настоящих мастеров
			</p>
			<p class="about_descr">
				Парикмахеры нового поколения и те, кто опробовал действие кератина на себе, нередко называют его чудодейственным препаратом. Еще бы: эффект заметен после первой процедуры. На самом деле никакого волшебства нет — только чистая наука. Приведем факты:
			</p>
			<p class="about_descr">
				Для нашего организма кератин – вещество естественное: содержится в верхнем кожном слое, ногтях и волосах. Именно это сходство лежит в основе уникального действия линеек Global Keratin. Купить в Москве эту продукцию сегодня стремятся салоны VIP-класса.
			</p>
			<p class="about_descr">
				Впервые свойствами кератина в 1930-х годах заинтересовался молекулярный биолог и физик из Великобритании Уильям Астбери. Он провел ряд исследований, в ходе которых были открыты защитные и восстановительные качества белка.
			</p>
			<p class="about_descr">
				Выводы англичанина стали фундаментом для создания высокоэффективных средств ухода и лечения поврежденных волос. Научные разработки нового уровня в этой области принадлежат американским ученым.
			</p>
			<p class="about_descr">
				В 2007 году компания Global Keratin выпустила продукцию с удивительным эффектом. Был найден способ полного восстановления локонов за короткое время.
			</p>
			<div class="btn_wrapper">
				<a href="#" class="btn btn_white">
					ПОДРОБНЕЕ
				</a>
				<a href="#" class="btn btn_fiol"  data-toggle="modal" data-target="#priceModal">
					ЗАПРОСИТЬ ПРАЙС-ЛИСТ
				</a>
			</div>
		</div>
	</div>

	<div class="section section_news">
		<div class="container">
			<p class="section_title">
				НАШИ <span>СТАТЬИ</span>
			</p>
			<p class="section_subtitle">
				Посмотрите наши новые статьи <br>о продукции Gkhair
			</p>
			<div class="news_slider_wrapper">
				<div class="news_slider carousel" data-items-xl="3" data-items-lg="3" data-items-md="2" data-items-sm="1" data-scroll-xl="1" data-scroll-lg="1" data-scroll-md="1" data-scroll-sm="1" data-slick='{"dots": false, "fade": false}'>
					<div class="slider_item">
						<div class="news_item">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/news_1.jpg" alt="" class="news_img">
							<p class="news_title">
								СТОЙКИЙ КРАСИТЕЛЬ <br> С КЕРАТИНОМ
							</p>
							<p class="news_descr">
								Современное окрашивание должно сочетать в себе несколько факторов – богатую палитру оттенков...
							</p>
							<a href="#" class="more">
								ПОДРОБНЕЕ
							</a>
						</div>
					</div>
					<div class="slider_item">
						<div class="news_item">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/news_2.jpg" alt="" class="news_img">
							<p class="news_title">
								УХОДОВЫЕ ПРОДУКТЫ<br> С КЕРАТИНОМ
							</p>
							<p class="news_descr">
								Правильно подобранный уход – основное условия здоровья и красоты волос, вне зависимости...
							</p>
							<a href="#" class="more">
								ПОДРОБНЕЕ
							</a>
						</div>
					</div>
					<div class="slider_item">
						<div class="news_item">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/news_3.jpg" alt="" class="news_img">
							<p class="news_title">
								СТАЙЛИНГ НОВОГО <br> ПОКОЛЕНИЯ
							</p>
							<p class="news_descr">
								Основная задача стайлинговых средств – фиксировать укладку и сделать ее как можно более долговечной..
							</p>
							<a href="#" class="more">
								ПОДРОБНЕЕ
							</a>
						</div>
					</div>
					<div class="slider_item">
						<div class="news_item">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/news_1.jpg" alt="" class="news_img">
							<p class="news_title">
								СТОЙКИЙ КРАСИТЕЛЬ <br> С КЕРАТИНОМ
							</p>
							<p class="news_descr">
								Современное окрашивание должно сочетать в себе несколько факторов – богатую палитру оттенков...
							</p>
							<a href="#" class="more">
								ПОДРОБНЕЕ
							</a>
						</div>
					</div>
					<div class="slider_item">
						<div class="news_item">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/news_2.jpg" alt="" class="news_img">
							<p class="news_title">
								УХОДОВЫЕ ПРОДУКТЫ<br> С КЕРАТИНОМ
							</p>
							<p class="news_descr">
								Правильно подобранный уход – основное условия здоровья и красоты волос, вне зависимости...
							</p>
							<a href="#" class="more">
								ПОДРОБНЕЕ
							</a>
						</div>
					</div>
					<div class="slider_item">
						<div class="news_item">
							<img data-src="<?=SITE_TEMPLATE_PATH?>/img/news_3.jpg" alt="" class="news_img">
							<p class="news_title">
								СТАЙЛИНГ НОВОГО <br> ПОКОЛЕНИЯ
							</p>
							<p class="news_descr">
								Основная задача стайлинговых средств – фиксировать укладку и сделать ее как можно более долговечной..
							</p>
							<a href="#" class="more">
								ПОДРОБНЕЕ
							</a>
						</div>
					</div>
				</div>
				<div class="section__sliderNav d-flex">
					<div class="section__sliderNav--arrows">
						<button class="prev" tabindex="-1">
							<i class="fas fa-chevron-left"></i>
						</button>
						<button class="next" tabindex="-1">
							<i class="fas fa-chevron-right"></i>
						</button>
					</div>
				</div>
			</div>
			<div class="btn_wrapper">
				<a href="#" class="btn btn_transparent">
					ПОСМОТРЕТЬ ВСЕ
				</a>
			</div>
		</div>
	</div>

	<div class="section section_info">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<a href="#" class="info_item">
						<img data-src="<?=SITE_TEMPLATE_PATH?>/img/info_1.jpg" alt="" class="info_img">
						<span class="info_title">
								ИНФОРМАЦИЯ <br> ДЛЯ САЛОНОВ
							</span>
					</a>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
					<a href="#" class="info_item">
						<img data-src="<?=SITE_TEMPLATE_PATH?>/img/info_2.jpg" alt="" class="info_img">
						<span class="info_title">
								ИНФОРМАЦИЯ <br> ДЛЯ ДИЛЛЕРОВ
							</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="section section_partners">
		<div class="container">
			<p class="section_title">
				НАШИ <span>ПАРТНЕРЫ</span>
			</p>
			<div class="partners_block">
				<a href="#">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/partner_1.png" alt="">
				</a>
				<a href="#">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/partner_2.png" alt="">
				</a>
				<a href="#">
					<img data-src="<?=SITE_TEMPLATE_PATH?>/img/partner_3.png" alt="">
				</a>
			</div>
		</div>
	</div>

<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>