<?php
$section = array(
    'name' => 'reasons',
    'title' => '3 причины обратиться к нам',
    'items' => array(
        0 => array(
            'icon' => 'customer-service',
            'title' => 'Гарантированная поддержка после сдачи проекта',
        ),
        1 => array(
            'icon' => 'portfolio',
            'title' => 'Опыт работы с крупными заказчиками',
        ),
        2 => array(
            'icon' => 'file',
            'title' => 'Полный пакет всех документов',
        ),
    )
);
?>
<section class="sites-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="sites-<?= $section['name'] ?>--title h1 text-center col-12"><?= $section['title'] ?></h2>
            <div class="sites-<?= $section['name'] ?>--wrapper col-12">

                <?php foreach ($section['items'] as $item): ?>
                <div class="sites-<?= $section['name'] ?>--item">
                    <div class="sites-<?= $section['name'] ?>--item--icon"><?= renderSprite($item['icon']) ?></div>
                    <div class="sites-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
