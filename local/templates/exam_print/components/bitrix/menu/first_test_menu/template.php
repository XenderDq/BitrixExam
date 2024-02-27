<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}



?>
<div class="header-main__col left">
    <div class="header-main__navigation">
        <div class="header-main__navigation-col">
            <nav class="header-main__navigation-nav">
                <?php foreach ($arResult['FIRST'] as $item): ?>
                    <a class="header-main__navigation-link" href="<?=$item['LINK']?>"><?=$item['TEXT']?></a>
                <?php endforeach; ?>
            </nav>
        </div>
        <div class="header-main__navigation-col">
            <nav class="header-main__navigation-nav">

                <?php foreach ($arResult['SECOND'] as $item): ?>
                    <a class="header-main__navigation-link" href="<?=$item['LINK']?>"><?=$item['TEXT']?></a>
                <?php endforeach; ?>

        </div>
    </div>
</div>



