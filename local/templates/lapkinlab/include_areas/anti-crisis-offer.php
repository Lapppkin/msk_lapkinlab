<?
$params = array(
    'id' => 'anti-crisis-offer-modal',
    'title' => 'Чтобы закрепить за собой скидку оставьте свой телефон и нажмите на кнопку "Забронировать!"',
    'fields' => array(
        'name',
        'phone',
    ),
    'required' => array(
        'name',
        'phone',
    ),
    'hidden' => array('theme'),
    'submit_button' => 'Забронировать',
    'wrapper' => false,
);
?>

<style>
    .marquiz-pops {
        display: none !important;
    }
</style>
<button class="bubbly-button anti-crisis-offer-btn js-anti-crisis-offer-open" id="bubbly-button">
    Антикризисное предложение
</button>

<div class="modal anti-crisis-offer-modal js-modal-anti-crisis-offer" tabindex="-1" role="dialog" id="anti-crisis-offer-modal">
    <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <?= renderSprite('close') ?>
        </button>
        <div class="modal-content">
            <div class="anti-crisis-offer">
                <div class="anti-crisis-offer__image">
                    <div class="anti-crisis-offer__nav">
                        <button class="anti-crisis-offer__btn js-stocks-slider-prev">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-red.svg">
                        </button>
                        <button class="anti-crisis-offer__btn js-stocks-slider-next">
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/modal-case-nav-red.svg">
                        </button>
                    </div>
                    <div class="owl-carousel owl-theme js-stocks-slider">
                        <div class="item js-stocks-slide-0"
                             data-theme="Акция - Антикризисное предложение"
                             data-title='Чтобы закрепить за собой скидку оставьте свой телефон и нажмите на кнопку "Забронировать"!'>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/anti-crisis-offer.png"
                                 alt="Антикризисное предложение">
                        </div>
                        <div class="item js-stocks-slide-1"
                             data-theme="Акция - Бесплатная поддержка"
                             data-title='Чтобы получить бесплатную поддержку вашего проекта нажмите на кнопку "Забронировать"!'>
                            <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/anti-crisis-offer-2.png"
                                 alt="Карантин! Антикризисное предложение. Бесплатная поддержка сайта! Ежедневный технический аудит Мониторинг видимости Проверка работоспособности БЕЗ оплаты и договора!">
                        </div>
                    </div>
                </div>
                <div class="anti-crisis-offer__content">
                    <div class="anti-crisis-offer__form">
                        <form class="lapkin-form--form"
                              id="anti-crisis-offer-modal-form-jsd6pusz8e052z68b58d27cc9nh8297o">
                            <?= bitrix_sessid_post() ?>
                            <input type="hidden" name="id" value="<?= $params['id'] ?>">
                            <input type="hidden" name="message" class="js-stocks-theme" value="">
                            <input type="hidden" name="required"
                                   value="<?= base64_encode(implode(',', $params['required'])) ?>">
                            <input type="hidden" name="url"
                                   value="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>">
                            <h2 class="lapkin-form--title text-center"><?= $title ?></h2>
                            <div class="lapkin-form--fields">
                                <?php foreach ($params['fields'] as $field): ?>
                                    <?php
                                    $field_params = array(
                                        'id' => $id,
                                        'required' => in_array($field, $params['required'], true),
                                    );
                                    $APPLICATION->IncludeFile(VIEWS_DIR . 'fields/' . $field . '.php', $field_params); ?>
                                <?php endforeach; ?>
                            </div>
                            <div class="lapkin-form--privacy">
                                <p>Нажимая на кнопку «Забронировать», я&nbsp;даю согласие
                                    на <?= LapkinLab\Helper::getPrivacyLink('/privacy-policy/', 'обработку персональных данных') ?></p>
                            </div>
                            <div class="lapkin-form--actions">
                                <div class="form-action">
                                    <button class="button js-anti-crisis-offer-form-send js-send-form " type="submit">Забронировать</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
