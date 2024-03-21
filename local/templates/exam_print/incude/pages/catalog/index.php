<?php

if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true){
    exit;
}


$dir = $APPLICATION->GetCurDir();
$a =[];
$a = explode("/",$dir);
foreach($a as $element) {
    if(!empty($element)){
        $new_array[] = $element;
    }
}

if (isset($new_array[2])) {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/incude/pages/catalog/detail.php';
} elseif (isset($new_array[1])) {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/incude/pages/catalog/section.php';
} elseif (isset($new_array[0])) {
    include $_SERVER['DOCUMENT_ROOT'] . SITE_TEMPLATE_PATH . '/incude/pages/catalog/subsection.php';
}
