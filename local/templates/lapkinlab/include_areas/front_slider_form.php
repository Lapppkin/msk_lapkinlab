<?php

$params = array(
    'id' => 'audit',
    'title' => 'Выявим проблемы с оптимизацией сайта',
    'fields' => array(
        'site',
        'phone',
        'email',
    ),
    'required' => array(
        'site',
        'phone',
    ),
    'submit_button' => 'Проверить сайт',
    'wrapper' => true,
);

?>
<div class="slider--form col-xl-3 offset-xl-1 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/contact_form.php', $params) ?>
</div>
