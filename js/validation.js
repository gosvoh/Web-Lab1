const borders = [];
borders["Y"] = ["-5", "3"];

function validate(form) {
    let Y = form.Y_parameter.value;
    let valid = false;

    if (validateParam(Y, "Y")) {
        valid = true;
    }

    return valid;
}

function validateParam(param, paramName) {
    if (!(!isNaN(Number(param)) && param.lastIndexOf('.') !== (param.length - 1))) { //Нафига тут param.lastIndexOf('.') !== (param.length - 1) ??
        showWarning(paramName + " должен быть числом", paramName);
        return false;
    } else {
        showWarning("", paramName);
    }
    let bottomBorder = borders[paramName][0];
    let topBorder = borders[paramName][1];

    if (!(Number(param) >= bottomBorder && Number(param) <= topBorder)) {
        showWarning(paramName + " не входит в необходимый диапазон [" + bottomBorder + " ... " + topBorder + "]", paramName);
        return false;
    } else {
        showWarning("", paramName);
    }

    return true;
}

function showWarning(Message, paramName) {
    let warningMessage = document.getElementById("warning-message-" + paramName);

    if (warningMessage != null) {
        warningMessage.textContent = Message;
        warningMessage.style.visibility = "visible";
    }

}