<?php

/**
 * Contact form.
 *
 * @var $id
 * @var $title
 * @var $submit_button
 * @var $fields
 * @var $required
 * @var $wrapper
 * @var $tarif
 * @var $site_type
 */

use Bitrix\Main\Security\Random;

$field_params = array(
    'id' => $id,
    'required' => $required,
);

$tarif_name = array(
    'standard' => 'Стандартный',
    'minimal' => 'Минимальный',
    'extended' => 'Расширенный',
);
$site_types = array(
    'minilp' => 'Mini-Landing page',
    'lp' => 'Landing page',
    'services' => 'Сайт услуг',
    'eshop' => 'Интернет-магазин',
    'corporate' => 'Корпоративный сайт',
    'design' => 'Дизайн/редизайн сайтов',
    'crm' => 'Разработка CRM-систем — автоматизация и полный контроль бизнеса',
);

$form_id = $id . '-form-' . Random::getString(32);
?>
<!--<?= $form_id ?>-->
<form class="contact-form--form" id="<?= $form_id ?>">
    <?= bitrix_sessid_post() ?>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="required" value="<?= base64_encode(implode(',', $required)) ?>">
    <?php if ($tarif): ?>
        <input type="hidden" name="tarif" value="<?= $tarif ?>">
    <?php endif; ?>
    <?php if ($site_type): ?>
        <input type="hidden" name="site_type" value="<?= $site_type ?>">
    <?php endif; ?>
    <input type="hidden" name="url" value="https://<?=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']?>">
    <?php if ($wrapper): ?><div class="contact-form--wrapper"><?php endif; ?>
        <h2 class="contact-form--title text-center"><?= $title ?></h2>
        <?php if ($tarif): ?>
        <p class="text-center">Тариф: <?= $tarif_name[$tarif] ?></p>
        <?php endif; ?>
        <?php if ($site_type): ?>
            <p class="text-center">Тип сайта: <?= $site_types[$site_type] ?></p>
        <?php endif; ?>
        <div class="contact-form--fields">
            <?php foreach ($fields as $field): ?>
                <?php $APPLICATION->IncludeFile(VIEWS_PATH . 'fields/' . $field . '.php', $field_params) ?>
            <?php endforeach; ?>
        </div>
        <div class="contact-form--privacy">
            <p>Нажимая на кнопку «<?= $submit_button ?>», я&nbsp;даю согласие на <a href="/privacy-policy/" rel="nofollow" target="_blank">обработку персональных данных</a></p>
        </div>
        <div class="contact-form--actions">
            <div class="form-action">
                <button class="button js-send-form" type="submit"><?= $submit_button ?></button>
            </div>
        </div>
    <?php if ($wrapper): ?></div><?php endif; ?>
</form>
