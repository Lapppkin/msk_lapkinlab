<?php
$section = array(
    'name' => 'steps',
    'title' => 'Создаем ценность на каждом этапе работы',
    'items' => array(
        0 => array(
            'title' => 'Брифинг',
            'description' => 'Сбор данных о сайте и бизнесе клиента для погружения в Вашу бизнес-концепцию',
        ),
        1 => array(
            'title' => 'Анализ конкурентов',
            'description' => 'Проведем аналитику конкурентов из ТОП-20 поисковой выдачи и выявим конкурентные преимущества и слабые стороны',
        ),
        2 => array(
            'title' => 'Проектирование',
            'description' => 'Думаем об удобстве пользователей, составляем логичную структуру сайта',
        ),
        3 => array(
            'title' => 'Дизайн',
            'description' => 'Создаем уникальное визуальное оформление для решения задач маркетинга',
        ),
        4 => array(
            'title' => 'Верстка и интеграция',
            'description' => 'Создаем быстрые адаптивные сайты, работающие на всех современных браузерах и мобильных устройствах',
        ),
        5 => array(
            'title' => 'Проработка функционала',
            'description' => 'При разработке сайта внедрим все основные функции для его продуктивной работы. Предложим клиентам дополнительные функции',
        ),
    ),
);
?>
<section class="sites-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="sites-<?= $section['name'] ?>--title h1 text-center col-12"><?= $section['title'] ?></h2>

            <?php foreach ($section['items'] as $key => $item): ?>
            <div class="sites-<?= $section['name'] ?>--item col-lg-4 col-md-3">
                <div class="sites-<?= $section['name'] ?>--item--wrapper">
                    <div class="sites-<?= $section['name'] ?>--item--counter"><?= $key + 1 ?></div>
                    <div class="sites-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                    <div class="sites-<?= $section['name'] ?>--item--description"><?= $item['description'] ?></div>
                </div>
            </div>
            <?php endforeach; ?>

        </div>
    </div>
</section>
