<!DOCTYPE html>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Make up for ever</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="stylesheet" href="css/main_media.css" type="text/css">
		
		<link rel="stylesheet" href="fonts/fonts.css" type="text/css">
		<link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/plyr.css">
		<link rel="shortcut icon" href="img/icon.png" type="image/x-icon">
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>

	<body>
		<section class="mainScr">
			<header class="header">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-lg-3 col-md- col-sm-3">
							<img src="img/logo.png" alt="logo" class="logo">
						</div>
						<div class="col-xs-12 col-lg-7 col-md- col-sm-7 hidden-xs">
							<nav class="menu" class="navbar navbar-default">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#men" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="men">
									<ul class="nav navbar-nav text-center">
										<li class="active"><a href="#about">О ПРОДУКТЕ<span class="sr-only">(current)</span></a></li>
										<li><a href="#feedback">ОТЗЫВЫ</a></li>
										<li><a href="#video">ВИДЕО ОБЗОР</a></li>
										<li><a href="#dostavka">ДОСТАВКА И ОПЛАТА</a></li>
									</ul>
								</div>
							</nav>
						</div>
						<div class="col-xs-12 col-lg-2 col-md- col-sm-2 hidden-xs">
							<button type="button" data-toggle="modal" data-target="#mainModal" class="btnCallModal btn btn-default">ОБРАТНЫЙ ЗВОНОК</button>
						</div>
					</div>
				</div>
			</header>
			<div class="mainPart">
				<div class="container">
					<div class="row ">
						<div class="col-lg-6 col-lg-offset-4 col-sm-7 col-sm-offset-4 col-xs-12 text-right">
							<h1 class="upper">homme:<span style="font-size:18px;">intense</span></h1>
							<h4 class="upper">Аромат для мужчин</h4>
							<p class="price upper"><span class="zach">1980 руб.</span> <span class="nezach">990 руб.</span></p>
							<img class="visible-xs" style="margin:auto;margin-bottom:10px;" src="img/tovarXs.png" alt="img">
							<div class="list">
								<img src="img/listRound.png" alt="list">
								<p>Водостойкие</p>
							</div>
							<div class="list cent">
								<img src="img/listRound.png" alt="list">
								<p>10 оттенков</p>
							</div>
							<div class="list">
								<img src="img/listRound.png" alt="list">
								<p>Мягкая текстура</p>
							</div>
							<br>
							<button type="button" data-toggle="modal" data-target="#mainModal" class="btnCallModal btn btn-default upper">заказать со скидкой 50%</button>
							<p class="today">Сегодня уже купили: <b><span class="count count-people">379</span> человек</b></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="offers">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="obert">
								<div class="formBl offer">
									<form class="text-center" action="#" method="post" name="application">
										<h1 class="upper">ЗАКАЗАТЬ</h1>
										<h2>Оформите Ваш заказ, заполнив<br>
