$('.btn.login').click(function () {
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");

    $(".lightbox-registro").css("visibility", "hidden");
    $(".lightbox-registro").css("opacity", "0");
    $(".lightbox-registro").animate({
        top: "+=100",
    }, 200);

    $(".lightbox-login").css("visibility", "visible");
    $(".lightbox-login").css("opacity", "1");
    $(".lightbox-login").animate({
        top: "40",
    }, 200);
    $("html, body").animate({scrollTop: 0}, 800);
});

$('.btn.registro').click(function () {

    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");

    $(".lightbox-registro").css("visibility", "visible");
    $(".lightbox-registro").css("opacity", "1");
    $(".lightbox-registro").animate({
        top: "40",
    }, 200);

    $(".lightbox-login").css("visibility", "hidden");
    $(".lightbox-login").css("opacity", "0");
    $(".lightbox-login").animate({
        top: "+=100",
    }, 200);

    $("html, body").animate({scrollTop: 0}, 800);
});


$(".no-registrado-link").click(function () {
    $(".lightbox-login").css("visibility", "hidden");
    $(".lightbox-login").css("opacity", "0");
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-registro").css("visibility", "visible");
    $(".lightbox-registro").css("opacity", "1");
});
$(".ya-registrado-link").click(function () {
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
    $(".lightbox-login").css("visibility", "visible");
    $(".lightbox-login").css("opacity", "1");
    $(".lightbox-registro").css("visibility", "hidden");
    $(".lightbox-registro").css("opacity", "0");
});
$('#login-form').parsley();
$('#registro-form').parsley();

