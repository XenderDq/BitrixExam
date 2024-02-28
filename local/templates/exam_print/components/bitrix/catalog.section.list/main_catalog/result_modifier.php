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
//foreach ($arResult['ITEMS'] as $i => $item) {
//    if (["DETAIL_PICTURE"]) {
//        $ID_PICTYRE1[$i] = $item["DETAIL_PICTURE"];
//    }
//    $URL1[$i] = CFile::GetPath($ID_PICTYRE1);
//    $arResult['ITEMS'][$i]['DETAIL_PICTURE'] = $URL1[$i];
//}
//echo '<pre>';
//var_dump($arResult);
//echo '</pre>';

$imagePath = CFile::GetPath($arResult['DETAIL_PICTURE']);
echo '<pre>';
var_dump($DETAIL_PICTURE);
echo '</pre>';