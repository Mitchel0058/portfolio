window.addEventListener('load', function () {
    footer();
})
function footer() {
    console.log('footer js loaded correctly');
    let footer = document.getElementById("footer");
    let pageHeight = document.body.offsetHeight;
    let windowHeight = window.innerHeight;

    if(pageHeight > windowHeight) {
        footer.style.top = `${pageHeight}px`;
    } else {
        footer.style.top = `${windowHeight.toString()}px`;
    }
}
