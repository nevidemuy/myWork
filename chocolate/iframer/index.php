<?php include '../../system/files/includes/head_php.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Шоколадные инструменты</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/iframe.css"/>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

<?php include '../../system/files/includes/head_html.php';?>
</head>
<body>
<div class="content">
    <div class="top">
        <div class="left">
            <div class="image">
                <img id="image" src="img/standart.jpg">
            </div>
        </div>
        <div class="right">
            <div class="wrap">
                <h1>Шоколадные инструменты. <span id="type">Стандарт</span></h1>
                <div class="price">
                    <div class="wrap">
                        <div class="left big-text">Цена</div>
                        <div class="right big-text">
                            <span class="strike-text price_old"><span class="price_land_s4"><?=$land_default_prices["s4"]?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span><br>
                            <span class="price_new"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="wrap">
            <div class="form">
                <form action="/success.php" method="POST">
	    	    	<div class="row">
                        <label for="country">Страна</label>
                        <select name="country" class="country_select"><?=$country_list?></select>
                    </div>
                    <div class="row">
                    	<label for="address">Ассортимент</label>
                    	<select required name="address" class="form-select" id="selectAdress">
							<option>Стандарт</option>
							<option>Шериф</option>
							<option>Жби</option>
							<option>Микс</option>
							<option>Конструкторский</option>
							<option>Офисный</option>
							<option>Энергетический</option>
							<option>Дизайнерский</option>
						</select>
                    </div>
                    <div class="row">
                        <label for="name">ФИО</label>
                        <input id="name" name="name" type="text">
                    </div>
                    <div class="row">
                        <label for="phone">Телефон</label>
                        <input id="phone" name="phone" type="text">
                    </div>
                    <div class="row price">
                        <div class="left">
                            Стоимость заказа<br>
                            Доставка
                        </div>
                        <div class="right">
                           <span class="price_new"><span class="price_land_s1"><?=$land_default_prices['s1']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span><br>
							<span class="price_new"><span class="price_land_s2"><?=$land_default_prices['s2']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></span>
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="row big-text">
                        <div class="left">ИТОГО</div>
                        <div class="right price_with_delivery"><span class="price_land_s3"><?=$land_default_prices['s3']?></span> <span class="price_land_curr"><?=$land_default_prices['curr']?></span></div>
                    </div>
                    <div class="row align-center">
                        <input type="submit" value="ЗАКАЗАТЬ">
                    </div>
					<!-- <input type="hidden" name="address" value="" /> -->
					<input type="hidden" name="s1" class="price_field_s1" value="<?=$land_default_prices['s1']?>" />
					<input type="hidden" name="s2" class="price_field_s2" value="<?=$land_default_prices['s2']?>" />
					<input type="hidden" name="s3" class="price_field_s3" value="<?=$land_default_prices['s3']?>" />
					<?=$form_hidden_fields?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../../system/files/includes/footer_html.php';?>
</body>
</html>
<?php include '../../system/files/includes/footer_php.php';?>