<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "У нас Вы можете заказать услуги по созданию сайтов на Битриксе в Москве. Оставьте заявку на сайте или свяжитесь по телефону ☎ 8 800 301-00-19");
$APPLICATION->SetPageProperty("title", "Заказать разработку сайта на 1С-Битрикс | Услуги на создание сайтов на Bitrix");
$APPLICATION->SetTitle("Заказать разработку сайта на 1С-Битрикс | Услуги на создание сайтов на Bitrix");

$paramsForm = array(
    'id' => 'sites-bitrix',
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

<div class="page page-ppc page--sites-bitrix">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Разработка сайтов
                                <br>
                                на Битрикс
                            </h1>
                        </div>
                        <div class="slide-title__text">
                            Запустим ваш онлайн проект вовремя, с требуемым качеством и без головной боли!
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-section adwords-section--bitrix">
        <div class="container">
            <div class="adwords-section__wrapper row">
                <div class="adwords-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/section-first.png" class="js-tilt-block">
                </div>
                <div class="adwords-section__content col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/bitrix.png"
                         style="margin-bottom: 15px;">
                    <div class="adwords-section__text">
                        Компания LapkinLab предоставляет услугу разработки сайтов на платформе Битрикс «под ключ».
                        Bitrix – это одна из самых популярных CMS, предоставляющая возможность создавать функциональные
                        сайты с высокой конверсией. Стоимость разработки сайта на CMS Битрикс зависит от его структуры и
                        контента.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--advantages-bitrix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Преимущества разработки на Bitrix
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/advantages-bitrix-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Удобство использования
                            </div>
                            <div class="info-section-list-item__description">
                                Простота управления сайтом. Он готов к масштабированию и сопутствующему увеличению
                                нагрузок. Упрощен процесс интеграции и обновления БД.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/advantages-bitrix-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Универсальность
                            </div>
                            <div class="info-section-list-item__description">
                                Битрикс совместима с актуальным бухгалтерским ПО. Для увеличения функционала сайта в
                                соответствии с особенностями бизнеса применяются дополнительные расширения.
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/advantages-bitrix-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Безопасность
                            </div>
                            <div class="info-section-list-item__description">
                                Эта CMS максимально защищена от возможности взлома.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/advantages-bitrix-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Эффективность
                            </div>
                            <div class="info-section-list-item__description">
                                Поисковые системы хорошо воспринимают сайты на Bitrix, что способствует их успешному
                                продвижению.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--advantages-bitrix-big">
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Наша компания не ставит разработку сайтов «на поток». Мы готовы уделить нашим клиентам столько
                        времени, сколько потребуется для создания сайта, который позволит заказчику достичь необходимых
                        результатов.
                    </p>
                    <p>
                        Наша компания строго придерживается всех пунктов подписанного договора на сотрудничество. В
                        процессе
                        работы мы не меняем стоимость наших услуг. Мы также гарантируем сдачу проектов в заранее
                        обозначенные сроки и строгое выполнение остальных обязательств перед заказчиком.
                    </p>
                    <button class="btn">Заказать разработку</button>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/advantages-bitrix-big.png"
                         class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--creating-bitrix">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Создание сайта на Битрикс
                    </div>
                </div>
            </div>
        </div>
        <div class="container info-section__container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/creating-bitrix-1.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Наша компания разрабатывает эксклюзивные сайты на CMS Bitrix. Поэтому стоимость разработки
                        зависит сразу от нескольких факторов: количества страниц, контента, функциональных возможностей,
                        анимации, визуальных эффектов и т.д.
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Преимущества индивидуальной разработки сайтов на CMS Битрикс
                    </div>
                </div>
            </div>

            <div class="row info-section__item-not-first">
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Эксклюзивный дизайн и функционал
                    </b>
                    <p>
                        Наши специалисты создадут сайт, соответствующим всем требованиям заказчика, особенностям его
                        сферы деятельности и конкурентной среды. За счет индивидуальной разработки сайта вы получите
                        дополнительное конкурентное преимущество. К тому же эксклюзивный сайт будет привлекательным для
                        поисковых систем.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/creating-bitrix-2.png"
                         class="js-tilt-block">
                </div>
            </div>

            <div class="row info-section__item-not-first">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/creating-bitrix-3.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <strong>
                        Разработка эксклюзивных сайтов позволяет реализовать все идеи заказчика.
                    </strong>
                </div>
            </div>

            <div class="row info-section__item-not-first">
                <div class="info-section__text col-lg-6 col-md-12">
                    <strong>
                        Сайт, созданный по индивидуальному заказу, будет отличаться стильным дизайном и удобством
                        пользования, что наверняка оценят пользователи.
                    </strong>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/creating-bitrix-4.png"
                         class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--bitrix-customers-get">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Что получат наши заказчики
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Техническое задание, в котором будут четко описаны детали и стадии реализации проекта. В
                                ТЗ также будет указан перечень графических элементов, функционал сайта и стиль дизайна.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Прототип сайта, который позволит наглядно продемонстрировать его дизайн и интерфейс.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Качественную верстку и адаптацию сайта. Наши специалисты сделают ресурс удобным для
                                пользователей как персональных компьютеров, так и мобильных устройств.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Установку сайта на удобный и простой «движок». CMS Битрикс позволяет клиенту управлять
                                контентом сайта без сторонней профессиональной помощи.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Готовый сайт, наполненный всем необходимым контентом: текстами, графическими элементами
                                и т.д.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-6.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Размещение сайта на проверенных хостингах.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-7.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Первоначальную поисковую оптимизацию для снижения расходов на продвижение.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-8.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                Настроенные счетчики, которые позволят анализировать эффективность работы сайта, а также
                                определять источники трафика и количество посетителей. Эти сведения позволяют
                                существенно повысить конверсию сайта
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container info-section__container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/sites-bitrix/customers-get-big.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Компания LapkinLab создает уникальные сайты на Bitrix, учитывая задачи вашего проекта и
                        особенности конкурентной среды. Мы гарантируем не только разработку удобных в управлении сайтов,
                        но и комплексную техподдержку в режиме 24/7. Сайты, созданные специалистами LapkinLab, позволяют
                        существенно расширить клиентскую базу и увеличить количество продаж.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
