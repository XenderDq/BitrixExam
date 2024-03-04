<?php
if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
?>
            <div class="news-content__categories" data-aos="fade-up">
                <div class="news-content__categories-wrapper">
    <a class="news-content__categories-item <?if (!$arParams['CURRENT_SECTION_CODE']) :?>active<?endif;?> btn-hover_parent scale"  href="/news/">
        <div class="btn-hover_circle white"></div>
        <span>Все</span>
    </a>
<?php foreach ($arResult['SECTIONS'] as $i => $item):?>
    <a class="news-content__categories-item <?if ($arParams['CURRENT_SECTION_CODE'] == $item['CODE']) :?>active<?endif;?> btn-hover_parent scale"  href="<?=$item['SECTION_PAGE_URL']?>">
        <div class="btn-hover_circle white"></div>
        <span><?=$item["NAME"]?></span>
    </a>
<?php endforeach;?>
                </div>
            </div>

