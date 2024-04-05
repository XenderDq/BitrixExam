<?php

$arRes = CIBlockElement::GetList(
    false,
    [
        'ID' => $arResult['PROPERTIES']['NEXT_ELEMENT']['VALUE'],
        'IBLOCK_ID' => 5,
    ],
    false,
    false,
    [
        'NAME',
        "PREVIEW_PICTURE",
        'DETAIL_PAGE_URL'
    ]
);
while ($res = $arRes->GetNext()) {
    $res['PREVIEW_PICTURE'] = CFile::ResizeImageGet(
        $res['PREVIEW_PICTURE'],
        [
            'width' => 362,
            'height' => 362,
        ]
    )['src'];
    $arResult["NEXT_ELEM"] = $res;
}
$arRes1 = CIBlockElement::GetList(
    false,
    [
        'ID' => $arResult['PROPERTIES']['BRANDS']['VALUE'],
        'IBLOCK_ID' => 8,
    ],
);

if ($res1 = $arRes1->GetNext()) {
    $arResult['PROPERTIES']['BRANDS']['VALUE'] = $res1["NAME"];
}

$arResult['SECTIONS_OF'] = [];
foreach ($arResult['SECTION']['PATH'] as $i => $item) {
    $arResult['SECTIONS_OF'][] =  $item['NAME'];
}

$arResult['SECTIONS_OF'] = implode('/', $arResult['SECTIONS_OF']);
