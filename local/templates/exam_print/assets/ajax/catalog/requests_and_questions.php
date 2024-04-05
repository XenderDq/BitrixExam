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

if ($_SERVER['HTTP_BX_AJAX'] == "false" && $_SERVER["REQUEST_METHOD"] != "POST") {
    $errors[] = 'Неверный тип запроса';
    exit();
}

$phoneRegex = '/^\+\d{1,2} \(\d{3}\) \d{3}-\d{2}-\d{2}$/';
$emailRegex = '/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/';
$nameRegex = '/^[А-Яа-яЁё\s]+$/u';

$jsonData = json_decode($jsonData , true);

if ($jsonData['sessid'] !=bitrix_sessid()) {
    $errors[] = 'Нет соответствий с сессией';
    exit;
}

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

$string_quest = "";
foreach($jsonData as $i => $item) {
    $string_quest =  $string_quest . $i . ":" . $item;
    $string_quest = $string_quest . "\n";

}
$string_quest = htmlspecialchars($string_quest);
$el = new CIBlockElement;

$questions_record = array(
    "IBLOCK_ID" => 9,
    "NAME" => "Данные_из_формы_обращения",
    "PREVIEW_TEXT" => $string_quest,
);

if (!$el->Add($questions_record)) {
    $errors[] = $el->LAST_ERROR;
    echo json_encode(['errors' => $errors]);
    exit;
}

echo json_encode(['success' => "200 ok"]);
exit;