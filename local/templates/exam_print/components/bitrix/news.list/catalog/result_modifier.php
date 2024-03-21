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

$rsSections1 = CIBlockElement::GetList(
    false,
    [
        "IBLOCK_ID" => 8,
    ],
);

$arRes2 = CIBlockElement::GetList(
    false,
    [
        'ID' => $arResult['PROPERTIES']['BRANDS']['VALUE'],
        'IBLOCK_ID' => 8,
    ],
);

while ($res2 = $arRes2->GetNext()) {
    $arResult["BRAND"][] = $res2["NAME"];
}

foreach ($arResult['ITEMS'] as $i => $item) {
    $arResult['ITEMS'][$i]['PROPERTIES']['BRANDS']['VALUE'] = $arResult["BRAND"][$i];
}

$arResult["SECTION_NAME_PATH"] = end($arResult['SECTION']['PATH']);

if (isset($_GET['top1'])) {
    $arResult["FILTERED"][] = $_GET['top1'];
} else {
    $arResult["FILTERED"][] = 0;
} if (isset($_GET['top2'])) {
    $arResult["FILTERED"][] = $_GET['top2'];
} else {
    $arResult["FILTERED"][] = 0;
} if (isset($_GET['top'])) {
    $arResult["FILTERED"][] = "Y";
} else {
    $arResult["FILTERED"][] = 0;
}

$arFilter = $arResult["FILTERED"];

$t = [];

if ($arResult["FILTERED"][1] != 0) {
    foreach($arResult['ITEMS'] as $i => $item) {
        if ($item['PROPERTIES']['ZHIR']['VALUE'] == $arResult["FILTERED"][1]) {
            $t[] = $item;
        }
    }
}

if ($arResult["FILTERED"][0] != 0) {
    foreach($arResult['ITEMS'] as $i => $item) {
        if ($item['PROPERTIES']['BRANDS']['VALUE'] == $arResult["FILTERED"][0]) {
            $t[] = $item;
        }
    }
}

if ($arResult["FILTERED"][2] != 0) {
    foreach($arResult['ITEMS'] as $i => $item) {
        if ($item['PROPERTIES']['LABEL_CATALOG']['VALUE'] == $arResult["FILTERED"][2]) {
            $t[] = $item;
        }
    }
}

$arResult["ONE"] = $t;



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
    $a34 = array_pop($new_array1);
}

$arResult["URLURLURL"] = implode("/",$new_array1);
