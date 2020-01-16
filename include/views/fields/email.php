<?php
/**
 * @var $id
 * @var $required
 * @var $hidden
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-email"></label>
    <input id="<?= $id ?>-form-email" type="text" name="email"
        placeholder="Почта<?= $required ? ' *' : '' ?>"
        <?= $required ? 'required' : '' ?>
        <?= $hidden ? 'hidden' : '' ?>
    >
</div>
