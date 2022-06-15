window.addEventListener('load', function () {
    footer();
})

function changeFooterPos() {
    const footer = document.getElementById("footer");
    const pageHeight = document.body.offsetHeight;
    const windowHeight = window.innerHeight;
    if (pageHeight > windowHeight) {
        footer.style.top = `${pageHeight + 25}px`;
    } else {
        footer.style.top = `${windowHeight}px`;
    }
}

function footer() {
    console.log('footer js loaded correctly');
    changeFooterPos()
    const resizeObserver = new ResizeObserver(() => changeFooterPos());
    resizeObserver.observe(document.body);
}
