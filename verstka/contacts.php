<?php $home = true; ?>
<?include( 'tpl/header.php' );?>
	<!-- START CONTENT -->
	<section class="content">
		<div class="section section_page_title">
			<div class="container">
				<p class="page_title">
					КОНТАКТЫ
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
								КОНТАКТЫ
							</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="section section_contacts">
			<div class="container">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
						<p class="contacts_title">
							КОНТАКТЫ И РЕКВИЗИТЫ
						</p>
						<p class="contacts_subtitle">
							Контакты официального дистрибьютора GKhair
						</p>
						<p class="contacts_descr">
							Компания «Глобал ПРО» является официальным дистрибьютором GKhair (Global Keratin) на территории России.
						</p>
						<div class="contacts_phone__block">
							<p>Интернет магазин: </p>
							<a href="tel:+79690697755">
								+7 (969) 069 77 55
							</a>
						</div>
						<div class="contacts_phone__block">
							<p>Оптовые продажи (Салоны, Мастера, Дистрибьюция): </p>
							<a href="tel:+78007074868">
								+7 (800) 707 48 68 
							</a>
							<a href="tel:+74956688657">
								+7 (495) 668 86 57 
							</a>
							<a href="tel:+79269210355">
								+7 (926) 921 03 55
								<span>(моб. и WhatsApp)</span>
							</a>
						</div>
						<p class="main_info">
							<span>Офис в Москве:</span> м.Курская, Нижний Сусальный переулок 4, строение 5, Москва, 105064, Россия. 
						</p>
						<p class="main_info">
							<span>Время работы: </span> 10:00-18:00, Понедельник - Пятница
						</p>
						<div class="feedback_block">
							<p>Задать вопрос специалистам GKhair, или оставить комментарий</p>
							<a href="#" class="btn btn_yellow" data-toggle="modal" data-target="#questionModal">
								ЗАДАТЬ ВОПРОС
							</a>
						</div>
						<div class="requisites_block">
							<p class="requisites_title">
								Реквизиты:
							</p>
							<p class="requisites_descr">
								Название: Компания Глобал Про ООО
							</p>
							<p class="requisites_descr">
								Адрес: м.Курская, Нижний Сусальный переулок 4, строение 5, Москва, 105064, Россия
							</p>
							<p class="requisites_descr">
								ОГРН: 1167746381263
							</p>
							<p class="requisites_descr">
								Время работы: 10:00-18:00, Понедельник - Пятница
							</p>
							<p class="requisites_descr">
								Телефон: 8 (800) 707 48 68, бесплатный вызов
							</p>
							<p class="requisites_descr">
								Телефон: +7 (495) 668 86 57
							</p>
							<p class="requisites_descr">
								Whatsapp: +7 (926) 921 03 55
							</p>
							<p class="requisites_descr">
								Э-почта: keratinvolos@gmail.com
							</p>
							<p class="requisites_descr">
								Вебсайт: keratinvolos.ru
							</p>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
						<div id="map" style="width: 100%; height: 100%;"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- END CONTENT -->
<? include( 'tpl/footer.php' );?>
<script>
function initMap() {
   var options = {
	      zoom:17,
	      disableDefaultUI: true,
	      center: { lat:55.761731043195134, lng:37.662311169917636}
	   }
	var map = new google.maps.Map(document.getElementById('map'), options);
	var marker = new google.maps.Marker({
	   position:{ lat:55.761731043195134, lng:37.662311169917636},
	   map:map,
	   icon:'img/marker.png',
	   draggarble: false
	});
}
</script>               
<script type='text/javascript' src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBLmSrYz01qDh9um3Bp6v6995mt43clmh0&#038;callback=initMap'></script>