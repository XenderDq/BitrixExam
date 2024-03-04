<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}
//echo '<pre>';
//var_dump($arResult);
//echo '</pre>';
?>
    <div class="swiper main-news__swiper">
        <div class="swiper-wrapper">
    <?php foreach ($arResult['ITEMS'] as $i => $item):?>
    <a class="swiper-slide main-news__card" href="#">
        <div class="main-news__card-img">
            <picture class="picture">
                <source type="image/webp" srcset="<?=$item["PREVIEW_PICTURE"]['SRC']?>">
                <img class="picture__img" src="<?=$item["PREVIEW_PICTURE"]['SRC']?>">
            </picture>
            <span class="main-news__card-plug"><?=$item["IBLOCK_SECTION_ID"]?></span>
        </div>
        <p class="main-news__card-date"><?=$item["TIMESTAMP_X"]?></p>
        <p class="main-news__card-title"><?=$item["PREVIEW_PICTURE"]['TITLE']?></p>
    </a>
    <?php endforeach; ?>
</div>
    </div>