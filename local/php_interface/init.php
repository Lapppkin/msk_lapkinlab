<?php


use Bitrix\Main\EventManager;
use LapkinLab\Core;
use LapkinLab\Helper;


define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('ERROR_500', '500 Internal Server Error');
define('INCLUDE_DIR', ROOT . '/local/php_interface/include/');

define('SITE_CONFIG', Configuration::getInstance()->get('site'));

require_once $_SERVER['DOCUMENT_ROOT'] . '/local/vendor/autoload.php';

### FUNCTION WRAPPERS ###

// Глобальные обертки для необходимых функций

function dump($value, $public = false) {
    Helper::dump($value, $public);
}

function dd($value, $public = false) {
    Helper::dd($value, $public);
}

function renderIcon(string $name, string $class = '') {
    return Helper::renderIcon($name, $class);
}

function renderSprite(string $name, string $class = '') {
    return Helper::renderSprite($name, $class);
}

### EVENT HANDLERS ###

//EventManager::getInstance()->addEventHandlerCompatible('main', 'OnEndBufferContent', array(Core::class, 'deleteKernelCss')); // Убрать css
//EventManager::getInstance()->addEventHandlerCompatible('main', 'onEndBufferContent', array(Core::class, 'deleteKernelJs')); // Убрать js
//EventManager::getInstance()->addEventHandlerCompatible('main', 'OnEndBufferContent', array(Core::class, 'minifyHtml')); // Сжать html

EventManager::getInstance()->addEventHandlerCompatible(
    'main',
    'OnEpilog',
    array(
        Core::class, 'Check404Error'
    ),
    1
);
