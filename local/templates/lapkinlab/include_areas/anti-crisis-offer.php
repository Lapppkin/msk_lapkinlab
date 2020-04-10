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
    'hidden' => array(),
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

<div class="modal anti-crisis-offer-modal js-modal-case" tabindex="-1" role="dialog" id="anti-crisis-offer-modal">
    <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <?= renderSprite('close') ?>
        </button>
        <div class="modal-content">
            <div class="anti-crisis-offer">
                <div class="anti-crisis-offer__image">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/home/anti-crisis-offer.png">
                </div>
                <div class="anti-crisis-offer__content">
                    <div class="anti-crisis-offer__form">
                        <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $params) ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


