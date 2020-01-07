<?php
$section = array(
    'name' => 'why',
    'title' => 'Почему услуги настройки рекламной кампании стоит заказать у нас?',
    'items' => array(
        0 => array(
            'icon' => 'human-resources',
            'title' => 'Только целевая аудитория',
            'descr' => 'Качественная семантика - показ объявлений только заинтересованным людям, которые уже ищут ваш товар или услугу',
        ),
        1 => array(
            'icon' => 'speedometer',
            'title' => 'Быстрая отдача',
            'descr' => 'Первые продажи не заставят себя ждать',
        ),
        2 => array(
            'icon' => 'bullseye',
            'title' => 'Точный таргетинг',
            'descr' => 'Создаем портрет вашего покупателя, показываем объявления по заданной географии и интересам',
        ),
    ),
);
?>
<section class="ppc-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="ppc-<?= $section['name'] ?>--title h1 text-center col-12"><?= $section['title'] ?></h2>
            <div class="ppc-<?= $section['name'] ?>--wrapper col-12">

                <?php foreach ($section['items'] as $item): ?>
                <div class="ppc-<?= $section['name'] ?>--item">
                    <div class="ppc-<?= $section['name'] ?>--item--icon"><?= renderSprite($item['icon']) ?></div>
                    <div class="ppc-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                    <div class="ppc-<?= $section['name'] ?>--item--description"><?= $item['descr'] ?></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
