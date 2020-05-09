function randomInt(min, max) {
    return Math.floor(Math.random()*(max - min + 1) + min);
}

function ReLoadImages() {
    $('img[data-lazysrc]').each(function() {
        const $img = $(this);
        const src = $img.attr('data-lazysrc');
        $img.attr('src', src);
    });
}

document.addEventListener('readystatechange', event => {
    if (event.target.readyState === "interactive")
        ReLoadImages();
});

$(function () {
    const $imgBackground = $('img.background');
    const $toggleBackgroundLink = $('a.toggle_background');
    $toggleBackgroundLink.on('click', () => $imgBackground.toggle());
});


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
