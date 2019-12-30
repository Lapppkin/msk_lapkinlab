<?php


namespace LapkinLab;

use Respect\Validation\Rules\AbstractRule;

/**
 * Class CyrillicUrlValidationRule
 *
 * @package LapkinLab
 */
class CyrillicUrlValidationRule extends AbstractRule
{

    /**
     * @param $url
     *
     * @return bool
     */
    public function validate($url)
    {
        if (mb_strlen($url) === 0) return false;
        $url = mb_strtolower(trim($url));
        return preg_match('/^([\p{Cyrillic}\p{Latin}\d\.-]{1,64})?\.(?:\x{0440}\x{0444}|ru|su|arpa|info|aero|name|[a-z]{3})$/iu', $url) ? true : false;
    }
}
