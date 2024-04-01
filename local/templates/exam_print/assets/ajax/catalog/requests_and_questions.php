<?php

use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

header('Content-Type: application/json; windows-1251');

Loader::includeModule('iblock');

$jsonData = file_get_contents('php://input');
$jsonData = htmlspecialchars($jsonData);

$el = new CIBlockElement;

$arLoadProductArray = array(
    "IBLOCK_ID"         => 9,
    "NAME" => "Данные_из_формы_обращения",
    "PREVIEW_TEXT"      => $jsonData,
);
if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {
    echo "New ID: ".$PRODUCT_ID;
}
else
    echo "Error: ".$el->LAST_ERROR;
