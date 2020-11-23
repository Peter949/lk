<?php
	session_start();
	$urlName;
	$url;
	if (!isset($_SESSION['login'])) {
	 	$urlName = "Войти";
	 	$url = "login.php";
	 }else{
	 	$urlName = "Выйти";
	 	$url = "unset.php";
	 	unset($_SESSION['login']);
	 }
?>

<!DOCTYPE html>
<html>
<head>
	<title>NescOFF</title>
	<link rel="stylesheet" type="text/css" href="style/style.css">
	<link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
</head>
<body >

<div id="head">
	<div id="logo">
		<a href="index.php"><img src="images/logo.png" id="logo"></a>
	</div>
	<div id="nav">
		<table>
			<tr>
				<td class="navTd"><a href="index.php" class="navA">Главная</a></td>
				<td class="navTd"><a href="about.php" class="navA">Об акции</a></td>
				<td class="navTd"><a href="regions.php" class="navA">Карта регионов</a></td>
				<td class="navTd"><a href="partners.php" class="navA">Партнеры</a></td>
				<td class="navTd"><a href="faq.php" class="navA">FAQ</a></td>
				<td class="navTd"><a href="<?echo $url?>" class="navA"><?echo $urlName?></td>
			</tr>
		</table>
	</div>
</div>

<div id="lk">
	<h1>Личный кабинет</h1>
	<center>
		<div id="blockLK">

			<div class="infoLK" style="margin-right:15px;">
				<h3 class="h3-lk">Данные пользователя:</h3>
				<div id="infoLK1">
					<img src="images/background.jpg" id="avatar">
				</div>
				<div id="infoLK2">
					<p class="p-lk-g">ФИО:</p>
					<p class="p-lk">Евдокимов Тимур Евгеньевич</p>
					<p class="p-lk-g">Почта:</p>
					<p class="p-lk">ten3.theblack@gmail.com</p>
					<p class="p-lk-g">Дата рождения:</p>
					<p class="p-lk">14.10.1999</p>
					<p class="p-lk-g">Телефон:</p>
					<p class="p-lk">+79142687419</p>
				</div>
			</div>
			<div class="infoLK" style="margin-left:15px;">
				<h3 class="h3-lk">Данные пользователя:</h3>
				<div id="infoLK3">
					<div class="infoLK4" style="text-align: left;">
						<p class="p-lk-g">Адрес:</p><br>
						<p class="p-lk-g">Индекс:</p><br>
						<p class="p-lk-g">Кол-во:</p>

					</div>
					<div class="infoLK4" style="margin-left: 15px; text-align: left;">
						<p class="p-lk-g">ул. Петра Алексеева, 25</p><br>
						<p class="p-lk-g">677000</p><br>
						<p class="p-lk-g">0</p>
					</div> 
					
					<a href="index.php"><button id="addCode">Добавить промокод</button></a>
					<button id="reduser">Редактировать</button>
				</div>
			</div>
			<div id="priziLK">
				<h3 class="h3-lk">Ваши призы:</h3>
				<table style="margin-top: 40px;">
					<tr>
						<td><img src="images/prizi/termos.png" class="priziLKtd"></td>
					</tr>
				</table>
			</div>
		</div>
	</center>
	
</div>
<div id="podval">
	<div id="leftInfo">
		<p>@2020 Все права защищены</p>
		<p>+7-924-368-97-14</p>
	</div>
	<div id="rightInfo">
		<table>
			<tr>
				<td class="podTd"><a href="" class="podA">Правила акции</a></td>
				<td class="podTd"><a href="" class="podA">Обратная связь</a></td>
				<td class="podTd"><a href="" class="podA">Пользовательское соглашение</a></td>
			</tr>
		</table>
	</div>
</div>

</body>
</html>