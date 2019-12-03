$('.btn.crear-usuario').click(function () {
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");

    $(".lightbox-crear-usuario").css("visibility", "visible");
    $(".lightbox-crear-usuario").css("opacity", "1");
    $(".lightbox-crear-usuario").animate({
        top: "40",
    }, 200);
    $("html, body").animate({scrollTop: 0}, 800);
});

$('.btn.eliminar-usuario').click(function () {
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");

    $(".lightbox-eliminar-usuario").css("visibility", "visible");
    $(".lightbox-eliminar-usuario").css("opacity", "1");
    $(".lightbox-eliminar-usuario").animate({
        top: "40",
    }, 200);
    
    $(".lightbox-crear-usuario").css("visibility", "hidden");
    $(".lightbox-crear-usuario").css("opacity", "0");
    $(".lightbox-crear-usuario").animate({
        top: "40",
    }, 200);
    
    $("html, body").animate({scrollTop: 0}, 800);
});

