	<footer class="main-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-11">
					«Альтернатива» 2015,  Бухгалтерские и юридические услуги, г.Ростов-на-Дону
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
</body>
</html>