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
				<h2>Контактная информация</h2><hr />
				<p><i class="fa fa-home"></i> пр. Буденовский 26/57 оф. 14, г Ростов-на-Дону<br /></p>
				<p><i class="fa fa-phone"></i> +7 (863) 269-46-14</p>
				<p><i class="fa fa-mobile"></i>  +7 (928) 130-12-60</p>
				<p><i class="fa fa-mobile"></i>  +7 (909) 429-24-32</p>
				<p><i class="fa fa-envelope-o"></i> <a href="mailto:alternativa50@mail.ru">alternativa50@mail.ru</a> </p>
				<p><i class="fa fa-clock-o"></i> Понедельник - пятница: 9:00 – 17:00</p>

				<form name="sentMessage" id="contactForm novalidate">
				<div class="col-md-12"><h3>Напишите нам:</h3></div>
				<hr>
				<div class="col-md-6">
					<div class="control-group form-group">
						<div class="controls">
							<label>Ф.И.О:</label> <input class="form-control" id="name" required data-validation-required-message="Please enter your name.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Номер телефона:</label> <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Email:</label> <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="control-group form-group">
						<div class="controls">
							<label>Сообщение:</label> <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
						</div>
					</div>

					<div id="success"></div> <!-- For success/fail messages -->

					<button type="submit" class="btn btn-primary">Send Message</button>
				</div>
			</form>
			</div>
		</div>
	</div>

<?php
include_once("../../footer.php");
?>