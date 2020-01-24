<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Разработка чат-ботов в Москве: цена разработки");
$APPLICATION->SetPageProperty("description", "Доступная стоимость разработки чат-ботов для бизнеса в Москве в LabkinLab. Звоните!");
$APPLICATION->SetTitle("Разработка и внедрение чат-ботов - LapkinLAb");
?>
<div class="page page-chat-bot">

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_slider.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_platforms.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_for.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_steps.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_sample.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_prices.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_guarantee.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_abilities.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_slider2.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_faq.php', array(), array('SHOW_BORDER' => true)) ?>
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/chat_bot/chat_bot_benefit.php', array(), array('SHOW_BORDER' => true)) ?>

</div>

<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
