<?php

/**
 * @var \CMain $APPLICATION
 */

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Page\Asset;

$pages = array(
    '/',
    '/kalkulyator-stoimosti-sajtov/',
    '/calc/',
    '/contacts/',
    '/kontekstnaya-reklama/',
    '/reviews/',
    '/seo/',
    '/amocrm/',
    '/amocrm/checklist/',
    '/amocrm/brif/',
    '/amocrm/o-produkte/',
    '/rekr/',
    '/chat-bot/',
    '/seo-page/',
    '/seo-page/',
    '/privacy-policy/',
);
$isPromoPage = !in_array($APPLICATION->GetCurPage(false), $pages, true);

$asset = Asset::getInstance();

$asset->addCss('/local/templates/new_design/css/modal.css');

// Vary brief document on uri.
$uri              = \rtrim(\parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
$briefTypeLinkMap = [
    'seo'     => 'https://docs.google.com/forms/d/e/1FAIpQLSf-7bjpKRs7o52pYjR4kdHpt50zTMYsfkUFwDpieJT-0OCj7g/viewform',
    'dev'     => 'https://docs.google.com/forms/d/e/1FAIpQLSfJdbhwnd0miOtpYpRLAql5bCsU4b5_VSk8R8lKEkRpvLMkdQ/viewform',
    'context' => 'https://docs.google.com/forms/d/e/1FAIpQLSdC5EtZkU86l1V2pIsEAXUigf6ZH_98BTB823rmgW7d0M_lmQ/viewform',
    'smm'     => 'https://docs.google.com/forms/d/e/1FAIpQLScUUOxtYtc1F1xWTCjo4HpIY4TlQ8CEnfHkhET_K0teL5xCig/viewform',
    'amo'     => 'https://docs.google.com/forms/d/e/1FAIpQLSfTqL6tOA92Y3SRrYWDoJ7wWNHEr-DFMXv6YWUgaY6DhBRmkw/viewform',
];
$briefPageTypeMap = [
    '/'         => 'seo',
    '/seo-page' => 'seo',

    '/kalkulyator-stoimosti-sajtov' => 'dev',
    '/chat-bot'                     => 'dev',

    '/kontekstnaya-reklama' => 'context',

    '/amocrm'            => 'amo',
    '/amocrm/o-produkte' => 'amo',
    '/amocrm/brif'       => 'amo',
    '/amocrm/checklist'  => 'amo',
];
$brief            = $briefTypeLinkMap['seo'];

foreach ($briefPageTypeMap as $path => $type) {

    if ($uri === \rtrim($path, '/')) {
        $brief = $briefTypeLinkMap[$type];

        break;
    }
}
// /Vary brief document on uri.

IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico">
    <link rel="canonical" href="https://msk.lapkinlab.ru<?= $APPLICATION->GetCurPage(false) ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link media="all" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">

    <?
    CUtil::InitJSCore();
    CJSCore::init(['core', 'fx', 'ajax', 'jquery']);

    $asset->addCss('/local/templates/new_design/css/styles.css');
    $asset->addCss('/local/templates/new_design/css/fontello.css');
    $asset->addCss('/local/templates/new_design/fonts/fonts.css');
    $asset->addCss('/local/templates/new_design/css/modal.css');
    $asset->addCss('/local/templates/new_design/modul/ionRangeSlider/css/css.css');
    $asset->addCss('/local/templates/new_design/modul/ionRangeSlider/css/ion.rangeSlider.css');

    $asset->addCss(SITE_TEMPLATE_PATH . '/libs/chart/chartist.min.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/libs/font-awesome/css/font-awesome.min.css');

    $asset->addCss(SITE_TEMPLATE_PATH . '/css/style.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/css/media.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/libs/owl-carousel/owl.carousel.css');
    $asset->addCss(SITE_TEMPLATE_PATH . '/libs/owl-carousel/owl.theme.default.css');

    if ($APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/') {
        $asset->addCss('/local/templates/LapkinLab_krd/css/styles_dev.css'); }

    if ($APPLICATION->GetCurPage(false) === '/seo/') {
        $asset->addCss('/local/templates/LapkinLab_krd/css/styles_seo.css'); }

    if ($APPLICATION->GetCurPage(false) === '/contacts/'
        || $APPLICATION->GetCurPage(false) === '/privacy-policy/'
    ) {
        $asset->addCss('/local/templates/LapkinLab_krd/css/styles_contacts.css'); }

    if ($APPLICATION->GetCurPage(false) === '/smm/') {
        $asset->addCss('/local/templates/LapkinLab_krd/css/main.css'); }

    if ($APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/'
        || $APPLICATION->GetCurPage(false) === '/seo-page/'
    ) {
        $asset->addCss('/local/templates/LapkinLab_krd/css/styles_ppc.css'); }
    ?>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Didact+Gothic:400&amp;subset=latin,cyrillic,cyrillic-ext" type="text/css" media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" type="text/css" media="all">
    <script async defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>

    <?/*<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>*/?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <? $APPLICATION->ShowHead(); ?>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var ktabsControls = document.querySelectorAll('.ktabs-controls div');
            if (ktabsControls.length > 0) {
                function removeActiveControl() {
                    for (var i = 0; i < ktabsControls.length; i++) {
                        ktabsControls[i].classList.remove('active');
                    }
                }
                function removeActiveContent() {
                    var ktabsContents = document.querySelectorAll('.ktabs-content');
                    for (var i = 0; i < ktabsContents.length; i++) {
                        ktabsContents[i].classList.remove('active');
                    }
                }
                for (var i = 0; i < ktabsControls.length; i++) {
                    ktabsControls[i].addEventListener('mouseenter', function() {
                        removeActiveControl();
                        removeActiveContent();
                        document.querySelector('.content-' + this.dataset.control).classList.add('active');
                        this.classList.add('active');
                    });
                }
            }
        });
    </script>

