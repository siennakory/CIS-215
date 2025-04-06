const phone = document.querySelector("input[type='tel']");

$('input[type="tel"]').focus((event) => {
    event.target.style.backgroundColor = "red";
});

/*phone.addEventListener("focus", (event) => {
    event.target.style.backgroundColor = "red";
});

phone.addEventListener("input", (event) => {
    document.body.style.backgroundColor = "red";
});

phone.addEventListener("copy", (event) => {
    document.body.style.color = "red";
});
*/