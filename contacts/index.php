<?php

use LapkinLab\Helper;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Контакты маркетингового агентства LapkinLAb в Москве");
$APPLICATION->SetPageProperty("description", "Маркетинговое агентство LapkinLAb располагается по адресу: г. Москва, 2-й Котляковский пер., д. 18 &#9742; 8(800) 301-00-19 &#9993; mail@lapkinlab.ru");
$APPLICATION->SetTitle("Контакты маркетингового агентства LapkinLAb в Москве");
?>

<section class="page page-contacts">
    <div class="container">
	    <div class="row">

		    <div class="col-md-7 col-sm-12">
                <?php $APPLICATION->IncludeFile('/include/yandex_map.php') ?>
		    </div>

		    <div class="col-md-5 col-sm-12">
                <h1>Контакты LapkinLab</h1>
                <p><?= SITE_CONFIG['address'] ?><br><?= SITE_CONFIG['metro'] ?></p>
                <p>Телефон: <?= Helper::parsePhone(SITE_CONFIG['phone'], 'link', 'roistat_phone') ?></p>
                <p>
                    Письмо директору: <?= Helper::renderEmail(SITE_CONFIG['email_director']) ?><br>
                    Письмо аккаунт-менеджеру: <?= Helper::renderEmail(SITE_CONFIG['email_manager']) ?><br>
                    Письмо по вакансиям: <?= Helper::renderEmail(SITE_CONFIG['email_hr']) ?><br>
                    Прочие письма: <?= Helper::renderEmail(SITE_CONFIG['email_other']) ?></a>
                </p>
                <p>Мы в социальных сетях:</p>
                <p>
                    <a href="<?= SITE_CONFIG['social_telegram_bot'] ?>" rel="nofollow" target="_blank" title="Telegram Bot"><?= renderSprite('icon-circle-telegram') ?></a>&nbsp;
                    <a href="<?= SITE_CONFIG['social_instagram'] ?>" rel="nofollow" target="_blank" title="Instagram"><?= renderSprite('icon-circle-instagram') ?></a>&nbsp;
                    <a href="<?= SITE_CONFIG['social_vk'] ?>" rel="nofollow" target="_blank" title="Вконтакте"><?= renderSprite('icon-circle-vk') ?></a>&nbsp;
                    <a href="<?= SITE_CONFIG['social_facebook'] ?>" rel="nofollow" target="_blank" title="Facebook"><?= renderSprite('icon-circle-facebook') ?></a>
                </p>
			</div>

		</div>
	</div>
 </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
