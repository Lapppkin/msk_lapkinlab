<?php

$slides = array(
    1 => array(
        'title' => 'Закажите настройку контекстной рекламы!',
        'list' => array(
            'Выявим причину высокой цены клика',
            'Увеличим Ваши продажи',
            'Снизим стоимость привлечения покупателя',
            'Оптимизируем расходы на рекламу в Яндекс и Google',
            'Увеличим охват целевой аудитории',
        ),
    ),
);

?>
<!--slider-->
<div class="ppc-slider">
    <div class="ppc-slider-image" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/slides/pages/ppc.jpg)"></div>
    <div class="container">
        <div class="ppc-slider--wrapper row">

            <div class="ppc-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
                <?php foreach ($slides as $key => $slide): ?>
                    <div class="slide slide-<?= $key ?>">
                        <div class="slide-title">
                            <h2><?= $slide['title'] ?></h2>
                        </div>
                        <div class="slide-list">
                            <ul>
                                <?php foreach ($slide['list'] as $item): ?>
                                    <li>
                                        <?= renderSprite('check-mark') ?>
                                        <?= $item ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/ppc/ppc_slider_form.php', array(), array('SHOW_BORDER' => true)) ?>

        </div>
    </div>
</div>
