<?
	$stepsCount = 2;
	$step = $_GET['step'] ? $_GET['step'] % $stepsCount : 1;
?>

<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Регистрация</title>
	<link rel="stylesheet" href="public/css/zachetka.css">
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:400,700&subset=latin,cyrillic">
</head>
<body class="layout">
	<header class="layout__header">
		<div class="header">
			<div class="header__wrapper">
				<a href="#" class="header__logo">Зачётка</a>
				<nav class="header__nav">
					<ul class="header__menu">
						<li class="header__menu-item"><a href="#" class="header__menu-link">Для кого</a></li>
						<li class="header__menu-item"><a href="#" class="header__menu-link">Возможности</a></li>
						<li class="header__menu-item"><a href="#" class="header__menu-link">Контакты</a></li>
					</ul>
				</nav>
				<a href="#" class="header__login login__btn login__btn_pull_right">Вход</a>
			</div>
		</div>
	</header>

	<main class="layout__page">
		<div class="page">
			<div class="page__wrapper">
				<div class="content">
					<? if ($step == 1): ?>
					<? else: ?>
					<? endif; ?>
				</div>
			</div>
		</div>
	</main>

	<footer class="layout__footer">
		<div class="footer">
			<div class="footer__links">
				<div class="footer__menu">
					<h3 class="secondary-menu__header">Зачётка</h3>
					<ul class="secondary-menu__nav">
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">О зачётке</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Контакты</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Партнёрам и ВУЗам</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Условия использования</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Справка</a></li>
					</ul>
				</div>

				<div class="footer__menu">
					<h3 class="secondary-menu__header">Образовательная сеть</h3>
					<ul class="secondary-menu__nav">
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Возможности</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Для кого?</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Наши партнёры</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Подключённый ВУЗы</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Работодатели</a></li>
					</ul>
				</div>

				<div class="footer__menu">
					<h3 class="secondary-menu__header">Публикации</h3>
					<ul class="secondary-menu__nav">
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Пресс-центр</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Новости Зачётки</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Качественное образование</a></li>
						<li class="secondary-menu__item"><a href="#" class="secondary-menu__link">Ваши успехи</a></li>
					</ul>
				</div>
			</div>

			<div class="footer__info">
				<p class="footer__text">Zachetka.com 2013 - Первая образовательная сеть для студентов</p>
				<p class="footer__text">Создатели: <a href="#" class="text-link">гениальные люди</a></p>
			</div>
		</div>
	</footer>
</body>
</html>
