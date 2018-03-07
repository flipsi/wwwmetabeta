$(function () {

    const FUNNY_PORTRAIT_DURATION = 900;
    const FUNNY_PORTRAIT_TIMEOUT_MIN = 5 * 1000;
    const FUNNY_PORTRAIT_TIMEOUT_MAX = 40 * 1000;
    const FUNNY_PORTRAIT_TIMOUT_FIRST = 3500;

    const $portraitRegular = $('.portrait .regular');
    const $portraitFun = $('.portrait .fun');

    $portraitRegular.css({'opacity': '0.0'});
    $portraitRegular.animate({'right': '20px', 'opacity': '1.0'}, 300);
    // location.reload(true);

    function randomInt(min, max) {
        return Math.floor(Math.random()*(max - min + 1) + min);
    }

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
