<?php
/**
 * @var $id
 * @var $required
 * @var $hidden
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-site"></label>
    <input id="<?= $id ?>-form-site" type="text" name="site"
        placeholder="Сайт<?= $required ? ' *' : '' ?>"
        <?= $required ? 'required' : '' ?>
        <?= $hidden ? 'hidden' : '' ?>
    >
</div>
