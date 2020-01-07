<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "SMM продвижение в Москве: СММ раскрутка в социальных сетях Инстаграм, Вконтакте, Фейсбук");
$APPLICATION->SetPageProperty("description", "Продвижение сайтов в социальных сетях от агентства LapkinLab &#9997;SMM раскрутка в Instagram, Вконтакте, Facebook &#9997;Настройка таргетированной рекламы");
$APPLICATION->SetTitle("SMM продвижение в Москве: СММ раскрутка в социальных сетях Инстаграм, Вконтакте, Фейсбук");

$APPLICATION->AddChainItem($APPLICATION->GetTitle(), $APPLICATION->GetCurDir());
?>

<div class="page page-smm">

    <section class="smm-preview">
        <div class="container">
            <div class="row">
                <h1 class="col-12 text-center">SMM (Продвижение сайтов в социальных сетях)</h1>
                <div class="smm-preview--item col-md-6">
                    <div class="smm-preview--wrapper">
                        <h2 class="text-center">Что Вы получите:</h2>
                        <ul class="text-center">
                            <li><?= renderSprite('check-mark') ?> Профессиональный анализ и исправление ошибок на вашем аккаунте</li>
                            <li><?= renderSprite('check-mark') ?> Настройку всех необходимых бизнес-инструментов</li>
                            <li><?= renderSprite('check-mark') ?> Качественное сопровождение ваших площадок в социальных сетях</li>
                            <li><?= renderSprite('check-mark') ?> Повышение качества контента и как результат увеличение продаж</li>
                            <li><?= renderSprite('check-mark') ?> Настройку всех видов рекламы (таргет, контекст, и т.д.)</li>
                            <li><?= renderSprite('check-mark') ?> Надежного долгосрочного партнера, которому можно доверить ведение бизнеса в соцсетях</li>
                        </ul>
                    </div>
                </div>
                <div class="smm-preview--item col-md-6">
                    <div class="smm-preview--wrapper">
                        <h3 class="text-center">Мы проанализируем твой аккаунт, выявим недочеты<br> и обсудим дальнейшее продвижение<br> за <b>99 рублей</b> вместо обычной цены <del>2499 руб</del></h3>
                        <div class="smm-preview--form">
                            <?php
                            $params = array(
                                'id' => 'smm',
                                'fields' => array(
                                    'name',
                                    'phone',
                                    'email',
                                ),
                                'required' => array(
                                    'name',
                                    'phone',
                                ),
                                'submit_button' => 'Оставить заявку',
                                'wrapper' => false,
                            );
                            $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/contact_form.php', $params);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="smm-header">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <h2 class="smm-header--title">SMM и Таргетированная реклама в социальных сетях</h2>
                    <p>Мы предлагаем комплексное продвижение в социальных сетях</p>
                </div>
            </div>
        </div>
    </section>

    <section class="smm-sales">
        <div class="container">
            <div class="row">
                <div class="smm-sales--image col-lg-6 col-md-4 col-sm-12"></div>
                <div class="smm-sales--content col-lg-6 col-md-8 col-sm-12">
                    <h2 class="h1 smm-sales--title">Продавать через соцсети – легко!</h2>
                    <h3 class="h2">Просто выйдите на улицу и оглянитесь.</h3>
                    <p>Пока вы используете стандартные средства продвижения, мимо вашего бизнеса проходят тысячи людей, погруженных в экраны своих смартфонов. Это доказывает — продажи через интернет из прихоти давно стали необходимостью.</p>
                    <p>Ваша главная задача сейчас — это найти своих клиентов в соцсетях, превратить их в постоянных покупателей, а в дальнейшем и в адвокатов вашего бренда. Для этого необходимо только выбрать нужный способ связи.</p>
                    <h3 class="h2">Москва, у вас SMM-проблемы? Тогда вам повезло найти наш сайт!</h3>
                    <h4 class="h3">Круглосуточная поддержка вашего бизнеса в самых популярных социальных сетях.</h4>
                    <ul>
                        <li><?= renderSprite('check-mark') ?> ЭКСПЕРТНОСТЬ – Мы эксперты в области SMM с многолетним опытом;</li>
                        <li><?= renderSprite('check-mark') ?> АКТУАЛЬНОСТЬ – Мы постоянно обучаемся и развиваемся;</li>
                        <li><?= renderSprite('check-mark') ?> НАДЕЖНОСТЬ – Мы гарантируем безопасность каждой сделки;</li>
                        <li><?= renderSprite('check-mark') ?> ЛОЯЛЬНОСТЬ – Мы оберегаем и уважаем каждого клиента. </li>
                    </ul>
                    <h3 class="h2">Что такое SMM и зачем это нужно вашему бизнесу?</h3>
                    <p>SMM-продвижение — это способ пообщаться со своей аудиторией напрямую, построить сильный бренд и увеличить продажи посредством социальных сетей. Социальные сети прочно вошли в жизнь миллионов людей, именно поэтому Social Media Marketing на сегодняшний день является наиболее перспективным методом продвижения.</p>
                    <h4 class="h3">SMM продвижение решает сразу несколько проблем: </h4>
                    <ul>
                        <li><?= renderSprite('check-mark') ?> Вы формируете выгодный ИМИДЖ компании, рассказывая о ней в публикациях и изучая отклик клиентов.</li>
                        <li><?= renderSprite('check-mark') ?> Потенциальный Клиент узнаёт о ПОЛЬЗЕ продукта или услуги лично от вас, изучая качественный уникальный контент. Это первый шаг к совершению продажи.</li>
                        <li><?= renderSprite('check-mark') ?> Вы можете оказывать ВЛИЯНИЕ на ваших подписчиков, формируя спрос на те или иные товары и услуги, создавать вирусный контент и, таким образом, охватывать ещё бОльшую аудиторию.</li>
                        <li><?= renderSprite('check-mark') ?> Не имеет значение B2B или B2C — в любом случае о вас узнает ЦЕЛЕВАЯ АУДИТОРИЯ.</li>
                    </ul>
                    <h3 class="h2">Решение:</h3>
                    <p>
                        <button class="btn js-open-modal" data-action="openModal" data-modal="audit">Заказать аудит сайта</button>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="smm-services">
        <div class="container">
            <div class="row">

                <div class="smm-services--item col-lg-4 col-md-6">
                    <div class="smm-services--item-wrapper">
                        <div class="smm-services--item--title">Базовый SMM<br>16 000 ₽</div>
                        <div class="smm-services--item--description">Комплексное обслуживание аккаунта в выбранной соцсети, которое включает в себя:</div>
                        <div class="smm-services--item--action">
                            <ul>
                                <li><?= renderSprite('check-mark') ?> Оформление профиля</li>
                                <li><?= renderSprite('check-mark') ?> Настройка бизнес профиля</li>
                                <li><?= renderSprite('check-mark') ?> Постинг (4-5 постов в неделю)</li>
                                <li><?= renderSprite('check-mark') ?> Копирайт</li>
                                <li><?= renderSprite('check-mark') ?> Интерактивы с подписчиками (обсуждения, конкурсы)</li>
                                <li><?= renderSprite('check-mark') ?> Настройка таргетинга 1 раз в месяц</li>
                                <li><?= renderSprite('check-mark') ?> Предоставление отчетов</li>
                                <li class="disabled"><?= renderSprite('check-mark') ?> Модерация, общение с подписчиками</li>
                                <li class="disabled"><?= renderSprite('check-mark') ?> Разработка рекламных кампаний, акций</li>
                                <li class="disabled"><?= renderSprite('check-mark') ?> Создание креативов, вирусный контент</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="smm-services--item col-lg-4 col-md-6">
                    <div class="smm-services--item-wrapper">
                        <div class="smm-services--item--title">Оптимальный SMM<br>30 000 ₽</div>
                        <div class="smm-services--item--description">Полное обслуживание выбранных 3 аккаунтов (обслуживание 3 основных соцсетей клиента):</div>
                        <div class="smm-services--item--action">
                            <ul>
                                <li><?= renderSprite('check-mark') ?> Оформление профиля</li>
                                <li><?= renderSprite('check-mark') ?> Настройка бизнес профиля</li>
                                <li><?= renderSprite('check-mark') ?> Постинг (7-12 постов в неделю)</li>
                                <li><?= renderSprite('check-mark') ?> Копирайт</li>
                                <li><?= renderSprite('check-mark') ?> Интерактивы с подписчиками (обсуждения, конкурсы)</li>
                                <li><?= renderSprite('check-mark') ?> Настройка таргетинга 2 раза в месяц</li>
                                <li><?= renderSprite('check-mark') ?> Предоставление отчетов</li>
                                <li><?= renderSprite('check-mark') ?> Модерация, общение с подписчиками</li>
                                <li><?= renderSprite('check-mark') ?> Разработка рекламных кампаний, акций</li>
                                <li><?= renderSprite('check-mark') ?> Создание креативов, вирусный контент</li>
                                <li class="disabled"><?= renderSprite('check-mark') ?> Круглосуточная модерация, общение с подписчиками, ответы на вопросы, разрешение конфликтов</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="smm-services--item col-lg-4 col-md-12">
                    <div class="smm-services--item-wrapper">
                        <div class="smm-services--item--title">Расширенный SMM<br>50 000 ₽</div>
                        <div class="smm-services--item--description">Полное обслуживание аккаунта All Inclusive (включает в себя обслуживание всех соцсетей клиента):</div>
                        <div class="smm-services--item--action">
                            <ul>
                                <li><?= renderSprite('check-mark') ?> Оформление профиля</li>
                                <li><?= renderSprite('check-mark') ?> Настройка бизнес профиля</li>
                                <li><?= renderSprite('check-mark') ?> Постинг (индивидуально)</li>
                                <li><?= renderSprite('check-mark') ?> Копирайт</li>
                                <li><?= renderSprite('check-mark') ?> Интерактивы с подписчиками (обсуждения, конкурсы)</li>
                                <li><?= renderSprite('check-mark') ?> Настройка таргетинга по запросу</li>
                                <li><?= renderSprite('check-mark') ?> Предоставление отчетов</li>
                                <li><?= renderSprite('check-mark') ?> Круглосуточная модерация, общение с подписчиками, ответы на вопросы, разрешение конфликтов</li>
                                <li><?= renderSprite('check-mark') ?> Разработка рекламных кампаний, акций</li>
                                <li><?= renderSprite('check-mark') ?> Создание креативов, вирусный контент</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="smm-services--item col-lg-5 offset-lg-1 col-md-12 offset-md-0 col-sm-12 offset-sm-0">
                    <div class="smm-services--item-wrapper">
                        <div class="smm-services--item--title">Услуга «Таргетинг»<br>5 000 ₽</div>
                        <div class="smm-services--item--action">
                            <ul>
                                <li><?= renderSprite('check-mark') ?> Настройка таргетированной рекламы ВК, Фэйсбук, Инстаграм</li>
                                <li><?= renderSprite('check-mark') ?> Все материалы (фото, видео, текст) предоставляет Клиент + бюджет на рекламу</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="smm-services--item col-lg-5 col-md-12 col-sm-12">
                    <div class="smm-services--item-wrapper">
                        <div class="smm-services--item--title">Услуга «Анализ Аккаунта»<br>2 499 ₽</div>
                        <div class="smm-services--item--action">
                            <ul>
                                <li><?= renderSprite('check-mark') ?> Анализ аккаунта, выявление сильных и слабых сторон, советы по продвижению, идеи для активностей</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <section class="smm-promo">
        <div class="container">
            <div class="row">
                <div class="smm-promo--content col-12 text-center">
                    <h2 class="big text-center">Наймите нас, чтобы улучшить Ваш бизнес<br>и сделать его успешным!</h2>
                    <p class="h2 text-center"><br>Расскажите подробнее о своем проекте.</p>
                    <p class="text-center">
                        <br>
                        <button class="btn js-open-modal" data-action="openModal" data-modal="audit">Запросить коммерческое предложение</button>
                    </p>
                </div>
            </div>
        </div>
    </section>

</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
