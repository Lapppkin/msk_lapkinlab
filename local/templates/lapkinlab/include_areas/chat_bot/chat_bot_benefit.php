<?php
$section = array(
    'name' => 'benefit',
    'title' => 'Чат-боты действительно полезны',
    'description' => '',
    'items' => array(
        0 => array(
            'icon' => 'piggy-bank',
            'title' => 'Экономия средств',
            'description' => 'Создание чат-бота дешевле, чем разработка мобильного приложения — вы не тратите деньги на дизайн интерфейса.',
        ),
        1 => array(
            'icon' => 'smartphone',
            'title' => 'Простота использования',
            'description' => 'Нет требований к технике — нужен просто смартфон с мессенджером.',
        ),
        2 => array(
            'icon' => 'chat2',
            'title' => 'Легкое масштабирование',
            'description' => 'После запуска бота в одном мессенджере перенос его в другой не потребует большого количества времени.',
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
                        <div class="chat-bot-<?= $section['name'] ?>--item--body">
                            <div class="chat-bot-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                            <div class="chat-bot-<?= $section['name'] ?>--item--description"><?= $item['description'] ?></div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
            <!--<div class="chat-bot-<?= $section['name'] ?>--description text-center col-12"><?= $section['description'] ?></div>-->
        </div>
    </div>
</section>
