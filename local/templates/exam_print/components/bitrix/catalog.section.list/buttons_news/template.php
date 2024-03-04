<?php
if ( ! defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();

}

?>
<?php foreach ($arResult['SECTIONS'] as $i => $item):?>
    <?php if ($item['UF_BUTTONS_ACTIVITY'] == 'Y'):?>
<a class="news-content__categories-item active btn-hover_parent scale"  href="#">
    <div class="btn-hover_circle white"></div>
    <span><?=$item["NAME"]?></span>
    <?php else:?>
    <a class="news-content__categories-item btn-hover_parent scale"  href="#">
    <div class="btn-hover_circle white"></div>
    <span><?=$item["NAME"]?></span>
    <?php endif;?>
</a>
<?php endforeach;?>