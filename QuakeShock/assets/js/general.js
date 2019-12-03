$('.darkbox').click(function () {

    $(".darkbox").css("visibility", "hidden");
    $(".darkbox").css("opacity", "0");

    $(".lightbox-login").css("visibility", "hidden");
    $(".lightbox-login").css("opacity", "0");
    $(".lightbox-login").animate({
        top: "+=100px",
    }, 200);

    $(".lightbox-registro").css("visibility", "hidden");
    $(".lightbox-registro").css("opacity", "0");
    $(".lightbox-registro").animate({
        top: "+=100px",
    }, 200);
    
    $(".lightbox-crear-usuario").css("visibility", "hidden");
    $(".lightbox-crear-usuario").css("opacity", "0");
    $(".lightbox-crear-usuario").animate({
        top: "+=100px",
    }, 200);
    
    $(".lightbox-eliminar-usuario").css("visibility", "hidden");
    $(".lightbox-eliminar-usuario").css("opacity", "0");
    $(".lightbox-eliminar-usuario").animate({
        top: "+=100px",
    }, 200);
});

function mostrarMensaje(mensaje) {
    $(".lightbox-msg").animate({
        top: "100px",
    }, 200);
    $(".x-msg").text(mensaje);
    $(".lightbox-msg").css("visibility", "visible");
    $(".lightbox-msg").css("opacity", "1");
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");

    setTimeout(function () {

        $(".lightbox-msg").animate({
            top: "+=100px",
        }, 200);
        $(".lightbox-msg").css("opacity", "0");
        $(".lightbox-msg").css("visibility", "hidden");
        $(".darkbox").css("visibility", "hidden");
        $(".darkbox").css("opacity", "0");
        $(".x-msg").text("");

    }, 2000);
}
function verLogin() {
    setTimeout(function () {
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
    }, 1000);
};

