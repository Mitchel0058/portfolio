window.addEventListener('load', function () {
    errorpages();
})

/**
 * Adds a random background image of either a dog or a cat
 * @param body the document body
 */
function changeBgImage(body) {
    if (Math.round(Math.random()) === 0) {
        console.log('cat')
        body.style.background = `url(http://placekitten.com/${window.innerWidth}/${window.innerHeight})`;
        document.getElementById('bgMessage').innerHTML += 'cat';

    } else {
        console.log('dog')
        body.style.background = `url(http://placedog.net/${window.innerWidth}/${window.innerHeight})`;
        document.getElementById('bgMessage').innerHTML += 'dog';
    }
    document.body.style.backgroundRepeat = 'no-repeat';
    document.body.style.backgroundSize = `${window.innerWidth}px ${window.innerHeight}px`;
}

/**
 * Hides the text element to show the bg img
 * @param hideText the clickable hidetext button
 * @param text the text to be hidden
 */
function hideTextElement(hideText, text) {
    hideText.addEventListener('click', () => {
        if (text.style.display === 'none') {
            hideText.innerText = 'Hide to view image';
            document.getElementById('text').style.display = '';
        } else {
            hideText.innerText = 'Show text';
            document.getElementById('text').style.display = 'none';
        }
    })
}

/**
 * Makes the text appear centered vertically
 */
function errorpages() {
    console.log('errorpages js loaded successfully');
    const errorpages = document.getElementById('errorpages');
    const text = document.getElementById('text');
    const body = document.body;
    const hideText = document.getElementById('hideText');
    const previousPage = document.getElementById('previousPage');

    errorpages.style.paddingTop = `${(window.innerHeight * 0.3).toString()}px`;
    changeBgImage(body);
    hideTextElement(hideText, text);
    previousPage.addEventListener('click', ()=>{window.history.back()})
}
