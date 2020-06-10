<?php

/**
 * @var $id
 * @var $tarif
 * @var $site_type
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$params = array(
    'id' => $id . '-modal',
    'title' => 'Внедрение Битрикс24',
    'fields' => array(
        'name',
        'phone',
        'site',
    ),
    'required' => array(
        'name',
        'phone',
    ),
    'hidden' => array(),
    'submit_button' => 'Оставить заявку',
    'wrapper' => true,
    'tarif' => $tarif
); ?>
    <div class="modal modal-<?= $id ?>" tabindex="-1" role="dialog" id="<?= $id ?>-modal">
        <div class="modal-dialog" role="document">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><?= renderSprite('close') ?></button>
            <div class="modal-content">
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $params) ?>
            </div>
        </div>
    </div>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php'); ?>
