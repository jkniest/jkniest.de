$(window).on('load', function ()
{
    $(window).scroll(function ()
    {
        let windowBottom = $(this).scrollTop() + $(this).innerHeight();

        $('.fade').each(function ()
        {
            let objectBottom = $(this).offset().top + $(this).outerHeight();

            if (objectBottom < windowBottom + 400) {

                if ($(this).css('opacity') == 0) {
                    $(this).fadeTo(500, 1);
                }

            }
        });
    }).scroll();
});
