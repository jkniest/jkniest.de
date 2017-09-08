let scrolling = undefined;

$( window ).scroll(function() {

    for(let box of $('.info-box')) {
        if (scrolling === undefined) {
            scrolling = $(box).offset().top;
        }

        let winScroll = $(window).scrollTop();

        const offset = -80;
        if (winScroll - offset >= scrolling && $(window).width() >= 1024) {
            $(box).addClass('is-fixed');
        } else {
            $(box).removeClass('is-fixed');
        }
    }

});
