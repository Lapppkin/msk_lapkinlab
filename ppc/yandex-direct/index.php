<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контекстная реклама в Яндекс.Директ - Как попасть в топ за 3 дня");
$APPLICATION->SetPageProperty("description", "Маркетинговое агентство LapkinLab предлагает заказать настройку и ведение контекстной рекламы в Яндекс.Директ ✍️Эффективный рекламный бюджет ✍️Плата за результат");
$APPLICATION->SetTitle("Контекстная реклама в Яндекс.Директ");

$APPLICATION->AddChainItem('Контекстная реклама', '/ppc/');
$paramsForm = array(
    'id' => 'yandex-direct',
    'title' => 'Подобрать <br> оптимальное решение для вашего бизнеса ',
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
    'submit_button' => 'Подобрть решение',
    'wrapper' => true,
);

?>
<div class="page page-ppc page--yandex-direct">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Контекстная реклама <br>
                                в Яндекс.Директ
                            </h1>
                        </div>
                        <div class="slide-title__text">
                            Как попасть в ТОП и стартовать продажи за 3 дня
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--reverse">
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/yandex-logo.png">
                    <p>
                        Это лидер поискового рынка России. Благодаря этому, его контекстная реклама гарантирует
                        привлечение на сайт целевых пользователей с первых дней запуска. При этом поисковая оптимизация
                        не имеет никакого значения. Объявления <span style="color: #FE3861">Яндекс.Директа</span> будут
                        располагаться на всех без исключения
                        страницах поисковой выдачи.
                    </p>
                    <p>
                        Эффективность Яндекс.Директа подтверждает даже тот факт, что некоторые другие сервисы Яндекса
                        также участвуют в показах.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/image.png">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Преимущества контекстной рекламы в Яндексе
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/image-2.png">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <div class="yandex-advantages">
                        <div class="yandex-advantage">
                            <div class="yandex-advantage__title">
                                <div class="yandex-advantage__icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/yandex-advantage.png">
                                </div>
                                <div class="yandex-advantage__title-value">
                                    Экономия времени
                                </div>
                            </div>
                            <div class="yandex-advantage__content">
                                Настройка рекламы не займет много времени. Для качественной настройки достаточно взять
                                небольшое количество ключевых слов. Постепенно в этот перечень можно добавлять
                                объявления и по другим запросам.
                            </div>
                        </div>
                        <div class="yandex-advantage">
                            <div class="yandex-advantage__title">
                                <div class="yandex-advantage__icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/yandex-advantage-2.png">
                                </div>
                                <div class="yandex-advantage__title-value">
                                    Быстрый результат
                                </div>
                            </div>
                            <div class="yandex-advantage__content">
                                Целевая аудитория сайта придет уже в день его запуска. С момента начала показа рекламы
                                будет обеспечен переход только потенциальных клиентов.
                            </div>
                        </div>
                        <div class="yandex-advantage">
                            <div class="yandex-advantage__title">
                                <div class="yandex-advantage__icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/yandex-advantage-3.png">
                                </div>
                                <div class="yandex-advantage__title-value">
                                    Целевые показы
                                </div>
                            </div>
                            <div class="yandex-advantage__content">
                                Привлечение исключительно целевой аудитории. Реклама будет продемонстрирована только тем
                                пользователям, кто реально может заинтересоваться соответствующими рекламными
                                объявлениями.
                            </div>
                        </div>
                        <div class="yandex-advantage">
                            <div class="yandex-advantage__title">
                                <div class="yandex-advantage__icon">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/yandex-advantage-4.png">
                                </div>
                                <div class="yandex-advantage__title-value">
                                    Отслеживание результатов
                                </div>
                            </div>
                            <div class="yandex-advantage__content">
                                Возможность отслеживания результатов по количественным и качественным показателям.
                                Владелец ресурса будет знать не только число переходов, но и информацию о длительности
                                сессии любого пользователя.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--reverse">
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        В интернете есть огромное количество других подобных сервисов. Однако именно Яндекс.Директ
                        сохраняет лидерство в этом сегменте. Данный факт обусловлен тем, что Директ – это простой,
                        понятный и удобный сервис с множеством дополнительных возможностей. К плюсам Яндекс.Директа
                        стоит отнести и его постоянное совершенствование.
                    </p>
                    <p>
                        Разработчики Яндекса регулярно внедряют механизмы отсеивания ботов, эффективные защитные модули
                        и множество других
                        программ. За счет этого заказчики рекламы в Яндексе платят исключительно за фактические переходы
                        своей целевой
                        аудитории. Такой подход позволяет сэкономить немалую часть денег и повысить эффективность работы
                        сайта.
                    </p>
                    <button class="button js-open-modal" data-action="openModal" data-modal="ppc">
                        Получить консультацию
                    </button>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/image-3.png">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section-list info-section-list--yandex-gray">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Почему стоит использовать Директ для продвижения
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/promotion.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Честный трафик, состоящий из целевых пользователей
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/promotion-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Высокий уровень конверсии посетителей в заявки и звонки
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/promotion-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Прозрачность сервиса
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section">
        <div class="container" style="max-width: 730px">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Как мы обеспечиваем достижение необходимых результатов
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/image-4.png">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <ol class="ol-custom">
                        <li>
                            Подбираем оптимальный набор «ключей»
                        </li>
                        <li>
                            Разрабатываем качественный продающий текст объявления под определенный запрос
                        </li>
                        <li>
                            Находим минус-слова, которые заблокируют возможность показа объявления для нецелевой
                            аудитории
                        </li>
                        <li>
                            Адаптируем рекламную кампанию в соответствии с конкретной ситуацией
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section-list info-section-list--yandex-gray info-section-list--yandex-price">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Почему стоит использовать Директ для продвижения
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="yandex-price">
                            <div class="yandex-price__value">
                                от 5 000 ₽
                            </div>
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Минимальный бюджет
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="yandex-price">
                            <div class="yandex-price__value">
                                от 30 000 ₽
                            </div>
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                При относительно среднем
                                уровне конкуренции
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="info-section-list-item">
                        <div class="yandex-price">
                            <div class="yandex-price__value">
                                от 60 000 ₽
                            </div>
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                При высоком уровне конкуренции
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--reverse info-section--yandex-dignities">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Наши достоинства – ваши выгоды
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <ol class="ol-custom">
                        <li>
                            Мы разрабатываем рекламную кампанию только после предварительного анализа всех составляющих рыночной ситуации: конкурентной среды, поведенческих факторов и т.д.
                        </li>
                        <li>
                            Мы стараемся оптимизировать бюджет с целью уменьшения стоимости одного клика. Для этого мы постоянно работаем с ключевыми словами с низкой конверсией
                        </li>
                        <li>
                            В случае неактуальности ставок, мы отключаем их
                        </li>
                        <li>
                            В зависимости от актуальности предложения мы изменяем рекламные объявления в <span style="color: #FE3861">Яндекс.Директ</span>
                        </li>
                    </ol>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct/image-5.png">
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>
<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
