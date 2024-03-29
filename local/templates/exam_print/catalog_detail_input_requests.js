
    document.querySelector('.partners-requisites__form').addEventListener('submit', function(event) {
        let emailInput = document.getElementById('EmailID').value;
        let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
        let phoneRegex = /^\+\d{1,2} \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
        let phoneInput = document.getElementById('PhoneID').value;
        let nameRegex = /^[А-Яа-яЁё\s]+$/;
        let nameInput = document.getElementById('NameID').value;

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

    if (emailRegex.test(emailInput) && phoneRegex.test(phoneInput)&& nameRegex.test(nameInput)) {
        xhr.send(jsonData);
    } else {
        alert("Вы ввели неправильный формат данных, попробуйте еще! ");
    }

});

