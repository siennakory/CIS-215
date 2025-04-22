const fontButton = document.querySelector("button[id='font-button']");

fontButton.addEventListener("click", (event) => {
    const fontSelect = document.querySelector("select[id='font-select']").value;
    document.body.style.fontFamily = fontSelect;
});