форму ниже:</h2>
										<div class="form-group form-group-lg">
											<input required type="text" class="form-control" name="inputFIO" placeholder="Имя">
											<input required type="tel" class="form-control phoneInp" name="inputPhone" placeholder="Телефон">
											<select required name="selectCountry" class="form-select selectCountry">
											  	<option>Страна</option>
											  	<option>Страна1</option>
											  	<option>Страна2</option>
												<option>Страна3</option>
											</select>

											<button type="submit" class="btn btn-default btnForm upper">заказать со скидкой 50%</button>
										</div>
									</form>
								</div>
								<div class="attention offer">
									<h1 class="upper">Внимание!</h1>
									<h2>Акционное предложение<br>
									ограничено. Осталось товаров<br>
									со скидкой: <b class="lastpack">5</b><b> шт.</b></h2>
									<img src="img/product.jpg" alt="sale">
								</div>
								<div class="sale offer">
									<img src="img/clock.png" alt="clock">
									<h1 class="upper">скидка 50%</h1>
									<h2>Время действия скидки<br>
									ограничено. До окончания<br>
									акции осталось:</h2>

									<div class="timer_wrap">
										<div class="clock">
											<div class='hour cont'>
												<p class='hour0'></p>
												<p class='hour1'></p>
											</div>
											<div class='min cont cent'>
												<p class='min0'></p>
												<p class='min1'></p>
											</div>
											<div class='sec cont'>
												<p class='sec0'></p>
												<p class='sec1'></p>
											</div>
										</div>
										<div class="podpis hours">Часов</div>
										<div class="podpis cent">Минут</div>
										<div class="podpis">Секунд</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="about" id="about">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<hr>
						<h1 class="upper">о продукте</h1>
					</div>
					<div class="col-sm-6 col-xs-12"><img src="img/image.jpg" alt="img"></div>
					<div class="col-sm-6 col-xs-12">
						<p><b>Make Up For Ever Aqua Creams</b> — это пигментированные, водостойкие тени кремовой текстуры. Они отлично держатся на веках без всякой базы, очень быстро фиксируются, не тускнеют и не собираются в складку века. Легко снимаются мицеллярной водой, гидрофильными маслами и двухфазными средствами для удаления макияжа. Не сушат кожу.</p>
						
						<p>Тени продаются в строгой и лаконичной баночке с закручивающейся крышечкой. Ее нужно закручивать плотно, так как тени быстро могут засохнуть на воздухе и потом их невозможно использовать будет. <span class="hidden-lg">Они не размазываются, не собираются в складочки.</span></p>
						
						<p class="visible-lg">Они не размазываются, не собираются в складочки, переживут купание хоть в течение всего дня и никакой ветер не заставит осыпаться хоть немного! На них можно положиться на все 100!</p>
					</div>
				</div>
			</div>
		</section>
		
		<section class="poster1"><img src="img/poster1.jpg" alt="poster"></section>
		
		<section class="feedback" id="feedback">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right header">
						<h1 class="upper">отзывы <span class="hidden-xs">покупателей</span></h1>
						<hr>
					</div>
				</div>
				<div class="row art1">
					<div class="col-lg-8 col-lg-offset-3 col-md-10 col-md-offset-2 col-sm-10 col-sm-offset-2 col-xs-12">
						<img class="visible-xs" src="img/otzIm1.png" alt="img">
						<article>
							<hr>
							<h3>Александра, 25</h3>
							<div class="text">
								<p>Подарили сертификат в ИДБ, поэтому решила себя чем-то порадовать. Сильной необходимости в косметике не было, выбирала что-то ТАКОЕ не знаю что. Увидела на стенде Make up for ever красивые оттенки теней и решила взять. Правда это не совсем тени, а средство для макияжа глаз, щек и губ.</p>
								<p>Сейчас кремообразные тени есть практически во всех марках. Примерно в одинаковых оттенках от синих, серых, зеленых до благородно-коричневых.</p>
								<p class="visible-lg visible-md">Я решила взять 16 оттенок розово-бежевый. Само средство находится в пластиковой баночке с завинчивающейся крышкой объемом 6 грамм.</p>
							</div>
						</article>
						<img class="hidden-lg hidden-xs" src="img/otzIm1.png" alt="img">
					</div>
				</div>
				<div class="row art2">
					<div class="col-lg-8 col-lg-offset-1 col-md-10 col-md-offset-0 col-sm-10">
						<img class="visible-xs" src="img/otzIm2.png" alt="img">
						<article>
							<hr>
							<h3>Светлана, 30</h3>
							<div class="text">
								<p>Наношу на подвижное веко и тут главный для меня минус - очень плохо растушевываются. Скатывается хлопьями, крайне быстро застывает. Так что нанести его проблема! Более менее достойно себя ведет на базе в виде тонального крема. Очень сложно сверху этих теней наносить жидкую подводку.</p>
								<p>Но есть и плюс - очень стойкие. Можно плавать, окунать голову в воду - тени будут на месте.</p>
							</div>
						</article>
						<img class="hidden-lg hidden-xs" src="img/otzIm2.png" alt="img">
					</div>
				</div>
			</div>
		</section>
		
		<section class="video" id="video">
			<div class="obert">
				<div class="container ">
					<div class="row">
						<div class="col-lg-11 col-lg-offset-1 col-xs-12 main">
							<hr>
							<h1 class="upper">видео обзор</h1>
							<div class="videoBl">
								<div data-type="youtube" data-video-id="bTqVqk7FSmY"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="dostavka" id="dostavka">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<h1 class="upper">доставка и оплата</h1>
						<hr>
					</div>
					<div class="col-xs-12 text-center">
						<h3>Мы доставим Ваш заказ в любую точку России, СНГ и Европы!</h3>
						<div class="blocks">
							<img src="img/icon1Dost.png" alt="icon" class="blocks__icon">
							<div class="blocks__text">оставляете<br>заявку</div>
						</div>
						<div class="blocks">
							<img src="img/icon2Dost.png" alt="icon" class="blocks__icon">
							<div class="blocks__text">подтверждаете<br>заказ</div>
						</div>
						<div class="blocks">
							<img src="img/icon3Dost.png" alt="icon" class="blocks__icon">
							<div class="blocks__text">мы отправляем<br>заказ</div>
						</div>
						<div class="blocks">
							<img src="img/icon4Dost.png" alt="icon" class="blocks__icon">
							<div class="blocks__text">прием и<br>оплата</div>
						</div>
						<div class="blocks">
							<img src="img/icon5Dost.png" alt="icon" class="blocks__icon">
							<div class="blocks__text">заказ<br>получен</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="offerCopy">
			<div class="mainPart">
				<div class="container">
					<div class="row ">
						<div class="col-lg-6 col-lg-offset-4 col-sm-7 col-sm-offset-4 col-xs-12 text-right">
							<h1 class="upper">homme:<span style="font-size:18px;">intense</span></h1>
							<h4 class="upper">Аромат для мужчин</h4>
							<p class="price upper"><span class="zach">1980 руб.</span> <span class="nezach">990 руб.</span></p>
							<img class="visible-xs" style="margin:auto;margin-bottom:10px;" src="img/tovarXs.png" alt="img">
							<div class="list">
								<img src="img/listRound.png" alt="list">
								<p>Водостойкие</p>
							</div>
							<div class="list cent">
								<img src="img/listRound.png" alt="list">
								<p>10 оттенков</p>
							</div>
							<div class="list">
								<img src="img/listRound.png" alt="list">
								<p>Мягкая текстура</p>
							</div>
							<br>
							<button type="button" data-toggle="modal" data-target="#mainModal" class="btnCallModal btn btn-default upper">заказать со скидкой 50%</button>
							<p class="today">Сегодня уже купили: <b><span class="count count-people">379</span> человек</b></p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="offers">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="obert">
								<div class="formBl offer">
									<form class="text-center" action="#" method="post" name="application">
										<h1 class="upper">ЗАКАЗАТЬ</h1>
										<h2>Оформите Ваш заказ, заполнив<br>
