const elRadio = document.querySelector("input[id='js-topic-eventlisteners']");
const jqRadio = document.querySelector("input[id='js-topic-jquery']");
const fRadio = document.querySelector("input[id='js-topic-fetch']");
const otherRadio = document.querySelector("input[id='js-topic-other']");
let currentRadio = "";
let clickstatus = 0;

otherRadio.addEventListener("click", (event) => {
    currentRadio = "other";
    checkRadio(currentRadio);
});
elRadio.addEventListener("click", (event) => {
    currentRadio = "existing";
    checkRadio(currentRadio);
});
jqRadio.addEventListener("click", (event) => {
    currentRadio = "existing";
    checkRadio(currentRadio);
});
fRadio.addEventListener("click", (event) => {
    currentRadio = "existing";
    checkRadio(currentRadio);
});

async function checkRadio(currentRadio){
    const sendRadio = await fetch(`other.php?radio=${currentRadio}`);
    console.log(sendRadio);

    let checkRadio = await sendRadio.json();
    console.log(checkRadio);

    let addDelete = checkRadio["addDelete"];

    if (addDelete == "add"){
        addTextBox();
    } else if (addDelete == "delete"){
        deleteTextBox();
    };
};

function addTextBox(){
    if (clickstatus == 0){
        const tbInput = document.createElement("input");

        tbInput.setAttribute("name", "js-topic");
        tbInput.setAttribute("type", "text");
        tbInput.setAttribute("id", "js-topic-other-tb");

        console.log(tbInput);
    
        const currentElement = document.querySelector("label[id='other-label']");
    
        currentElement.after(tbInput)
        clickstatus++;
    };
};

function deleteTextBox(){
    clickstatus = 0;
    const tbInput = document.querySelector("input[id='js-topic-other-tb']");
    tbInput.remove();
};