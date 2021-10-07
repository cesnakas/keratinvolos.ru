<?php $home = true; ?>
<?include( 'tpl/header.php' );?>
	<!-- START CONTENT -->
	<section class="content">
		<div class="section section_page_title">
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
		</div>
		<div class="section section_registration">
			<div class="container">
				<form method="post">
					<p class="reg_title">
						РЕГИСТРАЦИЯ
					</p>
                    <div class="form_input__wrapper">
                    	<div class="form_input">
                    		<input type="text" name="name" required="" placeholder="Email или Номер телефона">
                    		<p class="form_input__error">
                                Заполните это поле!
                            </p>
                    	</div>
                    </div>
                    <button type="submit" class="btn btn_yellow">
                    	РЕГИСТРАЦИЯ
                    </button>
				</form>
			</div>
		</div>
	</section>
	<!-- END CONTENT -->
<? include( 'tpl/footer.php' );?>