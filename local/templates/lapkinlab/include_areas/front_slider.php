<?php

$slides = array(
    1 => array(
        'title' => 'Тысячи покупателей уже ищут то, что вы предлагаете. <br> А с SEO найдут именно вас!',
        'nav' => 'Увеличение продаж',
        'list' => array(
            'Оптимизируем сайт для поисковых роботов',
            'Делаем его удобным для клиентов',
            'Приводим целевых пользователей из поисковых систем',
            'Продажи растут уже в первые месяцы после начала работ',
            'Оставляем ваших конкурентов позади',
        ),
    ),
    2 => array(
        'title' => 'Подходим комплексно к оптимизации вашего сайта:',
        'nav' => 'Комплексный подход',
        'list' => array(
            'Выявим вашу аудиторию',
            'Соберем целевые запросы покупателей',
            'Проведем конкурентный анализ',
            'Выполним аудит сайта, выявим и устраним слабые места',
            'Оптимизируем структуру и выполним все технические работы по проекту',
            'Доведем до результата — поднимем трафик, вырастим позиции!',
        )
    ),
    3 => array(
        'title' => 'Клиентский сервис:',
        'nav' => 'Клиентский сервис',
        'list' => array(
            '«Дедлайн» - для нас не просто слово',
            'Постоянная связь с клиентом на всех этапах продвижения',
            'Наш менеджер всегда готов ответить на любые вопросы по вашему сайту',
            'Регулярная отчетность - мы знаем как важно видеть наглядный результат!',
        )
    ),
    4 => array(
        'title' => 'Результаты и гарантии. <br> Мы гарантируем:',
        'nav' => 'Результаты и гарантии',
        'list' => array(
            'Рост позиций сайта после 1 месяца',
            'Увеличение посещаемости ресурса после 2 месяца',
            'Уже через 4 месяца вы заметите рост продаж',
            'Стабильный рост видимости и позиций сайта',
            'Прозрачная отчетность',
            'Конфиденциальность клиентской информации',
            '«Белые» методы продвижения',
        )
    ),
);

?>
<!--slider-->
<div class="slider">
    <div class="slider-image" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/slides/1.jpg)"></div>
    <div class="container">
        <div class="slider--wrapper row">

            <div class="slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                <?php foreach ($slides as $key => $slide): ?>
                <div class="slide slide-<?= $key ?>">
                    <div class="slide-image" data-img="<?= SITE_TEMPLATE_PATH ?>/images/slides/<?= $key ?>.jpg"></div>
                    <div class="slide-title">
                        <h2><?= $slide['title'] ?></h2>
                    </div>
                    <div class="slide-list">
                        <ul>
                            <?php foreach ($slide['list'] as $item): ?>
                            <li>
                                <?= renderSprite('check-mark') ?>
                                <?= $item ?>
                            </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/front_slider_form.php', array(), array('SHOW_BORDER' => true)) ?>

            <div class="slider--navigation col-12">
                <?php foreach ($slides as $key => $slide): ?>
                <div class="slide-nav" data-slide="<?= $key ?>"><?= $slide['nav'] ?></div>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
</div>
