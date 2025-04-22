const form = document.querySelector("form");
const submitter = document.querySelector("button[type='submit']")
const pwInput = document.querySelector("input[type='password']");

pwInput.addEventListener("keyup", passwordCheck);

async function passwordCheck(event){
    let pwMsg = document.querySelector("p[id='pw-message']");
    let formDataVar = new FormData(form, submitter);
    let userPassword = formDataVar.get("pw-name");

    const sendPW = await fetch(`password.php?password=${userPassword}`);
    console.log(sendPW);

    let checkResult = await sendPW.json();
    console.log(checkResult);
    
    pwMsg.textContent = checkResult["message"];
};