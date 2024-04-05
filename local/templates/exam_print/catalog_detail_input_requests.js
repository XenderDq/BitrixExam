
document.querySelector('[js-form]').addEventListener('submit', function(event) {
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
        headers: {
            'Content-Type': 'application/json; charset=UTF-8'
        },
        onsuccess: function (data) {
            if ('errors' in data) {
                alert(data.errors.join('\n'));
            }
        }
    });
});


