<?php
$section = array(
    'name' => 'solutions',
    'title' => 'Найдем решения под любой проект',
    'items' => array(
        0 => array(
            'icon' => 'landing-page',
            'title' => 'Для одностраничных сайтов',
        ),
        1 => array(
            'icon' => 'business-website',
            'title' => 'Для корпоративных сайтов',
        ),
        2 => array(
            'icon' => 'online-shop',
            'title' => 'Для интернет магазинов',
        ),
    ),
);
?>
<section class="ppc-<?= $section['name'] ?>">
    <div class="container">
        <div class="row">
            <h2 class="ppc-<?= $section['name'] ?>--title h1 text-center col-12"><?= $section['title'] ?></h2>
            <div class="ppc-<?= $section['name'] ?>--wrapper col-12">

                <?php foreach ($section['items'] as $item): ?>
                <div class="ppc-<?= $section['name'] ?>--item">
                    <div class="ppc-<?= $section['name'] ?>--item--icon"><?= renderSprite($item['icon']) ?></div>
                    <div class="ppc-<?= $section['name'] ?>--item--title"><?= $item['title'] ?></div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
