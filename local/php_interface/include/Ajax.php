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
    use Lapkin;

    protected $request;
    protected $views_dir;

    /**
     * Ajax constructor.
     *
     * @throws \Bitrix\Main\SystemException
     */
    public function __construct() {
        $application = Application::getInstance();
        $context = $application->getContext();
        $this->request = $context->getRequest();

        $this->views_dir = ROOT . VIEWS_PATH;
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
        $filePath = $this->views_dir . $name . '.php';
        $output = null;
        if (file_exists($filePath)) {
            extract($params);         // Извлекаем переменные в локальный неймспейс
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

    /**
     * Открытие модального окна.
     *
     * @param $params
     *
     * @return false|string|null
     * @throws \Bitrix\Main\SystemException
     */
    public static function openModal($params)
    {
        //$result = self::initResponse(__FUNCTION__);
        $ajax = new self();
        return $ajax->view('modals/' . $params['modalId'], array('id' => $params['modalId'], 'tarif' => $params['tarif']));
    }

    /**
     * Отправка формы.
     *
     * @param $params
     *
     * @return mixed
     * @throws \Bitrix\Main\SystemException
     */
    public static function sendForm($params)
    {
        $response = self::initResponse(__FUNCTION__);

        $form = new Form();
        $errors = $form->validate();
        if (!empty($errors)) {
            $response['errors'] = $errors;
            return self::setResponse($response, 200);
        }

        $to = array(
            SITE_CONFIG['send_to']
        );
        $form->createIBlockElement();
        $mail = $form->sendEmail($to);
        $amo = $form->createAmoLead();
        return self::setResponse($response, $mail ? 200 : 500);
    }

}
