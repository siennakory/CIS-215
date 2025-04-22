const colorButton = document.querySelector("button[id='color-button']");

colorButton.addEventListener("click", (event) => {
    let colorInput = document.querySelector("input[id='color-input']").value;
    document.body.style.backgroundColor = colorInput;
});