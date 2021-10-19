<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новость");
?>

    <!--<div class="section section_page_title">
        <div class="container">
            <p class="page_title">
                НОВОСТИ
            </p>
            <div class="breadcrumbs">
                <ul>
                    <li>
                        <a href="index.php">
                            ГЛАВНАЯ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            НАШИ НОВОСТИ
                        </a>
                    </li>
                    <li>
							<span>
								ОКРАШИВАНИЕ ВОЛОС
							</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->

    <?$APPLICATION->IncludeComponent("bitrix:news.detail", "news",
        [
            "IBLOCK_ID" => "3",
			"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
            "IBLOCK_URL" => "/news/",
			"DETAIL_URL" => "/news/detail.php?ID=#ELEMENT_ID#/",
        ],
        false
    );?>

    <div class="section secton_articles_single">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12">
                    <p class="page_title_details">
                        ОКРАШИВАНИЕ ВОЛОС
                    </p>
                    <p class="title_details">
                        GKhair: краски и продукты для ухода за волосами
                    </p>
                    <p class="descr_details">
                        GKhair– признанный бренд, предлагающий революционные решения для красоты волос.Продукция GKhair – это прорыв в индустрии красоты. Все средства содержат в составе Juvexin – живой кератин.
                    </p>
                    <p class="descr_details">
                        Juvexin является новейшим компонентом, рецептура которого представлена пептидами, белками. Уникальная формула отвечает за то, чтобы при любом окрашивании структура локонов не пострадала. Напротив, ценные элементы попадают в глубокие слои и напитывают волосы влагой, полезными веществами.
                    </p>
                    <img data-src="<?=SITE_TEMPLATE_PATH?>/img/articles_single_1.webp" alt="" class="articles_single_img">
                    <p class="subtitle_details">
                        Крем-краска Juvexin Cream Color
                    </p>
                    <p class="descr_details">
                        Профессиональная краска дарит насыщенный оттенок и на 100% закрашивает седину. Волосы становятся более густыми, легко расчесываются. Они гладкие, словно шелк!
                    </p>
                    <p class="subtitle_details">
                        Защитная добавка Shield Additive
                    </p>
                    <p class="descr_details">
                        Линейка средств Shield Additive дарит превосходную защиту для волос. Можно без опасения окрашивать (не только красками, но и хной), осветлять или завивать. В составе – органические масла, а также высококонцентрированные экстракты. Все для сияния и укрепления локонов! Гарантия защиты волос вашего клиента!
                    </p>
                    <p class="subtitle_details">
                        Маска Lock Me Color Masque
                    </p>
                    <p class="descr_details">
                        Используется как второй шаг при химических процедурах после добавки Shield Additive. Маска закрепляет результат и обеспечивает защиту выбранного оттенка. При этом каждый волос укрепляется по всей длине, глубоко увлажняется. В составе – эффективная смесь протеинов, восстанавливающая локоны изнутри.
                    </p>
                    <p class="subtitle_details">
                        Фиксатор цвета Juvexin Color Sealing: природа на страже защиты цвета волос!
                    </p>
                    <p class="descr_details">
                        Продукт идеален для окрашенных волос. Он защищает их структуру. Когда помыли локоны с шампунем, состав распределяем на волосы, высушиваем их феном, выравниваем по прядкам. Затем через 12 часов – первое мытье головы.
                    </p>
                    <p class="subtitle_details">
                        Oil Hair Color: масляная краска от GKhair
                    </p>
                    <p class="descr_details">
                        В составе краски совершенно нет аммиака, зато присутствуют масла жожоба, арганы. Волосы, даже поврежденные, наполняются силой и сверканием. За счет жидкого кератина локоны становятся шелковистыми.
                    </p>
                    <p class="subtitle_details">
                        Juvexin Color Protection: шампунь + кондиционер
                    </p>
                    <p class="descr_details">
                        За окрашенными волосами нужен особенный уход, поэтому производитель предлагает шампунь и кондиционер. Цвет сохраняется дольше, при этом структура каждого волоса остается целостной. С таким средством прическа всегда как после лучшего салона красоты!
                    </p>
                    <p class="subtitle_details">
                        Lightening Powder: осветляющая пудра от GKhair
                    </p>
                    <p class="descr_details">
                        Инновационное решение – пудра, которая станет настоящей революцией. Красивое мелирование, колорирование и осветление получается таким, как у голливудских знаменитостей с обложек глянца. Достоинства продукта очевидны: простота нанесения, быстрота результата, бережность воздействия. Эффект – без желтизны.
                    </p>
                    <iframe class="you_video" width="463" height="261" src="https://www.youtube.com/embed/47tWcmDtG6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="btn_wrapper">
                        <a href="#" class="btn btn_yellow">
                            СМОТРЕТЬ КАТАЛОГ
                        </a>
                    </div>
                    <p class="descr_details">
                        GKhair заботится о красоте! Серия средств для окрашивания, осветления и уходовых процедур, в том числе в домашних условиях, разработана на основе научных подходов.
                    </p>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12 col-sm-12 col-12">
                    <div class="other_articles">
                        <p class="other_title">
                            ДРУГИЕ
                            <span>
									НОВОСТИ
								</span>
                        </p>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                        <a href="#" class="other_articles__item">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/other_articles_1.jpg" alt="" class="other_articles__img">
                            <span class="other_articles__title">
									Система лечения и выпрямления
								</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>