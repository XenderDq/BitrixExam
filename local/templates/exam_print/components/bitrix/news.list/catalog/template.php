<?php
if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>

<div class="catalog-hero__thumbs">
<div class="news-content__categories" data-aos="fade-up">
    <div class="news-content__categories-wrapper">
        <a class="catalog-hero__thumbs-item btn-hover_parent <?if ($arParams['CURRENT_SECTION_CODE']) :?> active<?endif;?>" href ="/catalog/">
            <div class="btn-hover_circle white"></div>
        <span>Все</span>
        </a>
        <?php foreach ($arResult['x'] as $i => $item):?>
            <a class="catalog-hero__thumbs-item btn-hover_parent <?if (!$arParams['CURRENT_SECTION_CODE']) :?>active<?endif;?>" href ="/catalog/">
                <div class="btn-hover_circle"></div>
                <span>
                    <?=$item;?>
                </span>
            </a>
        <?php endforeach;?>
    </div>
</div>


