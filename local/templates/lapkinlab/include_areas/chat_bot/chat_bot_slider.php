<?php

$slides = array(
    1 => array(
        'title' => 'Разработка и внедрение чат-ботов для бизнеса',
        'list' => array(
            'Использование платформы Telegram для работы чат-бота',
            'Быстрая интеграция с существующими сервисами через API',
            'Разработка таргетированного бота под индивидуальные задачи задачи каждого бизнеса',
            'Интеграция со справочными системами и корпоративными базами знаний',
        ),
    ),
);

?>
<!--slider-->
<div class="chat-bot-slider">
    <div class="chat-bot-slider-image" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/slides/pages/chat-bot.jpg)"></div>
    <div class="container">
        <div class="chat-bot-slider--wrapper row">

            <div class="chat-bot-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                <?php foreach ($slides as $key => $slide): ?>
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1><?= $slide['title'] ?></h1>
                        </div>
                        <div class="slide-list">
                            <ul>
                                <?php foreach ($slide['list'] as $item): ?>
                                    <li>
                                        <?= renderSprite('check-mark') ?>
                                        <?= $item ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_slider_form.php', array(), array('SHOW_BORDER' => true)) ?>

        </div>
    </div>
</div>
