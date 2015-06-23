	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-11">
					«Альтернатива» 2015,  Бухгалтерские и юридические услуги, <a href="/p/contacts/#info" title="Показать на карте">г.Ростов-на-Дону</a>
				</div>
				<div class="col-lg-1">
					<a class="go-top" href="#" title="Вверх"><i class="fa fa-arrow-circle-up fa-2x"></i></a>
				</div>
			</div>
		</div>
	</footer>

	<script>
		$('.go-top').each(function(){
			$(this).click(function(){ 
				$('html,body').animate({ scrollTop: 0 }, 'slow');
				return false; 
			});
		});

		$('.go-top').hover(function(){
			$('.go-top').animate({"top":"-7px"}, 'fast');
		},
		function(){
			$('.go-top').animate({"top":"0px"}, 'fast');
		});
	</script>

	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function (d, w, c) {
			(w[c] = w[c] || []).push(function() {
				try {
					w.yaCounter31055016 = new Ya.Metrika({
						id:31055016,
						clickmap:true,
						trackLinks:true,
						accurateTrackBounce:true,
						webvisor:true
					});
				} catch(e) { }
			});

			var n = d.getElementsByTagName("script")[0],
				s = d.createElement("script"),
				f = function () { n.parentNode.insertBefore(s, n); };
			s.type = "text/javascript";
			s.async = true;
			s.src = "https://mc.yandex.ru/metrika/watch.js";

			if (w.opera == "[object Opera]") {
				d.addEventListener("DOMContentLoaded", f, false);
			} else { f(); }
		})(document, window, "yandex_metrika_callbacks");
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/31055016" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</body>
</html>