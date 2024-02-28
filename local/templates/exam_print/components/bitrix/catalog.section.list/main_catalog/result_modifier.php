<?php
foreach ($arResult['ITEMS'] as $i => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $newImage = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 513.33,
                'height' => 308.33
            ],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true);
    }
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['WIDTH'] = $newImage['width'];
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
    $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
}

