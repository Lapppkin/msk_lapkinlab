<?php

use Bitrix\Main\Localization\Loc;
use Bitrix\Main\Page\Asset;
use LapkinLab\Core;
use LapkinLab\Helper;


if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

Loc::loadLanguageFile(__FILE__);
$asset = Asset::getInstance();

/**
 * @global \CMain $APPLICATION
 * @global \CDatabase $DB
 * @global \CUser $USER
 */
?><!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title><?php $APPLICATION->ShowTitle('title') ?></title>
    <?php $APPLICATION->ShowMeta('description') ?>
    <?php $APPLICATION->ShowMeta('robots') ?>

    <!--meta-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--styles-->
<!--        <link href="https://fonts.googleapis.com/css?family=Didact+Gothic&amp;display=swap&amp;subset=cyrillic-ext" rel="stylesheet">-->
<!--        <link href="https://fonts.googleapis.com/css?family=Montserrat:600&amp;display=swap&amp;subset=cyrillic-ext" rel="stylesheet">-->
    <!--favicons-->
    <link rel="apple-touch-icon" sizes="120x120" href="<?= SITE_TEMPLATE_PATH ?>/images/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= SITE_TEMPLATE_PATH ?>/images/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= SITE_TEMPLATE_PATH ?>/images/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= SITE_TEMPLATE_PATH ?>/images/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= SITE_TEMPLATE_PATH ?>/images/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?= SITE_TEMPLATE_PATH ?>/images/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#b91d47">
    <meta name="theme-color" content="#ffffff">
    <!--opengraph-->
    <meta property="og:title" content="<?php $APPLICATION->ShowTitle() ?>">
    <meta property="og:description" content="<?php $APPLICATION->ShowProperty('description') ?>">
    <meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . SITE_TEMPLATE_PATH ?>/images/logo.png">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://<?= $_SERVER['HTTP_HOST'] . $APPLICATION->GetCurUri() ?>">

    <?php $scripts = array(
        '/js/vendor.app.min.js',
        '/js/app.min.js',
        '/js/tilt.jquery.min.js',
    );
    foreach ($scripts as $script) {
        $asset->addJs(SITE_TEMPLATE_PATH . $script);
    } ?>
    <?php $APPLICATION->ShowCSS() ?>
    <?php $APPLICATION->ShowHeadStrings() ?>
    <?php $APPLICATION->ShowHeadScripts() ?>
    <?php $asset->addString('<link rel="canonical" href="https://' . $_SERVER['HTTP_HOST'] . $APPLICATION->GetCurPage(false) . '">'); ?>
    <style>
        @media (max-width: 800px) {
            .marquiz-pops__body {
                order: 3
            }
            .marquiz-pops__close,
            .marquiz-pops__close-wrapper {
                width: 45px !important;
            }

            .marquiz-pops__icon {
                margin-left: 5px !important;
            }
        }
        @media (min-width: 1024px) {
            #scroll-to-top {
                right: 46px;
                bottom: 120px;
            }
        }
        @media (max-width: 500px) {
            .bubbly-button,
            #scroll-to-top,
            .konverbotwidget {
                display: none !important;
            }
        }
    </style>
    <script>
        (function(w,d,u){
            var s=d.createElement('script');s.async=true;s.src=u+'?'+(Date.now()/60000|0);
            var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn-ru.bitrix24.ru/b13928230/crm/tag/call.tracker.js');
    </script>
</head>
<body class="<?= Helper::setBodyClass($APPLICATION) ?>">

    <div id="svg-container" hidden></div>

    <!--schema.org Organization-->
    <div class="hidden" hidden itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="<?= SITE_CONFIG['name'] ?>">
        <meta itemprop="description" content="<?= SITE_CONFIG['description'] ?>">
        <a itemprop="url" href="https://<?= $_SERVER['HTTP_HOST'] ?>"></a>
        <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
            <meta itemprop="postalCode" content="">
            <meta itemprop="addressCountry" content="Russia">
            <meta itemprop="addressLocality" content="RU">
            <meta itemprop="streetAddress" content="<?= SITE_CONFIG['address'] ?>">
        </div>
        <meta itemprop="telephone" content="<?= SITE_CONFIG['phone'] ?>">
        <meta itemprop="email" content="<?= SITE_CONFIG['email_director'] ?>">
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/menu_mobile.php', array(), array('SHOW_BORDER' => true)) ?>

    <div class="wrapper" id="top">

        <!--header-->
        <header id="header" class="header">
            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/header_top.php', array(), array('SHOW_BORDER' => true)) ?>
            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/header_navigation.php', array(), array('SHOW_BORDER' => true)) ?>
        </header><!--/header-->

        <!--main-->
        <main id="main-content">

            <?php if ($APPLICATION->GetCurDir() !== '/'): ?>
                <?php if (!(defined('ERROR_404') && ERROR_404 === 'Y')): ?>
                <?php
                    $APPLICATION->AddChainItem('Главная', '/');
                    $APPLICATION->IncludeComponent("bitrix:breadcrumb",
                        "lapkinlab",
                        array(
                            "START_FROM" => "1",
                            "PATH" => "/seo/",
                            "SITE_ID" => SITE_ID
                        )
                    ); ?>
                <?php endif; ?>
            <?php endif; ?>

