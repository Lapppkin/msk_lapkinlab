<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

/**
 * Bug Fix
 * Отдавать 404 страницу для страниц 3 уровня url
 * https://msk.lapkinlab.ru/blog/[element-url]/[bug-url]/
 */
if (count(array_filter(explode('/', $APPLICATION->GetCurPage()))) > 2)
    show404Page();
?>
<? if ($APPLICATION->GetCurPage() == '/blog/iz-chego-skladyvaetsya-stoimost-seo-prodvizheniya/') : ?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
          rel="stylesheet">
    <link rel="stylesheet" href="/local/templates/lapkinlab/news-style/style.css">
    <style>
        .news_layout_list figure {
            height: unset !important;
        }

        .news_layout_list figure img {
            max-height: 300px;
        }

        div.news-detail img.detail_picture {
            float: left;
            margin: 0 8px 6px 1px;
        }

        .news-date-time {
            padding-top: 2px;
            color: #486DAA;
        }

        .news-detail .blog-detail--body img {
            width: auto !important;
        }

        .news-detail .blog-detail--body p {
            margin: 0 0 18px;
        }

        .news-detail .blog-detail--body ul {
            padding: 0;
            margin: 0;
            list-style: none;
            margin-bottom: 20px !important;
        }

        .news-detail .blog-detail--body * {
            line-height: 1.8;
        }

        .news-detail .blog-detail--body ul li {
            padding-bottom: 18px;
        }

        .news-detail .blog-detail--body ul li:last-child {
            padding-bottom: 0;
        }


        .news-detail .blog-detail--body ul li::before {
            content: "\e86c";
            background-color: transparent;
            font-family: 'Material Icons';
            font-size: 26px;
            line-height: 1px;
            color: #fa3a5e;
            display: inline;
            vertical-align: middle;
            margin-right: 10px;
        }

        .news-detail .blog-detail--body h3 {
            font-style: normal;
            font-size: 26px;
            line-height: 1.179;
            letter-spacing: 0;
            text-align: inherit;
            color: #3a3a50;
            margin-top: 60px;
            margin-bottom: 20px;
        }

        .news-detail .blog-detail--body h2 {
            margin-top: 60px;
            margin-bottom: 25px;
            font-weight: 300;
            font-size: 42px;
            line-height: 1.25;
            letter-spacing: 0;
            text-align: inherit;
            color: #3a3a50;
        }

        .news-detail .list-analys {
            height: auto;
            margin-bottom: 30px !important;
        }

        div.form {
            padding: 10px 20px;
        }

        @media (max-width: 1280px) {
            .graphic-text {
                width: 100% !important;
                margin: 0 !important;
                padding: 0 20px !important;
                display: flex;
                flex-direction: column;
            }

            .graphic-text .form-title {
                margin-bottom: 25px;
            }

            .graphic-content {
                width: 100% !important;
                margin: 0 !important;
                padding: 20px !important;
                display: flex;
                flex-direction: column;
            }

            .graphic-info {
                width: 100% !important;
            }
        }

        @media (max-width: 992px) {
            .news-detail .blog-detail--body * {
                line-height: 1.5;
            }

            .news-detail .blog-detail--body h3 {
                font-size: 20px !important;
                line-height: 1.179;
            }

            .news-detail .blog-detail--body h2 {
                font-size: 28px !important;
                line-height: 1.25;
            }

            .news-detail .blog-detail--body p {
                margin: 0 0 18px;
            }

            .services.black div {
                display: flex;
                flex-direction: column;
                margin-bottom: 15px;
            }

            .services.black  b {
                margin-top: 5px;
            }

            div.form>div input {
                width: 100% !important;
            }

            div.form>div input {
                margin: 5px 0 !important;
            }

            .quote-text-sec.black {
                font-size: 18px;
            }
        }

        @media (max-width: 480px) {
            .blog-detail--body h2 img,
            .blog-detail--body h3 img {
                margin: 0 0 10px !important;
            }

            .blog-detail--body h2,
            .blog-detail--body h3 {
                display: flex;
                flex-direction: column;
                align-items: flex-start;

            }
        }
    </style>
<? endif; ?>

<?php
$APPLICATION->IncludeComponent(
    "bitrix:news.detail",
    "blog",
    array(
        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "Y",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "USE_SHARE" => "Y",
        "SHARE_HIDE" => "N",
        "SHARE_TEMPLATE" => "",
        "SHARE_HANDLERS" => array(
            0 => "delicious",
        ),
        "SHARE_SHORTEN_URL_LOGIN" => "",
        "SHARE_SHORTEN_URL_KEY" => "",
        "AJAX_MODE" => "N",
        "IBLOCK_TYPE" => "news",
        "IBLOCK_ID" => "1",
        "ELEMENT_ID" => "",
        "ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
        "CHECK_DATES" => "Y",
        "FIELD_CODE" => array(
            0 => "ID",
            1 => "",
        ),
        "PROPERTY_CODE" => array(
            0 => "",
            1 => "DESCRIPTION",
            2 => "",
        ),
        "IBLOCK_URL" => "/blog/",
        "DETAIL_URL" => "",
        "SET_TITLE" => "Y",
        "SET_CANONICAL_URL" => "Y",
        "SET_BROWSER_TITLE" => "Y",
        "BROWSER_TITLE" => "-",
        "SET_META_KEYWORDS" => "Y",
        "META_KEYWORDS" => "-",
        "SET_META_DESCRIPTION" => "Y",
        "META_DESCRIPTION" => "-",
        "SET_STATUS_404" => "Y",
        "SET_LAST_MODIFIED" => "Y",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "ADD_SECTIONS_CHAIN" => "Y",
        "ADD_ELEMENT_CHAIN" => "N",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "USE_PERMISSIONS" => "N",
        "GROUP_PERMISSIONS" => array(
            0 => "1",
        ),
        "CACHE_TYPE" => "A",
        "CACHE_TIME" => "3600",
        "CACHE_GROUPS" => "N",
        "DISPLAY_TOP_PAGER" => "Y",
        "DISPLAY_BOTTOM_PAGER" => "Y",
        "PAGER_TITLE" => "Страница",
        "PAGER_TEMPLATE" => "",
        "PAGER_SHOW_ALL" => "Y",
        "PAGER_BASE_LINK_ENABLE" => "Y",
        "SHOW_404" => "Y",
        "MESSAGE_404" => "",
        "STRICT_SECTION_CHECK" => "N",
        "PAGER_BASE_LINK" => "",
        "PAGER_PARAMS_NAME" => "arrPager",
        "AJAX_OPTION_JUMP" => "N",
        "AJAX_OPTION_STYLE" => "Y",
        "AJAX_OPTION_HISTORY" => "N",
        "COMPONENT_TEMPLATE" => "blog",
        "TEMPLATE_THEME" => "blue",
        "AJAX_OPTION_ADDITIONAL" => "",
        "MEDIA_PROPERTY" => "",
        "SLIDER_PROPERTY" => "",
        "COMPOSITE_FRAME_MODE" => "A",
        "COMPOSITE_FRAME_TYPE" => "AUTO",
        "FILE_404" => ""
    ),
    false
); ?>

<div class="actions">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/our_actions.php', array(), array('SHOW_BORDER' => true)) ?>
            </div>
        </div>
    </div>
</div>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
