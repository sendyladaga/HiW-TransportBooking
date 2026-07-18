let captchaCode = "";

function generateCaptcha() {

    const chars =
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

    captchaCode = "";

    for(let i = 0; i < 6; i++) {
        captchaCode += chars.charAt(
            Math.floor(Math.random() * chars.length)
        );
    }

    document.getElementById("captchaText").innerText = captchaCode;
}

function checkCaptcha() {

    const userInput =
    document.getElementById("captchaInput").value;

    const message =
    document.getElementById("captchaMessage");

    if(userInput === captchaCode){
        message.innerHTML = "✅ CAPTCHA Verified!";
        message.style.color = "green";
    }
    else{
        message.innerHTML = "❌ Incorrect Code";
        message.style.color = "red";

        generateCaptcha();
    }
}

generateCaptcha();