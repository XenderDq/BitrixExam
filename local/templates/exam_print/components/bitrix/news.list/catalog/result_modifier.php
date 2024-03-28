<?php

$rsData = CIBlockSection::GetList(
    [
        'SORT' => 'asc'
    ],
    [
        'SECTION_ID' => $arResult['SECTION']['PATH'][0]['ID'],
        'ACTIVE' => 'Y',
        'IBLOCK_ID' => $arParams['IBLOCK_ID'],
    ],
    [
        false
    ],
    [
        'ID',
        'NAME',
        'SECTION_PAGE_URL',
        'CODE',
    ]
);

while ($arData = $rsData->GetNext()) {
    $arResult['SUB_SECTIONS'][]= $arData;
}

$arResult['CURRENT_SECTION'] = end($arResult['SECTION']['PATH']);

foreach ($arResult['ITEMS'] as $key => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $newImage = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 362,
                'height' => 362
            ],
        );
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['WIDTH'] = $newImage['WIDTH'];
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
        $arResult['ITEMS'][$key]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
    }
}

$rsData = CIBlockElement::GetList(
    false,
    [
        '!PROPERTY_ZHIR' => false,
        'IBLOCK_ID' => 5,
        'INCLUDE_SUBSECTIONS' => 'Y',
        'SECTION_ID' => $arResult['CURRENT_SECTION']['ID']
    ],
    [
        'PROPERTY_ZHIR'
    ]
);

while ($arData = $rsData->GetNext()) {

    $arResult['ZHIR'][] = $arData['PROPERTY_ZHIR_VALUE'];
}

$brandId = [];
$rsData = CIBlockElement::GetList(
    false,
    [
        '!PROPERTY_BRANDS' => false,
        'IBLOCK_ID' => 5,
        'INCLUDE_SUBSECTIONS' => 'Y',
        'SECTION_ID' => $arResult['CURRENT_SECTION']['ID']
    ],
    [
        'PROPERTY_BRANDS'
    ]
);

while ($arData = $rsData->GetNext()) {
    $brandId[] = $arData['PROPERTY_BRANDS_VALUE'];
}

$rsData = CIBlockElement::GetList(
    [
        'NAME' => 'ASC'
    ],
    [
        'IBLOCK_ID' => 8,
        'ID' => $brandId,
    ],
    false,
    false,
    [
       'NAME',
        'ID'
    ]
);

if (!empty($brandId)) {
while ($arData = $rsData->GetNext()) {
   $arResult['BRAND'][] = $arData;
}
}


