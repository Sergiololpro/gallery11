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

  <div class="client_modal">
      <div class="client_modal__content">
          <div class="r_modal__close"></div>
          <form class="contacts_map__form">
              <div class="title title-right title-map">Остались вопросы?</div>
              <div class="contacts_map__text">Задайте их нашим специалистам</div>
              <div class="contacts_map__input">
                  <label for="name" class="contacts_map__label">Ваше имя</label>
                  <input id="name" name="name" placeholder="Введите" class="contacts_map__inp" type="text">
              </div>
              <div class="contacts_map__inputs">
                  <div class="contacts_map__input">
                      <label for="email" class="contacts_map__label">E-mail</label>
                      <input id="email" name="email" placeholder="Sample@sample.com" class="contacts_map__inp" type="email">
                  </div>
                  <div class="contacts_map__input">
                      <label for="phone" class="contacts_map__label">Телефон</label>
                      <input id="phone" name="phone" placeholder="+ _ ___ ___ __ __" class="contacts_map__inp" type="text">
                  </div>  
              </div>
              <div class="contacts_map__input">
                  <label for="job" class="contacts_map__label">Род деятельности</label>
                  <input id="job" name="job" placeholder="Введите" class="contacts_map__inp" type="text">
              </div>
              <div class="contacts_map__input">
                  <label for="question" class="contacts_map__label">Опишите свой вопрос</label>
                  <textarea id="question" name="question" placeholder="Введите" class="contacts_map__textarea"></textarea>
              </div>
              <div class="contacts_map__bottom">
                  <div class="contacts_map__txt">
                      <div class="checkbox">
                          <input id="agree" value="agree" name="agree" type="checkbox" checked>
                          <label for="agree">
                              Нажимая кнопку "Отправить" я соглашаюсь
                              с <a href="#" target="_blank">Положением о персональных данных и конфиденциальности</a>.
                          </label>
                      </div>
                  </div>
                  <div class="button button-banner button-map make_order">Отправить</div>
                  <button class="contacts_map__button"></button>
              </div>
          </form>
      </div>
  </div>

  <div id="perosonal_modal" class="text_modal">
      <div class="text_modal__content text_modal__content-text">
          <div class="r_modal__close"></div>
          <div class="title title-new">Политика конфиденциальности</div>
          <div class="seo_text">
            Противоположная точка зрения подразумевает, что стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть функционально разнесены на независимые элементы. Лишь предприниматели в сети интернет освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, указаны как претенденты на роль ключевых факторов. Безусловно, постоянный количественный рост и сфера нашей активности является качественно новой ступенью инновационных методов управления процессами. Безусловно, высокотехнологичная концепция общественного уклада позволяет оценить значение прогресса профессионального сообщества. Равным образом, экономическая повестка сегодняшнего дня позволяет оценить значение вывода текущих активов. Противоположная точка зрения подразумевает, что ключевые особенности структуры проекта, превозмогая сложившуюся непростую экономическую ситуацию, подвергнуты целой серии независимых исследований. Внезапно, некоторые особенности внутренней политики лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы. Значимость этих проблем настолько очевидна, что консультация с широким активом является качественно новой ступенью инновационных методов управления процессами. В своём стремлении повысить качество жизни, они забывают, что разбавленное изрядной долей эмпатии, рациональное мышление влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Равным образом, внедрение современных методик играет определяющее значение для своевременного выполнения сверхзадачи. Безусловно, глубокий уровень погружения представляет собой интересный эксперимент проверки направлений прогрессивного развития. Каждый из нас понимает очевидную вещь: высококачественный прототип будущего проекта, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для инновационных методов управления процессами. Есть над чем задуматься: сторонники тоталитаризма в науке обнародованы. Следует отметить, что базовый вектор развития, в своём классическом представлении, допускает внедрение дальнейших направлений развития. С другой стороны, внедрение современных методик требует от нас анализа новых предложений.
          </div>
        </div>
  </div>

  <div id="agree_modal" class="text_modal">
      <div class="text_modal__content text_modal__content-text">
          <div class="r_modal__close"></div>
          <div class="title title-new">Пользовательское соглашение</div>
          <div class="seo_text">
            Противоположная точка зрения подразумевает, что стремящиеся вытеснить традиционное производство, нанотехнологии набирают популярность среди определенных слоев населения, а значит, должны быть функционально разнесены на независимые элементы. Лишь предприниматели в сети интернет освещают чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, указаны как претенденты на роль ключевых факторов. Безусловно, постоянный количественный рост и сфера нашей активности является качественно новой ступенью инновационных методов управления процессами. Безусловно, высокотехнологичная концепция общественного уклада позволяет оценить значение прогресса профессионального сообщества. Равным образом, экономическая повестка сегодняшнего дня позволяет оценить значение вывода текущих активов. Противоположная точка зрения подразумевает, что ключевые особенности структуры проекта, превозмогая сложившуюся непростую экономическую ситуацию, подвергнуты целой серии независимых исследований. Внезапно, некоторые особенности внутренней политики лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы. Значимость этих проблем настолько очевидна, что консультация с широким активом является качественно новой ступенью инновационных методов управления процессами. В своём стремлении повысить качество жизни, они забывают, что разбавленное изрядной долей эмпатии, рациональное мышление влечет за собой процесс внедрения и модернизации направлений прогрессивного развития. Равным образом, внедрение современных методик играет определяющее значение для своевременного выполнения сверхзадачи. Безусловно, глубокий уровень погружения представляет собой интересный эксперимент проверки направлений прогрессивного развития. Каждый из нас понимает очевидную вещь: высококачественный прототип будущего проекта, а также свежий взгляд на привычные вещи — безусловно открывает новые горизонты для инновационных методов управления процессами. Есть над чем задуматься: сторонники тоталитаризма в науке обнародованы. Следует отметить, что базовый вектор развития, в своём классическом представлении, допускает внедрение дальнейших направлений развития. С другой стороны, внедрение современных методик требует от нас анализа новых предложений.
          </div>
        </div>
  </div>
