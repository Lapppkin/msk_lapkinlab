<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заказать продвижение сайтов в Москве - SEO (СЕО) раскрутка в ТОП 10 Яндекс и Google (Гугл)");
$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("SEO-продвижение сайта в ТОП по Москве, СЕО-раскрутка сайта под поисковые системы: цена продвижения");

$asset = Bitrix\Main\Page\Asset::getInstance();
$asset->addJs(SITE_TEMPLATE_PATH . '/js/new-design-home.js');
?>
<link rel="stylesheet" href="https://<?= $_SERVER['HTTP_HOST'] . SITE_TEMPLATE_PATH ?>/home.css">

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/front_slider.php', array(), array('SHOW_BORDER' => true)) ?>

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_bf.php', array(), array('SHOW_BORDER' => true)) ?>

<div class="info-section-list info-section-list--suitable-seo">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Кому подходит SEO
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row info-section-list__items">
            <div class="col-lg-4 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/suitable-seo-1.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Интернет-магазинам
                        </div>
                        <div class="info-section-list-item__description">
                            Приводим целевой трафик, делаем из посетителя покупателя
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/suitable-seo-2.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Бизнес сайтам
                        </div>
                        <div class="info-section-list-item__description">
                            Увеличиваем узнаваемость бренда, привлекаем новых клиентов
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/suitable-seo-3.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Для сферы услуг
                        </div>
                        <div class="info-section-list-item__description">
                            Превращаем сайт в инструмент конверсии, наращиваем поток заявок
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_traffic.php', array(), array('SHOW_BORDER' => true)) ?>

<div class="info-section-list info-section-list--seo-moskow">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Цена СЕО-продвижения в Москве
                </div>
            </div>
            <div class="col-12">
                <div class="info-section-list__description">
                    <p>
                        В стоимость продвижения входит оплата работы специальных сервисов, программистов,
                        СЕО-оптимизаторов
                        и копирайтеров, а так же, при необходимости, формирование естественной ссылочной массы.
                    </p>
                    <p>
                        Окончательная стоимость определяется на основании выполненного аудита сайта и выбранной
                        стратегии.
                        Для расчета конечной цены, нам нужно знать какой именно результат вас интересует и в какие сроки
                        вы
                        планируете его получить.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row info-section-list__sub-title">
            <div class="col-12">
                <div class="title-base">
                    На стоимость раскрутки влияет:
                </div>
            </div>
        </div>
        <div class="row info-section-list__items">
            <div class="col-xl-2 col-md-4 col-sm-2">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/promotion-price-1.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Структура ресурса
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-2">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/promotion-price-2.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Цели заказчика
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-2">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/promotion-price-3.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Конкурентная среда
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-2">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/promotion-price-4.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Регион продвижения
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-2 col-md-4 col-sm-2">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/promotion-price-5.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Сложности в подготовке
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_tarif.php', array(), array('SHOW_BORDER' => true)) ?>


<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_complex_tariff.php', array(), array('SHOW_BORDER' => true)) ?>

<div class="info-section-list info-section-list--integrated-approach">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Используем комплексный подход
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/integrated-approach-1.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Анализ конкурентов
                        </div>
                        <div class="info-section-list-item__description">
                            Изучение тематики, анализ конкурентов и методов их продвижения
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/integrated-approach-2.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Разработка стратегии
                        </div>
                        <div class="info-section-list-item__description">
                            Создание эффективной SEO-стратегии, ведущей к достижению ТОПа
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/integrated-approach-3.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Оптимизация сайта
                        </div>
                        <div class="info-section-list-item__description">
                            Проведение работ по внешней и внутренней оптимизации сайта
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/integrated-approach-4.png">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Прозрачная отчетность
                        </div>
                        <div class="info-section-list-item__description">
                            Отчетность о результатах проведения работ и обо всех рабочих процессах по проекту
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_cases_new.php', array(), array('SHOW_BORDER' => true)) ?>


