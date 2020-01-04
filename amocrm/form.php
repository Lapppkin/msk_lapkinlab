<?php

$params = array(
    'id' => 'amocrm',
    'title' => 'Хотите продавать больше?',
    'fields' => array(
        'name',
        'phone',
        'email'
    ),
    'required' => array(
        'name',
        'phone',
    ),
    'submit_button' => 'Хочу!',
    'wrapper' => false,
);

?>
<section class="section-form">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 offset-md-0">
                <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/contact_form.php', $params) ?>
            </div>
        </div>
    </div>
</section>