</head>

<body>
<? $APPLICATION->ShowPanel() ?>

<!--schema.org-->
<div hidden>
    <div itemscope="" itemtype="http://schema.org/Organization">
        <span itemprop="name">LapkinLAb</span>
        Контакты:
        <div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
            Адрес:
            <span itemprop="streetAddress">Ленинская Слобода, д. 26</span>
            <span itemprop="postalCode">115280</span>
            <span itemprop="addressLocality">Москва</span>,
        </div>
        Телефон: <span itemprop="telephone">8 (800) 301-00-19</span>, Электронная почта: <span itemprop="email">mail@lapkinlab.ru</span>
    </div>
</div>

<? if ($isPromoPage) { ?>
    <link rel="stylesheet" type="text/css" media="screen" href="/modul/ionRangeSlider/css/css.css">
    <header>
        <div class="top_panel">
            <div class="container_v2">
                <div class="top_panel__message">
                    <div class="info_block">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>г. Москва, Ленинская Слобода,
                        д. 26
                    </div>
                    <div class="info_block">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a class="roistat-phone" href="tel:88003010019">8(800)
                            301-00-19</a>
                    </div>
                    <div class="info_block telegram">
                        <a href="http://t-do.ru/lapkinlab_test_bot" onclick="yaCounter45994323.reachGoal('telegram'); return true;"
                           target="_blank">
                            <img src="/local/templates/LapkinLab_krd/images/icon-blog.png" class="telegram-icon" alt="Telegram агентства Lapkinlab.ru">
                            Бот Агенства Lapkinlab.ru
                        </a>
                    </div>
                    <div class="info_block telegram">
                        <a href="https://tele.click/joinchat/CaTbaELDzLgjfIDfDjAs-g" target="_blank">
                            <img src="/local/templates/LapkinLab_krd/images/icon-blog.png" class="telegram-icon" alt="Приватный чат предпринимателей">
                            Приватный чат предпринимателей
                        </a>
                    </div>
                    <div class="info_block telegram">
                        <a href="http://t-do.ru/SEO_lapkinlab/" target="_blank">
                            <img src="/local/templates/LapkinLab_krd/images/icon-blog.png" class="telegram-icon" alt="Lapkinlab - БЛОГ">
                            Lapkinlab - БЛОГ
                        </a>
                    </div>
                    <div class="info_block telegram filial">
                        <a href="https://lapkinlab.ru/?utm_source=site&amp;utm_medium=ssilka&amp;utm_campaign=msk.lapkinlab"
                           target="_blank">
                            <img src="/local/templates/LapkinLab_krd/images/icon-blog.png" class="telegram-icon" alt="Lapkinlab - Краснодарский филиал">
                            Краснодарский филиал
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<? } else { ?>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 textlogo">
                            <i><img src="/local/templates/new_design/assests/pin.png"></i>
                            <c id="blo11">Ваш город: Москва</c>
                            <div class="newb cgjfjgkf1"><a href="/">Москва</a><br><a href="https://lapkinlab.ru/">Краснодар</a></div>
                        </div>
                        <div class="col-sm-12 col-md-6 textphone">
                            <i><img src="/local/templates/new_design/assests/call.png"></i> <a class="roistat-phone" href="tel:88003010019">8 (800) 301-00-19</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 no_m no_p">
                            <a href="#win1" onclick="ym(45994323, 'reachGoal', 'zvonok'); return true;" class="but but-one">Заказать звонок</a>
                        </div>
                        <div class="col-sm-12 col-md-4 no_m no_p">
                            <a href="#win1" onclick="ym(45994323, 'reachGoal', 'audit'); return true;" class="but but-two">Заказать аудит</a>
                        </div>
                        <div class="col-sm-12 col-md-4 no_m no_p">
                            <a href="<?= $brief; ?>" class="but but-three" target="_blank">Заполнить бриф</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
<? } ?>

<section class="menu_logo">
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo">
                <a href="/"><img src="/local/templates/new_design/assests/logo-new2.png"></a>
                <span>Профессиональное поисковое продвижение, создание сайтов и реклама</span>
            </div>
            <div class="col-md-9">
                <div class="menuToggle">&#9776;</div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu-top",
                    [
                        "ROOT_MENU_TYPE"        => "top",
                        "MAX_LEVEL"             => "2",
                        "CHILD_MENU_TYPE"       => "left",
                        "USE_EXT"               => "Y",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_TIME"       => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS"   => [],
                        "COMPONENT_TEMPLATE"    => "catalog_horizontal1",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "N",
                        "COMPOSITE_FRAME_MODE"  => "A",
                        "COMPOSITE_FRAME_TYPE"  => "AUTO",
                        "MENU_THEME"            => "site",
                    ],
                    false,
                    [
                        "ACTIVE_COMPONENT" => "Y",
                    ]
                ); ?>

            </div>
        </div>
    </div>
</section>