<div class="info-section-list info-section-list--his-business">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Мы любим свое дело
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="his-business-text">
                    <div class="title-base">
                        Фиксированные цены
                    </div>
                    <p>
                        Все цены указаны на сайте – не надо ждать обсчета. Цена не меняется от конкуренции, количества
                        ключевых слов и т.п. Кроме того, в каждый пакет уже заложена скидка до 56% – потому что «оптом
                        дешевле».
                    </p>
                    <div class="title-base">
                        Без мук выбора
                    </div>
                    <p>
                        Вам не придется выбирать «продвижение по трафику, позициям или за лид». Работаем по западной
                        модели ценообразования – оплата за конкретные работы. Результаты получаются одинаковые, а
                        бешеные накрутки за гарантию отсутствуют.
                    </p>
                    <div class="title-base">
                        Работаем удаленно
                    </div>
                    <ul>
                        <li>
                            Мы не тратим ваши деньги на аренду своих помещений
                        </li>
                        <li>
                            Мы воплощаем ваши стратегии и упаковываем ваши проекты в любом городе, в любом часовом поясе
                            и в удобное для вас время
                        </li>
                        <li>
                            Мы не отвлекаемся, не болеем и работаем эффективнее офисного сотрудника
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="his-business-merits">
                    <div class="his-business-merits__list">
                        <div class="his-business-merit">
                            <div class="his-business-merit__icon">
                                <i class="lapicon lapicon-bitrix-full "></i>
                            </div>
                            <span>
                                Сертифицированный партнер 1C-Битрикс
                            </span>
                        </div>
                        <div class="his-business-merit">
                            <div class="his-business-merit__icon">
                                <i class="lapicon lapicon-olive "></i>
                                <span class="his-business-merit__value">40</span>
                            </div>
                            <span>
                                Входим в TOP40 seo студий
                            </span>
                        </div>
                    </div>
                    <div class="title-base">
                        Познакомимся?
                    </div>
                    <a class="btn"
                       href="<?= LapkinLab\Core::getBriefLink() ?>"
                       target="_blank">Заполнить бриф</a>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="info-section-list info-section-list--client-gift">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Подарки и скидки для наших клиентов
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="client-gift">
                    <div class="client-gift__value">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/client-gift-1.svg">
                    </div>
                    <div class="client-gift__content">
                        <div class="client-gift__title">
                            Скидка 15% за комплекс
                        </div>
                        <div class="client-gift__description">
                            При заказе SEO и контекстной рекламы одновременно - делаем скидку 15%
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="client-gift">
                    <div class="client-gift__value">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/client-gift-2.svg">
                    </div>
                    <div class="client-gift__content">
                        <div class="client-gift__title">
                            До 20% за доверие
                        </div>
                        <div class="client-gift__description">
                            Если вы оплачиваете сразу 3, 6 или 12 месяцев работ, мы дарим вам скидку 10, 15 или 20%
                            соответственно
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6">
                <div class="client-gift">
                    <div class="client-gift__value">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/client-gift-3.svg">
                    </div>
                    <div class="client-gift__content">
                        <div class="client-gift__title">
                            5 000 руб. за скорость
                        </div>
                        <div class="client-gift__description">
                            При подписании договора в течении недели после презентации коммерческого предложения даем
                            скидку 5 000 рублей
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_reviews.php', array(), array('SHOW_BORDER' => true)) ?>

<?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_article.php', array(), array('SHOW_BORDER' => true)) ?>

