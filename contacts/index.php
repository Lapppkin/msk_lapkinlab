<?php

use LapkinLab\Helper;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords", "контакты labkinlab, контактная информация");
$APPLICATION->SetPageProperty("title", "Контакты маркетингового агентства LapkinLAb в Москве");
$APPLICATION->SetPageProperty("description", "Маркетинговое агентство LapkinLAb располагается по адресу: г. Москва, 2-й Котляковский пер., д. 18 &#9742; 8(800) 301-00-19 &#9993; mail@lapkinlab.ru");
$APPLICATION->SetTitle("Контакты маркетингового агентства LapkinLAb в Москве");

$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
?>

<section class="page-contacts">
    <div class="container">
	    <div class="row">

		    <div class="col-md-7 col-sm-12">
                <script async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ac6d4f483f8fbaf970c92434e432b8e8ec5c4538ec998e13dc167818cf13dbafd&amp;amp;width=100%25&amp;amp;height=450&amp;amp;lang=ru_RU&amp;amp;scroll=true"></script>
		    </div>

		    <div class="col-md-5 col-sm-12">
                <h1>Контакты LapkinLab </h1>
                <p><?= SITE_CONFIG['address'] ?><br><?= SITE_CONFIG['metro'] ?></p>
                <p>
                    Телефон: <a href="tel:<?= Helper::parsePhone(SITE_CONFIG['phone'], 'full') ?>"><?= Helper::parsePhone(SITE_CONFIG['phone'], 'formatted') ?></a></p>
                <p>
                    Письмо директору: <a href="mailto:ya@lapkinlab.ru">ya@lapkinlab.ru</a><br>
                    Письмо Аккаунт-Менеджеру: <a href="mailto:dsenatorova@lapkinlab.ru">dsenatorova@lapkinlab.ru</a><br>
                    Письмо по вакансиям: <a href="mailto:hr@lapkinlab.ru">hr@lapkinlab.ru</a><br>
                    Прочие письма: <a href="mailto:mail@lapkinlab.ru">mail@lapkinlab.ru</a>
                </p>
                <p>Мы в социальных сетях:</p>
                <p>
                    <a href="<?= SITE_CONFIG['social_telegram'] ?>" rel="nofollow" target="_blank" title="Telegram"><?= renderSprite('icon-circle-telegram') ?></a>
                    <a href="<?= SITE_CONFIG['social_telegram_bot'] ?>" rel="nofollow" target="_blank" title="Telegram Bot"><?= renderSprite('icon-circle-telegram') ?></a>
                    <a href="<?= SITE_CONFIG['social_instagram'] ?>" rel="nofollow" target="_blank" title="Instagram"><?= renderSprite('icon-circle-instagram') ?></a>
                    <a href="<?= SITE_CONFIG['social_vk'] ?>" rel="nofollow" target="_blank" title="Вконтакте"><?= renderSprite('icon-circle-vk') ?></a>
                    <a href="<?= SITE_CONFIG['social_facebook'] ?>" rel="nofollow" target="_blank" title="Facebook"><?= renderSprite('icon-circle-facebook') ?></a>
                </p>
			</div>

		</div>
	</div>
 </section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
