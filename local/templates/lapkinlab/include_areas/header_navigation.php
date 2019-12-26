<!--header navigation-->
<div class="header--nav">
    <div class="container">
        <div class="row">
            <div class="header--nav-wrapper col-12">
                <div class="header--nav-logo"><a href="/"><img src="<?= SITE_TEMPLATE_PATH ?>/images/logo.png" alt="LapkinLab"><span class="about">профессиональное поисковое продвижение, создание сайтов и реклама</span></a></div>
                <div class="header--nav-menu">
                    <!--main menu-->
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
    </div>
</div>
