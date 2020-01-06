<?php
$section = array(
    'name' => 'cms',
    'title' => 'Разрабатываем сайты на разных платформах',
    'description' => 'Также имеем опыт работы с другими CMS и фреймворками.',
    'items' => array(
        0 => array(
            'icon' => '1c-bitrix',
            'title' => '1C Битрикс',
        ),
        1 => array(
            'icon' => 'wordpress',
            'title' => 'Wordpress',
        ),
        2 => array(
            'icon' => 'opencart',
            'title' => 'Opencart',
        ),
        3 => array(
            'icon' => 'modx',
            'title' => 'ModX',
        ),
        4 => array(
            'icon' => 'drupal',
            'title' => 'Drupal',
        ),
        5 => array(
            'icon' => 'laravel',
            'title' => 'Laravel',
        ),
        6 => array(
            'icon' => 'yii',
            'title' => 'Yii Framework',
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
            <div class="sites-<?= $section['name'] ?>--description text-center col-12"><?= $section['description'] ?></div>
        </div>
    </div>
</section>
