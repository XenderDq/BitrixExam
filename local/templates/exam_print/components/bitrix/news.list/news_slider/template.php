<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}
//echo '<pre>';
//var_dump($arResult['ITEMS']);
//echo '</pre>';
?>
<div class="news-content__listing" data-aos="fade-up">
    <?php foreach ($arResult['ITEMS'] as $i => $item):?>
    <a class="news-card" href="#">
        <div class="news-card__top">
            <div class="news-card__plug"><?=$item["IBLOCK_SECTION_ID"]?></div>
            <div class="news-card__bg">
                <picture class="picture">
                    <source type="image/webp" srcset="<?=$item["PREVIEW_PICTURE"]['SRC']?>">
                    <img class="picture__img" src="<?=$item["PREVIEW_PICTURE"]['SRC']?>">
                </picture>
            </div>
        </div>
        <div class="news-card__bot">
            <div class="news-card__date"><?=$item["TIMESTAMP_X"]?></div>
            <div class="news-card__title"><?=$item["PREVIEW_PICTURE"]['TITLE']?></div>
        </div>
    </a>
    <?php endforeach; ?>
</div>