<?php
$title = "Контакты | Альтернатива - Бухгалтерские и юридические услуги";
include_once("../../header.php");
?>

	<!-- Page Content -->
	<div class="container">

		<!-- Content Row -->
		<div class="row">

			<!-- Sidebar Column -->
			<div class="col-md-3">
				<?php
				include_once("../../menu.php");
				?>
			</div>
			<!-- Content Column -->
			<div class="col-md-9">
				<a name="info"></a>
				<h2>Контактная информация</h2><hr />
				<p><i class="fa fa-home"></i> пр. Буденовский 26/57 оф. 14, г Ростов-на-Дону<br /></p>
				<p><i class="fa fa-phone"></i> +7 (863) 269-46-14</p>
				<p><i class="fa fa-mobile"></i>  +7 (928) 130-12-60</p>
				<p><i class="fa fa-mobile"></i>  +7 (909) 429-24-32</p>
				<p><i class="fa fa-envelope-o"></i> <a href="mailto:alternativa50@mail.ru">alternativa50@mail.ru</a> </p>
				<p><i class="fa fa-clock-o"></i> Понедельник - пятница: 9:00 – 17:00</p>

				<div id="map" style="width: 600px; height: 400px"></div>
				<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>

				<script type="text/javascript">
					ymaps.ready(init);
					var myMap, 
						myPlacemark;

					function init(){ 
						myMap = new ymaps.Map("map", {
							center: [47.219214, 39.708392],
							zoom: 16
						}); 
						
						myPlacemark = new ymaps.Placemark([47.219214, 39.708392], {
							hintContent: 'Альтернатива',
							balloonContent: 'Альтернатива: пр. Буденовский 26/57 оф. 14, г Ростов-на-Дону'
						}, {
							preset: 'islands#blueDotIcon'
						});
						
						myMap.geoObjects.add(myPlacemark);
					}
				</script>

				<form name="sentMessage" id="contactForm novalidate" method="POST" action="/p/contacts/">
				<div class="col-md-12"><h3>Напишите нам:</h3></div>
				<hr>
				<div class="col-md-6">
					<div class="control-group form-group">
						<div class="controls">
							<label>Ф.И.О:</label> <input class="form-control" name="name" id="name" required data-validation-required-message="Пожалуйста, введите Ф.И.О.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Номер телефона:</label> <input type="tel" name="tel" class="form-control" id="phone" required data-validation-required-message="Пожалуйста, введите номер телефона.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Email:</label> <input type="email" name="email" class="form-control" id="email" required data-validation-required-message="Пожалуйста, введите E-Mail адрес.">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="control-group form-group">
						<div class="controls">
							<label>Сообщение:</label> <textarea name="message" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Поле 'Сообщение' не может быть пустым." maxlength="999" style="resize:none"></textarea>
						</div>
					</div>

					<div id="success"></div> <!-- For success/fail messages -->

					<input type="submit" name="submit" class="btn btn-primary" value="Отправить сообщение">
				</div>
			</form>
			</div>
		</div>
	</div>

<?php

if (isset($_POST['message']))
{
	$content = "Вам отправлено сообщение с сайта atv61.ru.\n\nИмя: {$_POST['name']}\nТелефон: {$_POST['tel']}\nE-Mail: {$_POST['email']}\n\nСообщение:\n\n{$_POST['message']}\n";
	
	$headers = 'From: atv61.ru <no_reply@atv61.ru>' . "\r\n" .
	'Reply-To: no_reply@atv61.ru' . "\r\n";

	$params = "-fno_reply@atv61.ru";

	mail("ihptru@gmail.com", "Сообщение с сайта atv61.ru", $content, $headers, $params);
}

?>
<?php
include_once("../../footer.php");
?>