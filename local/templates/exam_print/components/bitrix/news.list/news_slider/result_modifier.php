<?php
foreach ($arResult['ITEMS'] as $i => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $newImage = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 525,
                'height' => 350
            ],
            BX_RESIZE_IMAGE_EXACT,
            true);
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['WIDTH'] = $newImage['width'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
    }
}

$sectionName = [];

$res = CIBlockSection::GetList(array(), array("IBLOCK_ID" => $arResult["ID"]));
while ($ar_res = $res->GetNext()) {
    $sectionName[$ar_res['ID']] = $ar_res['NAME'];
}

foreach ($arResult['ITEMS'] as $i => $value) {
    if (isset($value['IBLOCK_SECTION_ID']) && isset($sectionName[$value['IBLOCK_SECTION_ID']])) {
        $arResult['ITEMS'][$i]['IBLOCK_SECTION_ID'] = $sectionName[$value['IBLOCK_SECTION_ID']];
    }
}
