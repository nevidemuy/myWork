<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru-RU" lang="ru-RU" prefix="og: http://ogp.me/ns#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8; IE=9">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<meta property="og:url"           content="http://skorost.k-mechte.ru" />
		<meta property="og:type"          content="website" />
		<meta property="og:title"         content="Проверь свою скорость чтения" />
		<meta property="og:description"   content="Я проверил свою скорость чтения, проверь и ты!" />
		<meta property="og:image"         content="https://yastatic.net/morda-logo/i/logo.svg" />

		<title>Проверь скорость чтения</title>
		<link rel="stylesheet" href="css/main.css" type="text/css">
		<link rel="stylesheet" href="css/main_media.css" type="text/css">
		<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
		<link rel="stylesheet" href="jquery.bxslider/jquery.bxslider.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/gothampro.css">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">

		<link rel="shortcut icon" href="" type="image/x-icon">
	</head>

	<body>
		<section id="scr1">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<h1>Проверь<br>
						свою скорость<br>
						чтения</h1>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<iframe width="620" height="350" src="https://www.youtube.com/embed/6O3LhbPtUEc" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<h2>Определите скорость вашего чтения<br>
						с учетом качества запоминания текста</h2>
					</div>
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<div class="getname">
							<form action="">
								<input type="text" id="name" required class="form-control" name="name" placeholder="Имя">
								<button id="but1" type="submit" class="btn btn-default">Начать замер</button>
							</form>
						</div>
					</div>
				</div>
			</div>	
		</section>
	
		<section id="scr2">
			<div class="container">
				<div class="row osel">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<h1>Надежда,<br>
						давайте начнём</h1>
						<h2>После нажатия на кнопку «Поехали», появится текст.<br>
						Прочтите его полностью от начала и до конца,<br>
						завершив чтение нажатием на кнопку «Готово».<br>
						После прочтения вам будут заданы вопросы,<br>
						поэтому читайте внимательно в своём обычном<br>
						ритме ;)</h2>
					</div>
					<div class="col-xs-12 text-center">
						<button id="but2" type="button" class="btn btn-default">Поехали</button>
					</div>
				</div>
				<div class="row tekst">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12 go">
						
					</div>
				</div>
				<div class="row tekst">
					<div class="col-xs-12 text-center">
						<button id="but2_1" type="button" class="btn btn-default">Готово</button>
					</div>
				</div>
			</div>
		</section>
		
		<section id="scr3">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<h1>Надежда, шикарно!</h1>
						<h2>А вот и обещанные вопросы о прочитанном тексте.<br>
						<br>
						<br>
						Выберите один правильный ответ для каждого вопроса.<br>
						Вопросы, оставленные без ответа, приравниваются<br>
						к неверным ответам. Так-то! Нажмите кнопку «Готово»,<br> 
						когда дадите ответы на все вопросы.</h2>
					</div>
				</div>
			</div>
			<div class="container tests testi clearfix">
				
			</div>
			<div class="container">
				<div class="row text-center">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<button id="but3" type="button" class="btn btn-default">Готово</button>
					</div>
				</div>
			</div>
		</section>
		
		<section id="scr4">
			<div class="container">
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<h1>Надежда,<br>
						ваши результаты<br>
						готовы</h1>
						
						<h2>В тексте <span id="znaki">2946 знаков</span><br>
						Время чтения: <span id="seconds">254.35 сек</span><br>
						Скорость считывания данных: <span id="speed">695 знаков в минуту</span><br>
						Коэффициент понимания текста: <span id="kaef">50%</span><br>
						Скорость чтения с учетом понимания: <span id="ponimanie">348 знаков в минуту</span></h2>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-xs-12">
						<p>Сравните ваши показатели с таблицей из 5 скоростей чтения от Павла Палагина:<br>
						<br>
						I скорость: школьный уровень, чтение по одному слову до 1000 зн\мин<br>
						<br>
						II скорость: базовое скорочтение, чтение фразами от 1 000 до 3 000 зн\мин<br>
						<br>
						III скорость: быстрая, чтение по-диагоналям от 3 000 до 5 000 зн\мин<br>
						<br>
						IV скорость: очень быстрая, вертикальное чтение от 5 000 до 15 000 зн\мин<br>
						<br>
						V скорость: сверхбыстрая, фоточтение от 15 000 зн\мин</p>

						<p style="text-indent: 45px; margin-top: 20px;">Читать на школьной скорости чтения можно, но это сравнимо с загрузкой страниц на телефоне через EDGE, вместе 3G! Ведь можно читать гораздо быстрее, и это доступно каждому! На школьном уровне читает около 80% людей на земле, наша задача - помочь каждому участнику наших полных программ обучения войти в 20% тех, кто использует навыки скорочтения и раскрывает свой потенциал по максимуму!
						Этими навыками в начале своей карьеры овладели известнейшие люди в истории: Ленин, Наполеон, Сталин, Кеннеди, Пушкин. Многие современники: Энтони Роббинс, Брайан Трейси, Игорь Манн, Радислав Гандапас, Бодо Шефер и другие. Присоединяйтесь к ним и начните читать быстрее, внимательнее, с улучшенным запоминанием без потерь смысла и уверенностью в своих силах, что вы быстро справитесь с любым текстом!</p>
						<script type="text/javascript">(function() {
  if (window.pluso)if (typeof window.pluso.start == "function") return;
  if (window.ifpluso==undefined) { window.ifpluso = 1;
    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
  }})();</script>
<div class="pluso" data-background="transparent" data-options="small,square,line,horizontal,nocounter,theme=04" data-services="vkontakte,facebook"></div>
						<p>
							Гарантированно получить результат можно на наших курсах по скорочтению.<br>
							<a target="_blank" href="http://k-mechte.ru/trenings/1/?utm_source=zamer_skoro&utm_medium=rez_page">Очный курс «СуперЧтение» в Москве</a><br>
							<a target="_blank" href="http://kurs.skorochteniya.ru/?utm_source=zamer_skoro&utm_medium=rez_page">Онлайн-курс «Скорочтения и развития памяти» из любой точки мира</a>
						</p>
						
						<h4>Хотите узнать, как повысить скорость<br>
						вашего чтения и улучшить запоминание?</h4>
						<p class="none">Получите бесплатный базовый онлайн-курс по эффективному чтению<br>
						от ведущего эксперта по скорочтению Павла Палагина</p>
						
						<form class="twitch" action="mail.php" id="formB" method="post" name="application">
							<div class="form-group form-group-lg">
								<input required class="form-control rotor" name="inputFIO" placeholder="Имя"> 
								<input required class="form-control" id="inputMail" type="email" name="inputMail" placeholder="E-mail">
								<button  id="but4" type="submit" class="btn btn-default">Получить курс</button>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</section>

		<div class="modal fade" id="thanks3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog" role="document">
				<div class="modal-content text-center">
					<div id="thanks3_1">
						<p>Спасибо за заявку.</p>
						<button type="button" data-dismiss="modal" aria-label="Close" style="background-color: #f58634;" class="close btn_submit btn btn-default">Закрыть</button>
					</div>
				</div>
			</div>
		</div>



		
		<script src="js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
		<script src="https://yastatic.net/share2/share.js"></script>


		<script charset="utf-8" src="js/script.js"></script>
		



		<script type="text/javascript">
			
		</script>
	</body>
</html>