<?php

$params = array(
    'id' => 'sites',
    'title' => 'Узнать стоимость разработки',
    'fields' => array(
        'name',
        'phone',
        'site',
    ),
    'required' => array(
        'name',
        'phone',
        'site',
    ),
    'submit_button' => 'Получить расчет',
    'wrapper' => true,
);

?>
<div class="slider--form col-xl-3 offset-xl-1 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/contact_form.php', $params) ?>
</div>
