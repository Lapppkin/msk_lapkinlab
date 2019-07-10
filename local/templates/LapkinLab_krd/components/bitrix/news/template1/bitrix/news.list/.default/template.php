<?php

/**
 * @var \CMain                    $APPLICATION
 * @var \CUser                    $USER
 * @var \CDatabase                $DB
 * @var \CBitrixComponentTemplate $this
 * @var \CBitrixComponent         $component
 * @var array                     $arParams
 * @var array                     $arResult
 * @var string                    $templateName
 * @var string                    $templateFile
 * @var string                    $templateFolder
 * @var string                    $componentPath
 */

if (!\defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) {
    die();
}

if (empty($arResult['ITEMS'])) {
    return;
}

$this->setFrameMode(true);
?>
<div class="article-list">
    <?php foreach ((array) $arResult['ITEMS'] as $item): ?>
        <?php
        $this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_EDIT'));
        $this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item['IBLOCK_ID'], 'ELEMENT_DELETE'), [
            'CONFIRM' => 'Подтвердите удаление',
        ]);
        ?>

        <article id="<?= $this->GetEditAreaId($item['ID']); ?>" class="art">
            <a class="art-img-wrapper">
                <img src="<?= $item['PREVIEW_PICTURE']['SRC']; ?>" alt="">
            </a>

            <div class="art-content">
                <a href="<?= $item['DETAIL_PAGE_URL']; ?>" class="art-title"><?= $item['NAME']; ?></a>

            </div>

            <div class="art-info">
                <div class="art-date"><?= $item['TIMESTAMP_X']; ?></div>

                <div class="art-category">Статьи</div>
            </div>
        </article>
    <?php endforeach; ?>
</div>
