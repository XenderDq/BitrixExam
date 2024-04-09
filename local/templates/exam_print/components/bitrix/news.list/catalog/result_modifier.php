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





/////////////////
$arF=Array(
    'IBLOCK_ID' => 5,
    "ID"=>$arResult['SECTION']['PATH'][0]['ID']
);
$db_list = CIBlockSection::GetList(
    Array("SORT"=>"ASC"),
    $arF,
    false,
    array("UF_*"));

while($ar_result = $db_list->Fetch()) {
    $arResult['ITEMS']['UF_OF_CHAR'] = $ar_result['UF_CHARACT'];
}
$counter = 0;
foreach ($arResult['SUB_SECTIONS'] as $i => $item) {
    $db_list = CIBlockSection::GetList(
        Array("SORT"=>"ASC"),
        [
            'IBLOCK_ID' => 5,
            "ID"=>$item['ID']
        ],
        false,
        array("UF_*"));
    while($ar_result = $db_list->Fetch()) {
        if (empty($ar_result['UF_CHARACT'])) {
            $arResult['UF_CHARACT'][] = $arResult['ITEMS']['UF_OF_CHAR'][$i];
        }if(!empty($ar_result['UF_CHARACT'])) {
            $counter = 1;
            goto end;
        }
    }
}

$arResult['UF_CHARACT'] = array_filter($arResult['UF_CHARACT']);

if ($counter == 1) {
    end:
foreach ($arResult['SUB_SECTIONS'] as $i => $item) {
    $db_list = CIBlockSection::GetList(
       [
           "SORT"=>"ASC"
       ],
        [
            'IBLOCK_ID' => 5,
            "ID"=>$item['ID']
        ],
        false,
        array("UF_*"));
    while($ar_result = $db_list->Fetch()) {
        $arResult['ITEMS']['UF_CHARACT'] = $arResult['ITEMS']['UF_OF_CHAR'][$i];
        }
    }
}

$arResult['ITEMS']['UF_CHARACT'] = $arResult['UF_CHARACT'];

echo '<pre>';
var_dump($arResult['ITEMS']['UF_CHARACT']);
echo '</pre>';

$a = [];
$c = [];
$b = [];
foreach ($arResult['ITEMS'] as $i => $item) {
    $a[] = $item['PROPERTIES'];
}

function scanArray($a) {
    $result = [];
    foreach ($a as $key => $value) {
        if (is_array($value)) {
            $result = array_merge($result, scanArray($value)); // объединяем результаты рекурсивного вызова функции с текущим результатом
        } else {
            if ($key === 'VALUE' || $key === 'NAME' || $key === 'DESCRIPTION') {
                $result[] = [$key => $value];
            }
        }
    }
    return $result;
}



$result = scanArray($a);



foreach ($arResult['ITEMS'] as $i => $item) {
    $firstElement = $arResult['ITEMS']['UF_OF_CHAR'][$i];
    foreach ($result as $j => $cItem) {
        if ($cItem['NAME'] == $firstElement) {
            $nextItem = $result[$j+1];
            $b[] = $nextItem['VALUE'];
        }
    }
}

foreach ($arResult['ITEMS'] as $i => $item) {
    $firstElement = $arResult['ITEMS']['UF_OF_CHAR'][$i];
    foreach ($result as $j => $cItem) {
        if ($cItem['NAME'] == $firstElement) {
            $nextItem = $result[$j+2];
            $b[] = $nextItem['DESCRIPTION'];
        }
    }
}
function filterEmptyStrings($b) {
    return !empty($b);
}
$b = array_filter($b, 'filterEmptyStrings');


$middle = count($b) / 2;
$firstHalf = array_slice($b, 0, $middle);
$secondHalf = array_slice($b, $middle);

$result = array_map(function($elem1, $elem2) {
    return $elem1 . " " . $elem2;
}, $firstHalf, $secondHalf);

echo '<pre>';
var_dump($result);
echo '</pre>';


