bootstrap = require('bootstrap');

function copySuccess() {
    let toast = document.getElementById('clipToast');
    if (toast) {
        new bootstrap.Toast(toast).show();
    }
}

function copyFail() {
    alert("Failed to copy to clipboard.");
}

planUrlToClipboard = function() {
    let getUrl = window.location;
    let baseUrl = getUrl.protocol + "//" + getUrl.host + "/plan";
    let promise = navigator.clipboard.writeText(baseUrl + "/0/My-Plan-Something-Placeholder");
    promise.then(copySuccess, copyFail);
}
