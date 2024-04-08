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
        if ($cItem['NAME'] == $firstElement && array_key_exists($j+1, $result)) {
            $nextItem = $result[$j+1];
            $b[] = $nextItem['VALUE'];
            $nextItem = $result[$j+1];
            $b [] = $nextItem['DESCRIPTION'];
        }
    }
}

function filterEmptyStrings($b) {
    return !empty($b);
}
$b = array_filter($b, 'filterEmptyStrings');

foreach ($arResult['ITEMS'] as $i => $item) {
    $firstElement = $arResult['ITEMS']['UF_OF_CHAR'][$i];
    foreach ($c as $j => $cItem) {
        if ($cItem['NAME'] == $firstElement) {
            $b[] = $cItem['NAME'];
        }
    }
}
echo '<pre>';
var_dump($b);
echo '</pre>';



//$b = array_filter($b);
//
//
//$matchingValues = [];
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $firstElement = $arResult['ITEMS']['UF_OF_CHAR'][$i];
//    foreach ($item["PROPERTIES"] as $property) {
//        if($firstElement == $property['NAME']) {
//            $matchingValues[] = $property['VALUE'];
//        }
//    }
//}




