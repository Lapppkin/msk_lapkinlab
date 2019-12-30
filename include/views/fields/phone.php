<?php
/**
 * @var $id
 * @var $required
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-phone"></label>
    <input id="<?= $id ?>-form-phone" type="tel" name="phone"
        placeholder="Телефон<?= (in_array('phone', $required, true)) ? ' *' : '' ?>"
        <?= (in_array('phone', $required, true)) ? 'required' : '' ?>
    >
</div>
