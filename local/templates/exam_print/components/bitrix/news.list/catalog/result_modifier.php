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

if (isset($_GET['BRANDS'])) {
    foreach ($arResult["BRAND"]["ID"] as $i => $item) {
        if ($item == $_GET['BRANDS']) {
            $arRes2 = CIBlockElement::GetList(
                false,
                [
                    'IBLOCK_ID' => 8,
                ],
            );
            while($res2 = $arRes2->GetNext()) {
                $arResult["FILTERED"]["NAME"][] = $res2["NAME"];
            }
        }
    }
    foreach ($arResult["BRAND"]["ID"] as $i => $item) {
        if ($item == $_GET['BRANDS']) {
            $arResult["FILTERED"][] = $arResult["FILTERED"]['NAME'][$i];
        }
    }
} else {
    $arResult["FILTERED"][] = 0;
} if (isset($_GET['ZHIR'])) {
    $arResult["FILTERED"][] = $_GET['ZHIR'];
} else {
    $arResult["FILTERED"][] = 0;
} if (isset($_GET['CATALOG_LABEL'])) {
    $arResult["FILTERED"][] = "Y";
} else {
    $arResult["FILTERED"][] = 0;
}if (isset($_GET['Sorting'])) {
    $arResult["FILTERED"][] = $_GET['top3'];
} else {
    $arResult["FILTERED"][] = 0;
}

$t = [];

//if ($arResult["FILTERED"][1] != 0) {
//    foreach($arResult['ITEMS'] as $i => $item) {
//        if ($item['PROPERTIES']['ZHIR']['VALUE'] == $arResult["FILTERED"][1]) {
//            $t[] = $item;
//        }
//    }
//}
//
//if ($arResult["FILTERED"][0] != 0) {
//    foreach($arResult['ITEMS'] as $i => $item) {
//        if ($item['PROPERTIES']['BRANDS']['VALUE'] == $arResult["FILTERED"][0]) {
//            $t[] = $item;
//        }
//    }
//}
//
//if ($arResult["FILTERED"][2] != 0) {
//    foreach($arResult['ITEMS'] as $i => $item) {
//        if ($item['PROPERTIES']['LABEL_CATALOG']['VALUE'] == $arResult["FILTERED"][2]) {
//            $t[] = $item;
//        }
//    }
//}

foreach ($arResult['ITEMS'] as $i => $item) {
    $arrayOfCount [] = $item['SHOW_COUNTER'];
}

//rsort($arrayOfCount);
//$ppp = count($arrayOfCount);
//$uniqueArr = array_unique($arrayOfCount);
//if ($arResult["FILTERED"][3] != 0) {
//    for ($i = 0; $i < $ppp; $i++) {
//        foreach ($arResult['ITEMS'] as $j => $item) {
//            if ($uniqueArr[$i] == $item["SHOW_COUNTER"]) {
//                $t[] = $item["SHOW_COUNTER"];
//            }
//        }
//    }
//}

//
//$arResult["ONE"] = $t;
//$_GET['top3'] = $arResult["ONE"];



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
$arrayOfCount = [];





