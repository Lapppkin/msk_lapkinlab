<?php

namespace LapkinLab;


use CMain, CSite, CFile;
use Bitrix\Main\Web\Uri;


/**
 * Class Helper
 *
 * @package LapkinLab
 */
class Helper
{

    // запрет создания и копирования статического объекта класса
    private function __construct() {}
    private function __clone() {}

    /**
     * Beautify Var Dumper.
     *
     * @param $arr
     */
    protected static function varDumper($arr) {
        echo '<pre style="font-size:13px;text-align:left;">';
        var_dump($arr);
        echo "</pre>";
    }


    /**
     * Dumper.
     *
     * @param $arr
     * @param bool $public
     */
    public static function dump($arr, $public = FALSE) {
        if ($public) self::varDumper($arr);
        else {
            global $USER;
            if ($USER->IsAdmin()) {
                self::varDumper($arr);
            }
        }
    }

    /**
     * Dump & die.
     *
     * @param $arr
     * @param bool $public
     */
    public static function dd($arr, $public = FALSE) {
        self::dump($arr, $public);
        die();
    }

    /**
     * Обрезка строки (мультибайтовая).
     *
     * @param $str
     * @param $length
     * @param string $postfix
     * @param string $encoding
     *
     * @return string
     */
    public static function mbCutString(string $str, int $length, $postfix = '...', $encoding = 'UTF-8') {
        if (mb_strlen($str, $encoding) <= $length) {
            return $str;
        }
        $tmp = mb_substr($str, 0, $length, $encoding);
        return mb_substr($tmp, 0, mb_strripos($tmp, ' ', 0, $encoding), $encoding) . $postfix;
    }


    /**
     * Словоформы для различных языков.
     *
     * @param $n
     * @param bool $returnFalseForUnknown
     *
     * @return bool|int
     */
    public static function getPluralForm(int $n, $returnFalseForUnknown = false) {
        $n = abs((int) $n);
        if (!defined('LANGUAGE_ID')) {
            return (FALSE);
        }
        // info at http://docs.translatehouse.org/projects/localization-guide/en/latest/l10n/pluralforms.html?id=l10n/pluralforms
        switch (LANGUAGE_ID) {
            case 'de':
            case 'en':
                $plural = (int) ($n !== 1);
                break;
            case 'ru':
            case 'ua':
                $plural = ((($n % 10 === 1) && ($n % 100 !== 11)) ? 0 : ((($n % 10 >= 2) && ($n % 10 <= 4) && (($n % 100 < 10) || ($n % 100 >= 20))) ? 1 : 2));
                break;
            default:
                if ($returnFalseForUnknown) {
                    $plural = FALSE;
                }
                else {
                    $plural = (int) ($n !== 1);
                }
                break;
        }
        return ($plural);
    }


    /**
     * Установка класса для тега body для различных типов страниц.
     *
     * @param $APPLICATION
     *
     * @return string
     */
    public static function setBodyClass(CMain $APPLICATION): string {
        if (
            $APPLICATION->GetCurPage(false) === '/'
            || $APPLICATION->GetCurPage(false) === '/'
        ) return 'index';
        elseif (
            $APPLICATION->GetCurPage(false) === '/catalog/'
            || $APPLICATION->GetCurPage(false) === '/' . LANGUAGE_ID . '/catalog/'
        ) return 'catalog_index';
        elseif (CSite::InDir('/amocrm/')) return 'amocrm';
        elseif (CSite::InDir('/blog/')) return 'blog';
        elseif (CSite::InDir('/catalog/')) return 'catalog';
        elseif (CSite::InDir('/contacts/')) return 'contacts';
        elseif (CSite::InDir('/seo/')) return 'seo';
        elseif (CSite::InDir('/ppc/')) return 'ppc';
        elseif (CSite::InDir('/sites/')) return 'sites';
        elseif (CSite::InDir('/chat-bot/')) return 'chat-bot';
        elseif (CSite::InDir('/telegram/')) return 'telegram';
        return 'inner';
    }


    /**
     * Auto copyrights.
     *
     * @param int $year
     *
     * @return false|string
     */
    public static function autoCopyright(int $year) {
        $years = $year;
        $current_year = date('Y');
        if ($year === $current_year) {
            $years = $year;
        }
        if ($year < $current_year) {
            $years = $year . '–' . $current_year;
        }
        if ($year > $current_year) {
            $years = $current_year;
        }
        return $years;
    }


    /**
     * Парсинг телефонного номера и вывод в различных форматах.
     *
     * @param string $number
     * @param string $format
     * @param string $class
     * @return array|mixed|string
     */
    public static function parsePhone(string $number, string $format = 'default', string $class = '') {
        $number = trim($number);
        $result = explode(' ', $number, 3);

        $full = str_replace(['-', '(', ')', ' ', '&nbsp;'], '', $result[0] . $result[1] . $result[2]);
        $left_bracket = ($result[1] == 800) ? '' : '(';
        $right_bracket = ($result[1] == 800) ? '' : ')';

        $html = "<span class='country'>{$result[0]}</span>&nbsp;<span class='code'>{$left_bracket}{$result[1]}{$right_bracket}</span>&nbsp;<span class='number'>{$result[2]}</span>";

        switch ($format) {
            case 'formatted':
                return $result[0] . '&nbsp;' . $result[1] . '&nbsp;' . $result[2];
            case 'full':
                return $full;
            case 'html':
                return $html;
            case 'link':
                $link_class = $class ? " class='$class'" : '';
                return "<a $link_class href='tel:$full'>$html</a>";
            default:
                return array(
                    'country' => $result[0],
                    'code' => $result[1],
                    'number' => $result[2],
                );
        }
    }