форму ниже:</h2>
										<div class="form-group form-group-lg">
											<input required type="text" class="form-control" name="inputFIO" placeholder="Имя">
											<input required type="tel" class="form-control phoneInp" name="inputPhone" placeholder="Телефон">
											<select required name="selectCountry" class="form-select selectCountry">
											  	<option>Страна</option>
											  	<option>Страна1</option>
											  	<option>Страна2</option>
												<option>Страна3</option>
											</select>

											<button type="submit" class="btn btn-default btnForm upper">заказать со скидкой 50%</button>
										</div>
									</form>
								</div>
								<div class="attention offer">
									<h1 class="upper">Внимание!</h1>
									<h2>Акционное предложение<br>
									ограничено. Осталось товаров<br>
									со скидкой: <b class="lastpack">5</b><b> шт.</b></h2>
									<img src="img/product.jpg" alt="sale">
								</div>
								<div class="sale offer">
									<img src="img/clock.png" alt="clock">
									<h1 class="upper">скидка 50%</h1>
									<h2>Время действия скидки<br>
									ограничено. До окончания<br>
									акции осталось:</h2>

									<div class="timer_wrap">
										<div class="clock">
											<div class='hour cont'>
												<p class='hour0'></p>
												<p class='hour1'></p>
											</div>
											<div class='min cont cent'>
												<p class='min0'></p>
												<p class='min1'></p>
											</div>
											<div class='sec cont'>
												<p class='sec0'></p>
												<p class='sec1'></p>
											</div>
										</div>
										<div class="podpis hours">Часов</div>
										<div class="podpis cent">Минут</div>
										<div class="podpis">Секунд</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
			
		<footer class="footer text-center">
			<p>ООО "Практика" ИНН 77431128959,<br class="visible-xs"> ОГРН 5157746073580 г.<br class="visible-xs"> Москва, ул. Клары Цеткин, д. 29, корп. 1,<br class="visible-xs"> пом. 6, ком. 8</p>
			
			<a href="#">Политика конфиденциальности</a>
		</footer>
		<div class="show-message"></div>
			
		
		<div class="modal fade myModal" id="mainModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
				<div class="modal-content">
			  		<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close.png" alt="закрыть"></span></button>
			  		</div>
					<div class="modal-body">
						<h1 class="upper">homme:<span style="font-size:18px;">intense</span></h1>
						<h4 class="upper">Аромат для мужчин</h4>
						<p class="price upper"><span class="zach">1980 руб.</span> <span class="nezach">990 руб.</span></p>
						<div class="list">
							<img src="img/listRound.png" alt="list">
							<p>Водостойкие</p>
						</div>
						<div class="list cent">
							<img src="img/listRound.png" alt="list">
							<p>10 оттенков</p>
						</div>
						<div class="list">
							<img src="img/listRound.png" alt="list">
							<p>Мягкая текстура</p>
						</div>
						<p class="today">Сегодня уже купили: <b><span class="count count-people">379</span> человек</b></p>
						
						<div class="form">
							<form class="text-center" action="#" method="post" name="application">
								<div class="form-group form-group-lg">
									<input required type="text" class="form-control" name="inputFIO" placeholder="Имя">
									<input required type="tel" class="form-control phoneInp" name="inputPhone" placeholder="Телефон">
									<select required name="selectCountry" class="form-select selectCountry">
										<option>Страна</option>
										<option>Страна1</option>
										<option>Страна2</option>
										<option>Страна3</option>
										<option>Страна3</option>
									</select>

									<button type="submit" class="btn btn-default btnForm upper">заказать со скидкой 50%</button>
								</div>
							</form>
						</div>
						<div class="tovar">
							<img src="img/tovar.png" alt="tovar">
							
							<div class="sale">
								50%
							</div>
						</div>
						
						<div class="timer_wrap">
							<div class="clock">
								<div class='hour cont'>
									<p class='hour0'></p>
									<p class='hour1'></p>
								</div>
								<div class='min cont cent'>
									<p class='min0'></p>
									<p class='min1'></p>
								</div>
								<div class='sec cont'>
									<p class='sec0'></p>
									<p class='sec1'></p>
								</div>
							</div>
							<div class="podpis hours">Часов</div>
							<div class="podpis cent">Минут</div>
							<div class="podpis">Секунд</div>
						</div>
					</div>
				</div>
		  	</div>
		</div>
		
		
	
		<div class="modal fade" id="thanks3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content text-center">
					<div id="thanks3_1">
						<p>Спасибо за заявку. Наш сотрудник свяжется с вами в ближайшее время.</p>
						<button type="button" data-dismiss="modal" aria-label="Close" style="background-color: #f58634;" class="close btn_submit btn btn-default">Закрыть</button>
					</div>
				</div>
			</div>
		</div>



		
		
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		
		<script src="js/jquery.magnific-popup.min.js"></script>
		
		 <script>
			 $('.country_select').change(function(){
				  wachThePrice($(this).val());
			  });
			  $('.country_select').change();

			  function wachThePrice(id){
				price777 = country_list[id].s1, 
				curr777 = country_list[id].curr; 
			  };
		  </script>
		
		<script src="js/timer.js"></script>
		<script src="js/count.js"></script>
		<script src="https://cdn.plyr.io/2.0.13/plyr.js"></script>
		<script src="js/init.js"></script>
	</body>
</html>