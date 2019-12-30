<?php
/**
 * @var $id
 * @var $required
 */
?>
<div class="form-field form-field-textarea">
    <label for="<?= $id ?>-form-message"></label>
    <textarea id="<?= $id ?>-form-message" name="message"
        placeholder="Напишите ваш вопрос для наших специалистов<?= (in_array('message', $required, true)) ? ' *' : '' ?>"
        <?= (in_array('message', $required, true)) ? 'required' : '' ?>
    ></textarea>
</div>
