<?php

//\AddEventHandler("main", "OnEndBufferContent", "deleteKernelJs"); //Убрать js
\AddEventHandler("main", "OnEndBufferContent", "deleteKernelCss"); //Убрать css
\AddEventHandler("main", "OnEndBufferContent", "ChangeMyContent"); //Сжать html

\AddEventHandler('main', 'OnEpilog', '_Check404Error', 1);

function deleteKernelJs(&$content) {
    global $USER, $APPLICATION;
    if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
    if($APPLICATION->GetProperty("save_kernel") == "Y") return;
    $arPatternsToRemove = Array(
        '/<script.+?src=".+?kernel_main\/kernel_main\.js\?\d+"><\/script\>/',
        '/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',
        '/<script.+?>BX\.(setCSSList|setJSList)\(\[.+?\]\).*?<\/script>/',
        '/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/script>/',
        '/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',
    );
    $content = preg_replace($arPatternsToRemove, "", $content);
    $content = preg_replace("/\n{2,}/", "\n\n", $content);
}

function deleteKernelCss(&$content) {
    global $USER, $APPLICATION;
    if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
    if($APPLICATION->GetProperty("save_kernel") == "Y") return;
    $arPatternsToRemove = Array(
        '/<link.+?href=".+?kernel_main\/kernel_main\.css\?\d+"[^>]+>/',
        '/<link.+?href=".+?bitrix\/js\/main\/core\/css\/core[^"]+"[^>]+>/',
        '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/styles.css[^"]+"[^>]+>/',
        '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/template_styles.css[^"]+"[^>]+>/',
    );
    $content = preg_replace($arPatternsToRemove, "", $content);
    $content = preg_replace("/\n{2,}/", "\n\n", $content);
}

//Сжатие HTML
function ChangeMyContent(&$content) {
    global $USER, $APPLICATION;
    if((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), "/bitrix/")!==false) return;
    if($APPLICATION->GetProperty("save_kernel") == "Y") return;
    $search = array(
        '/\>[^\S ]+/s',
        '/[^\S ]+\</s',
        '/(\s)+/s'
    );
    $replace = array(
        '>',
        '<',
        '\\1'
    );
    $content = preg_replace($search, $replace, $content);
}

function _Check404Error(){
    if ((defined('ERROR_404') && ERROR_404 == 'Y') || CHTTP::GetLastStatus() == "404 Not Found") {
        GLOBAL $APPLICATION;
        $APPLICATION->RestartBuffer();
        require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/header.php';
        require $_SERVER['DOCUMENT_ROOT'].'/404.php';
        require $_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/footer.php';
    }
}
