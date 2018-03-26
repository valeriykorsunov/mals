<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>МАЛС</title>

    <link href="/css/main.css" rel="stylesheet">
    <link href="/js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="mobile-nav" id="js-mobile-nav">
        <div class="mobile-nav__content">
            <div class="mobile-nav__header">
                <b>М</b>аневровая <b>а</b>втоматическая <b>Л</b>окомотивная <b>С</b>игнализация
            </div>

            <ul class="mobile-nav__nav">
                <li class="mobile-nav__item">
                    <a href="#about" class="mobile-nav__link link link_yellow">О системе</a>
                </li>
                <li class="mobile-nav__item">
                    <a href="#goals" class="mobile-nav__link link link_yellow">Цель и задачи</a>
                    <ul class="mobile-nav__subnav">
                        <li class="mobile-nav__subnav-item">
                            <a href="#security" class="mobile-nav__subnav-link link link_yellow">Безопасность</a>
                        </li>
                        <li class="mobile-nav__subnav-item">
                            <a href="#monitor" class="mobile-nav__subnav-link link link_yellow">Мониторинг</a>
                        </li>
                        <li class="mobile-nav__subnav-item">
                            <a href="#analytics" class="mobile-nav__subnav-link link link_yellow">Аналитика</a>
                        </li>
                        <li class="mobile-nav__subnav-item">
                            <a href="#tech" class="mobile-nav__subnav-link link link_yellow">Беспилотные технологии</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-nav__item">
                    <a href="#scheme" class="mobile-nav__link link link_yellow">Как работает МАЛС</a>
                    <ul class="mobile-nav__subnav">
                        <li class="mobile-nav__subnav-item">
                            <a href="#system" class="mobile-nav__subnav-link link link_yellow">Функции системы</a>
                        </li>
                    </ul>
                </li>
                <li class="mobile-nav__item">
                    <a href="#contacts" class="mobile-nav__link link link_yellow">Контакты</a>
                    <ul class="mobile-nav__subnav">
                        <li class="mobile-nav__subnav-item">
                            <a href="#feedback" class="mobile-nav__subnav-link link link_yellow">Напишите нам</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="mobile-nav__lang">
                <span class="mobile-nav__lang-item">Русская версия</span>
                <a href="" class="mobile-nav__lang-item link link_yellow link_dotted">English version</a>
            </div>
        </div>
    </div>

    <div class="page" id="js-main">
        <header class="header">
            <div class="header__mobile-curve"></div>
            <div class="header__top">
                <div class="container">
                    <span class="header__lang-switch">
                        <span class="header__lang-left active">Рус</span>
                        <a href="" class="header__lang-right link link_yellow link_dotted">Eng</a>
                    </span>
                    <a href="" class="header__print-link link link_yellow">
                        <i class="link__icon icon-print"></i>
                        Версия для печати
                    </a>
                </div>
            </div>
            <div class="header__bottom">
                <div class="header__bottom-container container">
                    <div class="header__logos">
                        <a href="" class="header__logos-item">
                            <img src="/i/logo-rzd.png" alt="РЖД" class="header__logos-img">
                            <span class="header__logos-text">Российские железные дороги</span>
                        </a>
                        <a href="" class="header__logos-item">
                            <img src="/i/logo-niias.png" alt="НИИАС" class="header__logos-img">
                            <span class="header__logos-text">АМР</span>
                        </a>
                        <div class="header__logos-curve curve curve_bottom"></div>
                    </div>
                    <h1 class="header__logo">
                        <span class="header__logo-lg">МАЛС</span>
                        <span class="header__logo-sm">Маневровая автоматическая локомотивная сигнализация</span>
                    </h1>
                    <button class="header__nav-toggle icon-menu js-slideout-toggle"></button>
                    <nav class="header__nav nav">
                        <ul class="nav__list">
                            <li class="nav__item">
                                <a href="#about" class="nav__link">
                                    <span class="nav__link-text link link_yellow link_pseudo">О системе</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#goals" class="nav__link">
                                    <span class="nav__link-text link link_yellow link_pseudo">Цели и задачи</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#scheme" class="nav__link">
                                    <span class="nav__link-text link link_yellow link_pseudo">Схема работы</span>
                                </a>
                            </li>
                            <li class="nav__item">
                                <a href="#contacts" class="nav__link">
                                    <span class="nav__link-text link link_yellow link_pseudo">Контакты</span>
                                </a>
                            </li>
                        </ul>
                    </nav><!-- /.nav -->
                    <div class="header__bottom-curve curve curve_top"></div>
                    <div class="header__bottom-curve-shadow curve curve_bottom"></div>
                </div>
            </div><!-- /.container -->
        </header><!-- /.header -->

        <main class="content">
            <section class="section section_bg_img hero" id="about">
                <div class="section__container container">
                    <div class="hero__content">
                        <div class="curve curve_top curve_sm"></div>
                        <div class="curve curve_bottom curve_sm"></div>
                        <h2 class="section__title">О системе</h2>
                        <div class="text text_lg">
                            Инновационная российская система <strong>Маневровая автоматическая локомотивная сигнализация</strong> обеспечивает безопасность маневров и горочных операций с составом на железнодорожных станциях магистрального и промышленного транспорта. Передает на локомотивы по радиоканалу маршрутные задания и разрешенные скорости движения, включая команду на остановку. Не позволяет проезжать светофоры с запрещющим показанием и нарушать скоростной режим. Контролирует движение и местоположение локомотивов средствами навигации с представлением результатов на графическом экране и регистрацией графических и текстовых протоколов. Взаимодействует с системами электрической и горочной централизации любых типов, информационно-планирующими системами станционного уровня, микропроцессорными локомотивными системами управления.
                        </div>
                    </div>

                    <div class="certificates">
                        <h3 class="certificates__main-title">Награды и сертификаты</h3>
                        <div class="certificates__list js-certificates-slider">
                            <div class="certificates__item">
                                <a href="/i/certificates/1.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/1.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Свидетельство об официальной регистрации программы для ЭВМ</div>
                            </div>
                            <div class="certificates__item">
                                <a href="/i/certificates/2.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/2.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Диплом интернационального инновационного салона в Женеве</div>
                            </div>
                            <div class="certificates__item">
                                <a href="/i/certificates/3.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/3.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Диплом конференции «XXI век: молодость интеллекта»</div>
                            </div>
                            <div class="certificates__item">
                                <a href="/i/certificates/1.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/1.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Патент на полезную модель 2010 г.</div>
                            </div>

                            <div class="certificates__item">
                                <a href="/i/certificates/1.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/1.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Свидетельство об официальной регистрации программы для ЭВМ</div>
                            </div>
                            <div class="certificates__item">
                                <a href="/i/certificates/2.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/2.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Диплом интернационального инновационного салона в Женеве</div>
                            </div>
                            <div class="certificates__item">
                                <a href="/i/certificates/3.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/3.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Диплом конференции «XXI век: молодость интеллекта»</div>
                            </div>
                            <div class="certificates__item">
                                <a href="/i/certificates/1.jpg" rel="gallery" class="certificates__link">
                                    <img src="/i/certificates/1.jpg" alt="" class="certificates__img">
                                    <i class="certificates__icon icon-search" title="Увеличить"></i>
                                </a>
                                <div class="certificates__title">Патент на полезную модель 2010 г.</div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_gray goals" id="goals">
                <div class="curve curve_top"></div>
                <div class="curve curve_bottom"></div>
                <div class="container">
                    <h2 class="section__title">Цели и задачи</h2>
                    <div class="section__subtext text text_lg">
                        МАЛС - обеспечивает сохранность вагонного и локомотивного парка, а самое главное сохраняет <strong>(защищает людей, подвижной состав и инфраструктуру)</strong> «жизнь людей» от человеческих ошибок.
                    </div>
                    <div class="goals__list row">
                        <div class="goals__item col-xs-6">
                            <div class="goals__item-img-placeholder">
                                <img src="/i/goals/security.png" alt="Безопасность" class="goals__item-img">
                            </div>
                            <h4 class="goals__item-title"><a href="#security" class="goals__item-link link link_pseudo">Безопасность</a></h4>
                            <div class="goals__item-text">
                                предотвращение аварий на железнодорожных станциях
                            </div>
                        </div>
                        <div class="goals__item col-xs-6">
                            <div class="goals__item-img-placeholder">
                                <img src="/i/goals/monitor.png" alt="Мониторинг" class="goals__item-img">
                            </div>
                            <h4 class="goals__item-title"><a href="#monitor" class="goals__item-link link link_pseudo">Мониторинг</a></h4>
                            <div class="goals__item-text">
                                осуществление контроля местоположения и состояния локомотивов, ведение электронного архива
                            </div>
                        </div>
                        <div class="goals__item col-xs-6">
                            <div class="goals__item-img-placeholder">
                                <img src="/i/goals/analytics.png" alt="Аналитика" class="goals__item-img">
                            </div>
                            <h4 class="goals__item-title"><a href="#analytics" class="goals__item-link link link_pseudo">Аналитика</a></h4>
                            <div class="goals__item-text">
                                оценка эффективности работы локомотивов на станции, поддержка принятия решения
                            </div>
                        </div>
                        <div class="goals__item col-xs-6">
                            <div class="goals__item-img-placeholder">
                                <img src="/i/goals/tech.png" alt="Беспилотные технологии" class="goals__item-img">
                            </div>
                            <h4 class="goals__item-title"><a href="#tech" class="goals__item-link link link_pseudo">Беспилотные технологии</a></h4>
                            <div class="goals__item-text">
                                технология управления локомотивом без машиниста, пульты дистанционного управления
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_img section_divided_left security" id="security">
                <div class="section__container container">
                    <div class="row row-lg-center">
                        <div class="security__content col-xs-12 col-lg-6">
                            <h2 class="section__title">Безопасность</h2>
                            <ul class="security__list">
                                <li class="security__list-item">не наблюдение за сигналами;</li>
                                <li class="security__list-item">нарушение регламента переговоров;</li>
                                <li class="security__list-item">движение без команды руководителя работ;</li>
                                <li class="security__list-item">невнимательность;</li>
                                <li class="security__list-item">не расчетливое управление тормозами;</li>
                                <li class="security__list-item">не знание технико-распорядительного акта (ТРА) станции;</li>
                                <li class="security__list-item">сон на локомотиве;</li>
                                <li class="security__list-item">плохая видимость сигналов;</li>
                                <li class="security__list-item">превышение допустимой скорости движения;</li>
                                <li class="security__list-item">ошибочное восприятие светофора с соседних путей за «свой»;</li>
                                <li class="security__list-item">команды руководителем работ машинисту, с указанием ошибочного номера локомотива;</li>
                                <li class="security__list-item">перекрытие маневрового светофора на запрещающее показание перед движущимся локомотивом на расстоянии менее тормозного пути;</li>
                                <li class="security__list-item">разрешение движения при несвоевременном открытии сигнала;</li>
                                <li class="security__list-item">разрешение движения при закрепленном составе;</li>
                                <li class="security__list-item">повреждение вагонов при прицепке из-за ошибок составителя или неправильного восприятия команды машинистом;</li>
                                <li class="security__list-item">ошибочное задание направления маршрута движения</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-lg-6">
                            <div class="security__slider js-security-slider">
                                <div class="security__slider-item">
                                    <div class="security__slider-img-placeholder">
                                        <img src="/i/security/1.jpg" alt="" class="security__slider-img">
                                        <div class="curve curve_bottom curve_sm"></div>
                                    </div>
                                    <div class="security__slider-content">
                                        <div class="curve curve_top curve_sm"></div>
                                        <div class="security__slider-meta">
                                            Станция Каменск-Уральский<br>
                                            13.10.2012
                                        </div>
                                        <div class="security__slider-text">
                                            Не знание ТРА станции. <br>
                                            Восприятие разрешающего показания выходного светофора с соседнего пути как своего.
                                        </div>
                                    </div>
                                </div>
                                <div class="security__slider-item">
                                    <div class="security__slider-img-placeholder">
                                        <img src="/i/security/1.jpg" alt="" class="security__slider-img">
                                        <div class="curve curve_bottom curve_sm"></div>
                                    </div>
                                    <div class="security__slider-content">
                                        <div class="curve curve_top curve_sm"></div>
                                        <div class="security__slider-meta">
                                            Станция Каменск-Уральский<br>
                                            13.10.2012
                                        </div>
                                        <div class="security__slider-text">
                                            Не знание ТРА станции. <br>
                                            Восприятие разрешающего показания выходного светофора с соседнего пути как своего.
                                        </div>
                                    </div>
                                </div>
                                <div class="security__slider-item">
                                    <div class="security__slider-img-placeholder">
                                        <img src="/i/security/1.jpg" alt="" class="security__slider-img">
                                        <div class="curve curve_bottom curve_sm"></div>
                                    </div>
                                    <div class="security__slider-content">
                                        <div class="curve curve_top curve_sm"></div>
                                        <div class="security__slider-meta">
                                            Станция Каменск-Уральский<br>
                                            13.10.2012
                                        </div>
                                        <div class="security__slider-text">
                                            Не знание ТРА станции. <br>
                                            Восприятие разрешающего показания выходного светофора с соседнего пути как своего.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_gray">
                <div class="curve curve_top"></div>
                <div class="curve curve_bottom"></div>
                <div class="container">
                    <h3>Динамическое моделирование происшествий и их профилактики с помощью системы МАЛС</h3>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_img section_divided_right monitor" id="monitor">
                <div class="section__container container">
                    <div class="row">
                        <div class="monitor__left col-xs-12 col-lg-6">
                            <h2 class="section__title">Мониторинг</h2>
                            <div class="monitor__text text text_lg">
                                <p>Контролирует дислокацию и перемещения локомотивов средствами навигации и станционной автоматики на путях станции, путях необщего пользования, в хозяйственных парках и портовых терминалах с представлением информации на графических экранах.</p>
                            </div>
                            <ul class="monitor__list text text_lg">
                                <li class="monitor__list-item">
                                    <a href="/i/monitor-lg.png" rel="monitor" class="monitor__list-link link link_yellow link_icon_right" title="План станции">
                                        План станции
                                        <i class="monitor__list-icon link__icon icon-search"></i>
                                    </a>
                                </li>
                                <li class="monitor__list-item">
                                    <a href="/i/monitor-lg.png" rel="monitor" class="monitor__list-link link link_yellow link_icon_right" title="Цифровая модель">
                                        Цифровая модель
                                        <i class="monitor__list-icon link__icon icon-search"></i>
                                    </a>
                                </li>
                                <li class="monitor__list-item">
                                    <a href="/i/monitor-lg.png" rel="monitor" class="monitor__list-link link link_yellow link_icon_right" title="Экран машиниста">
                                        Экран машиниста
                                        <i class="monitor__list-icon link__icon icon-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="monitor__content col-xs-12 col-lg-6">
                            <div class="text text_lg">
                                <p>Выявляет и выделяет средствами индикации нарушения технологии, скоростного режима, угрозы безопасности движения, нарушения инструкций и нормативов. Предусматривает трансляцию текущей информации, графических и текстовых протоколов на удаленные терминалы по проводным и беспроводным каналам с возможностью построения диспетчерских центров управления и мониторинга. Результаты мониторинга удобно использовать для разбора происшествий, обучения персонала, выявления резервов повышения пропускной способности и производительности труда.</p>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_gray graph">
                <div class="curve curve_top"></div>
                <div class="curve curve_bottom"></div>
                <div class="container">
                    <div class="text text_lg">
                        Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций, а также для средств аналитики. МАЛС содержит набор утилит для  просмотра архива и предоставляет различные средства визуального представления данных, которые позволяют быстро и эффективно оценить работу локомотивов в динамике, отследить нарушения, дать соответствующие рекомендации:
                    </div>
                    <h3 class="graph__title">Пример скоростемерной ленты при реализации маневрового маршрута:</h3>
                    <div class="graph__content">
                        <div class="graph__y">Скорость<span class="graph__y-text">, км/ч</span></div>
                        <div class="graph__titles">
                            <div class="graph__titles-item graph__titles-item_1">Нарушение скоростного режима</div>
                            <div class="graph__titles-item graph__titles-item_2">Предупреждение</div>
                            <div class="graph__titles-item graph__titles-item_3">Торможение</div>
                        </div>
                        <img src="/i/graph.png" alt="" class="graph__img">
                        <div class="graph__x">Расстояние до препятствия (красный светофор, тупик и тп), м</div>
                        <div class="graph__notes">
                            <div class="graph__notes-item graph__notes-item_speed">Область допустимой скорости</div>
                            <div class="graph__notes-text">Текущая скорость:</div>
                            <div class="graph__notes-item graph__notes-item_normal">нормальная</div>
                            <div class="graph__notes-item graph__notes-item_high">превышение</div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_img analytics" id="analytics">
                <div class="section__container container">
                    <h2 class="section__title">Аналитика</h2>
                    <div class="analytics__content">
                        <div class="analytics__text text text_lg">
                            <p>На основе архива система МАЛС производит расчет технологических параметров и статистических характеристик; данные могут быть использованы (пока не доделано)</p>
                        </div>
                        <div class="analytics__table">
                            <img src="/i/analytics-table.png" alt="" class="analytics__table-img hidden-lg-up">
                            <img src="/i/analytics-table-lg.png" alt="" class="analytics__table-img hidden-md-down">
                        </div>
                        <div class="analytics__diagram hidden-md-down">
                            <img src="/i/analytics-diagram.png" alt="" class="analytics__diagram-img">
                            <div class="analytics__diagram-text text text_lg">
                                На основе архива система МАЛС производит расчет технологических параметров и статистических характеристик; данные могут быть использованы (пока не доделано)
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_gray effect">
                <div class="curve curve_top"></div>
                <div class="curve curve_bottom"></div>
                <div class="container">
                    <h3 class="section__title">Экономический эффект аналитики</h3>
                    <div class="effect__content">
                        <div class="effect__content-left">
                            <div class="effect__text effect__text_1 text text_lg">
                                Система МАЛС позволяет оптимизировать количество маневровых локомотивов, в результате анализа данных автоматического учета загрузки каждого оборудованного бортовой аппаратурой МАЛС локомотива и станции в целом. <br>
                                Экономическая эффективность также достигается за счет совмещения маневровых и поездных операций в одном районе станции при повышении уровня безопасности движения.
                            </div>
                            <img src="/i/effect-1-sm.png" alt="" class="effect__img hidden-lg-up">
                            <img src="/i/effect-1.png" alt="" class="effect__img hidden-md-down">
                            <div class="effect__text effect__text_2 text text_lg">
                                Анализ простоя локомотивов на одной из станций внедрения системы МАЛС показал нецелесообразность использования шести локомотивов. Количество локомотивов было снижено до четырех при той же производительности
                            </div>
                        </div>
                        <div class="effect__content-right">
                            <img src="/i/effect-2.png" alt="" class="effect__img">
                            <div class="effect__text effect__text_3">
                                На железнодорожных станциях, оборудованных маневровой автоматической локомотивной сигнализацией (МАЛС), допускается перед приемом и отправлением поездов не прекращать маневровую работу на железнодорожных путях, с которых невозможно исключить выход железнодорожного подвижного состава на маршрут следования поезда, путем установки стрелок в охранное положение. При этом локомотив, производящий маневровую работу, должен иметь исправную бортовую аппаратуру маневровой автоматической локомотивной сигнализации. Перечень таких железнодорожных станций устанавливается владельцем инфраструктуры, владельцем железнодорожных путей необщего пользования.
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_img tech" id="tech">
                <div class="section__container container">
                    <h2 class="section__title">Беспилотные технологии</h2>
                    <div class="tech__content">
                        <p>Система МАЛС является самодостаточной системой, что позволяет выполнять маневровую работу в полуавтоматическом или автоматическом режиме. В полуавтоматическом режиме система МАЛС выполняет функцию круиз контроля на локомотиве и подчиняется машинисту. Машинист имеет возможность установить все необходимые параметры движения, для выполнения маршрута, со своего рабочего места или даже мобильного телефона. В автоматическом режиме система МАЛС подчинят локомотивы командам дежурного по станции. Дежурному остается нажать пару кнопок и соответствующий локомотив автоматически выполнит заданную операцию, например, такую как роспуск вагонов или прицеп к составу.</p>
                        <div class="video">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zWTHbQf3IBU" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_gray scheme" id="scheme">
                <div class="curve curve_top"></div>
                <div class="curve curve_bottom"></div>
                <div class="container">
                    <h2 class="section__title hidden-lg-up">Как работает система МАЛС</h2>
                    <h2 class="section__title hidden-md-down">Как работает система маневровой автоматической локомотивной сигнализации</h2>
                    <div class="scheme__content">
                        <img src="/i/scheme.jpg" alt="" class="scheme__img hidden-lg-up">
                        <img src="/i/scheme-lg.jpg" alt="" class="scheme__img hidden-md-down">
                        <div class="scheme__list">
                            <div class="scheme__item scheme__item_1">
                                <h3 class="scheme__item-title">
                                    <span class="scheme__item-title-text">
                                        ГЛОНАСС/GPS 
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">автоматическое позиционирование локомотивов</div>
                            </div>
                            <div class="scheme__item scheme__item_2">
                                <h3 class="scheme__item-title scheme__item-title_sm">
                                    <span class="scheme__item-title-text">
                                        БОРТОВАЯ АППАРАТУРА И рабочее место машиниста
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">контроль, управление локомотивом</div>
                            </div>
                            <div class="scheme__item scheme__item_3 scheme__item_right">
                                <h3 class="scheme__item-title">
                                    <span class="scheme__item-title-text">
                                        РАДИОВЫШКА 
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">радиообмен с локомотивами</div>
                            </div>
                            <div class="scheme__item scheme__item_4 scheme__item_right">
                                <h3 class="scheme__item-title scheme__item-title_sm">
                                    <span class="scheme__item-title-text">
                                        БОРТОВАЯ РАДИОСТАНЦИЯ 
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">обмен со станционными устройствами</div>
                            </div>
                            <div class="scheme__item scheme__item_5">
                                <h3 class="scheme__item-title">
                                    <span class="scheme__item-title-text">
                                        МПЦ/ЭЦ
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">съем информации с напольных датчиков</div>
                            </div>
                            <div class="scheme__item scheme__item_6 scheme__item_right">
                                <h3 class="scheme__item-title">
                                    <span class="scheme__item-title-text">
                                        РАБОЧЕЕ МЕСТО ДСП
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">мониторинг, контроль и управление всеми локомотивами на станции</div>
                            </div>
                            <div class="scheme__item scheme__item_7 scheme__item_right">
                                <h3 class="scheme__item-title">
                                    <span class="scheme__item-title-text">
                                        УВК СУ МАЛС
                                    </span>
                                    <div class="scheme__item-icon tooltip">
                                        <i class="tooltip__toggle icon-i"></i>
                                        <div class="tooltip__body">
                                            Система МАЛС производит непрерывную (24/7) запись состояний объектов ЭЦ и локомотивов в архив. Данные записываются каждую секунду и могут быть потом использованы для разбора ситуаций.
                                        </div>
                                    </div>
                                </h3>
                                <div class="scheme__item-text">центральный сервер управления локомотивами</div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_img system" id="system">
                <div class="section__container container">
                    <h2 class="section__title">Функции системы</h2>
                    <div class="system__content row">
                        <div class="col-xs-12 col-md-6">
                            <ul class="system__list">
                                <li class="system__list-item">Передача команды локомотиву на остановку перед светофором с запрещающим показанием;</li>
                                <li class="system__list-item">Контроль скоростного режима при движении маневровых локомотивов согласно ТРА станции, в том числе при роспуске вагонов с горки;</li>
                                <li class="system__list-item">Контроль дислокации и перемещения маневровых локомотивов на путях и в парках станции с использованием средств спутниковой навигации;</li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <ul class="system__list">
                                <li class="system__list-item">Прицельное осаживание вагонов в тупик;</li>
                                <li class="system__list-item">Регистрация и протоколирование работы локомотивных, станционных устройств и средств радиосвязи;</li>
                                <li class="system__list-item">Полностью автоматизированное формирование статистической справки по показаниям работы локомотива (без ручного ввода.</li>
                            </ul>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>

            <section class="section section_bg_gray contacts" id="contacts">
                <div class="curve curve_top"></div>
                <div class="curve curve_bottom"></div>
                <div class="container">
                    <h2 class="section__title">Контактная информация</h2>
                    <div class="contacts__list row">
                        <div class="col-xs-12 col-sm-6">
                            <dl class="contacts__item">
                                <dt class="contacts__item-title">
                                    <i class="contacts__item-icon icon-phone"></i>
                                    Телефон
                                </dt>
                                <dd class="contacts__item-text">
                                    <a href="tel:+74992628883;ext=169" class="tel">+7 (499) 262-88-83 доб. 169</a>
                                </dd>
                            </dl>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <dl class="contacts__item">
                                <dt class="contacts__item-title">
                                    <i class="contacts__item-icon icon-mail"></i>
                                    Электронная почта
                                </dt>
                                <dd class="contacts__item-text">
                                    <a href="mailto:okousp@yandex.ru">okousp@yandex.ru</a>
                                </dd>
                            </dl>
                        </div>
                    </div>
                </div><!-- /.container -->
            </section>
        </main><!-- /.content -->

        <footer class="section section_bg_img footer" id="feedback">
            <div class="footer__top">
                <div class="container">
                    <h2 class="section__title">Напишите нам</h2>
                    <form action="" type="post" class="feedback__form form" >
                        <div id="error" >
                        </div>
                        <div class="form__row row">
                            <div class="form__col form__col_left col-xs-12 col-md-4">
                                <div class="form__group">
                                    <input name="name" type="text" class="form__control" placeholder="Ваше имя" tabindex="10" requered>
                                </div>
                                <div class="form__group">
                                    <input name="email" type="email" class="form__control" placeholder="E-mail" tabindex="20">
                                </div>
                                <div class="form__group form__group_submit">
                                    <input name="submit" type="submit" class="form__button button button_default button_block" value="Отправить сообщение" tabindex="40">
                                </div>
                            </div>
                            <div class="form__col form__col_right col-xs-12 col-md-8">
                                <textarea name="text" type="text" class="form__control" placeholder="Ваше сообщение" tabindex="30"></textarea>
                            </div>
                        </div>
                        <div class="form__group text text_sm">
                            <div class="form__note">Отправляя форму, я соглашаюсь на обработку моих персональных данных согласно <a href="" class="link link_white">Политике конфиденциальности</a></div>
                        </div>
                    </form>
                </div><!-- /.container -->
            </div>
            <div class="footer__bottom">
                <div class="container">
                    <div class="row row-md-center">
                        <div class="footer__left col-xs-12 col-md-6">
                            <div class="footer__logo h1">
                                <span class="footer__logo-lg">МАЛС</span>
                                <span class="footer__logo-sm">Маневровая автоматическая <br>локомотивная сигнализация</span>
                            </div>
                        </div>
                        <div class="footer__right col-xs-12 col-md-6">
                            <div class="footer__logos">
                                <a href="" class="footer__logos-item">
                                    <img src="/i/logo-rzd.png" alt="РЖД" class="footer__logos-img">
                                </a>
                                <a href="" class="footer__logos-item">
                                    <img src="/i/logo-niias.png" alt="НИИАС" class="footer__logos-img">
                                    <span class="footer__logos-text">Автоматизации <br>Маневровых Работ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container -->
            </div>
        </footer><!-- /.footer -->
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="/js/vendor/slick.min.js"></script>
    <script src="/js/vendor/slideout.js"></script>
    <script src="/js/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="/js/main.js"></script>
    <script src="/js/send_mail.js"></script>
</body>
</html>