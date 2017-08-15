<!DOCTYPE html>
<?php include '../system/files/includes/head_php.php';?>
<html lang="ru-RU" prefix="og: http://ogp.me/ns#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Valufix</title>
		<link rel="stylesheet" href="https://cdn.plyr.io/2.0.13/plyr.css">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="jquery.bxslider/jquery.bxslider.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500i,700,900,500" rel="stylesheet">
		<link rel="stylesheet" href="css/main.css" type="text/css">
		
		<link rel="shortcut icon" href="img/fav.png" type="image/x-icon">
		
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script>
			kmacb_form_selector = '.call-modal';
		</script>
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<?php include '../system/files/includes/head_html.php';?> 
	</head>

	<body>
		<button type="button" data-toggle="modal" data-target="#myModal" class="btnModal btn btn-default call-modal" style="position:fixed;top:0;z-index:-1;">ЗАКАЗАТЬ ЗВОНОК</button>
		
		<header class="header">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-xs-12 col-xs-offset-0">
						<div class="wrap hidden-xs">
							<img src="img/headerIcon1.png" alt="icon">
							<span>100% гарантия
							качества</span>
						</div>
						<div class="wrap hidden-xs">
							<img src="img/headerIcon2.png" alt="icon">
							<span>Доставка по всей
							стране</span>
						</div>
						<div class="logo text-center">
							<img src="img/logo.png" alt="logo" class="">
						</div>
						<div class="wrap hidden-xs">
							<img src="img/headerIcon3.png" alt="icon">
							<span>50% скидка
							только сегодня</span>
						</div>
						<button type="button" data-toggle="modal" data-target="#myModal" class="btnModal btn btn-default hidden-xs">ЗАКАЗАТЬ ЗВОНОК</button>
					</div>
				</div>
			</div>
		</header>
		<section class="mainScr text-center">
			<div class="darkBG"></div>
			<div class="container lox">
				<div class="row">
					<div class="col-xs-12">
						<div class="textWithPictuteBG">
							<img src="img/textImageFacepalm.png" alt="header">
						</div>
						<h4>Профессиональное лечение<br class="visible-xs"> косточки на ноге.</h4>
						<div class="price">
							Всего за <strike><span class="price_land_s4"><?=$land_default_prices['s4']?></span></strike> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0">
						<main>
							<div class="product visible-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="timer">
								<div class="all">
									<div class="timer__heading">До окончания акции<br>
									осталось:</div>

									<div class="timer__wrap">
										<div class="clock">
											<div class='hour cont'>
												<p class='hour0'></p>
												<p class='hour1'></p>
											</div>
											<div class='min cont'>
												<p class='min0'></p>
												<p class='min1'></p>
											</div>
											<div class='sec cont'>
												<p class='sec0'></p>
												<p class='sec1'></p>
											</div>
										</div>
										<div class="podpis">Часов</div>
										<div class="podpis">Минут</div>
										<div class="podpis">Секунд</div>
									</div>
								</div>
							</div>
							<div class="product hidden-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="formWrap">
								<form action="success.php" method="post">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-control form-select country_select">
											
											<?=$country_list?>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">Заказать со скидкой</button>
									</div>
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>
								</form>
							</div>
						</main>
					</div>
				</div>
			</div>
		</section>
		
		<section class="advantages block">
			<h1 class="heading">преимущества</h1>
			<h4 class="subHeading">Почему выбирают именно нас.</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0">
						<div class="wraap">
							<div class="item">
								<img src="img/advanImg1.png" alt="image">
								<div class="text">Выпрямляет большой<br class="hidden-xs"> 
								палец и сустав</div>
							</div>
							<div class="item">
								<img src="img/advanImg2.png" alt="image">
								<div class="text">Снимает боль<br class="hidden-xs"> 
								и припухлость</div>
							</div>
							<div class="item">
								<img src="img/advanImg3.png" alt="image">
								<div class="text">Сохраняет естественную<br class="hidden-xs"> 
								подвижность стопы</div>
							</div>
							<div class="item">
								<img src="img/advanImg4.png" alt="image">
								<div class="text">Рассчитан на домашнее<br class="hidden-xs">
								использование</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="about block">
			<h1 class="heading">о продукте</h1>
			<h4 class="subHeading coloured">Что такое фиксатор ValuFix?</h4>
			<div class="container">
				<div class="row">
					<div class="wrap">
						<div class="col-xs-12 col-sm-5 col-md-6 col-lg-5 visible-xs">
							<img src="img/aboutImg.jpg" class="hidden-sm hidden-xs" alt="image">
							<img src="img/aboutImg2.jpg" class="visible-sm visible-xs" alt="image">
						</div>
						<div class="col-xs-12 col-sm-7 col-md-6 col-lg-5 col-lg-offset-1 col-sm-offset-0">
							<p>Валюфикс является разработкой института Фраунгофера в Германии. Созданная совместными усилиями ученых и ведущих немецких врачей ортопедов, шина Валюфиксучитывает все аспекты биомеханики стопы.</p>
							<p>Главное отличие этой шины в том, что коррекция направлена не только на выпрямление большого пальца, но и на борьбу с поперечным плоскостопием.</p>
							<p class="last">Таким образом, Валюфикс борется не только с "косточкой", но и с причиной, вызывающей её появление.</p>
						</div>
						<div class="col-xs-12 col-sm-5 col-md-6 col-lg-5 hidden-xs">
							<img src="img/aboutImg.jpg" class="hidden-sm hidden-xs" alt="image">
							<img src="img/aboutImg2.jpg" class="visible-sm visible-xs" alt="image">
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="video block">
			<h1 class="heading">Видеообзор</h1>
			<h4 class="subHeading">Почему ValuFix так эффективен?</h4>
			<h5 class="info text-center">Посмотрите видео о том, как это работает, как пользоваться ”Валюфикс”<br class="hidden-xs">
			и какие гарантии мы даем.</h5>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-offset-0">
						<!-- <div class="videoBl">
							<div data-type="youtube" data-video-id="Q533j3kkjNw"></div>
						</div> -->
						<video poster="img/videoPoster.jpg">
							<source src="video/vid.mp4">
						</video>
					</div>
				</div>
			</div>
		</section>
		
		<section class="howItWorks block">
			<h1 class="heading">Как это работает</h1>
			<h4 class="subHeading">В чем эффективность ValuFix.</h4>
			<div class="container">
				<div class="row">
					<div class="wrap">
						<div class="col-xs-12 col-lg-6 col-lg-offset-1 col-sm-7 col-sm-offset-0">
							<img src="img/howItWorkImg1.jpg" alt="image"><img src="img/howItWorkImg2.jpg" alt="image">
						</div>
						<div class="col-xs-12 col-sm-5">
							<div class="item">
								<div class="number">1</div>
								<div class="text">Возвращает стопе природную форму, предохраняет и снимает болезненную опухоль.</div>
							</div>
							<div class="item">
								<div class="number">2</div>
								<div class="text">Шина выпрямляет сдавленные и искривленные мягкие части основного сустава большого пальца;</div>
							</div>
							<div class="item">
								<div class="number">3</div>
								<div class="text">При помощи специальной конструкции шины, подкладки и пальцевой повязки положение стопы стабилизируется;</div>
							</div>
							<div class="item">
								<div class="number">4</div>
								<div class="text">С применением шины Валюфикс стопа деформированная Hallux valgus двигается естественно и без боли;</div>
							</div>
							<div class="item last">
								<div class="number">5</div>
								<div class="text">Эффективно избавляет от поперечного плоскостопия, являющееся частым спутником искривления большого пальца.</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="researchResults block">
			<h1 class="heading">результаты исследования</h1>
			<h4 class="subHeading coloured">5 причин, почему ValuFix лучше<br class="visible-xs"> других средств.</h4>
			<div class="container">
				<div class="row">
					<div class="wrap">
						<div class="col-xs-12 col-sm-6 col-lg-5 col-lg-offset-1">
							<h1>Другие средства</h1>
							<div class="wrap">
								<div class="item">
									<img src="img/cross.png" alt="cross">
									<p>Оказывают лишь временный эффект;</p>
								</div>
								<div class="item">
									<img src="img/cross.png" alt="cross">
									<p>Полностью или частично фиксируют сустав, ограничивая его подвижность;</p>
								</div>
								<div class="item">
									<img src="img/cross.png" alt="cross">
									<p>Лишь приостанавливают прогресс суставной деформации;</p>
								</div>
								<div class="item">
									<img src="img/cross.png" alt="cross">
									<p>Доставляют неудобства при ношении;</p>
								</div>
								<div class="item">
									<img src="img/cross.png" alt="cross">
									<p>Дорогостоящи могут вызывать дискомфорт во время использования.</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-lg-5">
							<h1>ValuFix</h1>
							<div class="wrap">
								<div class="item">
									<img src="img/tick.png" alt="cross">
									<p>Оказывает стойкий, долговременный эффект;</p>
								</div>
								<div class="item">
									<img src="img/tick.png" alt="cross">
									<p>Обеспечивает комфорт и не препятствует подвижности сустава;</p>
								</div>
								<div class="item">
									<img src="img/tick.png" alt="cross">
									<p>Предотвращает дальнейшее прогрессирование деформации сустава;</p>
								</div>
								<div class="item">
									<img src="img/tick.png" alt="cross">
									<p>Идеально подходит для домашнего использования;</p>
								</div>
								<div class="item">
									<img src="img/tick.png" alt="cross">
									<p>Намного доступнее и проще в использовании, чем большинство аналогичных устройств.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="offerCopy1 mainScr text-center">
			<div class="darkBG"></div>
			<div class="container lox">
				<div class="row">
					<div class="col-xs-12">
						<div class="textWithPictuteBG">
							<img src="img/textImageFacepalm.png" alt="header">
						</div>
						<h4>Профессиональное лечение<br class="visible-xs"> косточки на ноге.</h4>
						<div class="price">
							Всего за <strike><span class="price_land_s4"><?=$land_default_prices['s4']?></span></strike> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0">
						<main>
							<div class="product visible-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="timer">
								<div class="all">
									<div class="timer__heading">До окончания акции<br>
									осталось:</div>

									<div class="timer__wrap">
										<div class="clock">
											<div class='hour cont'>
												<p class='hour0'></p>
												<p class='hour1'></p>
											</div>
											<div class='min cont'>
												<p class='min0'></p>
												<p class='min1'></p>
											</div>
											<div class='sec cont'>
												<p class='sec0'></p>
												<p class='sec1'></p>
											</div>
										</div>
										<div class="podpis">Часов</div>
										<div class="podpis">Минут</div>
										<div class="podpis">Секунд</div>
									</div>
								</div>
							</div>
							<div class="product hidden-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="formWrap">
								<form action="success.php" method="post">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-control form-select country_select">
											
											<?=$country_list?>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">Заказать со скидкой</button>
									</div>
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>
								</form>
							</div>
						</main>
					</div>
				</div>
			</div>
		</div>
		
		<section class="results block">
			<h1 class="heading">Результат</h1>
			<h4 class="subHeading">Что вы получите после<br class="visible-xs"> использования ValuFix.</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="wraap">
							<div class="item">
								<img src="img/resultImg1.png" alt="image">
								<div class="text">Здоровые,<br class="hidden-xs"> 
								красивые ноги</div>
							</div>
							<div class="item">
								<img src="img/resultImg2.png" alt="image">
								<div class="text">Без врачей<br class="hidden-xs"> 
								и операций</div>
							</div>
							<div class="item">
								<img src="img/resultImg3.png" alt="image">
								<div class="text">эффект останется<br class="hidden-xs"> 
								навсегда</div>
							</div>
							<div class="item">
								<img src="img/resultImg4.png" alt="image">
								<div class="text">минимальные<br class="hidden-xs"> 
								траты</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="feeds block text-center">
			<h1 class="heading">Отзывы <span class="hidden-xs">покупателей</span></h1>
			<h4 class="subHeading">Как изменилась жизнь тех, кто уже<br class="visible-xs"> попробовал ValuFix?</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
						<div class="sld">
							<ul class="bxslider1">
								<li>
									<img class="photo" src="img/feedImg1.png" alt="photo">
									<h4 class="name">Светлана, 45 лет</h4>
									<p class="feedText">Страдала косточкой на ноге более 7 лет и за это время успела проверить на собственном опыте, что никакие лекарства не помогают. Наилучшие результаты дало ежедневне ношение ортопедического фиксатора ”Валюфикс”. Это устройство очень простое в использовании, смягчает нагрузку при ходьбе и не стесняет движений в домашней обуви. Уже через 3 недели состояние ”косточки” значительно улучшилось!</p>
									<div class="beforeAfter">
										<div class="before"><img src="img/before1.jpg" alt="before" class="iHaveImaginationNoMore"><div class="t">До</div></div>
										<img src="img/arrowBoforeAfter.png" alt="arrow" class="arrow">
										<div class="after"><img src="img/after1.jpg" alt="after" class="iHaveImaginationNoMore"><div class="t">После</div></div>
									</div>
								</li>
								<li>
									<img class="photo" src="img/feedImg2.png" alt="photo">
									<h4 class="name">Анна, 42 лет</h4>
									<p class="feedText">С детства имею проблемы с ногами из-за плоскостопия, последние годы практически не ношу любимые раньше каблуки из-за роста ”косточек” на ногах((( По совету подруги воспользовалась инновационным фиксатором ”Валюфикс”. Прекрасный фиксатор - совершенно не трет, а результат, просто супер. За месяц у меня восстановилась форма сустава и прошли боли.</p>
									<div class="beforeAfter">
										<div class="before"><img src="img/before2.jpg" alt="before" class="iHaveImaginationNoMore"><div class="t">До</div></div>
										<img src="img/arrowBoforeAfter.png" alt="arrow" class="arrow">
										<div class="after"><img src="img/after2.jpg" alt="after" class="iHaveImaginationNoMore"><div class="t">После</div></div>
									</div>
								</li>
								<li>
									<img class="photo" src="img/feedImg3.png" alt="photo">
									<h4 class="name">Жанна, 48 лет</h4>
									<p class="feedText">У меня косточка на правой ноге. Что я только не пробовала: начала делать массаж, физиопроцедуры, носила ужасные бандажи и выпрямители, ездила по клиниками - ничего не помогало. Всё изменилось после того, как я узнала о ”Валюфикс”. По сравнению с затратами на моё лечение, этот фиксатор стоит копейки, а результат - через две недели! Очень комфортен, лучшего ортопедического средства я пока не встречала!</p>
									<div class="beforeAfter">
										<div class="before"><img src="img/before3.jpg" alt="before" class="iHaveImaginationNoMore"><div class="t">До</div></div>
										<img src="img/arrowBoforeAfter.png" alt="arrow" class="arrow">
										<div class="after"><img src="img/after3.jpg" alt="after" class="iHaveImaginationNoMore"><div class="t">После</div></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="order block text-center">
			<h1 class="heading"><span class="hidden-sm hidden-md hidden-lg">Как </span>оформить заказ</h1>
			<h4 class="subHeading coloured">Мы доставим Ваш заказ<br class="visible-xs"> в любую точку России, СНГ и Европы!</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-12 kma">
						<div class="item">
							<img src="img/orderImg1.jpg" alt="image">
							<h4>заявка</h4>
							<span>Отправляете заявку<span class="hidden-xs hidden-md hidden-sm"> с сайта</span>. С Вами связывается специалист для консультации.</span>
						</div>
						<img src="img/arr_right.png" alt="arrow" class="arrow">
						<div class="item">
							<img src="img/orderImg2.jpg" alt="image">
							<h4>изготовление</h4>
							<span>Ваш заказ отправляется в лабораторию. Срок производства формулы - 24 часа.</span>
						</div>
						<img src="img/arr_right.png" alt="arrow" class="arrow">
						<div class="item">
							<img src="img/orderImg3.jpg" alt="image">
							<h4>доставка</h4>
							<span>Заказ доставляется наложенным платежом, в конфиденциальной упаковке по России и СНГ.</span>
						</div>
						<img src="img/arr_right.png" alt="arrow" class="arrow">
						<div class="item">
							<img src="img/orderImg4.jpg" alt="image">
							<h4>оплата</h4>
							<span>Вы оплачиваете свой заказ, только получив его в руки на почте.</span>
						</div>
						<img src="img/arr_right.png" alt="arrow" class="arrow">
						<div class="item">
							<img src="img/orderImg5.jpg" alt="image">
							<h4>применение</h4>
							<span>После применения ValuFix ваши стопы снова станут идеальными!</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section class="team block">
			<h1 class="heading">наша команда</h1>
			<h4 class="subHeading">Команда ValuFix — работаем для Вас!</h4>
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="wraap">
							<div class="item">
								<img src="img/team1.jpg" alt="image">
								<h4 class="name">ольга</h4>
								<div class="text">Акционные<br>
								предложения</div>
							</div>
							<div class="item">
								<img src="img/team2.jpg" alt="image">
								<h4 class="name">татьяна</h4>
								<div class="text">Вопросы по<br>
								использованию</div>
							</div>
							<div class="item">
								<img src="img/team3.jpg" alt="image">
								<h4 class="name">вероника</h4>
								<div class="text">Прием оптовых<br>
								заказов</div>
							</div>
							<div class="item">
								<img src="img/team4.jpg" alt="image">
								<h4 class="name">кирилл</h4>
								<div class="text">Менеджер<br>
								по доставке</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<div class="offerCopy2 mainScr text-center">
			<div class="darkBG"></div>
			<div class="container lox">
				<div class="row">
					<div class="col-xs-12">
						<div class="textWithPictuteBG">
							<img src="img/textImageFacepalm.png" alt="header">
						</div>
						<h4>Профессиональное лечение<br class="visible-xs"> косточки на ноге.</h4>
						<div class="price">
							Всего за <strike><span class="price_land_s4"><?=$land_default_prices['s4']?></span></strike> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-xs-offset-0">
						<main>
							<div class="product visible-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="timer">
								<div class="all">
									<div class="timer__heading">До окончания акции<br>
									осталось:</div>

									<div class="timer__wrap">
										<div class="clock">
											<div class='hour cont'>
												<p class='hour0'></p>
												<p class='hour1'></p>
											</div>
											<div class='min cont'>
												<p class='min0'></p>
												<p class='min1'></p>
											</div>
											<div class='sec cont'>
												<p class='sec0'></p>
												<p class='sec1'></p>
											</div>
										</div>
										<div class="podpis">Часов</div>
										<div class="podpis">Минут</div>
										<div class="podpis">Секунд</div>
									</div>
								</div>
							</div>
							<div class="product hidden-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="formWrap">
								<form action="success.php" method="post">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-control form-select country_select">
											
											<?=$country_list?>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">Заказать со скидкой</button>
									</div>
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>
								</form>
							</div>
						</main>
					</div>
				</div>
			</div>
		</div>
			
		<footer class="footer text-center">
			<div class="rekv"><?php include '../system/files/includes/footer_txt.php';?></div>
			<a href="#" modal="polit">Политика конфиденциальности</a><br>
			<a href="#" modal="agreement">Пользовательское соглашение</a>

		</footer>
		<div class="show-message"></div>
		
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		  	<div class="modal-dialog" role="document">
				<div class="modal-content">
			  		<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><img src="img/close.png" alt="закрыть"></span></button>
			  		</div>
					<div class="modal-body lox text-center mainScr">
						<div class="textWithPictuteBG">
							<img src="img/textImageFacepalm.png" alt="header">
						</div>
						<h4>Профессиональное лечение<br class="visible-xs"> косточки на ноге.</h4>
						<div class="price">
							Всего за <strike><span class="price_land_s4"><?=$land_default_prices['s4']?></span></strike> <span class="coloured"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span>
						</div>
					
				
						<main>
							<div class="product visible-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="timer">
								<div class="all">
									<div class="timer__heading">До окончания акции<br>
									осталось:</div>

									<div class="timer__wrap">
										<div class="clock">
											<div class='hour cont'>
												<p class='hour0'></p>
												<p class='hour1'></p>
											</div>
											<div class='min cont'>
												<p class='min0'></p>
												<p class='min1'></p>
											</div>
											<div class='sec cont'>
												<p class='sec0'></p>
												<p class='sec1'></p>
											</div>
										</div>
										<div class="podpis">Часов</div>
										<div class="podpis">Минут</div>
										<div class="podpis">Секунд</div>
									</div>
								</div>
							</div>
							<div class="product hidden-xs">
								<img src="img/product.jpg" alt="product">
								<div class="sale">-50%</div>
								<span class="info">Сегодня уже купили <span class="count-people">354</span> человек</span>
							</div>
							<div class="formWrap">
								<form action="success.php" method="post">
									<div class="form-group form-group-lg">
										<input required class="form-control" name="name" placeholder="Имя">
										<input required type="tel" class="form-control phoneInp" name="phone" placeholder="Телефон">
										<select required name="country" class="form-control form-select country_select">
											
											<?=$country_list?>
										</select>
										<button type="submit" class="btn btn-default upper btnForm">Заказать со скидкой</button>
									</div>
									<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
									<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
									<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
									<?=$form_hidden_fields?>
								</form>
							</div>
						</main>
					</div>
				</div>
		  	</div>
		</div>
		
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="https://cdn.plyr.io/2.0.13/plyr.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.bxslider.js"></script>
		
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
		<script src="js/init.js"></script>
		
		
		<?php include '../system/files/includes/footer_html.php';?>
	</body>
</html>
<?php include '../system/files/includes/footer_php.php';?>