    /**
     * Рендер иконки.
     *
     * @param string $name Icon name
     * @param string $class
     * @return string
     */
    public static function renderIcon(string $name, string $class = '') {
        return (self::checkIE())
            ? "<i class=\"lapicon lapicon-{$name} {$class}\"></i>"
            : "<svg class=\"lapkin-icon lapkin-icon-{$name} {$class}\"><use xlink:href=\"#{$name}\"></use></svg>";
    }

    /**
     * Рендер спрайта.
     *
     * @param string $name
     * @param string $class
     *
     * @return string
     */
    public static function renderSprite(string $name, string $class = '') {
        return "<i class=\"lapicon lapicon-{$name} {$class}\"></i>";
    }

    /**
     * Рендер email.
     *
     * @param string $email
     * @param string $class
     *
     * @return string
     */
    public static function renderEmail(string $email = SITE_CONFIG['email_other'], string $class = '') {
        return "<a href=\"mailto:{$email}\" {$class}>$email</a>";
    }

    /**
     * Ресайз изображений.
     *
     * @param $image
     * @param bool $noimage
     * @param int $width
     * @param int $height
     * @param int $method
     * @param int $quality
     * @param bool $filters
     *
     * @return mixed|string
     */
    public static function resizeImage($image, $noimage = true, int $width = 300, int $height = 300, $method = BX_RESIZE_IMAGE_EXACT, int $quality = 95 , $filters = true) {
        global $config;
        $arFilters = ($filters) ? array(array('name' => 'sharpen', 'precision' => 10)) : false;
        return ($image) ?? $image['SRC'] ? CFile::ResizeImageGet($image['ID'], ['width' => $width, 'height' => $height], $method, true, $arFilters, false, $quality) : (($noimage) ? array('src' => SITE_TEMPLATE_PATH . '/images/noimage_preview.jpg', 'alt' => $config->site()->site_name, 'noimage' => true) : false);
    }


    /**
     * Check Internet Explorer 8 (IE8) and below user browser.
     *
     * @return bool
     */
    public static function checkIE() {
        return (
            (preg_match('/MSIE\s(?P<v>\d+)/i', @$_SERVER['HTTP_USER_AGENT'], $B) && $B['v'] <= 8)
            || strpos(@$_SERVER['HTTP_USER_AGENT'], 'Trident')
        );
    }


    /**
     * Parse social link url.
     *
     * @param $url
     * @return bool|string
     */
    public static function parseSocial($url) {
        switch ((new Uri($url))->getHost()) {
            case 'www.youtube.com':
            case 'youtube.com':
                return 'youtube';
            case 'vk.com':
            case 'vkontakte.ru':
                return 'vk';
            case 'facebook.com':
            case 'fb.com':
            case 'www.facebook.com':
            case 'www.fb.com':
                return 'fb';
            case 'www.instagram.com':
            case 'instagram.com':
                return 'insta';
            default:
                return false;
        }
    }

    /**
     * Merge queries.
     *
     * @param array $queries
     * @return string
     */
    public static function mergeQueries(array $queries) {
        return http_build_query(array_merge($_GET, $queries));
    }


    /**
     * Check link for external.
     *
     * @param string $link
     * @return string
     */
    public static function checkExtLink(string $link) {
        preg_match('#^(http|https):\/\/msk.lapkinlab\.ru#', $link, $matches);
        return (!empty($matches) || strpos($link, '/') === 0) ? '' : 'target="_blank"';
    }


    /**
     * Parse, check and return matched Youtube link.
     *
     * @param string $link
     * @return object
     */
    public static function parseYoutubeLink(string $link) {
        preg_match('#(?:[hH][tT]{2}[pP][sS]{0,1}:\/\/)?[wW]{0,3}\.{0,1}[yY][oO][uU][tT][uU](?:\.[bB][eE]|[bB][eE]\.[cC][oO][mM])?\/(?:(?:[wW][aA][tT][cC][hH])?(?:\/)?\?(?:.*)?[vV]=([a-zA-Z0-9--]+).*|([A-Za-z0-9--]+))#', $link, $matches);
        return (object) array(
            'link' => $matches[0],
            'id' => $matches[1],
        );
    }

    /**
     * Get privacy policy link.
     *
     * @param string $link
     * @param string $text
     *
     * @return string
     */
    public static function getPrivacyLink(string $link = '/privacy-policy/', string $text = 'Политика в отношении обработки персональных данных')
    {
        return '<!--noindex--><a class="privacy-policy" href="' . $link . '" rel="nofollow">' . $text . '</a><!--/noindex-->';
    }

}
