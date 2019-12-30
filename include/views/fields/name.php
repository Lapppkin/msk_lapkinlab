<?php
/**
 * @var $id
 * @var $required
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-name"></label>
    <input id="<?= $id ?>-form-name" type="text" name="name"
        placeholder="Ваше имя<?= (in_array('name', $required, true)) ? ' *' : '' ?>"
        <?= (in_array('name', $required, true)) ? 'required' : '' ?>
    >
</div>
