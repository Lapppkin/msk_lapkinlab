<?php

$slides = array(
    1 => array(
        'title' => 'Создаем сайты и решения под ключ для достижения целей Вашего бизнеса',
        'list' => array(
            'Проведем анализ конкурентов: найдем преимущества и недостатки их сайтов',
            'Выберем оптимальное решение в соответствии с Вашей маркетинговой концепцией',
            'Работаем по договору, предоставляем все необходимые документы и отчеты',
            '2 недели БЕСПЛАТНОЙ технической поддержки',
            'Предоставим готовый мини-сайт на время разработки — начните продавать уже сейчас!',
        ),
    ),
);

?>
<!--slider-->
<div class="sites-slider">
    <div class="sites-slider-image" style="background-image:url(<?= SITE_TEMPLATE_PATH ?>/images/slides/pages/sites.jpg)"></div>
    <div class="container">
        <div class="sites-slider--wrapper row">

            <div class="sites-slider--slides col-xl-6 offset-xl-1 col-lg-7 offset-lg-0 col-md-12 offset-md-0">
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

            <?php $APPLICATION->IncludeFile(SITE_TEMPLATE_PATH . '/include_areas/sites/sites_slider_form.php', array(), array('SHOW_BORDER' => true)) ?>

        </div>
    </div>
</div>
