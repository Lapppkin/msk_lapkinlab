<?php
$section = array(
    'name' => 'guarantee',
    'title' => 'Гарантии на разработку и интеграцию',
    'description' => '',
    'items' => array(
        0 => array(
            'icon' => 'message',
            'title' => 'Повторные обращения клиентов',
            'description' => 'За последние 5 месяцев наши клиенты получили собственных ботов для бизнес-применений. Каждый второй из них сделал заказ на разработку следующего продукта.',
        ),
        1 => array(
            'icon' => 'test',
            'title' => 'Гарантия качественной работы',
            'description' => 'Мы гарантируем исправную работу чат-ботов. Если возникнут проблемы – мы помогаем их решить.',
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
