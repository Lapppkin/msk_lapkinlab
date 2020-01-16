<?php
/**
 * @var $id
 * @var $name
 * @var $label
 * @var $required
 * @var $options
 */
?>
<div class="form-field form-field-select form-field-select--calculator">
    <div class="form-field-select--label"><?= $label ?><?= $required ? ' *' : '' ?></div>
    <div class="form-field-select--wrapper">
        <select name="<?= $name ?>" id="<?= $name ?>-form-select" <?= $required ? 'required' : '' ?> <?= $hidden ? 'hidden' : '' ?> data-label="<?= $label ?>">
            <option disabled selected>Выберите тип сайта</option>
            <?php foreach ($options as $option_name => $option): ?>
                <option value="<?= $option_name ?>"><?= $option ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
