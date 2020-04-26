<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заказать разработку телеграмм бота");
$APPLICATION->SetPageProperty("description", "Увеличим продажи и лояльность Вашего бизнеса путём обработки клиентов через телеграм бота. Предоставляем полную статистику и сопровождение.");
$APPLICATION->SetTitle("Заказать разработку телеграмм бота");

$asset = Bitrix\Main\Page\Asset::getInstance();
$asset->addJs(SITE_TEMPLATE_PATH . '/js/new-design-home.js');
$paramsForm = array(
    'id' => 'chat-bot-telegram',
    'title' => 'Подобрать оптимальное решение для вашего бизнеса ',
    'fields' => array(
        'name',
        'phone',
        'site',
    ),
    'required' => array(
        'name',
        'phone',
        'site',
    ),
    'submit_button' => 'Получить анализ',
    'wrapper' => true,
);
?>
<div class="page page-ppc page--telegram">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/telegram/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Разработка <br>
                                телеграм-бота
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="adwords-section adwords-section--telegram">
        <div class="container">
            <div class="adwords-section__wrapper row">
                <div class="adwords-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/first.png" class="js-tilt-block">
                </div>
                <div class="adwords-section__content col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/logo-telegram.png"
                         style="margin-bottom: 15px;">
                    <div class="adwords-section__text">
                        Компания LapkinLab разрабатывает телеграм ботов любой сложности. Воспользовавшись нашими
                        услугами, вы сможете увеличить объем продаж посредством обработки клиентов через один из самых
                        популярных мессенджеров России.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--telegram-opportunities">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        <h1 class="seo-title">Возможности телеграм- бота</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    Телеграм – это бесплатный мессенджер для обмена
                    сообщениями, медиа- и аудиофайлами, изображениями и другим контентом. В Телеграме предусмотрена
                    работа ботов. Они являются виртуальными собеседниками, которые готовы моментально ответить на
                    сообщение пользователя запрограммированной фразой.
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/opportunities-big.png">
                </div>
            </div>
        </div>
    </div>

    <div class="opportunities-telegram">
        <div class="container">
            <div class="row">
                <div class="opportunities-telegram__text col-xl-4 col-md-12">
                    <b>
                        Зачем нужен бот?
                    </b>
                    <p>
                        Большинство российских компаний успело оценить возможности ботов и активно использует этот
                        функционал Телеграма для обеспечения оперативной поддержки клиентов. Telegram бот способен:
                    </p>
                </div>
                <div class=" col-xl-8 col-md-12">
                    <div class="opportunities-telegram__items">
                        <div class="opportunities-telegram__item">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/opportunities-1.png">
                            <div class="opportunities-telegram__item-title">
                                Ответить на вопросы клиентов
                            </div>
                        </div>
                        <div class="opportunities-telegram__item">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/opportunities-2.png">
                            <div class="opportunities-telegram__item-title">
                                Сообщить об акциях и бонусных предложениях
                            </div>
                        </div>
                        <div class="opportunities-telegram__item">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/opportunities-3.png">
                            <div class="opportunities-telegram__item-title">
                                Принять оплату
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--telegram-price">
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/price.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <p>
                        Затраты на создание и поддержку Телеграм бота на порядок меньше, чем расходы на зарплату
                        сотрудника колл-центра или разработку мобильного приложения. Функционал бота позволяет
                        уведомлять владельца бизнеса о новых заказах, актуальной статистике, проблемах с сайтом компании
                        и т.д.
                    </p>
                    <b>
                        Сколько стоит бот?
                    </b>
                    <p>
                        Цена разработка бота зависит от требуемого функционала. Минимальная стоимость разработки
                        составляет 10 000 рублей. Для получения точной информации о стоимости разработки обратитесь к
                        менеджерам нашей компании по указанному номеру телефона. Вы также можете заказать обратный
                        звонок. Представители LapkinLab моментально отреагируют на ваш запрос и ответят на все
                        интересующие вопросы.
                    </p>
                    <button class="button js-open-modal" data-action="openModal" data-modal="callback">
                        Узнать стоимость разработки
                    </button>
                </div>

            </div>
        </div>
    </div>

    <div class="info-section info-section--telegram-advantages">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Преимущества телеграм ботов
                    </div>
                </div>
                <div class="col-12">
                    <div class="info-section-list__description">
                        <p>
                            Главным преимуществом телеграм ботов считается их стоимость. Минимальные расходы на
                            разработку мобильного приложения составят 50 тысяч рублей. При этом стоит помнить о
                            необходимости создания отдельных приложений для ОС iOS и Андроид. А вот стоимость разработки
                            телеграм-бота может составить всего 10 000 рублей. При этом бот будет работать на базе
                        </p>
                        <p>
                            любой операционной системы в любом гаджете. Среди других преимуществ ботов в мессенджере
                            Telegram стоит отметить:
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section-list__items">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-1.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Индивидуальный подход
                            </div>
                            <div class="info-section-list-item__description">
                                Возможность уделить персональное внимание каждому клиенту.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-2.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Минимальный расход трафика
                            </div>
                            <div class="info-section-list-item__description">
                                Текстовый интерфейс Телеграм позволяет получить необходимую информацию и не тратить
                                трафик на загрузку тяжелых сайтов.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-3.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Высокую скорость ответа
                            </div>
                            <div class="info-section-list-item__description">
                                Клиенты получают ответ на свой запрос в течение нескольких секунд.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-4.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Конфиденциальность
                            </div>
                            <div class="info-section-list-item__description">
                                Только владелец бота имеет доступ к общению с клиентом. Поэтому возможность перехвата
                                клиента конкурентами исключена
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-5.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Отсутствие регистрации
                            </div>
                            <div class="info-section-list-item__description">
                                Сегодня Телеграм есть практически у всех активных пользователей мобильных устройств.
                                Клиентам не нужна установка дополнительного ПО, регистрация и авторизация в мессенджере.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-6.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Контакт с клиентом
                            </div>
                            <div class="info-section-list-item__description">
                                Бот собирает информацию о ваших клиентах. Если вы получили запрос, значит вы уже знаете
                                логин и имя своего клиента.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-7.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Наличие системы оповещений
                            </div>
                            <div class="info-section-list-item__description">
                                Телеграм бот может взять на себя работу по оповещению клиентов о новых товарах, бонусных
                                предложениях, акциях и т.д.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/advantages-8.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Интеграция с сервисами
                            </div>
                            <div class="info-section-list-item__description">
                                Интеграцию по API с любыми системами и сервисами (Bitrix24, 1С Предприятие и т.д.)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="info-section info-section--telegram-pluses">
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/pluses.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        К плюсам ботов нужно отнести отсутствие цензуры, ограничений и блокировок. Они обеспечивают
                        полную свободу работы с клиентом!
                    </b>
                    <p>
                        Обратившись в LapkinLab, вы можете рассчитывать на разработку телеграм-бота в течение 2-5 дней
                        после согласования технического задания. Мы разрабатываем боты на основе ваших предпочтений.
                        Наши клиенты также могут рассчитывать на техническую поддержку бота в течение 3 месяцев после
                        его запуска.
                    </p>
                    <button class="button js-open-modal" data-action="openModal" data-modal="callback">
                        Заказать разработку
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section-list info-section-list--telegram-ideas">
        <div class="container">
            <div class="info-section-list__header row">
                <div class="col-12">
                    <div class="title-base">
                        Идеи для телеграм-бота
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/ideas-1.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                HR Бот для приема на работу
                            </div>
                            <div class="info-section-list-item__description">
                                Работа такого бота заключается в том, что он будет получать резюме от соискателей и
                                открывать им доступ к небольшому тесту, результаты которого позволят работодателю
                                подобрать наилучшего кандидата.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/ideas-2.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Бот для изучения иностранного языка
                            </div>
                            <div class="info-section-list-item__description">
                                Такая программа позволит быстро и качественно выучить любой иностранный язык.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/ideas-3.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Бот для аптеки
                            </div>
                            <div class="info-section-list-item__description">
                                С помощью бота ваши клиенты смогут находить информацию об интересующем медицинском
                                препарате, ближайшей аптеке и т.д.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/ideas-4.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Бот для организации свадьбы
                            </div>
                            <div class="info-section-list-item__description">
                                Программа поможет организовать торжество на наивысшем уровне, не забыв даже о мельчайших
                                деталях.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-section-list-item">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/ideas-5.png" class="js-tilt-block">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__title">
                                Бот для интернет-магазина
                            </div>
                            <div class="info-section-list-item__description">
                                За счет бота пользователь сможет выполнить поиск интересующего товара в вашем
                                интернет-магазине. Ваши клиенты смогут узнать стоимость и характеристики товара прямо в
                                Telegram.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="info-section-list-item info-section-list-item--infinity">
                        <div class="info-section-list-item__image">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/telegram/infinity.png">
                        </div>
                        <div class="info-section-list-item__content">
                            <div class="info-section-list-item__description">
                                У специалистов маркетингового агентства LapkinLab есть десятки других идей для создания
                                телеграм-бота, который позволит сделать ваш бизнес более эффективным и успешным.
                                Возможности бота в Telegram безграничны. Их пределы определяются только имеющимся
                                бюджетом и фантазией разработчика! Поэтому не упустите свой шанс и закажите разработку
                                телеграм-бота в LapkinLab. Наша команда профессиональных разработчиков готова создать
                                бот любой сложности.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
