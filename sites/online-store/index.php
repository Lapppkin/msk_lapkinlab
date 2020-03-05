<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Создание интернет-магазина в Москве: заказать услуги по разработке интернет-магазина");
$APPLICATION->SetPageProperty("description", "Компания LapkinLab оказывает услуги по созданию интернет-магазина в Москве. Индивидуальный подход, выгодные цены. ☎ 8 800 301-00-19");
$APPLICATION->SetTitle("Создание интернет-магазина в Москве: заказать услуги по разработке интернет-магазина");

$paramsForm = array(
    'id' => 'online-store',
    'title' => 'Подобрать <br> оптимальное решение для вашего бизнеса',
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
    'submit_button' => 'Получить консультацию',
    'wrapper' => true,
);
?>
<div class="page page-ppc page--online-store">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/online-store/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Интернет-магазин <br>
                                под ключ <br>
                                от LapkinLab
                            </h1>
                        </div>
                        <div class="slide-title__text">
                            Только эффективные инструменты и решения для вашего бизеса
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="info-section">
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Пользователи принимают решение о целесообразности дальнейшего серфинга по сайту в течение первых
                        10 секунд. Именно поэтому так важно, чтобы сайт был максимально быстрым и понятным.
                    </p>
                    <p>
                        Об этом позаботятся специалисты компании LapkinLab. Мы правильно настроим работу сервера,
                        подготовим качественный контент, используем функционал кеширования и создадим веб-ресурс с
                        простой линейной структурой.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/section-image.png">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--consult info-section--reverse">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Консультация специалиста
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/consult.png">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Наши специалисты готовы рассказать обо всех тонкостях услуги разработки интернет-магазина под
                        ключ. Вы также сможете задать любые интересующие вопросы. Менеджеры LapkinLab ответят на них
                        максимально оперативно и развернуто.
                    </p>
                    <button class="btn js-open-modal" data-action="openModal" data-modal="sites" data-site-type="eshop">Оставить заявку</button>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--reverse">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Что получают наши клиенты
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Благодаря нашим услугам, вы получите интернет-магазин с настроенными сервисами аналитики и
                        интегрированными модулями для электронной торговли. На вашем сайте будет доступен поиск, фильтр,
                        онлайн-оплата и другой функционал, необходимый для современного коммерческого ресурса.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/customers-get.png">
                </div>
            </div>
            <div class="row info-section--row-mt">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/customers-get-2.png">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Для создания сайта, соответствующего требованиям поисковиков, LapkinLab привлекает опытных
                        SEO-специалистов, которые соберут подходящее семантическое ядро и выполнят внутреннюю
                        оптимизацию ресурса. При разработке мы всегда используем только защищенный HTTPS-протокол.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section-list">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Как создается прибыльный интернет-магазин
                    </div>
                </div>
                <div class="col-12">
                    <div class="info-section-list__description">
                        Создание прибыльного интернет-магазина можно разделить на несколько стадий
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/create-online-store.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Анализ бизнеса
                            </div>
                            <div class="info-section-list-item__description">
                                На этом этапе анализируется сфера деятельности и сегментируется целевая аудитория
                                магазина. Дополнительно разрабатывается отчет по решениям основных конкурентов. На
                                основании выполненного анализа составляется семантическое ядро сайта, а также
                                разрабатывается его интерфейс и структура.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/create-online-store-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Разработка прототипа и дизайн-концепции
                            </div>
                            <div class="info-section-list-item__description">
                                Наши специалисты разрабатывают прототип и техническое задание. В перечень наших
                                обязанностей входит подготовка технических рекомендаций по текстовому контенту, а
                                также внутренней и внешней оптимизации.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/create-online-store-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Верстка страницы
                            </div>
                            <div class="info-section-list-item__description">
                                Специалисты LapkinLab создают адаптивную верстку под любые типы устройств и
                                разрешения дисплеев. Затем мы тестируем качество отображения и скорость загрузки в
                                различных браузерах.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/create-online-store-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Запуск сайта
                            </div>
                            <div class="info-section-list-item__description">
                                На последнем этапе работ осуществляется выбор архитектуры и перенос верстки на
                                «движок». Digital-Агентство LapkinLab интегрирует интернет-магазин со всеми
                                актуальными сервисами (системами оплаты, CRM и т.д.). Готовую работу со всеми
                                доступами мы передаем заказчику.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/create-online-store-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Разработка дизайна
                            </div>
                            <div class="info-section-list-item__description">
                                Наши дизайнеры отрисовывают страницу согласно прототипу, рекомендациям заказчика и
                                требованиям веб-дизайна. Мы занимается подбором изображений и иконок, а также
                                адаптацией макета под смартфоны и планшеты. После этого выполняется верстка
                                страницы.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--price-development  info-section--reverse">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Цена разработки
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/price-development.png">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Мы не предлагаем шаблонных решений. Наши клиенты могут рассчитывать на эксклюзивный проект, в
                        процесс разработки которого учтена специфика реализуемой продукции. Стоимость разработки
                        начинается от 65 тысяч рублей. Если вы хотите узнать сколько будет стоить ваше интернет-магазин,
                        оставляйте заявку на нашем сайте прямо сейчас. Мы подберем для вас наилучший вариант с учетом
                        целей магазина и имеющегося бюджета.
                    </p>
                    <button class="button js-open-modal" data-action="openModal" data-modal="online-store-price">
                        Рассчитать стоимость проекта
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section-list">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Дополнительные услуги
                    </div>
                </div>
                <div class="col-12">
                    <div class="info-section-list__description" style="max-width: 600px">
                        Наши клиенты могут рассчитывать не только разработку интернет-магазина, но и на услуги по его
                        поддержке и развитию:
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/extra-service.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Поддержка сайта
                            </div>
                            <div class="info-section-list-item__description">
                                Наши возможности позволяют обеспечить оперативную техническую поддержку пользователей
                                сайта в режиме 24/7. К тому же наши специалисты обеспечат стабильную работу самого сайта
                                и при необходимости быстро исправят любые возникающие ошибки.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/extra-service-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Наполнение контентом
                            </div>
                            <div class="info-section-list-item__description">
                                Сотрудники LapkinLab готовы обучить ваших контент-менеджеров и наполнить сайт
                                качественным контентом.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/online-store/extra-service.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Поисковое продвижение
                            </div>
                            <div class="info-section-list-item__description">
                                Мы подберем для вас оптимальную стратегию продвижения в поисковых системах, которая
                                позволит максимально быстро оказаться в топе выдачи. Благодаря нашим услугам, ваш
                                интернет-магазин будут посещать исключительно заинтересованные пользователи, которые с
                                высокой долей вероятностью оформят заказ и вернутся за новыми покупками.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
