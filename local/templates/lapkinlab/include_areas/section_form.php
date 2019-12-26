<?php

$params = array(
    'id' => 'contact',
    'title' => 'Остались вопросы? Напишите нам!',
    'fields' => array(
        'name',
        'phone',
        'email',
        'message',
    ),
    'required' => array(
        'name',
        'phone',
    ),
    'submit_button' => 'Отправить',
    'wrapper' => false,
);

?>
<div class="section--contact-form contact-form">
    <div class="container">
        <div class="row">
            <div class="contact-form--wrapper col-xl-10 offset-xl-1 col-sm-12 offset-sm-0">
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/contact_form.php', $params) ?>
            </div>
        </div>
    </div>
</div>
