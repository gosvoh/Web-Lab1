{
    setCurrentTime();
    setInterval(setCurrentTime, 1000);
}

function setCurrentTime() {
    let options = {
        weekday: 'long', year: 'numeric', month: 'long', day: 'numeric',
        hour: 'numeric', minute: 'numeric', second: 'numeric',
        hour12: false
    };

    let currentTimeElement = document.getElementById("current-time");
    if (currentTimeElement != null) {
        //https://developer.mozilla.org/ru/docs/Web/JavaScript/Reference/Global_Objects/DateTimeFormat
        currentTimeElement.textContent = new Intl.DateTimeFormat("ru-RU", options).format(Date.now());
    }
}