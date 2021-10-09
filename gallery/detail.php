<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Галерея");
?>

    <!--<div class="section section_page_title">
        <div class="container">
            <p class="page_title">
                ГАЛЕРЕЯ
            </p>
            <div class="breadcrumbs">
                <ul>
                    <li>
                        <a href="index.php">
                            ГЛАВНАЯ
                        </a>
                    </li>
                    <li>
                        <a href="index.php">
                            ГАЛЕРЕЯ
                        </a>
                    </li>
                    <li>
							<span>
								22.08.2021
							</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>-->

    <div class="section section_gallery__details" >
        <div class="container">
            <p class="gallery_title">
                все фото с шоу - мастер класса Валентины....
            </p>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_4.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_1.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_2.jpg" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6">
                    <div class="gallery">
                        <a href="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" data-fancybox="img_gal" data-width="1000" data-height="1000" class="image-gallery">
                            <img data-src="<?=SITE_TEMPLATE_PATH?>/img/product_3.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
?>