<?php
use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

header('Content-Type: application/json;  charset=UTF-8');
$code = rand(1,1);
$jsonData = file_get_contents('php://input');
if (!empty($jsonData['phone'])) {
    $phone = urlencode($jsonData['phone']);
    $url = "https://sms.ru/sms/send?api_id=3E609D03-FB45-0619-7B2D-ECAA6A08D59A&to=" . $jsonData$url = "https://sms.ru/sms/send?api_id=3E609D03-FB45-0619-7B2D-ECAA6A08D59A&to=" . $jsonData['phone'] . "&text=Ваш код подтверждения: " . $code;
    echo file_get_contents($url);
}
$confirmationCode = $_POST['confirmation_code'];
$response = [];
if ($confirmationCode == $code) {
    $response = ['success' => true];
    echo json_encode($response);
    exit;
} else {
    $response = array('success' => false, 'message' => 'Неверный код подтверждения');
}







