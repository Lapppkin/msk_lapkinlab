<?php
/**
 * @var $id
 * @var $name
 * @var $label
 * @var $required
 */
?>
<div class="form-field form-field-radio form-field-radio--calculator">
    <div class="form-field-radio--label"><?= $label ?></div>
    <div class="form-field-radio--items">
        <label class="selectable">
            <input id="<?= $name ?>-form-radio--yes" type="radio" name="<?= $name ?>" value="yes" <?= $required ? 'required' : '' ?> data-label="<?= $label ?>">
            <span class="yes">Да</span>
        </label>
        <label class="selectable">
            <input id="<?= $name ?>-form-radio--no" type="radio" name="<?= $name ?>" value="no" <?= $required ? 'required' : '' ?> data-label="<?= $label ?>">
            <span class="no">Нет</span>
        </label>
        <label class="selectable">
            <input id="<?= $name ?>-form-radio--complicate" type="radio" name="<?= $name ?>" value="complicate" <?= $required ? 'required' : '' ?> data-label="<?= $label ?>">
            <span class="complicate">Затрудняюсь ответить</span>
        </label>
        <label title="Сбросить" class="reset">
            <input id="<?= $name ?>-form-radio--unspecified" type="radio" name="<?= $name ?>" value="unspecified" <?= $required ? 'required' : '' ?> data-label="<?= $label ?>">
            <?= renderSprite('close', 'unspecified') ?>
        </label>
    </div>
</div>
