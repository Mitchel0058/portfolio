window.addEventListener('load', function () {
    blogs();
})

function checkIfImg() {
    const imgLink = document.getElementById('img_link');
    const imgLinkError = document.getElementById('img_linkError');
    const imgPreview = document.getElementById('imgPreview');
    const previewMsg = document.getElementById('previewMsg');

    if (imgLink.value === '') {
        imgLink.style = 'border: 0px;'
        imgLinkError.innerHTML = ""
        previewMsg.setAttribute('hidden', false);
        imgPreview.setAttribute('hidden', false);
    } else if (isImage(imgLink.value)) {
        imgLink.style = 'border-width: 3px; border-color: green !important';
        imgLinkError.innerHTML = "";
        imgPreview.src = imgLink.value;
        previewMsg.removeAttribute('hidden');
        imgPreview.removeAttribute('hidden');
    } else if (isImage(imgLink.value)) {
        imgLink.style = 'border-width: 3px; border-color: red';
        imgLinkError.innerHTML = "Probably not an img, but if it loads correctly here it will still work.";
        imgPreview.src = imgLink.value;
        previewMsg.setAttribute('hidden', false);
        imgPreview.removeAttribute('hidden');
    } else if (!(isValidHttpUrl(imgLink.value))) {
        imgLinkError.innerHTML = 'Not an url.';
        imgLink.style = 'border-width: 3px; border-color: red';
        previewMsg.setAttribute('hidden', false);
        imgPreview.setAttribute('hidden', false);
    } else {
        imgLink.style = 'border: 0px;'
        imgLinkError.innerHTML = "An url, but probably not an img, but if it loads correctly here it will still work.";
        imgPreview.src = imgLink.value;
        previewMsg.setAttribute('hidden', false);
        imgPreview.removeAttribute('hidden');
    }
}

function blogs() {
    console.log('blogs js loaded successfully');
    checkIfImg();

    document.getElementById('img_link').addEventListener('input', () => {
        checkIfImg();
    });
}

function isImage(url) {
    return /\.(jpg|jpeg|png|webp|avif|gif|svg)$/.test(url);
}

function isValidHttpUrl(string) {
    let url;

    try {
        url = new URL(string);
    } catch (_) {
        return false;
    }

    return url.protocol === "http:" || url.protocol === "https:";
}
