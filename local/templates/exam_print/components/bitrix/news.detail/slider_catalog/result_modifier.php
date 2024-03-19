<?php
foreach ($arResult['PROPERTIES']['GALEREYA']['VALUE'] as $i => $img) {
    $arResult['PROPERTIES']['GALEREYA']['VALUE'][$i] = CFile::ResizeImageGet(
        $img,
        [
            'width' => 310,
            'height' => 310
        ]
    )['src'];
}

