<?php
//$rsSections = CIBlockSection::GetList(
//    [
//        "id"=>"asc"
//    ],
//    [
//        "IBLOCK_ID" => 5,
//
//    ]
//);
//
//$r = [];
//
//while ($arSction = $rsSections->Fetch()) {
//     if($arSction["IBLOCK_SECTION_ID"]==NULL)
//     {
//         $r[] = $arSction["NAME"];
//     }
//
//}
$arResult["CODE"] = $_REQUEST['SECTION_CODE'];

$arFilter = array('IBLOCK_ID' => 5, 'GLOBAL_ACTIVE' => 'Y', 'DEPTH_LEVEL' => 1);
$dbSections = CIBlockSection::GetList(array('ID' => 'ASC'), $arFilter);
while ($section = $dbSections->Fetch()) {
    $arResult['sections'][] = $section['NAME'];
}
$arSubFilter = array(
    'IBLOCK_ID' => 5,
    'DEPTH_LEVEL' => 2,
    'GLOBAL_ACTIVE' => 'Y',
    "SECTION_ID" => $arResult['VARIABLES']['SECTION_CODE']
);
$dbSubSections = CIBlockSection::GetList(
    array('ID' => 'ASC'),
    $arSubFilter);
while ($subSection = $dbSubSections->Fetch()) {
    $arResult['subSections'][] = $subSection['NAME'];
}
//$arSubFilterAvtive = array(
//    'IBLOCK_ID' => 5,
//    'GLOBAL_ACTIVE' => 'Y',
//    "CODE" => $_REQUEST['SECTION_CODE']
//);
//$dbSubSections = CIBlockSection::GetList(
//    array('ID' => 'ASC'),
//    $arSubFilterAvtive);
//while ($subSectionActive = $dbSubSections->Fetch()) {
//    $arResult['subSectionsActive'][] = $subSection['NAME'];
//}


//$rsSections = CIBlockSection::GetList(
//    array(),
//    array(
//            'IBLOCK_ID' => 5,
//
//         )
//);
//while ($arSection["SECTIONS"] = $rsSections->Fetch()) {
//echo '<pre>';
//var_dump($arSection["SECTIONS"]);
//echo '</pre>';
//    $if_of_active_part[] =  $arSection['ID'];
//}





$rsSections = CIBlockSection::GetList(["ID" => "asc"], ["IBLOCK_ID" => 5]);
$r = [];
while ($arSction = $rsSections->Fetch()) {
    $r[] = $arSction;
}

$arSubFilter = array(
    'IBLOCK_ID' => 5,
    'GLOBAL_ACTIVE' => 'Y',
    "CODE" => $_REQUEST['SECTION_CODE']
);

$t = [];
$dbSubSections = CIBlockSection::GetList(['ID' => 'ASC'], $arSubFilter);
while ($arSection = $dbSubSections->Fetch()) {
    $t[] = $arSection;
}


for ($i = 0; $i < count($r); $i++) {
    if ($r[$i]["IBLOCK_SECTION_ID"] == $t[0]["ID"]) {
        $arResult["x"][] = $r[$i]["NAME"];
    }
}








