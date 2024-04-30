<?php


use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';

header('Content-Type: application/json;  charset=UTF-8');

Loader::includeModule('iblock');

$jsonData = file_get_contents('php://input');

$jsonData = json_decode($jsonData, true);


$code = $jsonData["serverResponse111"];

echo '<pre>';
var_dump($jsonData["confirmation_code"]);
echo '</pre>';
$element = [];
$rsElement = CIBlockElement::GetList(
    false,
    [
           'IBLOCK_ID' => 6,
           "ACTIVE" => "Y",
           'CODE' => $code,
    ],
    false,
    false,
    [
        'ID',
        'NAME',
        'PREVIEW_TEXT',
        'DETAIL_TEXT'
    ]
);

while ($arData = $rsElement->GetNext()) {
    $element = $arData;
}

if ($element['DETAIL_TEXT']  == $jsonData["confirmation_code"]) {
    $el = new CIBlockElement;
    $record = array(
        "IBLOCK_ID" => 7,
        "NAME" => "Данные_из_формы_обращения",
        "PREVIEW_TEXT" => $element['PREVIEW_TEXT']
    );

    if (!$el->Add($record)) {
        $errors[] = $el->LAST_ERROR;
        echo json_encode(['errors' => $errors]);
        exit;
    }
}