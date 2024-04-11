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
        'ELEMENT_SUBSECTIONS' => 'Y'
    ],
    [
        'ID',
        'NAME',
        'SECTION_PAGE_URL',
        'CODE',
        'UF_CHARACT'
    ]
);
while ($arData = $rsData->GetNext()) {
    $arResult['SUB_SECTIONS'][$arData['ID']]= $arData;
}

$rsData = CIBlockSection::GetList(
    [
        'SORT' => 'asc'
    ],
    [
        'ID' => $arResult['SECTION']['PATH'][0]['ID'],
        'GLOBAL_ACTIVE' => 'Y',
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
        'UF_CHARACT'
    ]
);

while ($arData = $rsData->GetNext()) {
   $arResult['NEW_PROP'] = $arData['UF_CHARACT'];
}

foreach ($arResult['SUB_SECTIONS'] as $i => $item) {
    if (empty($item['UF_CHARACT'])) {
        $arResult['SUB_SECTIONS'][$i]['UF_CHARACT'] = $arResult['NEW_PROP'];
    }
}

    foreach ($arResult['ITEMS'] as $key => $item) {
        if (isset($item['IBLOCK_SECTION_ID']) && empty(!$item['IBLOCK_SECTION_ID'])) {
            $arResult["ITEMS"][$key]['PROPERTIES']['NEW_PROP'] = $arResult['SUB_SECTIONS'][$item['IBLOCK_SECTION_ID']]['UF_CHARACT'];
        }
    }

//$a = [];
//    $b = [];
//    $c = 1;
//    for ($i = 1; $i < 11; $i++) {
//
//        for ($j = 1; $j < 11; $j++) {
//            $c = $j*$i;
//           $a[$i][$j] = $c ;
//        }
//    }
//
//$students = [
//    [
//        'name' => 'Иван',
//        'math' => 'cool',
//        'physics' => 90,
//        'chemistry' => 78
//    ],
//    [
//        'name' => 'Оле',
//        'math' => 'bad',
//        'physics' => 3,
//        'chemistry' => 30
//    ],
//    [
//        'name' => 'Андрей',
//        'math' => 'false',
//        'physics' => 100,
//        'chemistry' => 50
//    ],
//];
//function compareNames($a, $b) {
//    return strcmp($a['name'], $b['name']);
//}
//
//// Сортируем массив по именам
//usort($students, 'compareNames');
//echo '<pre>';
//var_dump($students);
//echo '</pre>';
//
//
//
//$sr = 0;
//$s = [];
//foreach ($students as $i => $item) {
//    if (is_array($item)) {
//        $sr += array_sum($item) / count($item);
//        $s[] = $sr;
//    }
//}
function getAverageMark($student) {
    $sum = array_sum($student['marks']);
    $averageMark = $sum / count($student['marks']);
    return $averageMark;
}

$students = [
    ['name' => 'Ivan', 'surname' => 'Ivanov', 'group' => 1, 'marks' => [5, 4, 4, 5]],
    ['name' => 'Petr', 'surname' => 'Petrov', 'group' => 2, 'marks' => [3, 4, 5, 3]],
    // ...
];

// Получим средний балл первого студента
$student1 = $students[0];
$averageMark1 = getAverageMark($student1);
//echo "Average mark of the first student: $averageMark1\n";

// Получим средний балл второго студента
$student2 = $students[1];
$averageMark2 = getAverageMark($student2);
//echo "Average mark of the second student: $averageMark2\n";





$products = [
    ['name' => 'Product 1', 'price' => 100, 'category' => 'Electronics'],
    ['name' => 'Product 2', 'price' => 500, 'category' => 'Clothes'],
    ['name' => 'Product 3', 'price' => 5, 'category' => 'Clothes'],
    ['name' => 'Product 4', 'price' => 50, 'category' => 'Clothes'],
    ['name' => 'Product 5', 'price' => 5000, 'category' => 'Clothes'],
    ['name' => 'Product 6', 'price' => 530, 'category' => 'Clothes'],
    ['name' => 'Product 7', 'price' => 503, 'category' => 'Clothes'],
];

function getTopExpensiveProducts($products, $top) {
    $categories = [];

    foreach ($products as $product) {
        $categoryName = $product['category'];
        if (!isset($categories[$categoryName])) {
            $categories[$categoryName] = [];
        }
        $categories[$categoryName][] = $product;
    }

    $topProducts = [];

    foreach ($categories as $categoryName => $categoryProducts) {
        $prices = array_column($categoryProducts, 'price');
        array_multisort($prices, SORT_DESC, $categoryProducts);
        $topProducts[$categoryName] = array_slice($categoryProducts, 0, $top);
    }

    return $topProducts;
}

$top = 5;

$topProducts = getTopExpensiveProducts($products, $top);
//echo '<pre>';
//var_dump($topProducts);
//echo '</pre>';




$users = [
    ['name' => 'User 1', 'reg_date' => '2021-01-01', 'email' => 'user1@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-02-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-02-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-02-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-02-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-02-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-03-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-03-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-03-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-03-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-03-15', 'email' => 'user2@example.com'],
    ['name' => 'User 2', 'reg_date' => '2021-03-15', 'email' => 'user2@example.com']
];
    $a = [] ;
    $arr = [];
    $count= 0;
            foreach ($users as $i => $item) {
                $a = $item['reg_date'];
                while ($a === $item['reg_date']) {
                    $count++;
                }
                $arr[$item['reg_date']] = $count;
                break;
            }
