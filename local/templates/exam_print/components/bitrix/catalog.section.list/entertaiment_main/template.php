<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}
?>
<?php
echo '<pre>';
var_dump($arResult);
echo '</pre>';
?>
<div class="main-filials__bottom" data-aos="fade-up" data-aos-duration="1500">
    <a class="main-filials__card where-buy btn-hover_parent" href="https://www.google.ru/?hl=ru">
        <a class="main-filials__card game btn-hover_parent" href="https://www.google.ru/?hl=ru" target="blank">

        <div class="main-filials__card-bg">
            <?php foreach ($arResult['ITEMS'] as $i => $item):?>
            <picture class="picture">
                <source type="image/webp" srcset="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
                <img class="picture__img" src="<?=$item["PREVIEW_PICTURE"]["SRC"]?>">
            </picture>
        </div>
        <div class="main-filials__card-top">
            <div class="main-filials__card-title"><?=$item["NAME"]?></div>
            <div class="main-filials__card-text"><?=$item["DETAIL_TEXT"]?></div>
        </div>

        <div class="main-filials__card-bot">
            <div class="main-filials__card-row">
                <div class="main-filials__card-icons short">
                    <picture class="picture">
                        <source type="image/webp" srcset="<?=SITE_TEMPLATE_PATH?>/assets/images/main-filials-card-icons2.webp">
                        <img class="picture__img" src="local/templates/exam_print/<?=SITE_TEMPLATE_PATH?>/assets/images/main-filials-card-icons2.png">
                    </picture>
                </div>
                <?php endforeach; ?>
                <div class="button button-arrow_right btn-hover_parent">
                    <div class="btn-hover_circle total-white"></div><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                        <path d="M1.77881 11.6197C1.77881 11.2055 2.1146 10.8697 2.52881 10.8697L12.7788 10.8697L12.7788 8.75503C12.7788 6.47297 15.398 5.18387 17.2063 6.57591L20.9276 9.44056C22.3576 10.5414 22.3576 12.698 20.9276 13.7988L17.2063 16.6634C15.398 18.0555 12.7788 16.7664 12.7788 14.4843L12.7788 12.3697L2.52881 12.3697C2.1146 12.3697 1.77881 12.0339 1.77881 11.6197Z" fill="#0068FF"></path>
                    </svg>
                </div>
            </div>
        </div>
    </a>

</div>
