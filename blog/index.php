<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Блог маркетингового агентства LapkinLAb: новости и статьи");
$APPLICATION->SetPageProperty("description", "Ознакомиться с актуальными новостями и полезными статьями в сфере интернет-продвижения можно на сайте маркетингового агентства LapkinLAb");
$APPLICATION->SetTitle("Блог маркетингового агентства LapkinLAb: новости и статьи");
?>

<section class="page page-blog">
    <div class="container">
        <div class="row">
            <h1 class="col-12">Новости</h1>

            <div class="col-12">
            <?
            $APPLICATION->IncludeComponent(
                "bitrix:news.list",
                "blog",
                array(
                    "IBLOCK_TYPE"                     => "news",
                    "IBLOCK_ID"                       => 1,
                    "NEWS_COUNT"                      => 12,
                    "COMPONENT_TEMPLATE"              => "flat1",
                    "SORT_BY1"                        => "ACTIVE_FROM",
                    "SORT_ORDER1"                     => "DESC",
                    "SORT_BY2"                        => "SORT",
                    "SORT_ORDER2"                     => "ASC",
                    "FILTER_NAME"                     => "",
                    "FIELD_CODE"                      => array(
                        0 => "",
                        1 => "",
                    ),
                    "PROPERTY_CODE"                   => array(
                        0 => "",
                        1 => "",
                    ),
                    "CHECK_DATES"                     => "Y",
                    "DETAIL_URL"                      => "/blog/#ELEMENT_CODE#/",
                    "AJAX_MODE"                       => "N",
                    "AJAX_OPTION_JUMP"                => "N",
                    "AJAX_OPTION_STYLE"               => "Y",
                    "AJAX_OPTION_HISTORY"             => "N",
                    "AJAX_OPTION_ADDITIONAL"          => "",
                    "CACHE_TYPE"                      => "A",
                    "CACHE_TIME"                      => "36000000",
                    "CACHE_FILTER"                    => "N",
                    "CACHE_GROUPS"                    => "N",
                    "PREVIEW_TRUNCATE_LEN"            => "",
                    "ACTIVE_DATE_FORMAT"              => "d.m.Y",
                    "SET_TITLE"                       => "Y",
                    "SET_BROWSER_TITLE"               => "Y",
                    "SET_META_KEYWORDS"               => "Y",
                    "SET_META_DESCRIPTION"            => "Y",
                    "SET_LAST_MODIFIED"               => "N",
                    "INCLUDE_IBLOCK_INTO_CHAIN"       => "N",
                    "ADD_SECTIONS_CHAIN"              => "Y",
                    "HIDE_LINK_WHEN_NO_DETAIL"        => "N",
                    "PARENT_SECTION"                  => "",
                    "PARENT_SECTION_CODE"             => "",
                    "INCLUDE_SUBSECTIONS"             => "Y",
                    "STRICT_SECTION_CHECK"            => "N",
                    "COMPOSITE_FRAME_MODE"            => "A",
                    "COMPOSITE_FRAME_TYPE"            => "AUTO",
                    "PAGER_TEMPLATE"                  => "grid",
                    "DISPLAY_TOP_PAGER"               => "N",
                    "DISPLAY_BOTTOM_PAGER"            => "Y",
                    "PAGER_TITLE"                     => "Блог",
                    "PAGER_SHOW_ALWAYS"               => "N",
                    "PAGER_DESC_NUMBERING"            => "N",
                    "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                    "PAGER_SHOW_ALL"                  => "N",
                    "PAGER_BASE_LINK_ENABLE"          => "N",
                    "SET_STATUS_404"                  => "Y",
                    "SHOW_404"                        => "N",
                    "MESSAGE_404"                     => "",
                    "TEMPLATE_THEME"                  => "",
                    "DISPLAY_DATE"                    => "Y",
                    "DISPLAY_NAME"                    => "Y",
                    "DISPLAY_PICTURE"                 => "Y",
                    "DISPLAY_PREVIEW_TEXT"            => "Y",
                    "MEDIA_PROPERTY"                  => "",
                    "SLIDER_PROPERTY"                 => "",
                    "SEARCH_PAGE"                     => "/search/",
                    "USE_RATING"                      => "N",
                    "USE_SHARE"                       => "N",
                ),
                false
            );
            ?>
            </div>

        </div>
    </div>
</section>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
