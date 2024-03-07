<?php
$rsSections = CIBlockSection::GetList(
    [
        "id"=>"asc"
    ],
    [
        "IBLOCK_ID" => 5
    ]
);
$r = [];

while ($arSction = $rsSections->Fetch()) {
     if($arSction["IBLOCK_SECTION_ID"]==NULL)
     {
         $r = $arSction["NAME"];
         $t = $arSction["NAME"];
     }
}


