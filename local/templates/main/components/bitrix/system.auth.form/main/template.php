<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

CJSCore::Init();
?>

<div class="modal fade login-modal" id="loginModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <a href="#" data-dismiss="modal" class="close"><img src="<?=SITE_TEMPLATE_PATH?>/img/close.png" alt=""></a>

			<?
			if ($arResult['SHOW_ERRORS'] == 'Y' && $arResult['ERROR'])
				ShowMessage($arResult['ERROR_MESSAGE']);
			?>

			<?if($arResult["FORM_TYPE"] == "login"):?>
            <form name="system_auth_form<?=$arResult["RND"]?>" target="_top" action="<?=$arResult["AUTH_URL"]?>" method="post">
				<?if($arResult["BACKURL"] <> ''):?>
                    <input type="hidden" name="backurl" value="<?=$arResult["BACKURL"]?>" />
				<?endif?>
				<?foreach ($arResult["POST"] as $key => $value):?>
                    <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
				<?endforeach?>
                <input type="hidden" name="AUTH_FORM" value="Y" />
                <input type="hidden" name="TYPE" value="AUTH" />

                <p class="modal_title">ВОЙТИ</p>

                <div class="form_input_wrapper">
                    <div class="form_input">
                        <label>Имя пользователя или телефон*</label>
                        <input type="text" name="USER_LOGIN" required="">
                        <script>
                            BX.ready(function() {
                                var loginCookie = BX.getCookie("<?=CUtil::JSEscape($arResult["~LOGIN_COOKIE_NAME"])?>");
                                if (loginCookie)
                                {
                                    var form = document.forms["system_auth_form<?=$arResult["RND"]?>"];
                                    var loginInput = form.elements["USER_LOGIN"];
                                    loginInput.value = loginCookie;
                                }
                            });
                        </script>
                        <p class="form_input__error">Заполните это поле!</p>
                    </div>
                </div>

                <div class="form_input_wrapper">
                    <div class="form_input">
                        <label>Пароль*</label>
                        <input type="password" name="USER_PASSWORD" required="" autocomplete="off">
                        <p class="form_input__error">Неверный пароль!</p>
                    </div>
                </div>

                <button type="submit" name="Login" class="btn btn_yellow">ВОЙТИ</button>

				<?if ($arResult["STORE_PASSWORD"] == "Y"):?>
                <label class="check" for="USER_REMEMBER_frm">
                    Запомнить меня <noindex><a href="<?=$arResult["AUTH_FORGOT_PASSWORD_URL"]?>" rel="nofollow">Забыли пароль?</a></noindex>
                    <input type="checkbox" id="USER_REMEMBER_frm" name="USER_REMEMBER" value="Y">
                    <span class="checkmark"></span>
                </label>
                <?endif;?>

                <div class="registered_block">
                    <img src="<?=SITE_TEMPLATE_PATH?>/img/user_login_icon.png" alt="">
                    <p>Нет аккаунта?</p>
					<?if($arResult["NEW_USER_REGISTRATION"] == "Y"):?>
                    <noindex>
                    <a href="<?=$arResult["AUTH_REGISTER_URL"]?>" rel="nofollow">ЗАРЕГИСТРИРОВАТЬСЯ</a>
                    </noindex>
					<?endif?>

                </div>

            </form>
            <?else:?>
                <form action="<?=$arResult["AUTH_URL"]?>">
                    <table width="95%">
                        <tr>
                            <td align="center">
								<?=$arResult["USER_NAME"]?><br />
                                [<?=$arResult["USER_LOGIN"]?>]<br />
                                <a href="<?=$arResult["PROFILE_URL"]?>" title="<?=GetMessage("AUTH_PROFILE")?>"><?=GetMessage("AUTH_PROFILE")?></a><br />
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
								<?foreach ($arResult["GET"] as $key => $value):?>
                                    <input type="hidden" name="<?=$key?>" value="<?=$value?>" />
								<?endforeach?>
								<?=bitrix_sessid_post()?>
                                <input type="hidden" name="logout" value="yes" />
                                <input type="submit" name="logout_butt" value="<?=GetMessage("AUTH_LOGOUT_BUTTON")?>" />
                            </td>
                        </tr>
                    </table>
                </form>
            <?endif;?>

        </div>
    </div>
</div>
