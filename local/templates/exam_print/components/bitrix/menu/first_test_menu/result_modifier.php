<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) {
    die();
}


$half = ceil(count($arResult) / 2);

for ($i = 0; $i < 9; $i++ ) {

    if ($i<$half) {
        $arResult['FIRST'][] = $arResult[$i];
    } else {
        $arResult['SECOND'][] = $arResult[$i];
    }

}
