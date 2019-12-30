<?php

use LapkinLab\Core;

?>
<!--мы любим свое дело-->
<section class="section--love">
    <div class="container">
        <div class="section--love--wrapper row">
            <h2 class="section--love--title col-12 text-center">Мы любим свое дело</h2>
            <div class="section--love--description col-xl-5 offset-xl-1 col-lg-6 offset-lg-0">
                <h3 class="h2">Фиксированные цены</h3>
                <p>Все цены указаны на сайте – не надо ждать обсчета. Цена не меняется от конкуренции, количества ключевых слов и т.п. Кроме того, в каждый пакет уже заложена скидка до 56% – потому что «оптом дешевле».</p>
                <h3 class="h2">Без мук выбора</h3>
                <p>Вам не придется выбирать «продвижение по трафику, позициям или за лид». Работаем по западной модели ценообразования – оплата за конкретные работы. Результаты получаются одинаковые, а бешеные накрутки за гарантию отсутствуют.</p>
            </div>
            <div class="section--love--abilities col-xl-4 offset-xl-1 col-lg-5 offset-lg-1">
                <div class="section--love--abilities-bitrix">
                    <?= renderSprite('bitrix-full') ?><span class="text">Сертифицированный партнер 1C-Битрикс</span>
                </div>
                <div class="section--love--abilities-top40">
                    <?= renderSprite('olive') ?><span class="top40">40</span><span class="text">Входим в TOP40 seo студий</span>
                </div>
                <div class="section--love--abilities-hello"><span>Познакомимся?</span>
                    <a class="btn" href="<?= Core::getBriefLink() ?>" target="_blank">Заполнить бриф</a>
                </div>
            </div>
        </div>
    </div>
</section>
