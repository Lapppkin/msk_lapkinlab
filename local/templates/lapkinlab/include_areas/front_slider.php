<?php

$slides = array(
    1 => array(
        'title' => 'Тысячи покупателей уже ищут то, что вы предлагаете. <br> А с SEO найдут именно вас!',
        'nav' => 'Увеличение продаж',
        'list' => array(
            'Оптимизируем сайт для поисковых роботов',
            'Делаем его удобным для клиентов',
            'Пишем и размещаем полезный и уникальный контент',
            'Оставляем ваших конкурентов позади',
            'Приводим целевых пользователей из поисковых систем',
            'Продажи растут уже в первые месяцы после начала работ',
        ),
    ),
    2 => array(
        'title' => 'Подходим комплексно к оптимизации вашего сайта',
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
        'type' => 'remote-client',
        'title' => 'Удаленный клиентский сервис от LapkinLab',
        'nav' => 'Удаленный сервис',
        'list' => array(
            'Не теряйте время на поездки и встречи ',
            'Не знаете, что делать? Личный удаленный менеджер проконсультирует вас в любом городе и в удобное для вас время',
            'Мы не тратим ваши деньги на аренду своих помещений',
            'Контролируйте процессы и получайте быстрые ответы от команды профессионалов со всей России',
            'Мы не отвлекаемся, не болеем и работаем эффективнее офисного сотрудника',
            'Только индивидуальные стратегии, никаких шаблонов - Делаем время деньгами!',
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
            'Конфиденциальность клиентской информации',
            'Белые методы продвижения',
        )
    ),
);

?>
<!--slider-->
<div class="slider">
    <div class="slider-image" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/home/slide-1.jpg)"></div>
    <div class="container">
        <div class="slider--wrapper row">
            <div class="slider--slides col-xl-6 offset-xl-1 col-lg-8 offset-lg-0 col-md-12 offset-md-0">
                <?php foreach ($slides as $key => $slide): ?>
                    <div class="slide slide-<?= $key ?> <?= $slide['type'] ?>">
                        <div class="slide-image"
                             data-img="<?= SITE_TEMPLATE_PATH ?>/images/home/slide-<?= $key ?>.jpg"></div>
                        <div class="slide-title">
                            <h2><?= $slide['title'] ?></h2>
                        </div>
                        <div class="slide-list">
                            <ul>
                                <?php foreach ($slide['list'] as $item): ?>
                                    <li>
                                        <?= $item ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="slide-action">
                            <? if ($slide['type'] == 'remote-client') { ?>
                                <div class="title-base">
                                    Расскажите о своих желаниях заполнив бриф, а дальше будем действовать мы!
                                </div>
                                <noindex>
                                    <a class="btn"
                                       ref="nofollow"
                                       href="<?= LapkinLab\Core::getBriefLink() ?>"
                                       target="_blank">
                                        Заполнить бриф
                                    </a>
                                </noindex>
                            <? } else { ?>
                                <div class="title-base">
                                    Выявим проблемы с <br> оптимизацией сайта
                                </div>
                                <button class="button js-open-modal" data-action="openModal" data-modal="identify_problems">
                                    Проверить сайт
                                </button>
                            <? } ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="slider--navigation col-12">
                <?php foreach ($slides as $key => $slide): ?>
                    <div class="slide-nav" data-slide="<?= $key ?>"><?= $slide['nav'] ?></div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
