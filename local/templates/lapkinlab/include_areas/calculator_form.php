<?php

/**
 * Calculator form.
 *
 * @var $id string
 * @var $title string
 * @var $submit_button string
 * @var $fields array
 * @var $required array
 * @var $hidden array
 * @var $wrapper bool
 */

use Bitrix\Main\Security\Random;
use LapkinLab\Core;

$form_id = $id . '-form-' . Random::getString(32);
?>
<!--<?= $form_id ?>-->
<form class="calculator-form--form" id="<?= $form_id ?>">
    <?= bitrix_sessid_post() ?>
    <input type="hidden" name="id" value="<?= $id ?>">
    <input type="hidden" name="required" value="<?= base64_encode(implode(',', $required)) ?>">
    <input type="hidden" name="url" value="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>">
    <?php if ($wrapper): ?><div class="calculator-form--wrapper"><?php endif; ?>
        <div class="calculator-form--info">
            <h3 class="h2 text-center">Базовый функционал</h3>
            <p class="text-center">В каждый наш сайт входит:</p>
            <ul class="text-center">
                <li><?= renderSprite('check-mark') ?> CMS</li>
                <li><?= renderSprite('check-mark') ?> Хостинг</li>
                <li><?= renderSprite('check-mark') ?> Стандартная структура</li>
                <li><?= renderSprite('check-mark') ?> Кроссбраузерность</li>
                <li><?= renderSprite('check-mark') ?> Адаптивная верстка</li>
            </ul>
            <h3 class="h2 text-center">Дополнительный функционал</h3>
        </div>

        <div class="calculator-form--fields">
            <?php foreach ($fields as $field_id => $field): ?>
                <?php
                if (empty($field)) {
                    $field_params = array(
                        'id' => $id,
                        'required' => in_array($field_id, $required, true),
                        'hidden' => in_array($field_id, $hidden, true),
                    );
                    $APPLICATION->IncludeFile(VIEWS_PATH . 'fields/' . $field_id . '.php', $field_params);
                } else {
                    $field_params = array(
                        'id' => $id,
                        'name' => $field_id,
                        'label' => $field['label'],
                        'required' => in_array($field_id, $required, true),
                        'hidden' => in_array($field_id, $hidden, true),
                    );
                    if ($field['type'] === 'select' && !empty($field['options'])) {
                        $field_params['options'] = $field['options'];
                    }
                    $APPLICATION->IncludeFile(VIEWS_PATH . 'fields/calculator_' . $field['type'] . '.php', $field_params);
                } ?>
            <?php endforeach; ?>
        </div>

        <div class="calculator-form--privacy">
            <p>Нажимая на кнопку «<?= $submit_button ?>», я&nbsp;даю согласие на  <!--noindex--><a href="/privacy-policy/" rel="nofollow" target="_blank">обработку персональных данных</a><!--/noindex--></p>
        </div>
        <div class="calculator-form--actions">
            <div class="form-action">
                <button class="button js-send-form" type="submit"><?= $submit_button ?></button>
            </div>
        </div>
        <?php if ($wrapper): ?></div><?php endif; ?>
</form>
