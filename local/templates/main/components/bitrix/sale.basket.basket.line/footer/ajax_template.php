<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$this->IncludeLangFile('template.php');

$cartId = $arParams['cartId'];

require(realpath(dirname(__FILE__)).'/top_template.php');

if ($arParams["SHOW_PRODUCTS"] == "Y" && ($arResult['NUM_PRODUCTS'] > 0 || !empty($arResult['CATEGORIES']['DELAY'])))
{
?>

	<div class="modal-content" data-role="basket-item-list">
        <a href="#" data-dismiss="modal" class="close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt=""></a>
        <p class="modal_title">КОРЗИНА</p>
        <div id="<?=$cartId?>products" class="cart_item_wrapper">

		<?/* if ($arParams["POSITION_FIXED"] == "Y"):?>
			<div id="<?=$cartId?>status" class="bx-basket-item-list-action" onclick="<?=$cartId?>.toggleOpenCloseCart()"><?=GetMessage("TSB1_COLLAPSE")?></div>
		<?endif */?>

		    <!--<div id="<?/*=$cartId*/?>products" class="bx-basket-item-list-container">-->
			<?foreach ($arResult["CATEGORIES"] as $category => $items):
				if (empty($items))
					continue;
				?>

				<!--<div class="bx-basket-item-list-item-status"><?/*=GetMessage("TSB1_$category")*/?></div>-->

				<?foreach ($items as $v):?>

                <div class="cart_item" style="position: relative;">

                    <span class="bx-basket-item-list-item-remove" onclick="<?=$cartId?>.removeItemFromCart(<?=$v['ID']?>)" title="<?=GetMessage("TSB1_DELETE")?>"></span>

                    <span class="cart_item__img">
                    <?if ($arParams["SHOW_IMAGE"] == "Y" && $v["PICTURE_SRC"]):?>
						<?if($v["DETAIL_PAGE_URL"]):?>
                            <a href="<?=$v["DETAIL_PAGE_URL"]?>">
                                <img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>">
                            </a>
						<?else:?>
                            <img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>">
						<?endif?>
					<?endif?>
                    </span>

                    <span class="cart_item__right">

                        <?if ($v["DETAIL_PAGE_URL"]):?>
                            <a class="cart_item__title" href="<?=$v["DETAIL_PAGE_URL"]?>"><?=$v["NAME"]?></a>
						<?else:?>
                            <small class="cart_item__title"><?=$v["NAME"]?></small>
						<?endif?>

                        <!--<small class="cart_item__price"><b>1 х</b> 1 690 Р</small>-->

                        <small class="cart_item__price"><b><?=$v["QUANTITY"]?> x</b> <?=$v["FULL_PRICE"]?></small>

                    </span>

                </div>

                <?/*

					<div class="bx-basket-item-list-item">

						<div class="bx-basket-item-list-item-img">
							<?if ($arParams["SHOW_IMAGE"] == "Y" && $v["PICTURE_SRC"]):?>
								<?if($v["DETAIL_PAGE_URL"]):?>
									<a href="<?=$v["DETAIL_PAGE_URL"]?>"><img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>"></a>
								<?else:?>
									<img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>" />
								<?endif?>
							<?endif?>
							<div class="bx-basket-item-list-item-remove" onclick="<?=$cartId?>.removeItemFromCart(<?=$v['ID']?>)" title="<?=GetMessage("TSB1_DELETE")?>"></div>
						</div>

						<div class="bx-basket-item-list-item-name">
							<?if ($v["DETAIL_PAGE_URL"]):?>
								<a href="<?=$v["DETAIL_PAGE_URL"]?>"><?=$v["NAME"]?></a>
							<?else:?>
								<?=$v["NAME"]?>
							<?endif?>
						</div>

						<?if (true): // $category != "SUBSCRIBE") TODO?>
							<div class="bx-basket-item-list-item-price-block">
								<?if ($arParams["SHOW_PRICE"] == "Y"):?>
									<div class="bx-basket-item-list-item-price"><strong><?=$v["PRICE_FMT"]?></strong></div>
									<?if ($v["FULL_PRICE"] != $v["PRICE_FMT"]):?>
										<div class="bx-basket-item-list-item-price-old"><?=$v["FULL_PRICE"]?></div>
									<?endif?>
								<?endif?>
								<?if ($arParams["SHOW_SUMMARY"] == "Y"):?>
									<div class="bx-basket-item-list-item-price-summ">
										<strong><?=$v["QUANTITY"]?></strong> <?=$v["MEASURE_NAME"]?> <?=GetMessage("TSB1_SUM")?>
										<strong><?=$v["SUM"]?></strong>
									</div>
								<?endif?>
							</div>
						<?endif?>

					</div>
                    */?>

				<?endforeach?>

			<?endforeach?>
		    <!--</div>-->

        </div>
		<?if ($arParams["SHOW_SUMMARY"] == "Y"):?>
            <p class="cart_total">СУММА: <span><?=$arResult['TOTAL_PRICE']?></span></p>
		<?endif?>
        <a href="#" class="btn btn_yellow__bordered" data-toggle="modal" data-target="#clickModal">КУПИТЬ В 1 КЛИК</a>
		<?if ($arParams["PATH_TO_ORDER"] && $arResult["CATEGORIES"]["READY"]):?>
        <a href="<?=$arParams["PATH_TO_ORDER"]?>" class="btn btn_yellow">ОФОРМИТЬ ЗАКАЗ</a>
		<?endif?>
	</div>

<?
} else {
?>

    <div class="modal-dialog modal-dialog-centered empty-cart-modal">
        <div id="<?=$cartId?>products" class="modal-content">
            <a href="#" data-dismiss="modal" class="close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt=""></a>
            <p class="modal_title">КОРЗИНА</p>
            <div class="empty_cart_block" style="text-align: center;">

                <img src="<?=SITE_TEMPLATE_PATH?>/img/empty_cart_icon.png" alt="">

                <p class="empty_info">КОРЗИНА ПУСТА</p>
                <br>
                <a href="/catalog/" class="btn btn_yellow">В КАТАЛОГ</a>

            </div>
        </div>
    </div>

<?
}
?>

<script>
    BX.ready(function(){
		<?=$cartId?>.fixCart();
    });
</script>