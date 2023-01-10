<!DOCTYPE html>
<html lang="ru">

<head>
  <title>Wizardsoft</title>
  <meta name="keywords" content="Wizardsoft">
  <meta name="description" content="Wizardsoft">
  <meta charset="utf-8" />
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="icon" type="image/svg+xml" href="https://www.design-spb.ru/tmp/2022/wizard-site1/favicon.svg">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <script src="https://www.design-spb.ru/tmp/2022/wizard-site1/scripts/jquery-3.6.1.min.js"></script>

  <?php wp_head(); ?>

</head>

<body>
  <header>
    <div class="grid v-center">
      <div><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/" class="logo"><img src="https://www.design-spb.ru/tmp/2022/wizard-site1/img/logo-w-text-red-2.svg" /></a></div>
      <div class="header-menu">
        <div>+7 (950) 043-18-24<br />+7 (950) 043-18-24</div>
        <div>
          <div class="window-link"><span class="material-icons">phone_in_talk</span> <span>Заказать звонок</span></div>
          <div class="window callback">
            <div class="window-modal p40 r5">
              <h2><span class="material-icons" title="Заказать звонок">phone_in_talk</span> Заказать звонок</h2>
              <input type="text" name="name" id="name" required placeholder="Ваше имя" class="m-b-20">
              <input type="text" name="name" id="name" required placeholder="Ваш номер телефона" class="m-b-20">
              <input type="submit" value="Заказать">
              <div class="window-close">×</div>
            </div>
          </div>
        </div>
        <div>
          <a href=""><span class="material-icons" title="Поиск по сайту">search</span> <span>Поиск по сайту</span></a>
        </div>
        <div>
          <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/update/update.htm"><span class="material-icons" title="Загрузить обновления">refresh</span> <span>Загрузить обновления</span></a>
          <!--
				<div class="window-link"><span class="material-icons">account_circle</span> <span>Личный кабинет</span></div>
				<div class="window">
					<div class="window-modal p40 r5">
						<h2><span class="material-icons">account_circle</span> Личный кабинет</h2>
						<input type="text" name="name" id="name" required placeholder="Логин" class="m-b-20">
						<div class="grid m-b-20 v-center" style="grid-template-columns:auto 40px;">
							<input type="text" name="name" id="name" required placeholder="Пароль">
							<div class="text-right"><span class="material-icons">visibility_off</span></div>
						</div>
						<input type="submit" value="Войти">
						<div class="window-close">×</div>
					</div>
				</div>
				-->
        </div>
      </div>
    </div>
  </header>
  <nav>
    <div>
      <div class="nav-menu-mobile-all">
        <div class="nav-menu-mobile"></div>
        <div class="nav-menu-mobile-block">
          <ul>
            <li>
              <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/about.htm">О компании</a></p>
              <div>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/offices.htm">Представительства</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/clients.htm">Наши клиенты</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/achievements.htm">Наши заслуги</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/vacancy.htm">Вакансии</a>
              </div>
            </li>
            <li>
              <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/products/products.htm">Продукты</a></p>
              <div>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/products/products-smeta.htm">SmetaWIZARD</a>
                <a href="">PlanWIZARD</a>
                <a href="">BIM WIZARD</a>
                <a href="">TrioBoxWIZARD</a>
                <a href="">DigestWIZARD</a>
                <a href="">Модуль ПНР</a>
                <a href="">Модуль ПИР</a>
                <a href="">Модуль УНЦС</a>
                <a href="">Модуль НМЦК</a>
                <a href="">Модуль Дорожный</a>
                <a href="">Энергоаудит</a>
                <a href="">Установка под Linux</a>
              </div>
            </li>
            <li>
              <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/services.htm">Обучение и поддержка</a></p>
              <div>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/videocourse-list.htm">Видеоуроки</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/demand-free-presentation.htm">Заказать презентацию</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/learning.htm">Обучение</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/freeconsultation.htm">Бесплатная консультация</a>
                <a href="">Заявка в<br />техподдержку</a>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/interactive-support.htm">Удаленная техподдержка</a>
              </div>
            </li>
            <li>
              <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/shop/shop.htm">Магазин</a></p>
              <div>
                <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/shop/spb.htm">Санкт-Петербург</a>
                <a href="">Москва</a>
                <a href="">Нижний Новгород</a>
                <a href="">Другие регионы</a>
              </div>
            </li>
            <li>
              <p><a href="">Сотрудничество</a></p>
              <div>
                <a href="">Партнерская<br />программа</a>
                <a href="">Магазины<br />наших партнеров</a>
                <a href="">Наши дилеры</a>
              </div>
            </li>
            <li>
              <p><a href="">Контакты</a></p>
            </li>
          </ul>
        </div>
      </div>
      <ul class="nav-menu">
        <li class="dop">
          <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/about.htm">О компании</a></p>
          <div>
            <div class="col4-4">
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/offices.htm">Представительства</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/clients.htm">Наши клиенты</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/achievements.htm">Наши заслуги</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/about/vacancy.htm">Вакансии</a>
            </div>
          </div>
        </li>
        <li class="dop">
          <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/products/products.htm">Продукты</a></p>
          <div>
            <div class="col3-3">
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/products/products-smeta.htm">SmetaWIZARD</a>
              <a href="">PlanWIZARD</a>
              <a href="">BIM WIZARD</a>
              <a href="">TrioBoxWIZARD</a>
              <a href="">DigestWIZARD</a>
              <a href="">Модуль ПНР</a>
              <a href="">Модуль ПИР</a>
              <a href="">Модуль УНЦС</a>
              <a href="">Модуль НМЦК</a>
              <a href="">Модуль Дорожный</a>
              <a href="">Энергоаудит</a>
              <a href="">Установка под Linux</a>
            </div>
          </div>
        </li>
        <li class="dop">
          <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/services.htm">Обучение и поддержка</a></p>
          <div>
            <div class="col3-3">
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/videocourse-list.htm">Видеоуроки</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/demand-free-presentation.htm">Заказать презентацию</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/learning.htm">Обучение</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/freeconsultation.htm">Бесплатная консультация</a>
              <a href="">Заявка в техподдержку</a>
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/services/interactive-support.htm">Удаленная техподдержка</a>
            </div>
          </div>
        </li>
        <li class="dop">
          <p><a href="https://www.design-spb.ru/tmp/2022/wizard-site1/shop/shop.htm">Магазин</a></p>
          <div>
            <div class="col4-4">
              <a href="https://www.design-spb.ru/tmp/2022/wizard-site1/shop/spb.htm">Санкт-Петербург</a>
              <a href="">Москва</a>
              <a href="">Нижний Новгород</a>
              <a href="">Другие регионы</a>
            </div>
          </div>
        </li>
        <li class="dop">
          <p><a href="">Сотрудничество</a></p>
          <div>
            <div class="col3-3">
              <a href="">Партнерская программа</a>
              <a href="">Магазины наших партнеров</a>
              <a href="">Наши дилеры</a>
            </div>
          </div>
        </li>
        <li>
          <a href="">Контакты</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="bg-black"></div>