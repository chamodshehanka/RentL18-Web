/**
 * Created by PhpStorm.
 * User: chamodshehanka
 * Date: 7/18/2018
 * Time: 4:27 PM
 */
let lastKnownScrollY = 0;
let currentScrollY = 110;
let ticking = false;
const idOfHeader = 'header';
let eleHeader = null;
const classes = {
    pinned: 'header-pin',
    unpinned: 'header-unpin',
};
function onScroll() {
    currentScrollY = window.pageYOffset;
    requestTick();
}
function requestTick() {
    if (!ticking) {
        requestAnimationFrame(update);
    }
    ticking = true;
}
function update() {
    if (currentScrollY < lastKnownScrollY) {
        pin();
    } else if (currentScrollY > lastKnownScrollY) {
        unpin();
    }
    lastKnownScrollY = currentScrollY;
    ticking = false;
}
function pin() {
    if (eleHeader.classList.contains(classes.unpinned)) {
        eleHeader.classList.remove(classes.unpinned);
        eleHeader.classList.add(classes.pinned);
    }
}
function unpin() {
    if (eleHeader.classList.contains(classes.pinned) || !eleHeader.classList.contains(classes.unpinned)) {
        eleHeader.classList.remove(classes.pinned);
        eleHeader.classList.add(classes.unpinned);
    }
}
window.onload = function() {
    eleHeader = document.getElementById(idOfHeader);
    document.addEventListener('scroll', onScroll, false);
};