$arr = array_unique($arr);
echo '<pre>';
var_dump($arr);
echo '</pre>';


/*
 Дан массив, содержащий информацию о пользователях сайта (имя, дата регистрации, email). Напишите функцию, которая вернет количество пользователей, зарегистрированных в каждый месяц.*/
//echo '<pre>';
//var_dump($a);
//echo '</pre>';

////////////////////////////////////////////////////
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





///////////////////
//
//$arF=Array(
//    'IBLOCK_ID' => 5,
//    "ID"=>$arResult['SECTION']['PATH'][0]['ID']
//);
//$db_list = CIBlockSection::GetList(
//    Array("SORT"=>"ASC"),
//    $arF,
//    false,
//    array("UF_*"));
//
//while($ar_result = $db_list->Fetch()) {
//    $arResult['UF_OF_CHAR'] = $ar_result['UF_CHARACT'];
//}
//
//foreach ($arResult['SUB_SECTIONS'] as $i => $item) {
//    $db_list = CIBlockSection::GetList(
//        Array("SORT"=>"ASC"),
//        [
//            'IBLOCK_ID' => 5,
//            "ID"=>$item['ID']
//        ],
//        false,
//        array("UF_*"));
//    while($ar_result = $db_list->Fetch()) {
//            $arResult['UF_CHARACT'][] = $arResult['UF_OF_CHAR'][$i];
//    }
//}
//$arResult['UF_CHARACT'] = array_filter($arResult['UF_OF_CHAR']);
//
//$a = [];
//$c = [];
//$b = [];
//
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $keys = array_keys($item['PROPERTIES']);
//}
//
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $keys = array_keys($item['PROPERTIES']);
//    if ($arResult['UF_OF_CHAR'][$i] != NULL) {
//        $ii = $arResult['UF_OF_CHAR'][$i];
//    }
//    foreach ($keys as $j => $item1) {
//        if ($item['PROPERTIES'][$item1]['NAME'] == $ii && $item['PROPERTIES'][$item1]['VALUE'] == $y[$j]){
//            $arResult['ITEMS'][$i]['PROPERTIES']['NEW_PROP'][] = $result[$j];
//        }
//    }
//}
//
//
//function scanArray($a) {
//    $result = [];
//    foreach ($a as $key => $value) {
//        if (is_array($value)) {
//            $result = array_merge($result, scanArray($value)); // объединяем результаты рекурсивного вызова функции с текущим результатом
//        } else {
//            if ($key === 'VALUE' || $key === 'NAME' || $key === 'DESCRIPTION') {
//                $result[] = [$key => $value];
//            }
//        }
//    }
//    return $result;
//}
//
//$result = scanArray($a);
//
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $firstElement = $arResult['UF_OF_CHAR'][$i];
//    foreach ($result as $j => $cItem) {
//        if ($cItem['NAME'] == $firstElement) {
//            $nextItem = $result[$j+1];
//            $b[] = $nextItem['VALUE'];
//        }
//    }
//}
//
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $firstElement = $arResult['UF_OF_CHAR'][$i];
//    foreach ($result as $j => $cItem) {
//        if ($cItem['NAME'] == $firstElement) {
//            $nextItem = $result[$j+2];
//            $b[] = $nextItem['DESCRIPTION'];
//        }
//    }
//}
//
//function filterEmptyStrings($b) {
//    return !empty($b);
//}
//$b = array_filter($b, 'filterEmptyStrings');
//
//
////
////echo '<pre>';
////var_dump($b);
////echo '</pre>';
//
//
//$middle = count($b) / 2;
//$firstHalf = array_slice($b, 0, $middle);
//$secondHalf = array_slice($b, $middle);
//
//$result = array_map(function($elem1, $elem2) {
//    return $elem1 . " " . $elem2;
//}, $firstHalf, $secondHalf);
//
//
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $keys = array_keys($item['PROPERTIES']);
//    $ii = '';
//    if ($arResult['UF_OF_CHAR'][$i] != NULL) {
//        $ii = $arResult['UF_OF_CHAR'][$i];
//    }
//    foreach ($keys as $key) {
//        if ($item['PROPERTIES'][$key]['NAME'] == $ii && !empty($item['PROPERTIES'][$key]['VALUE'])) {
//            if ($item['PROPERTIES'][$key]['VALUE'] == $y[$i]) {
//                $arResult['ITEMS'][$i]['PROPERTIES']['NEW_PROP'] = $result[$i];
//            }
//        }
//    }
//}
//
//foreach ($arResult['ITEMS'] as $i => $item) {
//    $keys = array_keys($item['PROPERTIES']);
//    if ($arResult['UF_OF_CHAR'][$i] != NULL) {
//        $ii = $arResult['UF_OF_CHAR'][$i];
//    }
//    foreach ($keys as $j => $item1) {
//        if ($item['PROPERTIES'][$item1]['NAME'] == $ii && $item['PROPERTIES'][$item1]['VALUE'] == $y[$j]){
//            $arResult['ITEMS'][$i]['PROPERTIES']['NEW_PROP'][] = $result[$j];
//        }
//    }
//}
//
