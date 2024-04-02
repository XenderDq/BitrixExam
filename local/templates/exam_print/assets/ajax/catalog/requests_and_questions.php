<?php
use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';
header('Content-Type: application/json;  charset=UTF-8');
Loader::includeModule('iblock');

$jsonData = file_get_contents('php://input');
$jsonData1 = htmlspecialchars($jsonData);
$jsonData = json_decode($jsonData , true);

if (!preg_match($phoneRegex, $jsonData['Phone'])) {
    $errors[] = 'Неверный формат номера телефона';
}

if (!preg_match($emailRegex, $jsonData['Email'])) {
    $errors[] = 'Неверный формат электронной почты';
}

if (!preg_match($nameRegex, $jsonData['Name'])) {
    $errors[] = 'Неверный формат имени';
}

if (!empty($errors)) {
    echo json_encode(['errors' => $errors]);
    exit;
}

$el = new CIBlockElement;

$arLoadProductArray = array(
    "IBLOCK_ID"         => 9,
    "NAME" => "Данные_из_формы_обращения",
    "PREVIEW_TEXT"      => $jsonData1,
);

if ($PRODUCT_ID = $el->Add($arLoadProductArray)) {
    echo "New ID: ".$PRODUCT_ID;
} else {
    echo "Error: ".$el->LAST_ERROR;
}

