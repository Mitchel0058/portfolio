window.addEventListener('load', function () {
    blogCreate();
})

function blogCreate() {
    console.log('blogCreate js loaded successfully');
    const imgLink = document.getElementById('img_link');
    const imgLinkError = document.getElementById('img_linkError');
    console.log(imgLink)
    
    imgLink.addEventListener('input', () => {
        if (isImage(imgLink.value)) {
            imgLink.style = 'border-width: 3px; border-color: green';
            imgLinkError.innerHTML = "";
        } else {
            imgLink.style = 'border-width: 3px; border-color: red';
            imgLinkError.innerHTML = "Not an img";
        }
    });


}

function isImage(url) {
    return /\.(jpg|jpeg|png|webp|avif|gif|svg)$/.test(url);
}
