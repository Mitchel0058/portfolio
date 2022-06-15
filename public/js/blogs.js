window.addEventListener('load', function () {
    blogs();
})

function blogs() {
    console.log('blogs js loaded successfully');
    const imgLink = document.getElementById('img_link');
    const imgLinkError = document.getElementById('img_linkError');
    const imgPreview = document.getElementById('imgPreview');
    console.log(imgLink)

    imgLink.addEventListener('input', () => {
        if (imgLink.value === '') {
            imgLink.style = 'border: 0px;'
            imgLinkError.innerHTML = "";
        } else if (isImage(imgLink.value)) {
            imgLink.style = 'border-width: 3px; border-color: green';
            imgLinkError.innerHTML = "";
            imgPreview.src = imgLink.value;
        } else {
            imgLink.style = 'border-width: 3px; border-color: red';
            imgLinkError.innerHTML = "Not an img";
            imgPreview.src = '';
        }
    });
}

function isImage(url) {
    return /\.(jpg|jpeg|png|webp|avif|gif|svg)$/.test(url);
}
