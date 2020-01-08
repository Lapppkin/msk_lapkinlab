<?php
$section = array(
    'name' => 'for',
    'title' => 'Для кого подходит Чат-Бот',
    'items' => array(
        0 => array(
            'icon' => 'shopping',
            'title' => 'Интернет-магазин',
        ),
        1 => array(
            'icon' => 'spa',
            'title' => 'Бьюти-индустрия',
        ),
        2 => array(
            'icon' => 'gym',
            'title' => 'Фитнес центры',
        ),
        3 => array(
            'icon' => 'delivery-truck',
            'title' => 'Транспорт и логистика',
        ),
        4 => array(
            'icon' => 'debt',
            'title' => 'Финансы и страхование',
        ),
        5 => array(
            'icon' => 'presentation',
            'title' => 'Аудит и консалтинг',
        ),
    )
);
?>
<section class="chat-bot-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="chat-bot-<?= $section['name'] ?>--title h1 text-center col-12"><?= $section['title'] ?></h2>
            <div class="chat-bot-<?= $section['name'] ?>--wrapper col-12">

                <?php foreach ($section['items'] as $item): ?>
                <div class="chat-bot-<?= $section['name'] ?>--item">
                    <div class="chat-bot-<?= $section['name'] ?>--item--icon"><?= renderSprite($item['icon']) ?></div>
                    <div class="chat-bot-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
