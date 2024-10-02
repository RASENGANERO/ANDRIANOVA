<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="/css/normalize.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css" />
        <link rel="stylesheet" href="/css/media.css" />
        <script src="/js/jquery.js"></script>
        <script src="/js/main.js"></script>
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <title>Alemax - фирма по производству потолков</title>
    </head>
    <body class="page">
        <section class="main-page">
            <span class="menu-mobile">☰</span>
            <header class="header">
                <div class="header-container">
                    <img src="/img/logo.png" />
                    <img class="map-head" src="/img/map-header.png" />
                    <div class="address-header">
                        <span class="address-name">2-я Курская улица,</span>
                        <span class="address-name">25, Орёл</span>
                    </div>
                    <a href="https://vk.com/yandrianova000">
                        <img class="vk-head" src="/img/vk.png" />
                    </a>
                </div>
                <div class="address-container">
                    <div class="address-header-two">
                        <span class="address-name">+7 (910) 200-20-78</span>
                        <span class="address-name">Пн-пт с 8:30 до 17:00</span>
                    </div>
                    <button id="main-zav" class="btn-header">Оставить заявку</button>
                    <div id="myNav" class="overlay">
                      <a class="closebtn">×</a>
                        <div class="overlay-content">
                          <span id="idmob1" class="mobile-menu-item">Оставить заявку</span>
                          <span id="idmob2" class="mobile-menu-item">Рассчитать стоимость</span>
                          <span id="idmob3" class="mobile-menu-item">О нас</span>
                          <span id="idmob4" class="mobile-menu-item">Наши работы</span>
                          <span id="idmob5" class="mobile-menu-item">Отзывы</span>
                          <span id="idmob6" class="mobile-menu-item">Контакты</span>
                        </div>
                    </div>
                  </div>
            </header>
            <ul class="menu">
                <li id="id1" class="menu-item">Оставить заявку</li>
                <li id="id2" class="menu-item">Рассчитать стоимость</li>
                <li id="id3" class="menu-item">О нас</li>
                <li id="id4" class="menu-item">Наши работы</li>
                <li id="id5" class="menu-item">Отзывы</li>
                <li id="id6" class="menu-item">Контакты</li>
            </ul>
            <div class="elements-left">
                <div class="rating-item">
                    <span class="rating-item-title">Натяжные потолки от компании ALEMAX</span>
                    <img src="/img/rating.png" />
                </div>
                <div class="main-text">
                    <span class="main-text-item-first">Натяжные потолки</span>
                    <span class="main-text-item-last">Премиум класса</span>
                </div>
                <div class="arrow-text-container">
                    <div class="square-text">
                        <span class="square-text-item-first">При заказе натяжного потолка</span>
                        <span class="square-text-item-last">от 10 м2 светильники в подарок</span>
                    </div>
                    <img class="arrows-main" src="/img/arrow1.png" />
                </div>
                <div class="btn-container-main">
                    <button id="main-calc" class="btn-calc">Рассчитать стоимость</button>
                    <img class="calc-image" src="/img/calc.png" />
                </div>
            </div>
        </section>

        <section class="customers-page">
            <h1 class="customers-main-text">Почему заказчики выбирают нас?</h1>
            <div class="customers-container">
                <div class="customers-item">
                  <div class="cust-item-img-cont">
                    <img class="customers-item-img" src="/img/item-cont1.png">
                    <img class="customers-img-success" src="/img/success.png">
                  </div>
                  <div class="cus-it-text-container">
                    <span class="customers-item-text">Оперативность. Бывает - нужно</span>
                    <span class="customers-item-text">срочно. Идём на встречу! Сроки</span>
                    <span class="customers-item-text">выполнения заказа</span>
                    <span class="customers-item-text">от 24 часов.</span>
                  </div>
                </div>
                <div class="customers-item">
                  <div class="cust-item-img-cont">
                    <img class="customers-item-img" src="/img/item-cont2.png">
                    <img class="customers-img-success" src="/img/success.png">
                  </div>
                  <div class="cus-it-text-container">
                    <span class="customers-item-text">Работаем честно и по</span>
                    <span class="customers-item-text">договору с гарантией 15 лет!</span>
                  </div>
                </div>
                <div class="customers-item">
                  <div class="cust-item-img-cont">
                    <img class="customers-item-img" src="/img/item-cont3.png">
                    <img class="customers-img-success" src="/img/success.png">
                  </div>
                  <div class="cus-it-text-container">
                    <span class="customers-item-text">Всегда идем навстречу клиенту</span>
                    <span class="customers-item-text">и предлагаем приятные цены</span>
                    <span class="customers-item-text">за нашу работу.</span>
                  </div>
                </div>
                <div class="customers-item">
                  <div class="cust-item-img-cont">
                    <img class="customers-item-img" src="/img/item-cont4.png">
                    <img class="customers-img-success" src="/img/success.png">
                  </div>
                  <div class="cus-it-text-container">
                    <span class="customers-item-text">Никакого мусора! Мы за</span>
                    <span class="customers-item-text">чистоту и безопасность.</span>
                  </div>
                </div>
            </div>
        </section>
        <section class="see-page">
            <h1 class="see-main-text">Посмотрите и убедитесь</h1>
            <span class="see-text-description">Что нам можно доверять</span>
            <div class="slider-first-container">
              <span class="date-worked-text">Работаем с 2011 года</span>
              <div class="slide-one-buttons">
                <button id="see-left" class="button-left-see"></button>
                <button id="see-right" class="button-right-see"></button>
              </div>
            </div>
              <div class="slider-see">
                <div class="slid-see-item">
                  <img class="slidimg" src="/img/item-sld1.png">
                </div>
                <div class="slid-see-item-active slid-see-item">
                  <img class="slidimg" src="/img/item-sld2.png">
                </div>
                <div class="slid-see-item">
                  <img class="slidimg" src="/img/item-sld3.png">
                </div>
              </div>
        </section>

        <section class="clients-page">
            <h1 class="clients-main-text">Что говорят о нас</h1>
            <span class="clients-text-description">Наши клиенты</span>
            <div class="slider-two-container">
              <div class="slide-one-buttons">
                <button id="client-left" class="button-left-clients"></button>
                <button id="client-right" class="button-right-clients"></button>
              </div>
            </div>
            <div class="slider-clients">
              <div class="slid-clients-item">
                <img class="clientimg" src="/img/item-sld1.png">
              </div>
              <div class="slid-clients-item-active slid-clients-item">
                <img class="clientimg" src="/img/item-sld2.png">
              </div>
              <div class="slid-clients-item">
                <img class="clientimg" src="/img/item-sld3.png">
              </div>
        </section>

        <section class="chose-page">
            <h1 class="chose-main-text">Уже определились с выбором?</h1>
            <span class="chose-text-description">Оставьте заявку и мы перезвоним вам в ближайшее время</span>
            <div class="connection-container">
              <input id="namemess" class="input-conn" placeholder="Как вас зовут?"/>
              <input id="phonemess" class="input-conn" placeholder="Ваш номер телефона?"/>
              <button id="sendmess" class="btn-conn">Оставить заявку</button>
            </div>
            <div class="quote-container">
               <img class="selectimg" src="/img/imageselect.png">
               <img class="selectimg-mobile" src="/img/imageselect-mobile.png">
            </div>
        </section>

        <section class="calculator-page">
            <h1 class="calculator-main-text">Ответьте на 4 вопроса</h1>
            <h1 class="calculator-main-text">и рассчитайте стоимость</h1>
            <div class="calculator-slider-container">
              <div class="calculator-item-active calculator-item">
                <div class="progress-block">
                  <img class="first-prgs prgs-img" src="/img/prgs1.png">
                </div>
                <span class="prgs-type">1 из 4</span>
                <span class="calculator-question">Какой потолок вам подойдет?</span>
                <span class="calculator-text-first">Можете выбрать несколько вариантов понравившихся форматов потолка</span>
                <div class="itemses-ceiling">
                  <div class="itemses-ceiling-item">
                    <img class="itemses-ceiling-img" src="/img/ceiling-item1.png"/>
                    <span class="itemses-ceiling-item-text">Матовые натяжные потолки</span>
                  </div>
                  <div class="itemses-ceiling-item">
                    <img class="itemses-ceiling-img" src="/img/ceiling-item2.png"/>
                    <span class="itemses-ceiling-item-text">Глянцевые натяжные потолки</span>
                  </div>
                  <div class="itemses-ceiling-item">
                    <img class="itemses-ceiling-img" src="/img/ceiling-item3.png"/>
                    <span class="itemses-ceiling-item-text">Сатиновые натяжные потолки</span>
                  </div>
                  <div class="itemses-ceiling-item">
                    <img class="itemses-ceiling-img" src="/img/ceiling-item4.png"/>
                    <span class="itemses-ceiling-item-text">Натяжные потолки Звёздное небо</span>
                  </div>
                  <div class="itemses-ceiling-item">
                    <img class="itemses-ceiling-img" src="/img/ceiling-item5.png"/>
                    <span class="itemses-ceiling-item-text">Натяжные потолки с подсветкой</span>
                  </div>
                  <div class="itemses-ceiling-item">
                    <img class="itemses-ceiling-img" src="/img/ceiling-item6.png"/>
                    <span class="itemses-ceiling-item-text">Фотопечать</span>
                  </div>
                </div>
                <div class="next-container-calc">
                  <div class="info-next-calc">
                    <img class="pointer-info" src="/img/pointer.png">
                    <span class="info-next-text">Выберите подходящий вариант ответа и нажмите кнопку “Далее”</span>
                  </div>
                  <button class="info-next-btn">
                    <span class="info-btn-text">Далее</span>
                    <img src="/img/arrow-btn-calc.png">
                  </button>
                </div>
              </div>


              <div class="calculator-item">
                <div class="progress-block">
                  <img id="prgs-img2" class="prgs-img" src="/img/prgs2.png">
                </div>
                <span class="prgs-type">2 из 4</span>
                <span class="calculator-question">Какой потолок вам подойдет?</span>
                <span class="calculator-text-first">Укажите площадь , углы и  количество труб в вашем потолке</span>
                <div class="formses-calc">
                  <div class="formses-inputen">
                    <div class="item-form">
                      <span class="span-item-form">Площадь</span>
                      <input id="calcsquare" class="item-input-form"/>
                    </div>
                    <div class="item-form">
                      <span class="span-item-form">Углы</span>
                      <input id="calccorners" class="item-input-form"/>
                    </div>
                    <div class="item-form">
                      <span class="span-item-form">Количество труб</span>
                      <input id="calcpipes" class="item-input-form"/>
                    </div>
                  </div>
                  <img class="right-img-calc" src="/img/calc-rightphot1.png"/>
                </div>
                <div class="next-container-calc">
                  <div class="info-next-calc">
                    <img class="pointer-info" src="/img/pointer.png">
                    <span class="info-next-text">Выберите подходящий вариант ответа и нажмите кнопку “Далее”</span>
                  </div>
                  <button class="info-next-btn">
                    <span class="info-btn-text">Далее</span>
                    <img src="/img/arrow-btn-calc.png">
                  </button>
                </div>
              </div>

              <div class="calculator-item">
                <div class="progress-block">
                  <img id="prgs-img3" class="prgs-img" src="/img/prgs3.png">
                </div>
                <span class="prgs-type">3 из 4</span>
                <span class="calculator-question">Какой потолок вам подойдет?</span>
                <span class="calculator-text-first">Выберите количество люстр и светильников</span>
                <div class="formses-calc">
                  <div class="formses-inputen">
                    <div class="item-form">
                      <span class="span-item-form">Люстры</span>
                      <input id="calcfixtures" class="item-input-form"/>
                    </div>
                    <div class="item-form">
                      <span class="span-item-form">Светильники</span>
                      <input id="calcchandeliers" class="item-input-form"/>
                    </div>
                  </div>
                  <img class="right-img-calc" src="/img/calc-rightphot2.png"/>
                </div>
                <div class="next-container-calc">
                  <div class="info-next-calc">
                    <img class="pointer-info" src="/img/pointer.png">
                    <span class="info-next-text">Выберите подходящий вариант ответа и нажмите кнопку “Далее”</span>
                  </div>
                  <button class="info-next-btn">
                    <span class="info-btn-text">Далее</span>
                    <img src="/img/arrow-btn-calc.png">
                  </button>
                </div>
              </div>
              

              <div class="calculator-item">
                <div id="block-prgs"class="progress-block">
                  <img id="prgs-img4" class="last-prgs prgs-img" src="/img/prgs4.png">
                </div>
                <span class="prgs-type">4 из 4</span>
                <span class="calculator-question">Предварительная стоимость</span>
                <span class="calculator-text-first">Оставьте свои данные и наш менеджер перезвонит вам с расчетом стоимости</span>
                <div class="formses-calc">
                  <div class="connection-container-calc">
                    <input id="calcname" class="input-conn-calc" placeholder="Как вас зовут?"/>
                    <input id="calcphone" class="input-conn-calc" placeholder="Ваш номер телефона?"/>
                    <button id="btncon" class="btn-conn">Оставить заявку</button>
                  </div>
                  <img class="right-img-calc-last right-img-calc" src="/img/calc-rightphot3.png"/>
                </div>
              </div>

            </div>
        </section>
        <section class="contacts-page">
          <h1 class="contacts-main-text">Наши контакты</h1>
          <div class="container-contacts">
            <div class="contacts-information">
              <span class="contact-name">Номер для связи:</span>
              <span class="contact-value">+7 (910) 200-20-78</span>
              <a href="https://vk.com/yandrianova000">
                <img src="/img/vk.png">
              </a>
              <span class="contact-name">Адрес:</span>
              <span class="contact-value">2-я Курская улица, 25, Орёл</span>
              <span class="contact-name">Режим работы:</span>
              <span class="contact-value">Пн-пт с 09:00-21:00</span>
            </div>
            <iframe class="frame-map" src="https://yandex.ru/map-widget/v1/?um=constructor%3A7892aaa460c2dd26ef2733e96dfce31e51b301ba332898c2d11b2dd2447dc639&amp;source=constructor" width="500" height="400" frameborder="0"></iframe>
          </div>
        </section>

    </body>
</html>
