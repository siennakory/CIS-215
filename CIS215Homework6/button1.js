let countButton = document.querySelector("button[id='counting-button']");
let count = 0;
let countstr = count.toString();

countButton.addEventListener("click",(event) => {
    count++;
    event.target.textContent = count;
});