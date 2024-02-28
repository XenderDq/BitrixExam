<?php
foreach ($arResult['ITEMS'] as $i => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $newImage = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 1610,
                'height' => 665
            ],
            $item['DETAIL_PICTURE']['ID'],
            [
                'width' => 1000,
                'height' => 670
            ],
            BX_RESIZE_IMAGE_EXACT,
            true);
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['WIDTH'] = $newImage['width'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
    }
    if ($item['DETAIL_PICTURE']) {
        $newImage1 = CFile::ResizeImageGet(
            $item['DETAIL_PICTURE']['ID'],
            [
                'width' => 1000,
                'height' => 670
            ],
            BX_RESIZE_IMAGE_EXACT,
            true);
        $arResult['ITEMS'][$i]['DETAIL_PICTURE']['WIDTH'] = $newImage1['width'];
        $arResult['ITEMS'][$i]['DETAIL_PICTURE']['HEIGHT'] = $newImage1['height'];
        $arResult['ITEMS'][$i]['DETAIL_PICTURE']['SRC'] = $newImage1['src'];
    }
}

