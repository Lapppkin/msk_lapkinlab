<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("title", "Заказать увеличение конверсии: стоимость работ");
$APPLICATION->SetPageProperty("description", "Стоимость работ по увеличению конверсии сайта. Оказываем полный комлекс услуг по поисковому продвижению сайтов в интернете.");
$APPLICATION->SetTitle("Заказать увеличение конверсии: стоимость работ");

$asset = Bitrix\Main\Page\Asset::getInstance();
$asset->addJs(SITE_TEMPLATE_PATH . '/js/new-design-home.js');
$paramsForm = array(
    'id' => 'conversion',
    'title' => 'Подобрать оптимальное решение для вашего бизнеса',
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
    'submit_button' => 'Получить консультацию',
    'wrapper' => true,
);
?>
<div class="page page-ppc page--conversion">
    <div class="ppc-slider">
        <div class="ppc-slider-image"
             style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/conversion/header-bgi.png)"></div>
        <div class="container">
            <div class="ppc-slider--wrapper row">
                <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h1>
                                Увеличение конверсии
                                <br> вашего сайта
                            </h1>
                        </div>
                        <div class="slide-title__text">
                            Увеличим прирост целевых клиентов на ваш сайт
                        </div>
                    </div>
                </div>
                <div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
                    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $paramsForm) ?>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--conversion-services">
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Компания LapkinLab предоставляет услугу повышения конверсии сайта.
                    </b>
                    <p>
                        Наши специалисты имеют огромный опыт в этой в сфере и готовы увеличить конверсию на вашем сайте
                        в
                        сжатые сроки. Мы активно работаем с заказчиком и находим индивидуальный подход. Специалисты
                        компании
                        LapkinLab всегда прислушиваются к пожеланиям и требованиям заказчика. Поэтому мы можем
                        гарантировать, что ваш сайт уже в ближайшее время станет источником ваших доходов!
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/services.png" class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--conversion-what-offer">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Что мы предлагаем?
                    </div>
                </div>
                <div class="col-12">
                    <div class="info-section-list__description">
                        <p>
                            Оптимизация конверсии – это процесс, который заключается в приросте числа клиентов,
                            совершающих необходимое целевое действие. Привлечение потенциального клиента на сайт – это
                            лишь первый шаг. Его нужно подтолкнуть к совершению звонка, заказу продукции, регистрации на
                            сайте и любому другому целевому действию. Если этого не произошло, работу сайта можно
                            признать неэффективной. Следовательно, средства на организацию рекламной кампании будут
                            потрачены безрезультативно.
                        </p>
                        <b>
                            Чтобы не допустить такой ситуации, специалисты LapkinLab используют все современные методы
                            увеличения конверсии сайта:
                        </b>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row info-section__line-wrapper">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/what-offer-1.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Определение вашей целевой аудитории
                    </b>
                    <p>
                        Мы не гонимся за слишком широкой аудиторией. Нецелевой трафик не позволяет повысить конверсию.
                        Наши специалисты сосредоточатся на узком сегменте, который затем можно будет успешно расширить.
                        Для определения вашей целевой аудитории мы проводим сегментацию по интересам, географии и другим
                        параметрам.
                    </p>
                </div>
            </div>

            <div class="row info-section__line-wrapper">
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Аудит UX-дизайнера
                    </b>
                    <p>
                        Мы выполняем экспертную оценку качества графической подачи информации. На ее основании эксперты
                        нашего маркетингового агентства расставят правильные акценты и устранить критичные для конверсии
                        недостатки интерфейса. UX-аудит позволит постепенно устранить проблемы и не «перекраивать» ваш
                        сайт полностью.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/what-offer-2.png" class="js-tilt-block">
                </div>
            </div>

            <div class="row info-section__line-wrapper">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/what-offer-3.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Маркетинговый аудит
                    </b>
                    <p>
                        Наши специалисты также проанализируют подачу контента, формы обратной связи и особенности
                        интерфейса. За счет маркетингового аудита будет обеспечено повышение показателей конверсии,
                        увеличение глубины просмотра и снижение количества отказов. Мы сделаем ваш сайт удобным и
                        интуитивно понятным для пользователей.
                    </p>
                </div>
            </div>

            <div class="row info-section__line-wrapper">
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Проработка тригеров доверия для вашей целевой аудитории
                    </b>
                    <p>
                        В переводе с английского триггер означает «спусковой крючок». Под этим термином подразумевается
                        посыл, который побудет посетителя вашего сайта сделать ожидаемое от него действие. Триггеры
                        доверия подталкивают целевую аудиторию к действиям, что положительно сказывается на уровне
                        продаж.
                    </p>
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/what-offer-4.png" class="js-tilt-block">
                </div>
            </div>

            <div class="row info-section__line-wrapper">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/what-offer-5.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    <b>
                        Анализ и просмотр метрики для определения проблемных зон на сайте
                    </b>
                    <p>
                        Мы настраиваем различные виды конверсий в системах аналитики поисковых систем Google и Яндекс.
                        Настройка метрики позволит определить препятствия на пути к успешной конверсии.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--conversion-tested">
        <div class="container">
            <div class="row">
                <div class="info-section__text col-lg-6 col-md-12">
                    На основании выполненных работ составляются и согласовываются рекомендации по доработкам. Затем мы
                    проводим A-B тестирование доработок, после чего оставляем только те, которые позволяют увеличить
                    конверсию сайта. Постоянное тестирование уже доработанных моментов позволяет отслеживать изменения в
                    конверсии зависимости от выполненных действий. Благодаря этому, мы помогаем найти правильное
                    направление движения вашего сайта.
                </div>
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/tested.png" class="js-tilt-block">
                </div>
            </div>
        </div>
    </div>

    <div class="info-section info-section--conversion-what-result">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="title-base">
                        Какой результат вы получите?
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="info-section__image col-lg-6 col-md-12">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/conversion/what-result.png" class="js-tilt-block">
                </div>
                <div class="info-section__text col-lg-6 col-md-12">
                    Обратившись в LapkinLab, вы сможете рассчитывать на улучшение отдачи сайта и получение преимущества
                    перед конкурентами. Увеличение конверсии сайта посредством анализа поведения пользователей на
                    различных этапах взаимодействия с сайтом позволяет исправить имеющиеся недоработки и подтолкнуть
                    аудиторию к совершению целевых действий.
                </div>
            </div>
        </div>
    </div>

    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/section_form.php', array(), array('SHOW_BORDER' => true)) ?>
</div>

<?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>
