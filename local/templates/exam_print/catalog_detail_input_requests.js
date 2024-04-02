
// const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
// const phoneRegex = /^\+\d{1,2} \(\d{3}\) \d{3}-\d{2}-\d{2}$/;
// const nameRegex = /^[А-Яа-яЁё\s]+$/;
//     document.querySelector('.partners-requisites__form').addEventListener('submit', function(event) {
//             event.preventDefault();
//             let formData = new FormData(this);
//
//             let convertedData = {};
//
//             for (const [key, value] of formData.entries()) {
//                 convertedData[key] = value;
//             }
    //     let jsonData = JSON.stringify(convertedData);
    //     let xhr = new XMLHttpRequest();
    //     xhr.open('POST', '/local/templates/exam_print/assets/ajax/catalog/requests_and_questions.php', true);
    //     xhr.setRequestHeader('Content-Type', 'application/json; windows-1251');
    //     xhr.onload = function() {
    //     if (xhr.status === 200) {
    //         console.log(jsonData);
    //     } else {
    //         console.log('Произошла ошибка при отправке формы: ' + xhr.status);
    //     }
    // };
    //
    // let errorMessage = '';
    //
    // if (!emailRegex.test(document.getElementById('EmailID').value)) {
    //     errorMessage += 'Неверный формат электронной почты\n';
    // } if (!phoneRegex.test(document.getElementById('PhoneID').value)) {
    //     errorMessage += 'Неверный формат телефона\n';
    // } if (!nameRegex.test(document.getElementById('NameID').value)) {
    //     errorMessage += 'Неверный формат имени\n';
    // }
    // if (errorMessage === '') {
    //     xhr.send(jsonData);
    // } else {
    //     alert(errorMessage);
    // }

//
//
// if (typeof BX == 'undefined') {
//     var BX = {};
// }
//
// if (typeof BX.ajax == 'undefined') {
//     BX.ajax = {};
// }
//
// (function() {
//     var script = document.createElement('script');
//     script.src = '/bitrix/js/main/core/core.js';
//     document.head.appendChild(script);
//
//     script.onload = function() {
//         BX.ajax.run();
//     };
// })();

document.querySelector('.partners-requisites__form').addEventListener('submit', function(event) {
    event.preventDefault();
    let formData = new FormData(this);
    let convertedData = {};

    for (const [key, value] of formData.entries()) {
        convertedData[key] = value;
    }

    let jsonData = JSON.stringify(convertedData);

    BX.ajax({
        url: '/local/templates/exam_print/assets/ajax/catalog/requests_and_questions.php',
        data: jsonData,
        method: 'POST',
        dataType: 'json',
        headers: {'Content-Type': 'application/json; charset=UTF-8'},
        onsuccess: function (data) {
            if ('errors' in data) {
                alert(data.errors.join('\n'));
            }
        }
    });

});