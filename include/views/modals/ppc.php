<?php

/**
 * @var $id
 */

require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

$params = array(
    'id' => $id . '-modal',
    'title' => 'Оставить заявку на рекламу',
    'fields' => array(
        'name',
        'phone',
        'email',
        'site',
    ),
    'required' => array(
        'name',
        'phone',
        'site',
    ),
    'submit_button' => 'Заказать рекламу',
    'wrapper' => true,
); ?>
<div class="modal" tabindex="-1" role="dialog" id="<?= $id ?>-modal">
    <div class="modal-dialog" role="document">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><?= renderSprite('close') ?></button>
        <div class="modal-content">
            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/contact_form.php', $params) ?>
        </div>
    </div>
</div>

<?php require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/epilog_after.php'); ?>
