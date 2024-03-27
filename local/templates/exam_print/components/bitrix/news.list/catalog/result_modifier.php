<?php

$sectionsId = [];

$rsSections = CIBlockSection::GetList(
    [
        "ID" => "asc"
    ],
    [
        "SECTION_ID" => $arResult['SECTION']['PATH'][0]["ID"],
        "ACTIVE" => 'Y',
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
    ],
    [
        false
    ],
    [
        "NAME",
        "SECTION_PAGE_URL",
        "CODE",
    ]
);

while ($res = $rsSections->GetNext()) {
    $arResult["SUB_SECTIONS"][]= $res;
}

if ($arResult['SECTION']['PATH'][1]) {
    $arResult['CURRENT_SECTION'] = $arResult['SECTION']['PATH'][1]['CODE'];
}

foreach ($arResult['ITEMS'] as $i => $item) {
    if ($item['PREVIEW_PICTURE']) {
        $newImage = CFile::ResizeImageGet(
            $item['PREVIEW_PICTURE']['ID'],
            [
                'width' => 362,
                'height' => 362
            ],
        );

        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['WIDTH'] = $newImage['WIDTH'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
        $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
    }
}

$rsSections23 = CIBlockElement::GetList(
    false,
    [
        "!property_ZHIR" => false,
        "IBLOCK_ID" => 5,
    ],

    [
        "PROPERTY_ZHIR"
    ]
);

while ($res23 = $rsSections23->GetNext()) {
    $arResult["ZHIR"][] = $res23["PROPERTY_ZHIR_VALUE"];

}

$arRes2 = CIBlockElement::GetList(
    false,
    [
        'IBLOCK_ID' => 8,
    ],
);

while ($res2 = $arRes2->GetNext()) {
    $arResult["BRAND"]["NAME"][] = $res2["NAME"];
    $arResult["BRAND"]["ID"][] = $res2["ID"];
}


$arResult["SECTION_NAME_PATH"] = end($arResult['SECTION']['PATH']);

$a =[];

$a = explode("/",$_SERVER['REQUEST_URI']);

foreach($a as $element) {
    if(!empty($element)){
        $new_array1[] = $element;
    }
}

$b = end($new_array1);

$b = $b[0];

if ($b == "?") {
    array_pop($new_array1);
}

$arResult["URLURLURL"] = implode("/",$new_array1);
$arrayOfCount = [];





