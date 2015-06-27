<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>

	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<link rel="shortcut icon" href="/favicon.ico">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> <!-- 33 KB -->

	<script src="/scripts/vendor/modernizr.js"></script>

	<!-- fotorama.css & fotorama.js. -->
	<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
	<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->


	<link rel="stylesheet" href="/styles/vendor.css">
	<link rel="stylesheet" href="/styles/main.css">

	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,400,300,600,700&subset=latin,cyrillic" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic" rel="stylesheet" type="text/css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/3.3.0/masonry.pkgd.js"></script>

	<!-- Add fancyBox -->
	<link rel="stylesheet" href="/scripts/fancybox/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/scripts/fancybox/jquery.fancybox.pack.js?v=2.1.5"></script>

	<script src="/scripts/main.js"></script>

	<link rel="stylesheet" href="/styles/custom.css">

<body>
	<!--[if lt IE 10]>
		<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->

	<div class="quotes">
		<div class="quote-text">Преимущество мы отдаем той помощи, которая влечет за собой другую помощь, более мощную и длительную.
			<br /><b>Михаил Жванецкий</b>
		</div>
		<div class="quote-text">Экономист — человек, который знает, как зарабатывать деньги, и зарабатывает их, но не себе, а другим.
			<br /><b>В. Зубков</b>
		</div>
		<div class="quote-text">Для достижения успеха надо ставить цели несколько выше, чем те, которые в настоящее время могут быть достигнуты.
			<br /><b>Макс Планк</b>
		</div>
		<div class="quote-text">Не бойтесь больших расходов, бойтесь маленьких доходов.
			<br /><b>Джон РОКФЕЛЛЕР</b>
		</div>
		<div class="quote-text">Хорошим средством обогащения являются товарищества, если иметь дело с людьми надежными.
			<br /><b>Фрэнсис Бэкон</b>
		</div>
		<div class="quote-text">Фактически успех ­ это только 1 процент вашей работы, а остальные 99 процентов это неудачи.
			<br /><b>Соичиро Хонда</b>
		</div>
		<div class="quote-text">Мысли о будущем, постоянные размышления о том, как сделать больше, порождают такое состояние ума, при котором ничто не кажется невозможным. <b>Генри Форд</b>
		</div>
	</div>
	<script>
		$(document).ready(function()
		{
			 setupRotator();
		});
		function setupRotator()
		{
			if($('.quote-text').length > 1)
			{
				var random = Math.floor(Math.random()*$('.quote-text').size());
				$('.quote-text').eq(random).addClass('current').fadeIn(1000);
				setInterval('textRotate()', 15000);
			}
		}
		function textRotate()
		{
			var current = $('.quotes > .current');
			if(current.next().length == 0)
			{
				current.removeClass('current').fadeOut(5);
				$('.quote-text:first').addClass('current').fadeIn(1000);
			}
			else
			{
				current.removeClass('current').fadeOut(10);
				current.next().addClass('current').fadeIn(1000);
			}
		}
	</script>
	<!-- Navigation -->
	<nav class="navbar navbar-default mymenu" role="navigation">

		<div class="container">

			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="/"><i class="fa fa-university"></i>&nbsp;&nbsp;Альтернатива,&nbsp;&nbsp;г.Ростов-на-Дону</a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="top-menu" href="/p/clients/">Наши клиенты</a>
					</li>
					<li>
						<a class="top-menu" href="/p/contacts/#info">Контакты</a>
					</li>
				</ul>
			</div>	<!-- /.navbar-collapse -->
		</div>	<!-- /.container -->

	</nav>

	<div class="intro-header">

		<img class="calculator" src="/images/calculator.png" />

		<div class="intro-fotorama">
			<img src="/images/back-min.jpg">
			<img src="/images/back2-min.jpg">
			<img src="/images/back3-min.jpg">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="intro-message">
						<h1>Альтернатива</h1>
						<h3>Бухгалтерские и юридические услуги</h3>
					</div>
				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.intro-header -->
