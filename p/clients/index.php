<?php
$title = "Наши клиенты | Альтернатива - Бухгалтерские и юридические услуги, Ростов-на-Дону";
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
				<h2>Наши клиенты</h2><hr />

				<div class="grid">
					<div class="grid-item"><a class="fancybox" rel="group" title="Название компании" href="/images/visitka-example.png"><img class="grid-item-img" src="/images/visitka-example.png" /></a></div>
					<div class="grid-item"><a class="fancybox" rel="group" title="Название компании" href="/images/visitka-example.png"><img class="grid-item-img" src="/images/visitka-example.png" /></a></div>
					<div class="grid-item"><a class="fancybox" rel="group" title="Название компании" href="/images/visitka-example.png"><img class="grid-item-img" src="/images/visitka-example.png" /></a></div>
					<div class="grid-item"><a class="fancybox" rel="group" title="Название компании" href="/images/visitka-example.png"><img class="grid-item-img" src="/images/visitka-example.png" /></a></div>
					<div class="grid-item"><a class="fancybox" rel="group" title="Название компании" href="/images/visitka-example.png"><img class="grid-item-img" src="/images/visitka-example.png" /></a></div>
				</div>

				<script>
					$('.grid').masonry({
						// options
						itemSelector: '.grid-item',
						columnWidth: 200
					});

					$(document).ready(function() {
						$(".fancybox").fancybox();
					});

					$('.grid-item-img').hover(function(){
						$(this).animate({"margin-top":"-3px"}, 'fast');
					}, function(){
						$(this).animate({"margin-top":"3px"}, 'fast');
					});

				</script>
			</div>
		</div>
	</div>

<?php
include_once("../../footer.php");
?>