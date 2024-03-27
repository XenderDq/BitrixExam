console.log(345);
document.addEventListener("DOMContentLoaded", function (e) {


});


// let forms = document.querySelectorAll('form[method="get"]');
//
// console.log (forms)
// const form = document.querySelector('[data-filter-form]');
// const targetNode = document.querySelector('select[data-handle-filter-select]');
// let initialSelected = 'unset';
// const config = { attributes: true };
//
// const observer = new MutationObserver((mutationsList, observer) => {
//     for(let mutation of mutationsList) {
//         if (mutation.attributeName === 'data-select2-id') {
//             const optionValue = getValueOfSelectedOption(mutation.target.querySelectorAll('option'));
//             console.log(`Option value is: ${optionValue}`);
//             if (initialSelected === 'unset') {
//                 initialSelected = optionValue;
//             } else if (initialSelected != optionValue) {
//                 observer.disconnect();
//                 form.submit();
//             }
//         }
//     }
// });
//
// observer.observe(targetNode, config);
//
// function getValueOfSelectedOption(options) {
//     for (const option of options) {
//         if (option.hasAttribute('data-select2-id')) {
//             return `${option.value}`;
//         }
//     }
//     return '';
// }

