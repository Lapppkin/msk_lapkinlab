<?php

$slides = array(
    1 => array(
        'title' => 'Почему именно сейчас нужно внедрить чат-ботов в ваш бизнес?',
        'list' => array(
            'Пока ваши конкуренты не знают о чат-ботах — вы можете круто обойти их',
            'Именно сегодня можно получить самые значительные плоды от его внедрения, увеличив свою долю рынка',
            'Если вы не поставите на вооружение чат-ботов в ближайшие пару лет, ваше продвижение в интернете обречено',
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
                            <h2><?= $slide['title'] ?></h2>
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
