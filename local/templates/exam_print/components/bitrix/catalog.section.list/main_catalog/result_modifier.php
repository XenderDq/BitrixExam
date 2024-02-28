<?php

$length_of_arr = array_key_last($arResult['SECTIONS']);


foreach ($arResult['SECTIONS'] as $i => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $newImage = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 513.33,
                'height' => 308.33
            ],
            BX_RESIZE_IMAGE_PROPORTIONAL,
            true);
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['WIDTH'] = $newImage['width'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
    }
}
$length_of_arr = count($arResult["SECTIONS"]);

//foreach ($arResult['SECTIONS'] as $i => $item) {
//    if ($item['NAME']) {
//        $lenght_of_arr++;
//        $lene=$i;
//    }
//}
//$lenght_of_arr--;

//foreach ($arResult['SECTIONS'] as $i => $item) {
//    if ($item['NAME']) {
//        $lenght_of_arr++;
//    }
//}


//echo '<pre>';
//var_dump($lenght_of_arr);
//echo '</pre>';
//$lastElement = end($item["NAME"]);
//echo '<pre>';
//var_dump($lastElement);
//echo '</pre>';

//    echo '<pre>';
//    var_dump('work12');
//    echo '</pre>';
//    echo '<pre>';
//    var_dump($item);
//    echo '</pre>';

//    if (["DETAIL_PICTURE"]) {
//        $ID_PICTYRE1[$i] = $item["DETAIL_PICTURE"];
//    }
//    $URL1[$i] = CFile::GetPath($ID_PICTYRE1);
//    $arResult['ITEMS'][$i]['DETAIL_PICTURE'] = $URL1[$i];



//echo '<pre>';
//var_dump($arResult);
//echo '</pre>';
//
//$imagePath = CFile::GetPath($arResult['DETAIL_PICTURE']);
//echo '<pre>';
//var_dump($DETAIL_PICTURE);
//echo '</pre>';