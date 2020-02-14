<?php


namespace LapkinLab;

use Bitrix\Main\Application;

/**
 * Class View
 *
 * @package LapkinLab
 */
class View
{
    use Response;

    protected $request;
    protected $views_dir;

    /**
     * Ajax constructor.
     *
     * @param $views_dir
     *
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct($views_dir) {
        $application = Application::getInstance();
        $context = $application->getContext();
        $this->request = $context->getRequest();
        $this->views_dir = ROOT . $views_dir;
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
    public function render($name, $params = array(), $print = true)
    {
        // Проброс экземпляра приложения во view
        $filePath = $this->views_dir . $name . '.php';
        $output = null;
        if (file_exists($filePath)) {
            extract($params, EXTR_OVERWRITE); // Извлекаем переменные в локальный неймспейс
            ob_start();               // Начало буферизации вывода
            include $filePath;        // Включение файла шаблона
            $output = ob_get_clean(); // Конец буферизации и возврат контента
        } else {
            $result = [];
            $result['views'] = $name;
            return self::setResponse($result, 404);
        }
        if ($print) {
            print $output;
            die();
        }
        return $output;
    }
}
