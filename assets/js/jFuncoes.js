$(document).ready(function () {
    $("#close").click(function () {
        $("#aviso").hide();
        window.location.href = "http://canaan.com.br"
    });
});

// Script Scroll OnPage
$(document).ready(function() {
    $(document).on("scroll", onScroll);
    $('.scrollink').on('click', function(e) {
        e.preventDefault();
        $(document).off("scroll");
        $('.scrollink').each(function() {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 500, 'swing', function() {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event) {
    var scrollPos = $(document).scrollTop();
    $('#menuCenter .scrollink').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menuCenter ul li .scrollink').removeClass("active");
            currLink.addClass("active");
        } else {
            currLink.removeClass("active");
        }
    });
}

$(function() {
    $('.nome').clear();
    $('.email').clear();
    $('.phone').clear();
    $('.ass').clear();
    $('.msg').clear();

    $('.btn_enviar').on('click', function() {
        var n, e, t, a, m;
        var msg = "";
        n = $('.nome').val();
        e = $('.email').val();
        t = $('.phone').val();
        a = $('.ass').val();
        m = $('.msg').val();
    });

});

