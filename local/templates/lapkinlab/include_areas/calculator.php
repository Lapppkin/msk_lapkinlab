<?php

/**
 * Sites Calculator.
 */

$params = array(
    'id' => 'calculator',
    'title' => 'Калькулятор стоимости сайтов',
    'fields' => array(
        'site_type' => array(
            'type' => 'select',
            'label' => 'Тип сайта',
            'options' => array(
                'minilp' => 'Mini-Landing page',
                'lp' => 'Landing page',
                'service' => 'Сайт услуг',
                'eshop' => 'Интернет-магазин',
                'corporate' => 'Корпоративный сайт',
                'other' => 'другой'
            ),
        ),
        'design' => array('type' => 'radio', 'label' => 'Индивидуальный дизайн'),
        'logo' => array('type' => 'radio', 'label' => 'Логотип'),
        'info_graphics' => array('type' => 'radio', 'label' => 'Инфографика'),
        'slider' => array('type' => 'radio', 'label' => 'Слайдер'),
        'animation' => array('type' => 'radio', 'label' => 'Анимация в блоках'),
        'localize' => array('type' => 'radio', 'label' => 'Локализация'),
        'geolocation' => array('type' => 'radio', 'label' => 'Определение города'),
        'callback' => array('type' => 'radio', 'label' => 'Форма обратной связи'),
        'domain_email' => array('type' => 'radio', 'label' => 'Почта домена'),
        'search' => array('type' => 'radio', 'label' => 'Поиск по сайту'),
        'auth' => array('type' => 'radio', 'label' => 'Регистрация/авторизация'),
        'chat' => array('type' => 'radio', 'label' => 'Онлайн-чат'),
        'order' => array('type' => 'radio', 'label' => 'Форма заказа товара'),
        'payment' => array('type' => 'radio', 'label' => 'Платежная система'),
        'filter' => array('type' => 'radio', 'label' => 'Фильтр товаров/услуг'),
        'one_click' => array('type' => 'radio', 'label' => 'Покупка в 1 клик'),
        'integration_1c' => array('type' => 'radio', 'label' => 'Интеграция с 1С'),
        'integration_crm' => array('type' => 'radio', 'label' => 'Интеграция с CRM'),
        'products_import' => array('type' => 'radio', 'label' => 'Автозагрузка товаров'),
        'content' => array('type' => 'radio', 'label' => 'Создание продающего контента'),
        'gallery' => array('type' => 'radio', 'label' => 'Фотогалерея'),
        'seo' => array('type' => 'radio', 'label' => 'Поисковая оптимизация (SEO)'),
        'ppc' => array('type' => 'radio', 'label' => 'Контекстная реклама'),
        'analytics' => array('type' => 'radio', 'label' => 'Аналитика'),
        'support' => array('type' => 'radio', 'label' => 'Техническое сопровождение'),
        'promo' => array('type' => 'radio', 'label' => 'SEO-продвижение'),
        'name' => array(),
        'phone' => array(),
        'email' => array(),
        'message' => array(),
    ),
    'required' => array(
        'name',
        'phone',
        'email',
        'site_type',
    ),
    'hidden' => array(
        'message',
    ),
    'submit_button' => 'Получить расчет',
    'wrapper' => false,
);
?>
<div class="section--calculator-form calculator-form">
    <div class="container">
        <div class="row">
            <div class="calculator-form--wrapper col-xl-10 offset-xl-1 col-sm-12 offset-sm-0">
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/calculator_form.php', $params) ?>
            </div>
        </div>
    </div>
</div>
