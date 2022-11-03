<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta name="format-detection" content="telephone=no">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="js/libs/slick/slick.css">
  <link rel="stylesheet" href="css/styles.css?v=6">
  <title>Gallery11</title>
</head>

<body <?php if ($main) { ?>class="dark"<?php } ?>>

  <header class="header<?php if ($dark_header) { ?> header-main<?php } ?>">
    <div class="wrapper wrapper-header">
      <div class="header__left">
        <div class="header__menu">
          <div></div>
          <div></div>
          <div></div>
        </div>
        <a href="#" class="header__logo"></a>
        <a href="#" class="header__logo header__logo-light"></a>
      </div>
      <nav class="navigate">
        <a href="#" class="navigate__nav" data-id="1">О центре</a>
        <a href="#" class="navigate__nav" data-id="1">Афиша</a>
        <a href="#" class="navigate__nav" data-id="3">ШОУ-РУМЫ</a>
        <a href="#" class="navigate__nav" data-id="1">Офисы</a>
        <a href="#" class="navigate__nav" data-id="1">
          Распродажа
          <div class="navigate__help">перейти на сайт аутлет</div>
        </a>
        <a href="#" class="navigate__nav" data-id="1">Аренда</a>
        <a href="#" class="navigate__nav" data-id="1">Контакты</a>
        <div class="header__close"></div>
      </nav>
      <div class="header__right">
        <div class="header__address">Екатеринбург, Студенческая 11</div>
        <div class="header__buttons">
          <!-- <div class="header__button header__button-search"></div> -->
          <div class="header__button header__button-cabinet"></div>
        </div>
      </div>
    </div>
  </header>

  <div class="mobile_menu">
    <div class="mobile_menu__top">
      <div class="mobile_menu__left">
        <div class="mobile_menu__close"></div>
        <div class="mobile_menu__logo"></div>
      </div>
      <div class="header__buttons">
        <!-- <div class="header__button header__button-search"></div> -->
        <div class="header__button header__button-cabinet"></div>
      </div>
    </div>
    <nav class="mobile_menu__navs">
      <a href="#" class="mobile_menu__nav">О центре</a>
      <a href="#" class="mobile_menu__nav">СОБЫТИЯ</a>
      <a href="#" class="mobile_menu__nav">ШОУ-РУМЫ</a>
      <a href="#" class="mobile_menu__nav">Офисы</a>
      <a href="#" class="mobile_menu__nav">Распродажа</a>
      <a href="#" class="mobile_menu__nav">Аренда</a>
      <a href="#" class="mobile_menu__nav">Контакты</a>
    </nav>
    <div class="mobile_menu__socials">
      <a href="#" class="mobile_menu__social mobile_menu__social-vk"></a>
      <a href="#" class="mobile_menu__social mobile_menu__social-tg"></a>
      <a href="#" class="mobile_menu__social mobile_menu__social-insta"></a>
      <a href="#" class="mobile_menu__social mobile_menu__social-you"></a>
    </div>
    <a href="tel:+73432173500" class="mobile_menu__phone">+7 343 217 35 00</a>
    <div class="mobile_menu__time">ПН-ВС, с 9:00 - 18:00 Без выходных</div>
    <div class="mobile_menu__address">Екатеринбург, Студенческая 11</div>
    <a href="#" class="mobile_menu__link">схема проезда и парковки</a>
    <a href="mailto" class="mobile_menu__email">Написать письмо</a>
  </div>

  <div class="navig" data-id="3">
    <div class="wrapper">
      <div class="navig__top">
        <div class="navig__title">Шоу-румы</div>
        <div class="navig__right">
          <div class="navig__text">Состоялась презентация нового сборника стихов "Вторая волна" в лектории Gallery11 | Интерьерный центр</div>
          <a href="#" class="navig__more">Подробнее...</a>
        </div>
      </div>
      <div class="navig__els">
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-1.jpg)">
          <span>Мягкая мебель</span>
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-2.jpg)">
          Спальни
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-3.jpg)">
          Кухни и техника для кухни
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-4.jpg)">
          Гостиные
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-5.jpg)">
          Обеденные зоны
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-6.jpg)">
          Гардеробные системы, системы  хранения, шкафы
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-7.jpg)">
          Свет, аксессуары
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-8.jpg)">
          Двери, перегородки
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-9.jpg)">
          Напольные покрытия
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-10.jpg)">
          Лестницы
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-11.jpg)">
          Кованные изделия
        </a>
        <a href="#" class="navig__el" style="background-image: url(img/navig__el-12.jpg)">
          Уличная мебель
        </a>
      </div>
    </div>
  </div>
  
  <div class="navig" data-id="1">
    <div class="wrapper">
      <div class="navig__top">
        <div class="navig__title">Шоу-румы</div>
      </div>
      <div class="navig__wp">
        <nav class="navig__navs">
          <a href="/events/#0" class="navig__nav">Все события</a>
          <a href="/events/#1" class="navig__nav">Акции</a>
          <a href="/events/#2" class="navig__nav">Новости</a>
          <a href="/events/#3" class="navig__nav">События</a>
          <a href="/events/#4" class="navig__nav">Лекция</a>
          <a href="/events/#5" class="navig__nav">Презентация</a>
          <a href="/events/#6" class="navig__nav">Открытие выставки</a>
          <a href="/events/#7" class="navig__nav">Обучение</a>
        </nav>
        <div class="navig__rgt">
          <div class="navig__under">Событие дня</div>
          <div class="navig_card" style="background-image: url(img/event__image-2.jpg)">
            <div class="navig_card__label">ЛЕКЦИЯ</div>
            <div class="navig_card__content">
              <div class="navig_card__date">02 августа 2022</div>
              <div class="navig_card__title">Выставка Юрия Первушина</div>
              <div class="navig_card__text">При поддержке Анны Кирен</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>