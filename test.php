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
    <?=bitrix_sessid_post()?>
    <input type="tel" name="phone" required>

    <button type="submit">Отправить</button>
</form>

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
        xhr.setRequestHeader('X-Requested-With', 'AJAX');
        xhr.onload = function() {
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if (response.status === false) {
                    let errors = response.errors.join('\n');
                    alert(errors);
                } else {
                    handleServerResponse(response["a"]);
                }
            }
        };
        xhr.send(jsonData);
    });

    function handleServerResponse(response) {
        let answerOfPrompt = prompt('Введите код подтверждения, отправленный на ваш номер телефона:');
        let serverResponseCode = response;
        let data = {
            confirmation_code: answerOfPrompt,
            serverResponseWaitCode: serverResponseCode
        };
        let jsonData = JSON.stringify(data);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/exam_print/assets/ajax/ex/3.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.setRequestHeader('X-Requested-With', 'AJAX');
        xhr.onload = function() {
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if (response.status === true) {
                    alert("Успех");
                } else if (response.status === false) {
                    let errors = response.errors.join('\n');
                    alert(errors);
                }
            }
        };
        xhr.send(jsonData);
    }

</script>
</body>
</html>
