<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заказать настройку контекстной рекламы под ключ в Москве: стоимость настройки и ведения рекламы");
$APPLICATION->SetPageProperty("description", "Маркетинговое агентство LapkinLab предлагает заказать настройку и ведение контекстной рекламы в Москве и других городах &#9997;Эффективный рекламный бюджет &#9997;Плата за результат");
$APPLICATION->SetTitle("Заказать контекстную рекламу в агентстве: стоимость настройки и ведения рекламы в Москве");

$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
?>
<div class="page page-ppc">

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_slider.php', array(), array('SHOW_BORDER' => true)) ?>

    <section class="ppc-main">
        <div class="container">
            <div class="row">
                <h1 class="col-12 text-center">Контекстная реклама под ключ в Москве - только целевая аудитория для вашего сайта</h1>
                <div class="col-lg-5 offset-lg-1 col-md-6 offset-md-0 col-sm-12 offset-sm-0">
                    <h2>Реклама в Яндекс.Директе</h2>
                    <p>Настроим и возьмем на себя ведение рекламной кампании в поисковой системе Яндекс, соберем широкое (без ограничения по количеству ключей) семантическое ядро, составим продающие тексты объявлений, подключим и будем отслеживать эффективность вашей рекламы, дадим рекомендации по доработке сайта для увеличения конверсии.</p>
                    <p><img src="<?= SITE_TEMPLATE_PATH ?>/images/yandex-direct.png" alt="yandex-direct"></p>
                </div>
                <div class="col-lg-5 col-md-6">
                    <h2>Реклама в Google Adwords</h2>
                    <p>Настраиваем контекстную рекламу в Google под ключ, проверяем или проводим подключение сервисов аналитики, подбираем наиболее релевантные ключевые слова.</p>
                    <p>Рекламное объявление увидит именно ваша аудитория в выбранном регионе.</p>
                    <p><img src="<?= SITE_TEMPLATE_PATH ?>/images/google-adwords.png" alt="google-adwords"></p>
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
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_reviews.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_solutions.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_cases.php', array(), array('SHOW_BORDER' => true)) ?>

</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
