<?php
$section = array(
    'name' => 'format',
    'title' => 'Для каждой задачи подберем подходящий формат',
    'items' => array(
        0 => array(
            'title' => 'Поисковая реклама',
            'price' => '12 000',
            'body' => 'Контекстная (поисковая) реклама показываемся потенциальным покупателям в результатах поиска крупнейших поисковых систем (Яндекс, Google и др.)'
        ),
        1 => array(
            'title' => 'Медийная реклама',
            'price' => '5 000',
            'body' => 'Этот рекламный продукт ориентируется на зрительное восприятие покупателей, привлекает внимание аудитории с помощью ярких изображений, видео-контента, аудио.'
        ),
        2 => array(
            'title' => 'Ремаркетинг / ретаргетинг',
            'price' => '3 000',
            'body' => 'Эти технологии позволяют настроить рекламные кампании таким образом, чтобы напоминать посетителям о ваших товарах/услугах и стимулировать покупку.'
        ),
        3 => array(
            'title' => 'Ремаркетинг YouTube',
            'price' => '4 000',
            'body' => 'Ремаркетинг позволит показывать ваше объявление широчайшей аудитории YouTube и партнерских сайтов, повышать рентабельность рекламы.'
        ),
        4 => array(
            'title' => 'Реклама на почте Gmail',
            'price' => '3 000',
            'body' => 'Объявление в почте показываются во вкладке «Входящие». Такой формат рекламы позволяет обратиться к целевой аудитории при помощи рекламных писем.'
        ),
        5 => array(
            'title' => 'Видеореклама',
            'price' => '5 000',
            'body' => 'Видеоролик, который запомнится аудитории и вызовет желание приобрести товар/услугу, показанный на партнерских сайтах поисковых систем - отличный способ охватить целевых клиентов.'
        ),
    ),
);
?>
<section class="ppc-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="ppc-<?= $section['name'] ?>--title text-center h1 col-12"><?= $section['title'] ?></h2>
            <div class="ppc-<?= $section['name'] ?>--items col-lg-10 offset-lg-1 col-md-12 offset-md-0">
                <div class="row">

                    <?php foreach ($section['items'] as $key => $item): ?>
                    <div class="ppc-<?= $section['name'] ?>--item col-lg-4 col-md-6">
                        <div class="ppc-<?= $section['name'] ?>--item--wrapper">
                            <div class="ppc-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                            <div class="ppc-<?= $section['name'] ?>--item--price">от <?= $item['price'] ?> &#8381;</div>
                            <div class="ppc-<?= $section['name'] ?>--item--body"><?= $item['body'] ?></div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="ppc-<?= $section['name'] ?>--actions col-md-12 text-center">
                <button class="btn js-open-modal" data-action="openModal" data-modal="ppc">Заказать рекламу</button>
            </div>
        </div>
    </div>
</section>
