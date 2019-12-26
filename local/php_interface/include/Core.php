<?php


namespace LapkinLab;

/**
 * Class Core
 *
 * @package LapkinLab
 */
class Core
{

    // запрет создания и копирования статического объекта класса
    private function __construct() {}
    private function __clone() {}

    /**
     * @param $content
     */
    public static function deleteKernelJs (&$content) {
        global $USER, $APPLICATION;
        if ((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), '/bitrix/') !== false) return;
        if ($APPLICATION->GetProperty('save_kernel') == 'Y') return;
        $arPatternsToRemove = Array(
            '/<script.+?src=".+?kernel_main\/kernel_main\.js\?\d+"><\/script\>/',
            '/<script.+?src=".+?bitrix\/js\/main\/core\/core[^"]+"><\/script\>/',
            '/<script.+?>BX\.(setCSSList|setJSList)\(\[.+?\]\).*?<\/script>/',
            '/<script.+?>if\(\!window\.BX\)window\.BX.+?<\/script>/',
            '/<script[^>]+?>\(window\.BX\|\|top\.BX\)\.message[^<]+<\/script>/',
        );
        $content = preg_replace($arPatternsToRemove, '', $content);
        $content = preg_replace('/\n{2,}/', "\n\n", $content);
    }

    /**
     * @param $content
     */
    public static function deleteKernelCss (&$content) {
        global $USER, $APPLICATION;
        if ((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), '/bitrix/') !== false) return;
        if ($APPLICATION->GetProperty('save_kernel') == 'Y') return;
        $arPatternsToRemove = Array(
            '/<link.+?href=".+?kernel_main\/kernel_main\.css\?\d+"[^>]+>/',
            '/<link.+?href=".+?bitrix\/js\/main\/core\/css\/core[^"]+"[^>]+>/',
            '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/styles.css[^"]+"[^>]+>/',
            '/<link.+?href=".+?bitrix\/templates\/[\w\d_-]+\/template_styles.css[^"]+"[^>]+>/',
        );
        $content = preg_replace($arPatternsToRemove, '', $content);
        $content = preg_replace('/\n{2,}/', "\n\n", $content);
    }

    /**
     * @param $content
     */
    public static function minifyHtml (&$content) {
        global $USER, $APPLICATION;
        if ((is_object($USER) && $USER->IsAuthorized()) || strpos($APPLICATION->GetCurDir(), '/bitrix/') !== false) return;
        if ($APPLICATION->GetProperty('save_kernel') == 'Y') return;
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

    /**
     * Check 404 Error.
     */
    public static function сheck404Error () {
        if ((defined('ERROR_404') && ERROR_404 == 'Y') || \CHTTP::GetLastStatus() == '404 Not Found') {
            GLOBAL $APPLICATION;
            $APPLICATION->RestartBuffer();
            require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/header.php';
            require $_SERVER['DOCUMENT_ROOT'] . '/404.php';
            require $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/footer.php';
        }
    }

    /**
     * Vary brief document on uri.
     *
     * @return mixed
     */
    public static function getBriefLink () {
        $uri = \rtrim(\parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
        $briefTypeLinkMap = [
            'seo'     => 'https://docs.google.com/forms/d/e/1FAIpQLSf-7bjpKRs7o52pYjR4kdHpt50zTMYsfkUFwDpieJT-0OCj7g/viewform',
            'dev'     => 'https://docs.google.com/forms/d/e/1FAIpQLSfJdbhwnd0miOtpYpRLAql5bCsU4b5_VSk8R8lKEkRpvLMkdQ/viewform',
            'context' => 'https://docs.google.com/forms/d/e/1FAIpQLSdC5EtZkU86l1V2pIsEAXUigf6ZH_98BTB823rmgW7d0M_lmQ/viewform',
            'smm'     => 'https://docs.google.com/forms/d/e/1FAIpQLScUUOxtYtc1F1xWTCjo4HpIY4TlQ8CEnfHkhET_K0teL5xCig/viewform',
            'amo'     => 'https://docs.google.com/forms/d/e/1FAIpQLSfTqL6tOA92Y3SRrYWDoJ7wWNHEr-DFMXv6YWUgaY6DhBRmkw/viewform',
        ];
        $briefPageTypeMap = [
            '/' => 'seo',
            '/seo' => 'seo',
            '/kalkulyator-stoimosti-sajtov' => 'dev',
            '/chat-bot' => 'dev',
            '/kontekstnaya-reklama' => 'context',
            '/amocrm' => 'amo',
            '/amocrm/o-produkte' => 'amo',
            '/amocrm/brif' => 'amo',
            '/amocrm/checklist'  => 'amo',
        ];
        $brief = $briefTypeLinkMap['seo'];
        foreach ($briefPageTypeMap as $path => $type) {
            if ($uri === \rtrim($path, '/')) {
                $brief = $briefTypeLinkMap[$type];
                break;
            }
        }
        return $brief;
    }
}
