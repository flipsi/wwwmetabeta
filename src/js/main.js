function randomInt(min, max) {
    return Math.floor(Math.random()*(max - min + 1) + min);
}

//////////////////////
// Background image //
//////////////////////

$(function () {

    const sessionStorageKey = 'background_image';
    const $img = $('img.background');
    const $toggleLink = $('a.toggle_background');

    function showBackgroundImage(saveToSession = true) {
        $img.show();
        if (saveToSession) window.sessionStorage.setItem(sessionStorageKey, true);
    }

    function hideBackgroundImage(saveToSession = true) {
        $img.hide();
        if (saveToSession) window.sessionStorage.setItem(sessionStorageKey, false);
    }

    const toggleBackgroundImage = () => $img.css('display') === 'none' ? showBackgroundImage() : hideBackgroundImage();
    $toggleLink.on('click', toggleBackgroundImage);

    console.log(window.sessionStorage.getItem(sessionStorageKey));
    if (window.sessionStorage.getItem(sessionStorageKey) === "true")
        showBackgroundImage();

});


//////////////////////////
// Bright or dark theme //
//////////////////////////

$(function () {

    const dayFrom = 8, dayUntil = 20;
    const sessionStorageKey = 'bright_or_dark';
    const stylesheet_bright = document.querySelector('.stylesheet_bright');
    const stylesheet_dark = document.querySelector('.stylesheet_dark');

    function setDark(saveToSession = false) {
        stylesheet_dark.disabled = false;
        stylesheet_bright.disabled = true;
        if (saveToSession) window.sessionStorage.setItem(sessionStorageKey, 'dark');
    }

    function setBright(saveToSession = false) {
        stylesheet_dark.disabled = true;
        stylesheet_bright.disabled = false;
        if (saveToSession) window.sessionStorage.setItem(sessionStorageKey, 'bright');
    }

    function chooseBasedOnDayTime() {
        const hours = new Date().getHours();
        const isNight = hours < dayFrom || dayUntil <= hours;
        console.log("It's " + (isNight ? "night" : "day") + ".");
        if (isNight) setDark(); else setBright();
    }

    switch (window.sessionStorage.getItem(sessionStorageKey)) {
        case 'dark': setDark(); break;
        case 'bright': setBright(); break;
        default: chooseBasedOnDayTime();
    }

    function toggleBrightAndDark() {
        const toBright = !stylesheet_dark.disabled;
        if (toBright) setBright(true); else setDark(true);
    }
    const $toggleLink = $('a.toggle_bright, a.toggle_dark');
    $toggleLink.on('click', toggleBrightAndDark);

});


////////////////////
// Funny portrait //
////////////////////

$(function () {

    const FUNNY_PORTRAIT_DURATION = 900;
    const FUNNY_PORTRAIT_TIMEOUT_MIN = 5 * 1000;
    const FUNNY_PORTRAIT_TIMEOUT_MAX = 40 * 1000;
    const FUNNY_PORTRAIT_TIMOUT_FIRST = 3500;

    const $portraitRegular = $('.portrait .regular');
    const $portraitFun = $('.portrait .fun');

    $portraitRegular.css({'opacity': '0.0'});
    $portraitRegular.animate({'right': '20px', 'opacity': '1.0'}, 300);

    function togglePortraits() {
        if ($portraitRegular.css('display') === 'none') {
            $portraitRegular.css({'display': 'block'});
            $portraitFun.css({'display': 'none'});
        } else {
            $portraitRegular.css({'display': 'none'});
            $portraitFun.css({'display': 'block'});
        }
    }

    function beFunnyOnceInAWhile() {
        togglePortraits();
        setTimeout(function() {
            togglePortraits();
        }, FUNNY_PORTRAIT_DURATION);
        setTimeout(beFunnyOnceInAWhile, randomInt(
            FUNNY_PORTRAIT_TIMEOUT_MIN,
            FUNNY_PORTRAIT_TIMEOUT_MAX));
    }
    setTimeout(beFunnyOnceInAWhile, FUNNY_PORTRAIT_TIMOUT_FIRST);

});


//////////////////
// Funny banana //
//////////////////

$(function () {

    const BANANA_DURATION = 4000;
    const BANANA_TIMEOUT_MIN = 5 * 1000;
    const BANANA_TIMEOUT_MAX = 10 * 1000;
    const BANANA_TIMOUT_FIRST = 5000;

    const $linklist = $('.links > ul');
    const $banana = $('#banana');

    $banana.remove();
    const numberOfLinks = $linklist.find('li').length; // without the banana

    let showBanana = false;

    function toggleBanana() {
        const $links = $linklist.find('li');
        if (showBanana = !showBanana) {
            const $randomLink = $($links.get(randomInt(0, numberOfLinks - 1)));
            $randomLink.css({'display': 'none'});
            $randomLink.after($banana);
        } else {
            $banana.remove();
            $links.css({'display': 'inline'});
        }
    }

    function showBananaOnceInAWhile() {
        toggleBanana();
        setTimeout(function() {
            toggleBanana();
        }, BANANA_DURATION);
        setTimeout(showBananaOnceInAWhile, randomInt(
            BANANA_TIMEOUT_MIN,
            BANANA_TIMEOUT_MAX));
    }
    setTimeout(showBananaOnceInAWhile, BANANA_TIMOUT_FIRST);

    $('.bananatoggle').on('click', () => toggleBanana());

});