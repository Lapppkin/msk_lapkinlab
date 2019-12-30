<?php
/**
 * @var $id
 * @var $required
 */
?>
<div class="form-field form-field-text">
    <label for="<?= $id ?>-form-site"></label>
    <input id="<?= $id ?>-form-site" type="text" name="site"
        placeholder="Сайт<?= (in_array('site', $required, true)) ? ' *' : '' ?>"
        <?= (in_array('site', $required, true)) ? 'required' : '' ?>
    >
</div>
