<?php
$section = array(
    'name' => 'prices',
    'title' => 'Протестируйте Чат-бота прямо сейчас',
    'items' => array(
        0 => array(
            'title' => 'Заказ такси',
            'price' => '10 000',
            'list' => array(
                'Заказ в три клика',
                'Сбор контактов',
                'Близость к пользователю',
                'Использование геолокации',
            )
        ),
        1 => array(
            'title' => 'Бронь столов',
            'price' => '12 000',
            'list' => array(
                'Удобство использования',
                'Лояльность клиентов',
                'Интеграция сервисов',
                'Сбор контактов',
            )
        ),
        2 => array(
            'title' => 'Заказ товаров',
            'price' => '8 000',
            'list' => array(
                'Просмотр ассортимента',
                'Оплата заказа',
                'Выбор доставки',
                'История заказов',
            )
        ),
        3 => array(
            'title' => 'Обратная связь',
            'price' => '12 000',
            'list' => array(
                'Сбор отзывов',
                'Оценка качества',
                'Информация о бонусах',
                'Сбор лидов',
            )
        ),
        4 => array(
            'title' => 'Курьерская служба',
            'price' => '10 000',
            'list' => array(
                'Подключение курьеров',
                'Интеграция с сервисами',
                'Информация о заказах',
                'Управление заказами',
            )
        ),
        5 => array(
            'title' => 'Сообщество VK',
            'price' => '8 000',
            'list' => array(
                'Справочная система',
                'Сбор отзывов',
                'Интеграция с сервисами',
                'Лояльность клиентов',
            )
        ),
    ),
);
?>
<section class="chat-bot-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="chat-bot-<?= $section['name'] ?>--title text-center h1 col-12"><?= $section['title'] ?></h2>
            <div class="chat-bot-<?= $section['name'] ?>--items col-lg-10 offset-lg-1 col-md-12 offset-md-0">
                <div class="row">

                    <?php foreach ($section['items'] as $key => $item): ?>
                    <div class="chat-bot-<?= $section['name'] ?>--item col-lg-4 col-md-6">
                        <div class="chat-bot-<?= $section['name'] ?>--item--wrapper">
                            <div class="chat-bot-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                            <div class="chat-bot-<?= $section['name'] ?>--item--price">от <?= $item['price'] ?> &#8381;</div>
                            <div class="chat-bot-<?= $section['name'] ?>--item--body">
                                <ul>
                                <?php foreach ($item['list'] as $list): ?>
                                    <li><?= renderSprite('check-mark') ?> <?= $list ?></li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>

                </div>
            </div>
            <div class="chat-bot-<?= $section['name'] ?>--actions col-md-12 text-center">
                <button class="btn js-open-modal" data-action="openModal" data-modal="callback">Заказать чат-бота</button>
            </div>
        </div>
    </div>
</section>
