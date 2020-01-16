jQuery(document).ready(function ($) {

    $('#punishment-tab h3 a').click(function () {
        $('.p-tab').toggle();
        if ($('.p-tab:visible')) {
            $(this).addClass('tab-on');
        }
        else {
            $(this).removeClass('tab-on');
        }

        $('html, body').animate({
            scrollTop: $('#punishment').offset().top - 25
        }, 1500);
    });

    $( 'iframe' ).wrap( "<div class='responsive-video'></div>" );
});
