<?php

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
foreach ($arResult['SECTIONS'] as $i => $value) {
    if (!empty($value['UF_BUTTONS_ACTIVITY'])) {
        $rsEnum = CUserFieldEnum::GetList(array(), array("ID" => $value["UF_BUTTONS_ACTIVITY"]));
        $arEnum = $rsEnum->GetNext();
        $arResult['SECTIONS'][$i]['UF_BUTTONS_ACTIVITY'] = $arEnum['VALUE'];
    }
}
foreach ($arResult['SECTIONS'] as $i => $value) {
    if (isset($_POST['button'])) {
        $value['UF_BUTTONS_ACTIVITY'] = 'Y';
    }
}
