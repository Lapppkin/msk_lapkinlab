<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
IncludeTemplateLangFile(__FILE__); ?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://msk.lapkinlab.ru/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" type="image/x-icon" href="https://msk.lapkinlab.ru/favicon.ico"/>
    <script defer src="https://use.fontawesome.com/releases/v5.8.2/js/all.js" integrity="sha384-DJ25uNYET2XCl5ZF++U8eNxPWqcKohUUBUpKGlNLMchM7q4Wjg2CUpjHLaL8yYPH" crossorigin="anonymous"></script>
    <? $APPLICATION->ShowHead(); ?>

    <meta name="author" content="akapinos">

    <link rel="stylesheet"
          href="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
          integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
          crossorigin="anonymous">
    <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/new_design/css/styles.css">
    <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/new_design/css/fontello.css">
    <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/new_design/fonts/fonts.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//msk.lapkinlab.ru/bitrix/templates/new_design/css/modal.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="//msk.lapkinlab.ru/bitrix/templates/new_design/modul/ionRangeSlider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//msk.lapkinlab.ru/bitrix/templates/new_design/modul/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//msk.lapkinlab.ru/bitrix/templates/new_design/modul/ionRangeSlider/css/css.css">
    <script src="//code.jquery.com/jquery-1.9.1.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.6/jquery.fancybox.min.css">
    <? if ($APPLICATION->GetCurPage(false) === '/kalkulyator-stoimosti-sajtov/') { ?>
        <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/LapkinLab_krd/css/styles_dev.css">
    <? } ?>

    <? if ($APPLICATION->GetCurPage(false) === '/seo/') { ?>
        <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/LapkinLab_krd/css/styles_seo.css">
    <? } ?>

    <? if ($APPLICATION->GetCurPage(false) === '/contacts/') { ?>
        <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/LapkinLab_krd/css/styles_contacts.css">
    <? } ?>

    <? if ($APPLICATION->GetCurPage(false) === '/kontekstnaya-reklama/' or
           $APPLICATION->GetCurPage(false) === '/seo-page/') { ?>
        <link rel="stylesheet" href="//msk.lapkinlab.ru/bitrix/templates/LapkinLab_krd/css/styles_ppc.css">
    <? } ?>
    <link rel="stylesheet"
          id="simple-job-board-google-fonts-css"
          href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i&amp;ver=2.6.0"
          type="text/css"
          media="all">
    <link rel="stylesheet"
          id="googlefonts-css"
          href="https://fonts.googleapis.com/css?family=Didact+Gothic:400&amp;subset=latin,cyrillic,cyrillic-ext"
          type="text/css"
          media="all">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel='stylesheet' id='chartist-css' href='<?= SITE_TEMPLATE_PATH ?>/libs/chart/chartist.min.css' type='text/css' media='all'/>
    <link rel="stylesheet" type="text/css" media="screen" href="/modul/ionRangeSlider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" media="screen" href="/modul/ionRangeSlider/css/ion.rangeSlider.skinFlat.css">

    <link rel="stylesheet" href="<?= SITE_TEMPLATE_PATH ?>/libs/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?= SITE_TEMPLATE_PATH ?>/css/style.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= SITE_TEMPLATE_PATH ?>/css/media.css"/>
    <link rel="canonical" href="https://msk.lapkinlab.ru<?= $APPLICATION->GetCurPage(false) ?>"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= SITE_TEMPLATE_PATH ?>/libs/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= SITE_TEMPLATE_PATH ?>/libs/owl-carousel/owl.theme.default.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= SITE_TEMPLATE_PATH ?>/libs/owl-carousel/owl.carousel.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="<?= SITE_TEMPLATE_PATH ?>/libs/owl-carousel/owl.theme.default.css"/>

    <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-beta.2/lazyload.js"></script>
    <script src="<?= SITE_TEMPLATE_PATH ?>/libs/jquery/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">window.addEventListener('DOMContentLoaded', function() {
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
        });</script>
