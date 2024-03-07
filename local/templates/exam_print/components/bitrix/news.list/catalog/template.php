<?php
if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<div class="catalog-hero__thumbs">
<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
        <div class="catalog-hero__thumbs-item btn-hover_parent <?if (!$arParams['CURRENT_SECTION_CODE']) :?> active<?endif;?>">
            <div class="btn-hover_circle"></div><span>Все</span>
        </div>
        <?php foreach ($arResult['SECTIONS'] as $i => $item):?>
            <div class="catalog-hero__thumbs-item btn-hover_parent <?if ($arParams['CURRENT_SECTION_CODE'] == $item['CODE']) :?>active<?endif;?>">
                <div class="btn-hover_circle"></div><span><?=$item["NAME"]?></span>
            </div>
        <?php endforeach;?>
    </div>
</div>