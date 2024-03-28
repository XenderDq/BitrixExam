<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
use Bitrix\Main\Application,
    Bitrix\Main\Context,
    Bitrix\Main\Request,
    Bitrix\Main\Server,
    Bitrix\Main\Loader;
header('Content-type: application/json');

Loader::includeModule('iblock');
$data  = '';
$jsonData = file_get_contents('php://input');
 $stringData = json_encode($jsonData);

$el = new CIBlockElement;

$arLoadProductArray = array(
    "IBLOCK_ID"         => 9,
    "NAME" => "ДАнные",
    "PREVIEW_TEXT"      => $stringData,
);

if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {
    echo "New ID: ".$PRODUCT_ID;
}
else
    echo "Error: ".$el->LAST_ERROR;
