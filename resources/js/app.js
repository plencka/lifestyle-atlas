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

planUrlToClipboard = function($id) {
    let getUrl = window.location;
    let baseUrl = getUrl.protocol + "//" + getUrl.host + "/plan";
    let promise = navigator.clipboard.writeText(baseUrl + "/" + $id);
    promise.then(copySuccess, copyFail);
}
