<?php
use Bitrix\Main\Application;
use Bitrix\Main\Context;
use Bitrix\Main\Request;
use Bitrix\Main\Server;
use Bitrix\Main\Loader;

require_once $_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php';
Loader::includeModule('iblock');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Форма отклика на вакансию</title>
    <script src="script.js"></script>
</head>
<body>
<form id="feedback-form" js-form>
    <input type="tel" name="phone" required>
    <input type="hidden" name="sms_code" id="sms_code">
    <button type="submit">Отправить</button>
</form>
<div id="sms_code_block" style="display:none;">
    <input type="text" id="user_sms_code" required>
    <button type="button" id="check_code_button">Проверить код</button>
</div>
<div id="error_message" style="display:none; color:red;"></div>
<script>

    let serverResponse;
    document.querySelector('[js-form]').addEventListener('submit', function(event) {
        event.preventDefault();
        let formData = new FormData(this);
        let convertedData = {};
        for (const [key, value] of formData.entries()) {
            convertedData[key] = value;
        }
        let jsonData = JSON.stringify(convertedData);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/exam_print/assets/ajax/ex/req.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json; utf-8');
        xhr.onload = function() {
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                let b = prompt('Введите код подтверждения, отправленный на ваш номер телефона:');
                handleServerResponse(response["a"], b); // вызываем коллбэк-функцию
            }
        };
        xhr.send(jsonData);
    });

    function handleServerResponse(response, b) {
        let ba = b;
        let serverResponse1 = response;
        let data = {
            confirmation_code: ba,
            serverResponse111: serverResponse1
        };
        let jsonData = JSON.stringify(data);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/exam_print/assets/ajax/ex/3.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.send(jsonData);
    }

</script>
</body>
</html>
