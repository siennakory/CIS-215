const phone = document.querySelector("input[type='tel']");

console.log(phone);

phone.addEventListener("focus", (event) => {
    event.target.style.backgroundColor = "pink";
});

phone.addEventListener("blur", (event) => {
    event.target.style.backgroundColor = "";
});