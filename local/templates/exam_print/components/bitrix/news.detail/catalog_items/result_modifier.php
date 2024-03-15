<?php

$sectionsId = [];

$rsSections = CIBlockSection::GetList(
    [
        "ID" => "asc"
    ],
    [
        "SECTION_ID" => $arResult['SECTION']['PATH'][0]["ID"],
        "ACTIVE" => 'Y',
        "IBLOCK_ID" => 5,
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


$x = [];
foreach ($arResult['ITEMS'] as $i => $item) {
    $arResult['x']["VALUE"]= $item['PROPERTIES']['CENNOST']['VALUE'];
    $arResult['x']["DESCRIPTION"] = $item['PROPERTIES']['CENNOST']['VALUE'];

}

