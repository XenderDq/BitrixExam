
let label = document.querySelector("#CATALOG_LABEL");
label.addEventListener('click', () => {
    const input  = label.querySelector('input')
    if (input.checked === true ) {
        document.getElementById('myForm').submit()
    }
})
