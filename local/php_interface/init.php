<?php


use Bitrix\Main\EventManager;
use Bitrix\Main\Config\Configuration;
use LapkinLab\Core;
use LapkinLab\Helper;
use LapkinLab\View;


define('ROOT', $_SERVER['DOCUMENT_ROOT']);
define('ERROR_500', '500 Internal Server Error');
define('VIEWS_DIR', '/local/php_interface/views/');

define('SITE_CONFIG', Configuration::getInstance()->get('site'));
define('AMO_CONFIG', Configuration::getInstance()->get('amo'));

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

function view($name, $params = array(), $print = true) {
    return (new View(VIEWS_DIR))->render($name, $params, $print);
}

### EVENT HANDLERS ###

EventManager::getInstance()->addEventHandlerCompatible('main', 'OnEpilog', array(Core::class, 'breadcrumbSetTitle'));
EventManager::getInstance()->addEventHandlerCompatible('main', 'OnEpilog', array(Core::class, 'сheck404Error'), 1);

EventManager::getInstance()->addEventHandlerCompatible('main', 'OnEndBufferContent', array(Core::class, 'deleteKernelCss')); // Убрать css
EventManager::getInstance()->addEventHandlerCompatible('main', 'OnEndBufferContent', array(Core::class, 'minifyHtml')); // Сжать html
//EventManager::getInstance()->addEventHandlerCompatible('main', 'onEndBufferContent', array(Core::class, 'deleteKernelJs')); // Убрать js

