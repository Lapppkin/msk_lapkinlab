<?php
/**
 * @var $id
 * @var $required
 * @var $hidden
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-phone"></label>
    <input id="<?= $id ?>-form-phone" type="tel" name="phone"
        placeholder="Телефон<?= $required ? ' *' : '' ?>"
        <?= $required ? 'required' : '' ?>
        <?= $hidden ? 'hidden' : '' ?>
    >
</div>
