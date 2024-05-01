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

if ($_SERVER['HTTP_X_REQUESTED_WITH'] != "AJAX" && $_SERVER["REQUEST_METHOD"] != "POST") {
    $errors[] = 'Неверный тип запроса';
    echo json_encode(['errors' => $errors , 'status' => false]);
    exit();
}

$jsonData = json_decode($jsonData, true);

$code = $jsonData["serverResponseWaitCode"];
$codeOfConfirm = $jsonData["confirmation_code"];

// на будущее
//if ($jsonData['sessid'] != bitrix_sessid()) {
//    $errors[] = 'Нет соответствий с сессией';
//    exit;
//}
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
        'CODE',
        'ID',
        'NAME',
        'PREVIEW_TEXT',
        'DETAIL_TEXT'
    ]
);

while ($arData = $rsElement->GetNext()) {
    $element = $arData;
}

if ($codeOfConfirm !== $element['DETAIL_TEXT']) {
    $errors[] = 'неправильный код или пустое поле';
    $rsElement = CIBlockElement::Delete(
        $element['ID']
    );
    echo json_encode(['errors' => $errors , 'status' => false]);
    exit;
}

    $el = new CIBlockElement;
    $record = array(
        "IBLOCK_ID" => 7,
        "NAME" => "Данные_из_формы_обращения",
        "PREVIEW_TEXT" => $element['PREVIEW_TEXT']
    );

    if (!$el->Add($record)) {
        $errors[] = $el->LAST_ERROR;
        echo json_encode(['errors' => $errors , 'status' => false]);
        exit;

}

$rsElement = CIBlockElement::Delete(
    $element['ID']
);

    echo json_encode(['status' => true]);
    exit;
