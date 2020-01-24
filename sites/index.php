<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Разработка и создание сайтов под ключ: цены в Москве, калькулятор стоимости");
$APPLICATION->SetPageProperty("description", "Рассчитать стоимость создания сайтов от компании LapkinLab &#9997;Разработка интернет-магазинов, лендингов, корпоративных сайтов под ключ &#9997;Цены в Москве");
$APPLICATION->SetTitle("Разработка и создание сайтов под ключ: цены в Москве, калькулятор стоимости");
?>

<div class="page page-sites">
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_slider.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_prices.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_include.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php //$APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_portfolio.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_opacity.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_cms.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_analytics.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_steps.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_reviews.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_reasons.php', array(), array('SHOW_BORDER' => true)) ?>

    <section class="sites-main">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Создание сайтов в Москве</h1>
                    <h3 class="h2">Сегодня более 80% бизнесов работают и получают клиентов из сети Интернет.</h3>
                    <p>Не упустите возможность заказать сайт в Москве недорого, увеличить количество клиентов, расширить аудиторию, повысить продажи и обороты Вашего бизнеса. Мы — профессионалы в области разработки и готовы взяться за создание уникального, удобного и интуитивно понятного сайта или интернет-магазина любой сложности! Это может быть и простой лендинг-визитка, и сайт экстра-класса с уникальным продвинутым функционалом. Оставьте заявку на разработку и мы поможем подобрать индивидуальное решение, которое подойдет именно Вашему бизнесу.</p>
                    <p>Создание сайтов в Москве — это одно из основных направлений работы нашей вeб-студии уже более 5 лет. Качество и сроки для нас — не пустой звук.</p>
                    <h3 class="h2">Почему стоит заказать создание сайта под ключ у нас?</h3>
                    <ul>
                        <li>Максимальная прозрачность хода работ начиная с брифа и заканчивая сдачей готового к работе сайта.</li>
                        <li>Мы работаем абсолютно легально по договору и техническому заданию, без скрытых платежей и навязывания дополнительных платных услуг — цена на разработку сайта в договоре окончательна.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
