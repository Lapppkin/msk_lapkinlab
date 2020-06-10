<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Внедрение CRM Битрикс24 в Москве. Закажите настройку и обучение. Узнайте стоимость внедрения системы по телефону 8(800)3010019");
$APPLICATION->SetPageProperty("title", "Внедрение и настройка CRM Битрикс24  | Автоматизация бизнес-процессов");
$APPLICATION->SetTitle("Внедрение и настройка CRM Битрикс24  | Автоматизация бизнес-процессов");

$paramsForm = array(
    'id' => 'bitrix24',
    'title' => 'Узнать стоимость внедрения',
    'fields' => array(
        'name',
        'phone',
        'site',
    ),
    'required' => array(
        'name',
        'phone',
    ),
    'submit_button' => 'Получить рассчет',
    'wrapper' => true,
);
?>
<div class="page page-ppc page--bitrix24">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Внедрение
                                <br>
                                Битрикс24
                            </h1>
                        </div>
                        <div class="slide-title__text">
                            Внедрим CRM быстро и <br> без головной боли
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-section adwords-section--bitrix24">
        <div class="container">
            <div class="adwords-section__wrapper row">
                <div class="adwords-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/first.png" class="js-tilt-block">
                </div>
                <div class="adwords-section__content col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/bitrix24-logo.png"
                         style="margin-bottom: 10px; margin-left: -10px;">
                    <div class="adwords-section__text">
                        Компания LapkinLab оказывает услуги пакетного внедрения системы Битрикс 24. Наши специалисты
                        занимаются интеграцией, индивидуальной настройкой, обучением и технической поддержкой сервиса
                        Битрикс 24.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--batch-implementation">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Пакетное внедрение Битрикс24
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Компания «1С-Битрикс» является разработчиком и провайдером сервиса для обеспечения эффективного
                        управления бизнесом Битрикс 24. Однако эта компания не оказывает услуги по внедрению и
                        техническому сопровождению данного сервиса. В этом направлении работают сертифицированные
                        партнеры «1С-Битрикс».
                    </p>
                    <p>
                        Одним из таких партнеров является LapkinLab. Наши опытные интеграторы выполнят все необходимые
                        работы по внедрению CRM Битрикс 24 и увеличению эффективности функционирования этого сервиса.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/two.png"
                         class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--bitrix24-price">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Стоимость внедрения
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/price.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Цена внедрения Битрикс24 зависит от технического задания заказчика иколичества сотрудников в
                        вашей компании. Как показывает наша практика, средняя цена интеграции системы в расчете на
                        одного сотрудника равна 2000 рублей.
                    </p>
                    <button class="btn js-open-modal"
                            data-action="openModal"
                            data-modal="bitrix24-price">
                        Узнать стоимость для вашего проекта
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="bitrix24-rates-sections">
        <div class="bitrix24-rates-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="title-base">
                            Тарифы на внедрение Bitrix 24
                        </div>
                        <div class="bitrix24-rates-section__sub-title">
                            базовое внедрение битрикс24 crm - отдел продаж
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bitrix24-rates-section__content">
                            <div class="b24-rate-table">
                                <div class="b24-rate-table__full">
                                    <b>
                                        Общие настройки
                                    </b>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Регистрация CRM Битрикс 24
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Облачная версия Битрикс 24 на свободное доменное имя, если портала еще нет
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Приглашение сотрудников в CRM
                                    </div>
                                    <div class="b24-rate-table__description">
                                        До 6 сотрудников
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка пользователей CRM
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Занесение в структуру и назначение руководителя
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Установка десктопного приложения
                                    </div>
                                    <div class="b24-rate-table__description">
                                        На 3 устройства (десктоп, ноутбук) при надичии доступа
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Установка мобильного приложения
                                    </div>
                                    <div class="b24-rate-table__description">
                                        На 3 устройства (IOS/Android) при надичии доступа
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Оптимизация карточки лида, контакта, сделки
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Остаются только неоходимые поля
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка типовых фильтров лидов, сделок, дел
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Типовое представление
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка стадий лидов и сделок
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Данные о стадиях предоставляет клиент (не длиннее 10 стадий)
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Возможность отключения лидов
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Возможность отключения лидов
                                    </div>
                                </div>

                                <div class="b24-rate-table__full">
                                    <b>
                                        Контроль входящих заявок и общение с клиентами
                                    </b>
                                    <p>
                                        Берём под контроль общение с клиентами по телефону, почте, на сайте, в соц.
                                        сетях
                                    </p>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Входящие телефонные звонки
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Штатное или внешние sip телефония (при наличии приложения в МП). Необходима
                                        аренда номера или подключение телефона через sip-connector. Равномерное
                                        распределение звонков на менеджеров, запись разговоров
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Исходящие телефонные звонки
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Привязка единого телефонного номера, который будет определяться
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Заявки по электронной почте
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Подключение общего адреса компании и до 5 персональных почтовых адресов (по
                                        одному на каждого менеджера)
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Подключение сервиса обратный звонок для одного сайта
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Установка виджета или предоставляется код для размещения на сайте
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Практикум по обработке и концентрации Лидов ведения сделок по стадиям
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Заведение карточки клиента, обработка Лидов из разных источников, конвертация в
                                        сделку по разным сценариям (контакт, контакты + компания ...)
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка мониторинга основных показателей
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Настройка дашбордов сделках
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bitrix24-rates-section__action">
                            <div class="bitrix24-rates-section__price">
                                19 900 ₽
                            </div>
                            <button class="btn js-open-modal"
                                    data-action="openModal"
                                    data-modal="bitrix24"
                                    data-tarif="Базовое внедрение битрикс24 crm - отдел продаж">
                                Заказать внедрение
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bitrix24-rates-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="bitrix24-rates-section__sub-title" style="max-width: 570px">
                            Базовое внедрение Битрикс 24
                            автоматизация и повторные продажи
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bitrix24-rates-section__content">
                            <div class="b24-rate-table">
                                <div class="b24-rate-table__full">
                                    <b>
                                        Общие настройки
                                    </b>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Создание второго направления бизнеса (разные этапы воронки)
                                    </div>
                                    <div class="b24-rate-table__description">
                                        2-e направление с разными этапами воронки продаж
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка стадии Лидов и сделать для второго направления
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Данные о стадиях предоставляет клиент (не длиннее 10 стадий)
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка прав доступа к CRM
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Настройка 3-х ролей
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Установка десктопного приложения
                                    </div>
                                    <div class="b24-rate-table__description">
                                        на 3 устройства (десктоп, ноутбук) при наличии доступа
                                    </div>
                                </div>

                                <div class="b24-rate-table__full">
                                    <b>
                                        Контроль входящих заявок и общения с клиентами
                                    </b>
                                    <p>
                                        Берём под контроль общение с клиентами по телефону, почте, на сайте, в соц.
                                        сетях
                                    </p>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Подключение формы обратной связи
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Настройка CRM-формы без подключения системы оплаты, количество полей формы до
                                        10, единый ответственный на форму. Установка формы на сайт (при наличии доступа)
                                        или предоставление кода для сайта/ссылки на страницу формы
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Подключение к CRMсоц.сетей и мессенджеров
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Настройка открытой линии: ВК, FB, Viber, Telegram. При наличии доступов
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Практикум по обработке и конвертации Лидов, ведению сделок по стадиям из
                                        подключённых каналов
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Заведение карточки клиента, обработка Лидов из разных источников, конвертация в
                                        сделку по разным сценариям (контакт контакт + компании...)
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Контроль сроков обработки лида/сделки
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Уведомление руководителю о просроченных стадиях. Робот
                                    </div>
                                </div>

                                <div class="b24-rate-table__full">
                                    <b>
                                        Повторные продажи, автоматизация
                                    </b>
                                    <p>
                                        Настраиваем регулярные продажи, кросс - продажи
                                    </p>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Автопланирование касаний
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Автоматическое планирование следующей встречи, звонка или напоминания менеджеру
                                        при закрытии сделки (успешным и не успешном)
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Автоматизация регулярных продаж
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Создание новой сделки на повторную закупку
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Кросс-продажи
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Создание новой сделки на смежный товар
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Автоматическое подключение ретаргетинга для соц. сетей по лидам и сделкам
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Для рекламных систе ВК и Яндекс.Директ когда клиент находится в работе.
                                        Текст объявления предоставляет заказчик
                                    </div>
                                </div>

                                <div class="b24-rate-table__row">
                                    <div class="b24-rate-table__label">
                                        Настройка отчетов CRM
                                    </div>
                                    <div class="b24-rate-table__description">
                                        Настройка 2 отчетов CRM в конструкторе отчетов для мониторинга ключевых
                                        показателей
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="bitrix24-rates-section__action">
                            <div class="bitrix24-rates-section__price">
                                19 900 ₽
                            </div>
                            <button class="btn js-open-modal"
                                    data-action="openModal"
                                    data-modal="bitrix24"
                                    data-tarif="Базовое внедрение битрикс24 crm - автоматизация и повторные продажи">
                                Заказать внедрение
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--bitrix24-stages">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Этапы интеграции
                    </div>
                </div>
                <div class="col-12">
                    <div class="info-section-list__description">
                        Интеграция Битрикс 24 состоит из двух основных этапов: настройки и автоматизации системы.
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <strong>
                        Настройка системы
                    </strong>
                    <p>
                        На первом этапе осуществляется настройка CRM, подключение телефонии, эмейлов и сервиса обратного
                        звонка. Наши специалисты проведут инструктаж сотрудников и научат пользоваться всем функционалом
                        Битрикс 24.
                    </p>
                    <p>
                        Базовая настройка всегда начинается с регистрации нового аккаунта в Битрикс 24. Далее мы
                        приглашаем сотрудников CRM и создаем различные структуры компании.
                    </p>
                    <p>
                        На следующем этапе оптимизируются карточки лида и контактов. После этого наши специалисты
                        настраивают типовые фильтры, а также стадии лидов и сделок. Базовая настройка предусматривает
                        подключение телефонного номера с функцией записи разговоров. Так же подключаются индивидуальные
                        и общий корпоративный эмейл.
                    </p>
                    <p>
                        После завершения всех необходимых работ специалисты LapkinLab проведут практикум для ваших
                        сотрудников.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-big-1.png"
                         class="js-tilt-block">
                </div>
            </div>

            <div class="row info-section__item-not-first">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-big-2.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <strong>
                        Автоматизация системы
                    </strong>
                    <p>
                        На втором этапе выполняется интеграция и автоматизация сервиса. Наши специалисты подключат все
                        необходимые коммуникационные каналы, настроят сервис повторных продаж и автоматизируют процедуру
                        планирования. В обязанности интегратора Битрикс 24 также входит:
                    </p>
                </div>
            </div>

            <div class="row info-section-list__items">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Настройка форм для заполнения потенциальным клиентом
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Подключение социальных сетей
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Добавление новых контактов
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Настройка системы контроля лидов; автоматизация постановки задач и уведомлений
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Автоматизация процедуры создания новых сделок
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-6.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Настройка отчетов в соответствии с техническим заданием
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-7.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Демонстрация работы
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/stages-8.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Практикум для сотрудников
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--bitrix24-presentations">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Презентации
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-md-6 col-sm-12">
                    <div class="bitrix24-presentation">
                        <div class="bitrix24-presentation__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/presentations-1.png">
                        </div>
                        <div class="bitrix24-presentation__content">
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__name">
                                    CRM для продаж - Битрикс24.
                                </a>
                            </noindex>
                            <div class="bitrix24-presentation__description">
                                CRM помогает продавать больше: берет под контроль все каналы коммуникаций с клиентами,
                                подсказывает, что делать и автоматизирует продажи.
                            </div>
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__more">
                                    <span class="bitrix24-presentation__more-text">Подробнее</span>
                                    <span class="bitrix24-presentation__more-circle">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/arrow.svg">
                                </span>
                                </a>
                            </noindex>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="bitrix24-presentation">
                        <div class="bitrix24-presentation__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/presentations-2.png">
                        </div>
                        <div class="bitrix24-presentation__content">
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/tasks.php?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__name">
                                    Задачи и проекты - Битрикс24.
                                </a>
                            </noindex>
                            <div class="bitrix24-presentation__description">
                                Задачи и проекты помогают работать вместе и успевать вовремя. Если задача поставлена в
                                Битрикс24, она будет выполнена.
                            </div>
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/tasks.php?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__more">
                                    <span class="bitrix24-presentation__more-text">Подробнее</span>
                                    <span class="bitrix24-presentation__more-circle">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/arrow.svg">
                                </span>
                                </a>
                            </noindex>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="bitrix24-presentation">
                        <div class="bitrix24-presentation__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/presentations-3.png">
                        </div>
                        <div class="bitrix24-presentation__content">
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/ol.php?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__name">
                                    Открытые линии - Битрикс24.
                                </a>
                            </noindex>
                            <div class="bitrix24-presentation__description">
                                Открытые линии объединяют в CRM цифровые каналы коммуникаций с клиентами: чат на сайте,
                                ВКонтакте, Facebook, Instagram, Telegram, Viber и другие.
                            </div>
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/ol.php?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__more">
                                    <span class="bitrix24-presentation__more-text">Подробнее</span>
                                    <span class="bitrix24-presentation__more-circle">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/arrow.svg">
                                </span>
                                </a>
                            </noindex>
                        </div>

                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="bitrix24-presentation">
                        <div class="bitrix24-presentation__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/presentations-4.png">
                        </div>
                        <div class="bitrix24-presentation__content">
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/company.php?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__name">
                                    Компания - Битрикс24.
                                </a>
                            </noindex>
                            <div class="bitrix24-presentation__description">
                                Компания помогает работать вместе: чат, диск, календарь, группы, рабочие отчеты,
                                бизнес-процессы и другие инструменты для совместной работы.
                            </div>
                            <noindex>
                                <a href="https://www.bitrix24.ru/features/company.php?p=8225437"
                                   target="_blank"
                                   rel="nofllow"
                                   class="bitrix24-presentation__more">
                                    <span class="bitrix24-presentation__more-text">Подробнее</span>
                                    <span class="bitrix24-presentation__more-circle">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/arrow.svg">
                                </span>
                                </a>
                            </noindex>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--bitrix24-result">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Результат нашей работы
                    </div>
                </div>
            </div>
        </div>

        <div class="container container--narrow">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-big.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Итогом нашей работы будет подготовленный к полноценному функционированию сервис Битрикс 24 с
                        настроенной CRM, карточками компаний, сделок, контактов и т.д.
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="title-base title-base--small" style="max-width: 480px">
                Наши клиенты уже после первого этапа работ получат:
            </div>

            <div class="row info-section-list__items">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Фиксируемая связь с сохранением записей телефонных разговоров
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Общий и личные корпоративные электронные адреса
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Сервис обратного звонка
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Постоянно обновляемая база данных клиентов
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Возможность мониторинга ключевых параметров CRM
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-6.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Возможность контроля сроков обработки лидов
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="title-base title-base--small" style="max-width: 540px">
                Результатом второго этапа является:
            </div>

            <div class="row info-section-list__items info-section-list__items--two">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-two-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Настройка индивидуальных прав доступа к CRM
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-two-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Подключение формы обратной связи
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-two-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Интеграция сообщений в соцсетях и мессенджерах
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-two-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Автоматизация планирования встреч, звонков и напоминаний
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container container--narrow">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Специалисты LapkinLab также составляют 2 персонализированных отчета на основании данных CRM и
                        организуют обучение сотрудников (по предварительной договоренности).
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/result-two-big.png"
                         class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--bitrix24-timing">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Сроки внедрения
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/timing-1.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        На сроки внедрения этого сервиса влияет скорость нашего взаимодействия с заказчиком. Чем
                        разрозненней информация, которую мы будем получать, тем сложнее и, соответственно, дольше длится
                        процесс интеграции. Если намудастся наладить взаимодействие с заказчиком, внедрение Битрикс 24
                        пройдет намного быстрее. В любом случае на реализацию одного этапа у нас уходит не больше 10
                        рабочих дней.
                    </p>
                </div>
            </div>

            <div class="row info-section__item-not-first">
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Итогом двух этапов интеграции является готовый к работе корпоративный портал, который
                        соответствует ожиданиям и целям заказчика. Битрикс 24 позволит вам существенно повысить
                        эффективность своего бизнеса!
                    </p>
                    <p>
                        А специалисты LapkinLab помогут реализовать ваши идеи, которые обязательно возникнут во время
                        работы с этим сервисом. Сотрудники нашей компании проконсультируют по любым вопросам, которые
                        касаются функционирования вашей системы автоматизации.
                    </p>
                    <p>
                        Поэтому не упустите шанс воспользоваться пакетами сопровождения, и повысить эффективность
                        использования своего корпоративного портала.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/timing-2.png"
                         class="js-tilt-block">
                </div>
            </div>

            <div class="row info-section__item-not-first">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/bitrix24/timing-3.png"
                         class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Наша компания также оказывает услуги индивидуальной настройки Битрикс 24. Опыта и навыков
                        специалистов LapkinLab достаточно для реализации даже неординарных идей! Поэтому оставляйте
                        заявки на нашем сайте или прямо сейчас звоните по указанным номерам телефона!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
