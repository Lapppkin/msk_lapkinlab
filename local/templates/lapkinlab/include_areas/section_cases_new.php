<div class="info-section-list info-section-list--cases">
    <div class="container">
        <div class="info-section-list__header row">
            <div class="col-12">
                <div class="title-base">
                    Наши кейсы
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row info-section-list__items">
            <div class="col-lg-4 col-md-6">
                <div class="info-section-list-item">
                    <a href="#"
                       class="info-section-list-item__image js-open-modal-case"
                       data-modal-case="modal-case-1">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/case-img-1.png">
                    </a>
                    <div class="info-section-list-item__content">
                        <a href="#"
                           class="info-section-list-item__title js-open-modal-case"
                           data-modal-case="modal-case-1">
                            Фабрика штор на Ткацкой
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-section-list-item">
                    <a href="#"
                       class="info-section-list-item__image js-open-modal-case"
                       data-modal-case="modal-case-2">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/case-img-2.png">
                    </a>
                    <div class="info-section-list-item__content">
                        <a href="#"
                           class="info-section-list-item__title js-open-modal-case"
                           data-modal-case="modal-case-2">
                            Медицинская компания
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="info-section-list-item">
                    <a href="#"
                       class="info-section-list-item__image js-open-modal-case"
                       data-modal-case="modal-case-3">
                        <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/case-img-3.png">
                    </a>
                    <div class="info-section-list-item__content">
                        <a href="#"
                           class="info-section-list-item__title js-open-modal-case"
                           data-modal-case="modal-case-3">
                            Кредитный брокер
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="info-section-list__actions">
                    <button class="button js-open-modal" data-action="openModal" data-modal="identify_problems">
                        Зказать услугу
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="case-modals">
    <div class="modal modal-case-content js-modal-case" tabindex="-1" role="dialog" id="modal-case-1">
        <div class="modal-dialog" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <?= renderSprite('close') ?>
            </button>
            <div class="modal-content">
                <div class="modal-case">
                    <div class="modal-case__title">
                        Интернет-магазин по продаже штор, карнизов и сопутствующих товаров
                    </div>
                    <div class="modal-case__content">
                        <div class="modal-case__header">
                            <div class="modal-case__header-info">
                                <div class="modal-case__header-title">
                                    Задача
                                </div>
                                <p>
                                    Организация полного цикла продаж через интернет. Поставлена цель по ежемесячному
                                    объему
                                    продаж.
                                </p>
                            </div>
                            <div class="modal-case__header-info">
                                <div class="modal-case__header-title">
                                    Результат
                                </div>
                                <p>
                                    Цели достигнуты в полном объеме. Сайт постоянно обновляется. За счет контекстной
                                    рекламы
                                    достигнута посещаемость 20 000 уникальных посетителей в месяц. Более 85% фраз в
                                    ТОП10.
                                </p>
                            </div>
                        </div>
                        <div class="modal-case__stat">
                            <div class="modal-case__stat-column modal-case__stat-column--chart">
                                <div class="modal-case__stat-wrapper-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/cases/shatura1.png">
                                </div>
                                <div class="modal-case__stat-label">
                                    Продвижение в поисковых системах Яндекс и Google
                                </div>
                            </div>
                            <div class="modal-case__stat-column  modal-case__stat-column--table">
                                <div class="modal-case__stat-wrapper-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/cases/shatura2.png">
                                </div>
                            </div>
                        </div>
                        <div class="modal-case__actions">
                            <button class="button js-open-modal js-close-modal-case" data-action="openModal" data-modal="identify_problems">
                                Зказать услугу
                            </button>
                        </div>
                    </div>
                    <div class="modal-case__navigation">
                        <button disabled class="modal-case__nav modal-case__nav--prev js-open-modal-case">
                        <span class="modal-case__nav-icon"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-gray.svg"></span>
                            <span class="modal-case__nav-label">Предыдущий кейс</span>
                        </button>
                        <button class="modal-case__nav modal-case__nav--next js-open-modal-case"
                                data-modal-case="modal-case-2">
                            <span class="modal-case__nav-label">Следующий кейс </span>
                            <span class="modal-case__nav-icon"> <img
                                    src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-red.svg"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-case-content js-modal-case" tabindex="-1" role="dialog" id="modal-case-2">
        <div class="modal-dialog" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <?= renderSprite('close') ?>
            </button>
            <div class="modal-content">
                <div class="modal-case">
                    <div class="modal-case__title">
                        Медицинская компания. <br>
                        Срок: Март 2017 - Декабрь 2018
                    </div>
                    <div class="modal-case__content">
                        <div class="modal-case__header">
                            <div class="modal-case__header-info">
                                <div class="modal-case__header-title">
                                    Задача
                                </div>
                                <p>
                                    Продвинуть сайт с нуля, добиться получения от 100 заявок на оформление медицинских
                                    книжек в месяц .
                                </p>
                            </div>
                            <div class="modal-case__header-info">
                                <div class="modal-case__header-title">
                                    Результат
                                </div>
                                <p>
                                    98% фраз находятся в ТОП-10, в среднем 6-7 тыс. уникальных посетителей в месяц, 215
                                    заявок через форму обратной связи, около 700 обращений по телефону.
                                </p>
                            </div>
                        </div>
                        <div class="modal-case__stat">
                            <div class="modal-case__stat-column modal-case__stat-column--chart">
                                <div class="modal-case__stat-wrapper-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/cases/m1.jpg">
                                </div>
                                <div class="modal-case__stat-label">
                                    Продвижение в поисковых системах Яндекс и Google
                                </div>
                            </div>
                            <div class="modal-case__stat-column  modal-case__stat-column--table">
                                <div class="modal-case__stat-wrapper-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/cases/m2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="modal-case__actions">
                            <button class="button js-open-modal js-close-modal-case" data-action="openModal" data-modal="identify_problems">
                                Зказать услугу
                            </button>
                        </div>
                    </div>
                    <div class="modal-case__navigation">
                        <button class="modal-case__nav modal-case__nav--prev js-open-modal-case"
                                data-modal-case="modal-case-1">
                        <span class="modal-case__nav-icon"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-red.svg"></span>
                            <span class="modal-case__nav-label">Предыдущий кейс</span>
                        </button>
                        <button class="modal-case__nav modal-case__nav--next js-open-modal-case"
                                data-modal-case="modal-case-3">
                            <span class="modal-case__nav-label">Следующий кейс </span>
                            <span class="modal-case__nav-icon"> <img
                                    src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-red.svg"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-case-content js-modal-case" tabindex="-1" role="dialog" id="modal-case-3">
        <div class="modal-dialog" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <?= renderSprite('close') ?>
            </button>
            <div class="modal-content">
                <div class="modal-case">
                    <div class="modal-case__title">
                        Кредитный брокер. <br>
                        Срок: Сентябрь 2018 - Декабрь 2018
                    </div>
                    <div class="modal-case__content">
                        <div class="modal-case__header">
                            <div class="modal-case__header-info">
                                <div class="modal-case__header-title">
                                    Задача
                                </div>
                                <p>
                                    Продвинуть сайт с нуля до топовых позиций по
                                    региону.
                                </p>
                            </div>
                            <div class="modal-case__header-info">
                                <div class="modal-case__header-title">
                                    Результат
                                </div>
                                <p>
                                    Посещаемость сайта выросла до 150 уникальных
                                    посетителей в месяц, более 50% фраз в ТОП10.
                                </p>
                            </div>
                        </div>
                        <div class="modal-case__stat">
                            <div class="modal-case__stat-column modal-case__stat-column--chart">
                                <div class="modal-case__stat-wrapper-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/cases/t1.jpg">
                                </div>
                                <div class="modal-case__stat-label">
                                    Продвижение в поисковых системах Яндекс и Google
                                </div>
                            </div>
                            <div class="modal-case__stat-column  modal-case__stat-column--table">
                                <div class="modal-case__stat-wrapper-image">
                                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/cases/t2.jpg">
                                </div>
                            </div>
                        </div>
                        <div class="modal-case__actions">
                            <button class="button js-open-modal js-close-modal-case" data-action="openModal" data-modal="identify_problems">
                                Зказать услугу
                            </button>
                        </div>
                    </div>
                    <div class="modal-case__navigation">
                        <button class="modal-case__nav modal-case__nav--prev js-open-modal-case"
                                data-modal-case="modal-case-2">
                        <span class="modal-case__nav-icon"><img
                                src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-red.svg"></span>
                            <span class="modal-case__nav-label">Предыдущий кейс</span>
                        </button>
                        <button disabled class="modal-case__nav modal-case__nav--next js-open-modal-case">
                            <span class="modal-case__nav-label">Следующий кейс </span>
                            <span class="modal-case__nav-icon"> <img
                                    src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-gray.svg"></span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
