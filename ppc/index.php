<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заказать настройку контекстной рекламы под ключ в Москве: стоимость настройки и ведения рекламы");
$APPLICATION->SetPageProperty("description", "Маркетинговое агентство LapkinLab предлагает заказать настройку и ведение контекстной рекламы в Москве и других городах &#9997;Эффективный рекламный бюджет &#9997;Плата за результат");
$APPLICATION->SetTitle("Заказать контекстную рекламу в агентстве: стоимость настройки и ведения рекламы в Москве");
?>
<div class="page page-ppc">
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_slider.php', array(), array('SHOW_BORDER' => true)) ?>
    <section class="ppc-main">
        <div class="container">
            <div class="row">
                <h1 class="col-12 text-center">Контекстная реклама под ключ в Москве - только целевая аудитория для
                    вашего сайта</h1>
                <div class="col-lg-5 offset-lg-1 col-md-6 offset-md-0 col-sm-12 offset-sm-0">
                    <h2>Реклама в Яндекс.Директе</h2>
                    <p>
                        Настроим и возьмем на себя ведение <a href="/ppc/yandex-direct/">рекламной кампании в поисковой
                            системе Яндекс</a>, соберем широкое (без ограничения по количеству ключей) семантическое
                        ядро, составим продающие тексты объявлений, подключим и будем отслеживать эффективность вашей
                        рекламы, дадим рекомендации по доработке сайта для увеличения конверсии.
                    </p>
                    <p>
                        <a href="/ppc/yandex-direct/"> <img alt="yandex-direct"
                                                            src="/local/templates/lapkinlab/images/yandex-direct.png">
                        </a>
                    </p>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h2>Реклама в Google Adwords</h2>
                    <p>
                        <a href="/ppc/google-adwords/">Настраиваем контекстную рекламу в Google под ключ</a>, проверяем
                        или проводим подключение сервисов аналитики, подбираем наиболее релевантные ключевые слова.
                    </p>
                    <p>
                        Рекламное объявление увидит именно ваша аудитория в выбранном регионе.
                    </p>
                    <p>
                        <a href="/ppc/google-adwords/"> <img src="/local/templates/lapkinlab/images/gg-adwor.png"
                                                             title="google-adwords"></a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_why.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_format.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_how.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_benefit.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_tasks.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_prices.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_calculator.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_reviews.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_solutions.php', array(), array('SHOW_BORDER' => true)) ?>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_cases.php', array(), array('SHOW_BORDER' => true)) ?>
</div>
<br><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
