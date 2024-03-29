<?php

$params = array(
    'id' => 'sites',
    'title' => 'Подбор оптимальной рекламной стратегии',
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
    'submit_button' => 'Подобрать стратегию',
    'wrapper' => true,
);

?>
<div class="slider--form col-xl-4 offset-xl-0 col-lg-5 offset-lg-0 col-md-12 offset-md-0">
    <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/lapkin_form.php', $params) ?>
</div>
