<?php

require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');
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
        xhr.send(jsonData);
        let  confirmationCode = prompt('Введите код подтверждения, отправленный на ваш номер телефона:');
        sendConfirmationCode(confirmationCode);
    });
    function sendConfirmationCode(confirmationCode) {
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/exam_print/assets/ajax/ex/req.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                    let response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        alert('Форма отправлена успешно!');
                    } else {
                        alert('Неверный код!');
                    }
            }
        };
        xhr.send('confirmation_code=' + confirmationCode);
    }
</script>
</body>
</html>