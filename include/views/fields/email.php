<?php
/**
 * @var $id
 * @var $required
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-email"></label>
    <input id="<?= $id ?>-form-email" type="text" name="email"
        placeholder="Почта<?= (in_array('email', $required, true)) ? ' *' : '' ?>"
        <?= (in_array('email', $required, true)) ? 'required' : '' ?>
    >
</div>
