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
// Portrait image //
////////////////////

$(function () {

    const FUNNY_PORTRAIT_DURATION = 900;
    const FUNNY_PORTRAIT_TIMEOUT_MIN = 5 * 1000;
    const FUNNY_PORTRAIT_TIMEOUT_MAX = 40 * 1000;
    const FUNNY_PORTRAIT_TIMOUT_FIRST = 9500;

    const $portraitContainer = $('.portrait');
    const $portraitRegular = $('.portrait .regular');
    const $portraitFun = $('.portrait .fun');

    $portraitContainer.css({'opacity': '0.0'});
    $portraitContainer.animate({'right': '20px', 'opacity': '1.0'}, 300);

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


//////////////
// About Me //
//////////////

$(function () {

    const $main = $('.aboutme main');

    function setSmoothScroll(enabled = true) {
        $main.css('scroll-behavior', enabled ? 'smooth' : 'auto');
    }

    // Scroll horizontally, but don't jump down
    function scrollToArticle(hash, immediately = false) {
        const target = document.getElementById(hash.substr(1));
        const options = { behavior: immediately ? 'auto' : 'smooth' };
        if (typeof target.scrollIntoViewIfNeeded === 'function')
            target.scrollIntoViewIfNeeded(options);
        else target.scrollIntoView(options);
        window.scroll(top);
        history.pushState(null, null, hash);
    }

    // ... on page load if fragment given
    if (window.location.search == "?page=aboutme" && window.location.hash) {
        setSmoothScroll(false);
        scrollToArticle(window.location.hash, true);
        setSmoothScroll(true);
    }

    // ... on navi click
    $('.aboutme > nav a').on('click', function(event) {
        event.preventDefault();
        const hash = $(this).attr("href");
        scrollToArticle(hash);
    });

    // Toggle content of boxes on click
    const $interesting_boxes = $('.interesting_boxes > div');
    $interesting_boxes.find('.title').on('click', function(event) {
        const $target = $(event.target);
        $target.parent().toggleClass('active');
        $target.siblings('.description').slideToggle(400);
    });

});
