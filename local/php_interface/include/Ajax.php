<?php


namespace LapkinLab;

use Bitrix\Main\Context;
use Bitrix\Main\Application;

/**
 * Class Ajax
 *
 * @package LapkinLab
 */
class Ajax
{
    protected $request;
    protected $viewsPath;

    // запрет создания и копирования статического объекта класса
    public function __construct() {
        $application = Application::getInstance();
        $context = $application->getContext();
        $this->request = $context->getRequest();

        $this->viewsPath = $_SERVER['DOCUMENT_ROOT'] . '/include/views/';
    }
    //private function __clone() {}

    /**
     * Коды ошибок.
     *
     * @var array Error Responses.
     */
    public static $errors = array(
        200 => '200 OK',
        304 => '304 Not Modified',
        400 => '400 Bad Request',
        404 => '404 Not Found',
        405 => '405 Method Not Allowed',
        500 => '500 Internal Server Error',
        503 => '503 Service Unavailable',
    );

    /**
     * Установка названия метода (инициализация).
     *
     * @param $function_name
     *
     * @return array
     */
    protected static function initResponse(string $function_name): array
    {
        return array(
            'method' => $function_name,
        );
    }

    /**
     * Простая реализация шаблонов вывода (view).
     *
     * @param $name
     * @param array $params
     * @param bool $print
     *
     * @return false|string|null
     */
    protected function view($name, $params = array(), $print = true)
    {
        // Проброс экземпляра приложения во view
        $filePath = $this->viewsPath . $name . '.php';
        $output = null;
        if (file_exists($filePath)) {
            extract($params);         // Извлекаем переменные в локальный неймспейс
            ob_start();               // Начало буферизации вывода
            include $filePath;        // Включение файла шаблона
            $output = ob_get_clean(); // Конец буферизации и возврат контента
        } else {
            $result = [];
            $result['views'] = $name;
            return self::setErrors($result, 404);
        }
        if ($print) {
            print $output;
            die();
        }
        return $output;
    }

    /**
     * Установка параметров ошибки.
     *
     * @param $result
     * @param $error
     * @return mixed
     */
    protected static function setErrors(&$result, $error)
    {
        $result['error'] = array(
            'code' => $error,
            'message' => self::$errors[$error]
        );
        return $result;
    }

    /**
     * Возврат ошибок.
     *
     * @param $error
     * @return mixed
     */
    public static function errorsOnly($error)
    {
        $result['error'] = array(
            'code' => $error,
            'message' => self::$errors[$error]
        );
        return $result;
    }

    /**
     * Открытие модального окна.
     *
     * @param $params
     *
     * @return false|string|null
     */
    public static function openModal($params)
    {
        //$result = self::initResponse(__FUNCTION__);
        $ajax = new self();
        return $ajax->view('modals/' . $params['modalId'], array('id' => $params['modalId']));
    }

    public static function sendForm($params)
    {
        $result = self::initResponse(__FUNCTION__);
    }

}
