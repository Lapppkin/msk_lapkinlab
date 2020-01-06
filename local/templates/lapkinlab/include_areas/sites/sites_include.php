<?php
$section = array(
    'name' => 'include',
    'title' => 'Включено в разработку',
    'items' => array(
        0 => array(
            'icon' => 'call-large',
            'title' => 'Функция обратного звонка',
        ),
        1 => array(
            'icon' => 'location-map',
            'title' => 'Интерактивная карта',
        ),
        2 => array(
            'icon' => 'email',
            'title' => 'Корпоративная почта',
        ),
        3 => array(
            'icon' => 'gear',
            'title' => 'Удобная система управления',
        ),
        4 => array(
            'icon' => 'ssl-certificate',
            'title' => 'SSL сертификат безопасности',
        ),
        5 => array(
            'icon' => 'layout',
            'title' => 'Адаптивная верстка',
        ),
        6 => array(
            'icon' => 'manager',
            'title' => 'Персональный менеджер',
        ),
        7 => array(
            'icon' => 'chat',
            'title' => '14 дней бесплатной техподдержки',
        ),
    )
);
?>
<section class="sites-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="sites-<?= $section['name'] ?>--title h1 text-center col-12"><?= $section['title'] ?></h2>
            <div class="sites-<?= $section['name'] ?>--wrapper col-12">

                <?php foreach ($section['items'] as $item): ?>
                <div class="sites-<?= $section['name'] ?>--item">
                    <div class="sites-<?= $section['name'] ?>--item--icon"><?= renderSprite($item['icon']) ?></div>
                    <div class="sites-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
