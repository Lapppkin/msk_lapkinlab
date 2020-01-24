<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Сколько стоит разработка и продвижение сайта под ключ (онлайн калькулятор)");
$APPLICATION->SetPageProperty("description", "Сколько стоит разработать и продвинуть сайт в Москве. Калькулятор расчета стоимости создания сайта");
$APPLICATION->SetTitle("Калькулятор стоимости сайта");

$APPLICATION->AddChainItem('Разработка сайтов', '/sites/');
?>

<div class="page page-sites">

    <section class="sites-main">
        <div class="container">
            <div class="row">
                <h1 class="col-12 text-center">Калькулятор стоимости сайта</h1>
                <div class="col-md-8 offset-md-2 col-sm-12 offset-sm-0">
                    <p>Клиенты нашей компании всегда первым делом задают очень простой вопрос: <b>«Сколько стоит сайт?»</b>. Однако моментально определить стоимость любого сайта невозможно. Для расчета нужно знать несколько крайне важных исходных значений. Поэтому определить стоимость и сроки разработки можно только после уточнения нескольких вопросов.</p>
                    <p>Однако компания <a href="/">LapkinLab</a> старается всегда радовать клиентов. Поэтому мы разработали специальный калькулятор, который позволяет автоматически сформировать цену ресурса. Для этого пользователю необходимо выбрать один вариант ответа на перечисленные вопросы. Если вас устраивает оглашенная цена, вы можете оформить заказ прямо сейчас. После этого с вами свяжутся специалисты LapkinLab и согласуют все организационные моменты.</p>
                    <p>При возникновении каких-то трудностей или недопонимания <a href="#" class="js-open-modal" data-action="openModal" data-modal="callback">обращайтесь за помощью</a> консультантов LapkinLab.</p>
                </div>
            </div>
        </div>
    </section>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/calculator.php', array(), array('SHOW_BORDER' => true)) ?>

</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
