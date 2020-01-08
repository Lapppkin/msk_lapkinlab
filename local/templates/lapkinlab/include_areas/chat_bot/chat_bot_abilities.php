<?php
$section = array(
    'name' => 'abilities',
    'title' => 'Наши преимущества',
    'items' => array(
        0 => array(
            'icon' => 'stopwatch-2',
            'title' => 'Быстрый старт проекта',
            'description' => 'Мы поможем сформулировать требования к проекту в зависимости от ваших целей и предпочтений.',
        ),
        1 => array(
            'icon' => 'web-design',
            'title' => 'Прозрачность разработки',
            'description' => 'Вы в любой момент можете получить информацию о состоянии проекта в необходимом объеме.',
        ),
        2 => array(
            'icon' => 'development',
            'title' => 'Полный цикл разработки',
            'description' => 'Мы обеспечиваем полный жизненный цикл проекта: от создания системных требований до внедрения, поддержки и развития.',
        ),
        3 => array(
            'icon' => 'requirement',
            'title' => 'Защита проекта и NDA',
            'description' => 'Мы подписываем NDA на этапе оценки проекта и передаём заказчику все права на исходный код программного продукта.',
        ),
        4 => array(
            'icon' => 'learning',
            'title' => 'Активное взаимодействие',
            'description' => 'В течение всего проекта мы регулярно проводим совещания, показываем демоверсии и уточняем задачи.',
        ),
        5 => array(
            'icon' => 'launch',
            'title' => 'Высокое качество продукта',
            'description' => 'Индивидуальный подход к разработке, регулярное уточнение требований, строгий контроль сроков и бюджета проекта.',
        ),
    ),
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
                        <div class="chat-bot-<?= $section['name'] ?>--item--description"><?= $item['description'] ?></div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
