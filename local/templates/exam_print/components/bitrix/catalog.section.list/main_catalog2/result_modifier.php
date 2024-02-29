 <?php

 foreach ($arResult['SECTIONS'] as $i => $item) {
     if ($item['PREVIEW_PICTURE']) {
         $newImage = CFile::ResizeImageGet(
             $item['PREVIEW_PICTURE']['ID'],
             [
                 'width' => 525,
                 'height' => 525
             ],
             BX_RESIZE_IMAGE_PROPORTIONAL,
             true);
         $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['WIDTH'] = $newImage['width'];
         $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['HEIGHT'] = $newImage['height'];
         $arResult['ITEMS'][$i]['PREVIEW_PICTURE']['SRC'] = $newImage['src'];
     }
 }

 foreach ($arResult['SECTIONS'] as $i => $value) {
     if (!empty($value['UF_123'])) {
         $rsEnum = CUserFieldEnum::GetList(array(), array("ID" => $value["UF_123"]));
         $arEnum = $rsEnum->GetNext();
         $arResult['SECTIONS'][$i]['UF_123'] = $arEnum['VALUE'];
     }
 }

 foreach ($arResult['SECTIONS'] as $i => $value) {
     if (!empty($value['DETAIL_PICTURE'])) {
         $arResult['SECTIONS'][$i]['DETAIL_PICTURE'] = CFile::GetPath($value['DETAIL_PICTURE']);
     }
 }
 foreach ($arResult['SECTIONS'] as $i => $value) {
     if (!empty($value['UF_PICTURE_FOR_MOBILE_VERSION'])) {
         $arResult['SECTIONS'][$i]['UF_PICTURE_FOR_MOBILE_VERSION'] = CFile::GetPath($value['UF_PICTURE_FOR_MOBILE_VERSION']);
     }
 }