<div class="info-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-base">
                    SEO-продвижение сайтов в Москве
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="info-section__image col-lg-6 col-md-12">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-text.png">
            </div>
            <div class="info-section__text col-lg-6 col-md-12">
                <p>
                    Любой сайт с интересным контентом может оказаться невостребованным ввиду отсутствия поискового
                    продвижения. Эта процедура предусматривает привлечение целевой аудитории из поисковиков посредством
                    оптимизации сайта.
                </p>
                <p>
                    Чем выше позиции сайта в поисковой выдаче, тем на большее количество интернет-посетителей может
                    рассчитывать его владелец. За счет этого формируется репутация бренда и лояльность клиентов. Сегодня
                    оптимизации сайта вполне достаточно для того, что привлечь требуемое количество клиентов, не
                    прибегая к
                    рекламным оффлайн-кампаниям.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="info-section-list info-section-list--home-seo">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Преимущества SEO-продвижения
                </div>
            </div>
            <div class="col-12">
                <div class="info-section-list__description">
                    SEO-раскрутка позволяет существенно увеличить трафик сайта на долгосрочной основе. Среди других
                    преимуществ SEO-продвижения стоит отметить:
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/advantages-seo-1.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Низкая стоимость
                        </div>
                        <div class="info-section-list-item__description">
                            Возможность привлечения новых посетителей по цене, которая в 4 раза меньше стоимости
                            контекстной рекламы.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/advantages-seo-2.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Прозрачность ценообразования
                        </div>
                        <div class="info-section-list-item__description">
                            Стоимость продвижения четко фиксируется в клиентском соглашении. А вот стоимость контекстной
                            рекламы зависит от конкурентной среды.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/advantages-seo-3.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Широкий обхват аудитории
                        </div>
                        <div class="info-section-list-item__description">
                            Пользователи находят интересующую информацию на сайте благодаря ключевым словам,
                            составляющим семантическое ядро.
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6">
                <div class="info-section-list-item">
                    <div class="info-section-list-item__image">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/advantages-seo-4.svg">
                    </div>
                    <div class="info-section-list-item__content">
                        <div class="info-section-list-item__title">
                            Работа на удаленной основе
                        </div>
                        <div class="info-section-list-item__description">
                            Контролируйте процессы и получайте быстрые ответы от команды профессионалов со всей России
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-12">
            <div class="info-section-list__description info-section-list__description--bottom">
                SEO-раскрутка сайта способна обеспечить плавное увеличение конверсии и наращивание прибыли благодаря
                попаданию в топ поисковой выдачи. А необходимый результат гарантирует комплексный подход,
                предусматривающий использование контекстной рекламы и поисковой оптимизации.
            </div>
        </div>
    </div>
</div>

<div class="info-section info-section--seo-optimization">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="title-base">
                    Почему оптимизацию и seo продвижение <br> стоит заказать в Lapkinlab
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="info-section__image col-lg-6 col-md-12">
                <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-optimization-full.png">
                <div class="title-base">
                    Если вам интересны наши предложения, мы всегда открыты к сотрудничеству!
                </div>
                <button class="button js-open-modal" data-action="openModal" data-modal="identify_problems">
                    Заказать оптимизацию
                </button>
            </div>
            <div class="info-section__text col-lg-6 col-md-12">
                <div class="seo-optimizations">
                    <div class="seo-optimization">
                        <div class="seo-optimization__img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-optimization-1.svg">
                        </div>
                        <div class="seo-optimization__content">
                            <div class="seo-optimization__title">
                                Комплексный подход
                            </div>
                            <div class="seo-optimization__text">
                                Наши специалисты используют все возможные инструменты, которые позволят продвинуть в топ
                                конкретный ресурс.
                            </div>
                        </div>
                    </div>

                    <div class="seo-optimization">
                        <div class="seo-optimization__img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-optimization-2.svg">
                        </div>
                        <div class="seo-optimization__content">
                            <div class="seo-optimization__title">
                                Безопасность
                            </div>
                            <div class="seo-optimization__text">
                                Мы используем исключительно санкционированные способы оптимизации. Наши клиенты могут не
                                переживать о возможном бане от поисковиков.
                            </div>
                        </div>
                    </div>

                    <div class="seo-optimization">
                        <div class="seo-optimization__img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-optimization-3.svg">
                        </div>
                        <div class="seo-optimization__content">
                            <div class="seo-optimization__title">
                                Доступность
                            </div>
                            <div class="seo-optimization__text">
                                Мы гарантируем прозрачное ценообразование без скрытых платежей. Вы платите только за те
                                услуги, которые реально помогут вашему сайту попасть в топ.
                            </div>
                        </div>
                    </div>

                    <div class="seo-optimization">
                        <div class="seo-optimization__img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-optimization-4.svg">
                        </div>
                        <div class="seo-optimization__content">
                            <div class="seo-optimization__title">
                                Эффективность
                            </div>
                            <div class="seo-optimization__text">
                                Мы применяем эффективные стратегии, которые уже давали необходимый результат в
                                конкретной
                                тематике.
                            </div>
                        </div>
                    </div>

                    <div class="seo-optimization">
                        <div class="seo-optimization__img">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/seo-optimization-5.svg">
                        </div>
                        <div class="seo-optimization__content">
                            <div class="seo-optimization__title">
                                Профессиональная поддержка
                            </div>
                            <div class="seo-optimization__text">
                                Все клиенты нашей компании могут рассчитывать на постоянную поддержку специалистов: с
                                этапа
                                согласования целей и до оценки полученного результата.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
