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

foreach ($arResult['ITEMS'] as $i => $value) {
        $res = CIBlockSection::GetList(array(), array("ID" => $value["IBLOCK_SECTION_ID"]));
        if ($ar_res = $res->GetNext()) {
            $sectionName = $ar_res['NAME'];
    }
    $arResult['ITEMS'][$i]['IBLOCK_SECTION_ID'] = $sectionName;
}
