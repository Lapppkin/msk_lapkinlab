<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Заказать создание сайта от компании LapkinLab. Услуги на изготовление и разработку сайта для вашего бизнеса");
$APPLICATION->SetPageProperty("title", "Разработка и создание сайтов под ключ: цены в Москве");
$APPLICATION->SetTitle("Разработка и создание сайтов под ключ");


$paramsForm = array(
    'id' => 'sites',
    'title' => 'Узнать стоимость разработки',
    'fields' => array(
        'name',
        'phone',
        'site',
    ),
    'required' => array(
        'name',
        'phone',
        'site',
    ),
    'submit_button' => 'Получить рассчет',
    'wrapper' => true,
);
?>
<link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/sites.css">

<div class="page page-ppc page--redesign-sites">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/sites/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Создаем сайты и решения под ключ для достижения целей Вашего бизнеса
                            </h1>
                        </div>
                        <div class="slide-title__text">
                            <ul class="ul-red-dots">
                                <li>
                                    Проведем анализ конкурентов: найдем преимущества и недостатки их сайтов
                                </li>
                                <li>
                                    Работаем по договору, предоставляем все необходимые документы и отчеты
                                </li>
                                <li>
                                    Выберем оптимальное решение в соответствии с Вашей маркетинговой концепцией
                                </li>
                                <li>
                                    Предоставим готовый мини-сайт на время разработки — начните продавать уже сейчас!
                                </li>
                                <li>
                                    2 недели БЕСПЛАТНОЙ технической поддержки
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="sites-prices">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Цены на разроботку сайтов в Москве
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row sites-prices__list">
                <div class="col-xl-4 col-lg-6 site-price__wrapper">
                    <div class="site-price">
                        <div class="site-price__header">
                            Mini-Landing page
                        </div>
                        <div class="site-price__content">
                            <div class="site-price__description">
                                Разработка мини промо-сайта. Подходит в первую очередь для проведения промо-акций,
                                распродаж
                            </div>
                            <div class="site-price__example">
                                <a href="http://minilanding.lapkinlab.ru/" target="_blank">Смотреть пример</a>
                            </div>
                            <div class="site-price__info">
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                    <b>
                                        от 10 000 ₽
                                    </b>
                                </div>
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                    <b>
                                        7-10 дней
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="site-price__action">
                            <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                    data-site-type="minilp">Заказать
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 site-price__wrapper">
                    <div class="site-price">
                        <div class="site-price__header">
                            Landing page
                        </div>
                        <div class="site-price__content">
                            <div class="site-price__description">
                                Разработка мини промо-сайта. Включает в себя 5-7 экранов с информацией + форму обратной
                                связи.
                            </div>
                            <div class="site-price__info">
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                    <b>
                                        от 40 000 ₽
                                    </b>
                                </div>
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                    <b>
                                        10-20 дней
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="site-price__action">
                            <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                    data-site-type="lp">Заказать
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 site-price__wrapper">
                    <div class="site-price">
                        <div class="site-price__header">
                            Сайт услуг
                        </div>
                        <div class="site-price__content">
                            <div class="site-price__description">
                                Данный тип сайта служит для представления информации о деятельности компании, ее
                                структуре и услугах
                            </div>
                            <div class="site-price__info">
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                    <b>
                                        от 50 000 ₽
                                    </b>
                                </div>
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                    <b>
                                        10-20 дней
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="site-price__action">
                            <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                    data-site-type="services">Заказать
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 site-price__wrapper">
                    <div class="site-price">
                        <div class="site-price__header">
                            <a href="/sites/online-store/" title="Интернет-магазин">Интернет-магазин</a>
                        </div>
                        <div class="site-price__content">
                            <div class="site-price__description">
                                Разработка полнофункциональных интернет-магазинов, направленных на продажу как малого,
                                так и большого количества товаров
                            </div>
                            <div class="site-price__info">
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                    <b>
                                        от 65 000 ₽
                                    </b>
                                </div>
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                    <b>
                                        30-45 дней
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="site-price__action">
                            <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                    data-site-type="eshop">Заказать
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 site-price__wrapper">
                    <div class="site-price">
                        <div class="site-price__header">
                            Корпоративный сайт
                        </div>
                        <div class="site-price__content">
                            <div class="site-price__description">
                                Призван предоставить пользователю всю информацию компании, ее товарах или услугах
                            </div>
                            <div class="site-price__info">
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                    <b>
                                        от 75 000 ₽
                                    </b>
                                </div>
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                    <b>
                                        25-40 дней
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="site-price__action">
                            <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                    data-site-type="corporate">Заказать
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 site-price__wrapper">
                    <div class="site-price">
                        <div class="site-price__header">
                            Дизайн/редизайн сайтов
                        </div>
                        <div class="site-price__content">
                            <div class="site-price__description">
                                Разработка современного дизайна (редизайна) сайта, который будет соответствовать трендам
                            </div>
                            <div class="site-price__info">
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                    <b>
                                        от 19 000 ₽
                                    </b>
                                </div>
                                <div class="site-price__info-item">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                    <b>
                                        10-20 дней
                                    </b>
                                </div>
                            </div>
                        </div>
                        <div class="site-price__action">
                            <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                    data-site-type="design">Заказать
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-12 site-price__wrapper site-price__wrapper--big">
                    <div class="site-price">
                        <div class="site-price__header">
                            Разработка CRM-систем — автоматизация и полный контроль бизнеса
                        </div>
                        <div class="site-price__additional">
                            <div class="site-price__content">
                                <div class="site-price__description">
                                    Мы занимаемся разработкой программ автоматизации отношений с вашими покупателями
                                    (CRM-системы), которые позволят держать под контролем все ключевые показатели
                                    бизнеса,
                                    настроить планирование и успешно наладить клиентоориентированность компании.
                                </div>
                                <div class="site-price__full-description">
                                    <b>
                                        С помощью такой системы вы получите доступ к следующей информации:
                                    </b>
                                    <ul class="ul-red-dots">
                                        <li>
                                            Портрет клиента
                                        </li>
                                        <li>
                                            Точки входа и точки выхода клиента
                                        </li>
                                        <li>
                                            Желания клиента
                                        </li>
                                        <li>
                                            Контроль над менеджерами компании
                                        </li>
                                        <li>
                                            История взаимодействия с покупателем «от и до»
                                        </li>
                                        <li>
                                            Слабые места маркетинговой стратегии
                                        </li>
                                        <li>
                                            Аналитика работы с клиентом
                                        </li>
                                    </ul>
                                </div>
                                <div class="site-price__info">
                                    <div class="site-price__info-item">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/rub.png">
                                        <b>
                                            от 15 000 ₽
                                        </b>
                                    </div>
                                    <div class="site-price__info-item">
                                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/time.png">
                                        <b>
                                            от 5 дней
                                        </b>
                                    </div>
                                </div>
                                <div class="site-price__action">
                                    <button class="btn js-open-modal" data-action="openModal" data-modal="sites"
                                            data-site-type="crm">Заказать
                                    </button>
                                </div>
                            </div>
                            <div class="site-price__full-description">
                                <b>
                                    С помощью такой системы вы получите доступ к следующей информации:
                                </b>
                                <ul class="ul-red-dots">
                                    <li>
                                        Портрет клиента
                                    </li>
                                    <li>
                                        Точки входа и точки выхода клиента
                                    </li>
                                    <li>
                                        Желания клиента
                                    </li>
                                    <li>
                                        Контроль над менеджерами компании
                                    </li>
                                    <li>
                                        История взаимодействия с покупателем «от и до»
                                    </li>
                                    <li>
                                        Слабые места маркетинговой стратегии
                                    </li>
                                    <li>
                                        Аналитика работы с клиентом
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--sites-included-development">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Включено в разработку
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Функция обратного звонка
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Интерактивная карта
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Корпоративная почта
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Удобная система управления
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                SSL сертификат безопасности
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-6.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Адаптивная верстка
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-7.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Персональный менеджер
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/included-development-8.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                14 дней бесплатной техподдержки
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_portfolio.php', array(), array('SHOW_BORDER' => true)) ?>

    <div class="info-section info-section--sites-progress-work">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Прозрачный и понятный ход работы
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/progress-work-1.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Прозрачность хода работы
                    </b>
                    <p>
                        За годы работы мы выработали четкие стандарты разработки сайтов, поэтому в договоре детально
                        расписан каждый этап с указанием количества дней, которые на него потребуются.
                    </p>
                    <p>
                        Мы ценим Ваше время, поэтому соблюдаем сроки — учет ведется в корпоративной системе:
                    </p>
                    <ul class="ul-red-dots">
                        <li>
                            <strong>Удобно для клиентов</strong>
                            — Вы всегда можете оценить, что было сделано и какой фронт работ впереди.
                        </li>
                        <li>
                            <strong>Удобно для нас</strong>
                            — мы планируем загрузку и укладываемся в сроки.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row info-section__item-two">
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Личный менеджер проекта
                    </b>
                    <p>
                        С момента обращения Вашим проектом занимается личный менеджер. Он контролирует все этапы
                        разработки, вместе с клиентом и разработчиками ищет оптимальные пути решения задач сайта,
                        консультирует по любым вопросам, касающимся проекта.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/progress-work-2.png" class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--sites-сms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Разрабатываем сайты на разных платформах
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-1.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-2.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-3.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-4.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-5.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-6.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/cms-7.png">
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 info-section-list-item--cms-card-wrapper">
                    <div class="info-section-list-item info-section-list-item--cms-card">
                        Также имеем
                        опыт работы с другими CMS и фреймворками
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="info-section__actions">
                        <button class="btn js-open-modal" data-action="openModal" data-modal="sites">
                            Заказать разработку
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--sites-analytics">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Точная аналитика и отслеживание эффективности
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/analytics-1.png">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/analytics-2.png">
                </div>

                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Определение задач бизнеса
                    </b>
                    <p>
                        Еще на начальном этапе проектирования и создания дизайна мы определяем задачу ресурса и цели,
                        которые хочет достичь клиент.
                    </p>
                    <ul class="ul-red-dots">
                        <li>
                            Элементы взаимодействия делаем максимально понятными и наглядными для пользователей.
                        </li>
                        <li>
                            Системы аналитики настраиваются так, чтобы клиент мог оценивать эффективность работы своего
                            сайта, провести анализ поведения пользователей и внести корректировки, чтобы привлечь еще
                            больше покупателей.
                        </li>
                    </ul>
                    <strong>
                        Сайт — это «живой организм», который должен постоянно развиваться, чтобы повышать свою
                        эффективность.
                    </strong>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--sites-creating-value">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Создаем ценность на каждом этапе работы
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creating-value-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Брифинг
                            </div>
                            <div class="info-section-list-item__description">
                                Сбор данных о сайте и бизнесе клиента для погружения в Вашу бизнес-концепцию
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creating-value-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Анализ конкурентов
                            </div>
                            <div class="info-section-list-item__description">
                                Проведем аналитику конкурентов из ТОП-20 поисковой выдачи и выявим конкурентные
                                преимущества и слабые стороны
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creating-value-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Проектирование
                            </div>
                            <div class="info-section-list-item__description">
                                Думаем об удобстве ваших пользователей, составляем логичную структуру сайта
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creating-value-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Дизайн
                            </div>
                            <div class="info-section-list-item__description">
                                Создаем уникальное визуальное оформление для решения задач маркетинга
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creating-value-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Верстка и интеграция
                            </div>
                            <div class="info-section-list-item__description">
                                Создаем быстрые адаптивные сайты, работающие на всех современных браузерах и мобильных
                                устройствах
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creating-value-6.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Проработка функционала
                            </div>
                            <div class="info-section-list-item__description">
                                При разработке сайта внедрим все основные функции для его продуктивной работы. Предложим
                                клиентам дополнительные функции
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_reviews.php', array(), array('SHOW_BORDER' => true)) ?>

    <div class="info-section info-section--sites-reasons">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        3 причины обратиться к нам
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/reason-1.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Гарантированная поддержка после сдачи проекта
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/reason-2.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Опыт работы с крупными заказчиками
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/reason-3.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Полный пакет всех документов
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="info-section info-section--creation-sites-first">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Создание сайтов в Москве
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creation-sites-1.png" class="js-tilt-block">
                </div>

                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Сегодня более 80% бизнесов работают и получают клиентов из сети Интернет.
                    </b>
                    <p>
                        Не упустите возможность заказать сайт в Москве недорого, увеличить количество клиентов,
                        расширить аудиторию, повысить продажи и обороты Вашего бизнеса. Мы — профессионалы в области
                        разработки и готовы взяться за создание уникального, удобного и интуитивно понятного сайта или
                        интернет-магазина любой сложности! Это может быть и простой лендинг-визитка, и сайт
                        экстра-класса с уникальным продвинутым функционалом. Оставьте заявку на разработку и мы поможем
                        подобрать индивидуальное решение, которое подойдет именно Вашему бизнесу.
                    </p>
                    <p>
                        Создание сайтов в Москве — это одно из основных направлений работы нашей вeб-студии уже более 5
                        лет. Качество и сроки для нас — не пустой звук.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--creation-sites">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Почему стоит заказать создание сайта под ключ у нас?
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Максимальная прозрачность хода работ начиная с брифа и заканчивая сдачей готового к работе
                        сайта.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creation-sites-2.png" class="js-tilt-block">
                </div>
            </div>
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites/creation-sites-3.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Мы работаем абсолютно легально по договору и техническому заданию, без скрытых платежей и
                        навязывания дополнительных платных услуг — цена на разработку сайта в договоре окончательна.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
