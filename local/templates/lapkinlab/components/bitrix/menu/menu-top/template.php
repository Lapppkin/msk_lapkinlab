<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<? if (!empty($arResult)): ?>
<ul class="nav">

    <?
    $previousLevel = 0;
    foreach ($arResult as $arItem): ?>

    <? if ($previousLevel && $arItem["DEPTH_LEVEL"] < $previousLevel): ?>
        <?= str_repeat("</ul></li>", ($previousLevel - $arItem["DEPTH_LEVEL"])); ?>
    <? endif ?>

    <? if ($arItem["IS_PARENT"]): ?>

    <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
    <li class="<? if ($arItem["SELECTED"]): ?>active<?endif?>"><a href="<?= $arItem["LINK"] ?>" class="<? if ($arItem["SELECTED"]): ?>active<? else: ?><? endif ?>"><?= $arItem["TEXT"] ?></a>
        <ul>
            <? else: ?>
            <li class="<? if ($arItem["SELECTED"]): ?>active<?endif?>"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a>
                <ul>
                    <? endif ?>

                    <? else: ?>

                        <? if ($arItem["PERMISSION"] > "D"): ?>

                            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                <li class="<? if ($arItem["SELECTED"]): ?>active<?endif?>"><a href="<?= $arItem["LINK"] ?>"
                                       class="<? if ($arItem["SELECTED"]): ?>active<? else: ?><? endif ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? else: ?>
                                <li class="<? if ($arItem["SELECTED"]): ?>active<?endif?>"><a href="<?= $arItem["LINK"] ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? endif ?>

                        <? else: ?>

                            <? if ($arItem["DEPTH_LEVEL"] == 1): ?>
                                <li class="<? if ($arItem["SELECTED"]): ?>active<?endif?>"><a href=""
                                       class="<? if ($arItem["SELECTED"]): ?>active<? else: ?><? endif ?>"
                                       title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? else: ?>
                                <li class="<? if ($arItem["SELECTED"]): ?>active<?endif?>"><a href="" title="<?= GetMessage("MENU_ITEM_ACCESS_DENIED") ?>"><?= $arItem["TEXT"] ?></a></li>
                            <? endif ?>

                        <? endif ?>

                    <? endif ?>

                    <? $previousLevel = $arItem["DEPTH_LEVEL"]; ?>

                    <? endforeach ?>

                    <? if ($previousLevel > 1)://close last item tags?>
                        <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                    <? endif ?>

</ul>
<? endif ?>
