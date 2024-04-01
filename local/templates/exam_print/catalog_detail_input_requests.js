
const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
const phoneRegex = /^\+\d{1,2} \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
const nameRegex = /^[А-Яа-яЁё\s]+$/;
document.querySelector('.partners-requisites__form').addEventListener('submit', function(event) {
        event.preventDefault();
        let formData = new FormData(this);
        let convertedData = {};

        for (const [key, value] of formData.entries()) {
            convertedData[key] = value;
        }

        let jsonData = JSON.stringify(convertedData);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '/local/templates/exam_print/assets/ajax/catalog/requests_and_questions.php', true);
        xhr.setRequestHeader('Content-Type', 'application/json; windows-1251');
        xhr.onload = function() {
        if (xhr.status === 200) {
            console.log(jsonData);
        } else {
            console.log('Произошла ошибка при отправке формы: ' + xhr.status);
        }
    };

    let errorMessage = '';

    if (!emailRegex.test(document.getElementById('EmailID').value)) {
        errorMessage += 'Неверный формат электронной почты\n';
    } if (!phoneRegex.test(document.getElementById('PhoneID').value)) {
        errorMessage += 'Неверный формат телефона\n';
    } if (!nameRegex.test(document.getElementById('NameID').value)) {
        errorMessage += 'Неверный формат имени\n';
    }
    if (errorMessage === '') {
        xhr.send(jsonData);
    } else {
        alert(errorMessage);
    }
});


