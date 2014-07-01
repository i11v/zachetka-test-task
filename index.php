<?
  $stepsCount = 2;
  $step = $_GET['step'] ? $_GET['step'] % $stepsCount : 1;
  // $ajax = !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'
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
          <div class="wizard wizard_step_1 js-wizard">
            <div class="wizard__steps steps">
              <div class="steps__step steps__step-1"></div>
              <div class="steps__line"></div>
              <div class="steps__step steps__step-2"></div>
              <div class="steps__line"></div>
              <div class="steps__step steps__step-3"></div>
            </div>
            <div class="wizard__form register-form js-wizard__form">
              <h2 class="register-form__header">Подтверди свои данные или введи изменения</h2>
              <form action="" class="register-form__form js-form" action="register.php" method="POST">
                <div class="register-form__body">
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="second-name" class="register-form__label">Фамилия:</label>
                      <input type="text" name="secondName" id="second-name" class="register-form__input register-form__input_text js-input" placeholder="Константинопольский" autofocus>
                      <span class="register-form__err-msg">× Это поле нужно заполнить</span>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="first-name" class="register-form__label">Имя:</label>
                      <input type="text" name="firstName" id="first-name" class="register-form__input register-form__input_text js-input" placeholder="Константин">
                      <span class="register-form__err-msg">× Это поле нужно заполнить</span>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="patronymic" class="register-form__label">Отчество:</label>
                      <input type="text" name="patronymic" id="patronymic" class="register-form__input register-form__input_text js-input" placeholder="Константинович">
                      <span class="register-form__err-msg">× Это поле нужно заполнить</span>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <span class="register-form__label">Пол:</span>
                      <label class="register-form__label_inline">
                        <input type="radio" name="sex" class="register-form__input register-form__input_radio" value="1" checked>Мальчик
                      </label>
                      <label class="register-form__label_inline">
                        <input type="radio" name="sex" class="register-form__input register-form__input_radio" value="0">Девочка
                      </label>
                      <span class="register-form__err-msg">× Надо определиться с полом</span>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="university" class="register-form__label">Твой ВУЗ:</label>
                      <input type="text" name="university" id="university" class="register-form__input register-form__input_text js-input" placeholder="МИФИ">
                      <span class="register-form__err-msg">× Это поле нужно заполнить</span>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="group" class="register-form__label">Твоя группа:</label>
                      <input type="text" name="group" id="group" class="register-form__input register-form__input_text js-input" placeholder="В2-43">
                      <span class="register-form__err-msg">× Это поле нужно заполнить</span>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="course" class="register-form__label">Курс, семестр:</label>
                      <input type="text" name="course" id="course" class="register-form__input register-form__input_text js-input" placeholder="1 курс, 2 семестр">
                      <span class="register-form__err-msg">× Это поле нужно заполнить</span>
                    </div>
                  </div>
                </div>
                <div class="register-form__row js-form-row">
                  <span class="register-form__info">При изменении, твои данные отправятся на модерацию</span>
                </div>
                <div class="register-form__row js-form-row">
                  <input type="submit" value="Подтвердить" class="btn">
                </div>
              </form>
            </div><!-- .wizard__form -->
          </div><!-- .wizard -->
        <? else: ?>
          <div class="wizard wizard_step_2 js-wizard">
            <div class="wizard__steps steps">
              <div class="steps__step steps__step-1"></div>
              <div class="steps__line"></div>
              <div class="steps__step steps__step-2"></div>
              <div class="steps__line"></div>
              <div class="steps__step steps__step-3"></div>
            </div>
            <div class="wizard__form register-form">
              <h2 class="register-form__header">Для входа тебе потребуются E-mail и пароль</h2>
              <form action="" class="register-form__form js-form">
                <div class="register-form__body">
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="email" class="register-form__label">E-mail:</label>
                      <input type="email" name="email" id="email" class="register-form__input register-form__input_text js-input" placeholder="konstantinopolsky@example.com" autofocus>
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="pass" class="register-form__label">Пароль:</label>
                      <input type="password" name="pass" id="pass" class="register-form__input register-form__input_text js-input">
                    </div>
                  </div>
                  <div class="register-form__row js-form-row">
                    <div class="register-form__row-wrapper">
                      <label for="pass-repeat" class="register-form__label">Подтверди пароль:</label>
                      <input type="password" id="pass-repeat" class="register-form__input register-form__input_text js-input">
                    </div>
                  </div>
                <div class="register-form__row js-form-row">
                  <input type="submit" value="Подтвердить" class="btn">
                </div>
              </form>
            </div><!-- .wizard__form -->
          </div><!-- .wizard -->
        <? endif; ?>
        </div><!-- .content -->
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

  <script src="public/js/app.js"></script>
</body>
</html>