</head>
<? $APPLICATION->ShowPanel() ?>
<body>
<? if ($APPLICATION->GetCurPage(false) != '/' and
       $APPLICATION->GetCurPage(false) != '/calc/' and
       $APPLICATION->GetCurPage(false) != '/kalkulyator-stoimosti-sajtov/' and
       $APPLICATION->GetCurPage(false) != '/contacts/' and
       $APPLICATION->GetCurPage(false) != '/kontekstnaya-reklama/' and
       $APPLICATION->GetCurPage(false) != '/reviews/' and
       $APPLICATION->GetCurPage(false) != '/seo/' and
       $APPLICATION->GetCurPage(false) != '/amocrm/' and
       $APPLICATION->GetCurPage(false) != '/amocrm/checklist/' and
       $APPLICATION->GetCurPage(false) != '/amocrm/brif/' and
       $APPLICATION->GetCurPage(false) != '/amocrm/o-produkte/' and
       $APPLICATION->GetCurPage(false) != '/rekr/' and
       $APPLICATION->GetCurPage(false) != '/chat-bot/' and
       $APPLICATION->GetCurPage(false) != '/seo-page/') { ?>
    <link rel="stylesheet" type="text/css" media="screen" href="/modul/ionRangeSlider/css/css.css">
    <header>
        <div class="top_panel">
            <div class="container_v2">
                <div class="top_panel__message">
                    <div class="info_block">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>�. ������, ��������� �������,
                        �. 26
                    </div>
                    <div class="info_block">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <a class="roistat-phone" href="tel:88003010019">8(800)
                            301-00-19</a>
                    </div>
                    <div class="info_block telegram">
                        <a href="http://t-do.ru/lapkinlab_test_bot" onclick="yaCounter45994323.reachGoal('telegram'); return true;"
                           target="_blank">
                            <img data-src="/image/icon-blog.png" class="lazyload telegram-icon" alt="Telegram ��������� Lapkinlab.ru">
                            ��� �������� Lapkinlab.ru
                        </a>
                    </div>
                    <div class="info_block telegram">
                        <a href="https://tele.click/joinchat/CaTbaELDzLgjfIDfDjAs-g" target="_blank">
                            <img data-src="/image/icon-blog.png" class="lazyload telegram-icon" alt="��������� ��� ����������������">
                            ��������� ��� ����������������
                        </a>
                    </div>
                    <div class="info_block telegram">
                        <a href="http://t-do.ru/SEO_lapkinlab/" target="_blank">
                            <img data-src="/image/icon-blog.png" class="lazyload telegram-icon" alt="Lapkinlab - ����">
                            Lapkinlab - ����
                        </a>
                    </div>
                    <div class="info_block telegram filial">
                        <a href="https://lapkinlab.ru/?utm_source=site&amp;utm_medium=ssilka&amp;utm_campaign=msk.lapkinlab"
                           target="_blank">
                            <img data-src="/image/icon-blog.png" class="lazyload telegram-icon" alt="Lapkinlab - ������������� ������">
                            ������������� ������
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
<? } else {?>
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-md-6 textlogo">
                        <i><img src="//msk.lapkinlab.ru/bitrix/templates/new_design/assests/pin.png"></i>
                        <c id="blo11">��� �����: ������</c>
                        <div class="newb cgjfjgkf1"><a href="https://msk.lapkinlab.ru/">������</a><br><a href="https://lapkinlab.ru/">���������</a></div>
                    </div>
                    <div class="col-sm-12 col-md-6 textphone">
                        <i><img src="//msk.lapkinlab.ru/bitrix/templates/new_design/assests/call.png"></i> <a class="roistat-phone" href="tel:88003010019">8 (800) 301-00-19</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-md-4 no_m no_p">
                        <a href="#win1" onclick="ym(45994323, 'reachGoal', 'zvonok'); return true;" class="but but-one">�������� ������</a>
                    </div>
                    <div class="col-sm-12 col-md-4 no_m no_p">
                        <a href="#win1" onclick="ym(45994323, 'reachGoal', 'audit'); return true;" class="but but-two">�������� �����</a>
                    </div>
                    <div class="col-sm-12 col-md-4 no_m no_p">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSf-7bjpKRs7o52pYjR4kdHpt50zTMYsfkUFwDpieJT-0OCj7g/viewform" class="but but-three" target="_blank">���������
                            ����</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?}?>

<section class="menu_logo">
    <div class="container">
        <div class="row">
            <div class="col-md-3 logo">
                <a href="/"><img src="//msk.lapkinlab.ru/bitrix/templates/new_design/assests/logo-new2.png"></a>
                <span>���������������� ��������� �����������, �������� ������ � �������</span>
            </div>
            <div class="col-md-9">
                <div class="menuToggle">&#9776;</div>
                <? $APPLICATION->IncludeComponent(
                    "bitrix:menu",
                    "menu-top",
                    array(
                        "ROOT_MENU_TYPE"        => "top",
                        "MAX_LEVEL"             => "2",
                        "CHILD_MENU_TYPE"       => "left",
                        "USE_EXT"               => "Y",
                        "MENU_CACHE_TYPE"       => "A",
                        "MENU_CACHE_TIME"       => "36000000",
                        "MENU_CACHE_USE_GROUPS" => "Y",
                        "MENU_CACHE_GET_VARS"   => array(),
                        "COMPONENT_TEMPLATE"    => "catalog_horizontal1",
                        "DELAY"                 => "N",
                        "ALLOW_MULTI_SELECT"    => "N",
                        "COMPOSITE_FRAME_MODE"  => "A",
                        "COMPOSITE_FRAME_TYPE"  => "AUTO",
                        "MENU_THEME"            => "site",
                    ),
                    false,
                    array(
                        "ACTIVE_COMPONENT" => "Y",
                    )
                ); ?>

            </div>
        </div>
    </div>
</section>

