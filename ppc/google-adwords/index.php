<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заказать ведение контекстной рекламы в Google Adwords - цены в Москве на контекстную рекламу в Google Adwords");
$APPLICATION->SetPageProperty("description", "Контекстная реклама в Google AdWords в Москве от компании LapkinLab. Индивидуальный подход, выгодные цены. ☎ 8 800 301-00-19");
$APPLICATION->SetTitle("Заказать ведение контекстной рекламы в Google Adwords - цены в Москве на контекстную рекламу в Google Adwords");

$paramsForm = array(
    'id' => 'google-adwords',
    'title' => 'Подобрать оптимальное решение для вашего бизнеса ',
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
<div class="page page-ppc page-ppc--adwords">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Контекстная реклама Google AdWords
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

    <div class="adwords-section adwords-section--google">
        <div class="container">
            <div class="adwords-section__wrapper row">
                <div class="adwords-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/section-first.png">
                </div>
                <div class="adwords-section__content col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/adwords-logo.png"
                         style="margin-bottom: 15px;">
                    <div class="adwords-section__text">
                        Контекстная реклама предоставляет огромные возможности для продвижения любого
                        интернет-проекта. Такие сервисы, как Adwords от компании Google, позволяют охватить
                        максимально большое количество пользователей как ПК, так и мобильных устройств. Чтобы
                        эффективно использовать все возможности этой платформы, обращайтесь за помощью в
                        компанию LapkinLab. Наши специалисты знают все эффективные способы размещения
                        контекстной рекламы и охвата целевой аудитории Вашего сайта
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="marketing-variant">
                    <div class="adwords__title">
                        Варианты размещения рекламы
                    </div>
                    <div class="marketing-variant__text">
                        Сегодня существует 2 варианта размещения рекламы: контекстно-медийные сети или выдача
                        поисковиков. В первом случае реклама будет размещаться на миллионах сайтов, в том числе и на
                        сверхпопулярных ресурсах Youtube и Gmail. К тому же ее увидят и пользователи приложений для
                        Андроида. Контекстная реклама может быть представлена в формате:
                    </div>
                    <div class="marketing-variant__list">
                        <div class="marketing-variant-item">
                            <div class="marketing-variant-item__image">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/variant-item-1.png">
                            </div>
                            <div class="marketing-variant-item__title">
                                Текст
                            </div>
                        </div>
                        <div class="marketing-variant-item">
                            <div class="marketing-variant-item__image">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/variant-item-2.png">
                            </div>
                            <div class="marketing-variant-item__title">
                                Графические объявления
                            </div>
                        </div>
                        <div class="marketing-variant-item">
                            <div class="marketing-variant-item__image">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/variant-item-3.png">
                            </div>
                            <div class="marketing-variant-item__title">
                                Видеозаписи
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-section adwords-section--two">
        <div class="container">
            <div class="adwords-section__wrapper row">
                <div class="adwords-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/section-two.png">
                </div>
                <div class="adwords-section__content col-lg-6 col-md-12">
                    <div class="adwords-section__text adwords-section__text--bold">
                        За счет таких возможностей можно охватить любую целевую аудиторию.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-info-section adwords-info-section--gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adwords__title">
                        Возможности для онлайн-продаж
                    </div>
                </div>
            </div>
            <div class="adwords-info-section__content row">
                <div class="adwords-info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/macbook.png">
                </div>
                <div class="adwords-info-section__text col-lg-6 col-md-12">
                    Сервис Google Merchant позволяет владельцам интернет-магазинов предлагать свою продукцию на
                    страницах поиска по соответствующему запросу. Рекламные объявления, размещенные через этот
                    сервис, отличаются наглядностью и информативностью. Они состоят из фотографии, цены,
                    характеристики товара и названия интернет-магазина. Эта вся информация, которая необходима
                    потенциальному покупателю. Она позволит ему принять решение о покупке до того, как он
                    перейдет в интернет-магазин. За счет этого уменьшается объем нецелевого трафика и повышается
                    эффективность рекламы.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="adwords-how-works">
                    <div class="adwords__title">
                        Как работает LapkinLab
                    </div>
                    <div class="adwords-how-works__list">
                        <div class="adwords-how-works-item">
                            <div class="adwords-how-works-item__image">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/how-works-1.png">
                            </div>
                            <div class="adwords-how-works-item__text">
                                Наши специалисты отвечают за подготовку и загрузку прайс-листа и сведений о реализуемой
                                продукции в интерфейс системы.
                            </div>
                        </div>
                        <div class="adwords-how-works-item">
                            <div class="adwords-how-works-item__image">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/how-works-2.png">
                            </div>
                            <div class="adwords-how-works-item__text">
                                Мы также выполняем настройку рекламной кампании и запуск показа объявлений.
                            </div>
                        </div>
                        <div class="adwords-how-works-item">
                            <div class="adwords-how-works-item__image">
                                <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/how-works-3.png">
                            </div>
                            <div class="adwords-how-works-item__text">
                                Вы можете быть уверены в том, что рекламу увидят именно те пользователи, которые
                                заинтересованы в ваших товарах.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-info-section adwords-info-section--google">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adwords__title">
                        Google AdWords
                    </div>
                </div>
            </div>
            <div class="adwords-info-section__content row">
                <div class="adwords-info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/adword-image.png">
                </div>
                <div class="adwords-info-section__text col-lg-6 col-md-12">
                    <p>
                        Google AdWords обеспечивает точную настройку целевой аудитории по поисковым запросам.
                        Этот сервис также предоставляет доступ к различным аналитическим инструментам. С его
                        помощью можно отслеживать количество просмотров объявлений, подписок на рассылку,
                        посещений сайта и т.д.
                    </p>
                    <p>
                        Еще одним преимуществом AdWords является ремаркетинг. Этот сервис повторно демонстрирует
                        рекламные объявления потенциальным клиентам, которые по каким-то причинам сразу же не
                        перешли на сайт
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-stage-work"
         style="background-image: url('<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/stage-work.png');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adwords__title">
                        Этапы работы
                    </div>
                    <div class="adwords-stage-work__list">
                        <div class="adwords-stage-work__item adwords-stage-work__item--fist">
                            <div class="adwords-stage-work__number">
                                1
                            </div>
                            <div class="adwords-stage-work__text">
                                Изучение целей проекта
                                и подбор оптимальной стратегии
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--two">
                            <div class="adwords-stage-work__number">
                                6
                            </div>
                            <div class="adwords-stage-work__text">
                                Разработка семантического ядра, определение минус-слов, написание текстов
                            </div>
                        </div>
                        <div class="adwords-stage-work__item">
                            <div class="adwords-stage-work__number">
                                11
                            </div>
                            <div class="adwords-stage-work__text">
                                Автоматизация кампании
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--fist">
                            <div class="adwords-stage-work__number">
                                2
                            </div>
                            <div class="adwords-stage-work__text">
                                Изучение специфики отрасли, в которой работает компания
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--two">
                            <div class="adwords-stage-work__number">
                                7
                            </div>
                            <div class="adwords-stage-work__text">
                                Установка и настройка аналитических систем
                            </div>
                        </div>
                        <div class="adwords-stage-work__item">
                            <div class="adwords-stage-work__number">
                                12
                            </div>
                            <div class="adwords-stage-work__text">
                                Подключение колл-трекинга
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--fist">
                            <div class="adwords-stage-work__number">
                                3
                            </div>
                            <div class="adwords-stage-work__text">
                                Определение целей рекламной кампании
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--two">
                            <div class="adwords-stage-work__number">
                                8
                            </div>
                            <div class="adwords-stage-work__text">
                                Использование сервисов аналитических сервисов от Google и Яндекс
                            </div>
                        </div>
                        <div class="adwords-stage-work__item">
                            <div class="adwords-stage-work__number">
                                13
                            </div>
                            <div class="adwords-stage-work__text">
                                Ведение рекламной кампании
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--fist">
                            <div class="adwords-stage-work__number">
                                4
                            </div>
                            <div class="adwords-stage-work__text">
                                Определение требуемого количества заявок, обращений, звонков и т.д.
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--two">
                            <div class="adwords-stage-work__number">
                                9
                            </div>
                            <div class="adwords-stage-work__text">
                                Анализ и внесение корректировок
                            </div>
                        </div>
                        <div class="adwords-stage-work__item">
                            <div class="adwords-stage-work__number">
                                14
                            </div>
                            <div class="adwords-stage-work__text">
                                Составление отчета по выполненным работам и расходованию бюджета
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--fist">
                            <div class="adwords-stage-work__number">
                                5
                            </div>
                            <div class="adwords-stage-work__text">
                                Подбор ключевых фраз и создание рекламных объявлений
                            </div>
                        </div>
                        <div class="adwords-stage-work__item adwords-stage-work__item--two">
                            <div class="adwords-stage-work__number">
                                10
                            </div>
                            <div class="adwords-stage-work__text">
                                Ежедневная оптимизация рекламной кампании
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-info-section adwords-info-section--price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adwords__title">
                        Цена контекстной рекламы
                    </div>
                </div>
            </div>
            <div class="adwords-info-section__content row">
                <div class="adwords-info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/price.png">
                </div>
                <div class="adwords-info-section__text col-lg-6 col-md-12">
                    <p>
                        Цена клика зависит исключительно от тематики. Наши специалисты внимательно изучают
                        специфику отрасли и ориентируют клиентов на оптимальный размер бюджета под поставленные
                        цели.
                    </p>
                    <p>
                        <strong>
                            Для того чтобы узнать стоимость рекламы, вам необходимо только лишь оставить заявку
                            на нашем сайте.
                        </strong>
                    </p>
                    <p>
                        <button class="button js-open-modal" data-action="openModal" data-modal="ppc">Оставить заявку</button>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-info-section adwords-info-section--guarantee">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="adwords__title">
                        Гарантия результата
                    </div>
                </div>
            </div>
            <div class="adwords-info-section__content row">
                <div class="adwords-info-section__text col-lg-6 col-md-12">
                    <p>
                        В компании LapkinLab работают специалисты, которые на протяжении многих лет успешно
                        разрабатывают рекламные кампании любой сложности. Наши клиенты могут быть уверены не
                        только в результате, но и прозрачности всех услуг.
                    </p>
                    <p>
                        Мы открываем доступ в личный кабинет Google AdWords, что позволит вам полностью
                        контролировать весь рабочий процесс и расходование бюджета. К тому же мы ежемесячно
                        отчитываемся перед клиентами за все выполненные работы. А на основании результатов
                        проведенной кампании мы составляем планы по продвижению проекта на следующий месяц.
                    </p>
                </div>
                <div class="adwords-info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/ppc-adwords/guarantee.png">
                </div>
            </div>
        </div>
    </div>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>


<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
