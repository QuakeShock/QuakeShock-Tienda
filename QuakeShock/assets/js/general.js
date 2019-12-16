
function cerrarTodo() {
    ocultarMsg();
    ocultarDarkbox();
    
    ocultarLogin();
    ocultarRegistro();
    
    ocultarCrearUsu();
    ocultarEliminarUsu();
    //ocultarBuscarUsu();
    //ocultarModificarProd();

    ocultarCrearCat();
    ocultarEliminarCat();

    ocultarCrearProd();
    ocultarEliminarProd();
    ocultarModificarProd();
    //ocultarBuscarProd();
}

//--------------------------------CAJA NEGRA DE FONDO-------------------------------

$('.darkbox').click(function () {
    cerrarTodo();
});

function verDarkbox() {
    $(".darkbox").css("visibility", "visible");
    $(".darkbox").css("opacity", "0.7");
}

function ocultarDarkbox() {
    $(".darkbox").css("visibility", "hidden");
    $(".darkbox").css("opacity", "0");
}

//--------------------------------LIGHTBOX MENSAJE-------------------------------

function mostrarMensaje(mensaje) {
    $(".lightbox-msg").animate({
        top: "100px",
    }, 200);
    $(".x-msg").text(mensaje);
    $(".lightbox-msg").css("visibility", "visible");
    $(".lightbox-msg").css("opacity", "1");
    verDarkbox();

    setTimeout(function () {

        $(".lightbox-msg").animate({
            top: "+=100px",
        }, 200);
        $(".lightbox-msg").css("opacity", "0");
        $(".lightbox-msg").css("visibility", "hidden");
        ocultarDarkbox();
        $(".x-msg").text("");

    }, 2000);
}

function ocultarMsg() {
    $(".lightbox-msg").css("visibility", "hidden");
    $(".lightbox-msg").css("opacity", "0");
}

//--------------------------------LIGHTBOX LOGIN-------------------------------

function verLogin() {
        $(".lightbox-login").css("visibility", "visible");
        $(".lightbox-login").css("opacity", "1");
        $(".lightbox-login").animate({
            top: "40",
        }, 200);
}

function ocultarLogin() {
    $(".lightbox-login").css("visibility", "hidden");
    $(".lightbox-login").css("opacity", "0");
    $(".lightbox-login").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX REGISTRO-------------------------------

function verRegistro() {
    $(".lightbox-registro").css("visibility", "visible");
    $(".lightbox-registro").css("opacity", "1");
    $(".lightbox-registro").animate({
        top: "40",
    }, 200);
}

function ocultarRegistro() {
    $(".lightbox-registro").css("visibility", "hidden");
    $(".lightbox-registro").css("opacity", "0");
    $(".lightbox-registro").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX CREAR USUARIO-------------------------------

function verCrearUsu(){
    $(".lightbox-crear-usuario").css("visibility", "visible");
    $(".lightbox-crear-usuario").css("opacity", "1");
    $(".lightbox-crear-usuario").animate({
        top: "40",
    }, 200);
}

function ocultarCrearUsu() {

    $(".lightbox-crear-usuario").css("visibility", "hidden");
    $(".lightbox-crear-usuario").css("opacity", "0");
    $(".lightbox-crear-usuario").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX ELIMINAR USUARIO-------------------------------

function verEliminarUsu() {
    $(".lightbox-eliminar-usuario").css("visibility", "visible");
    $(".lightbox-eliminar-usuario").css("opacity", "1");
    $(".lightbox-eliminar-usuario").animate({
        top: "40px",
    }, 200);
}

function ocultarEliminarUsu() {
    $(".lightbox-eliminar-usuario").css("visibility", "hidden");
    $(".lightbox-eliminar-usuario").css("opacity", "0");
    $(".lightbox-eliminar-usuario").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX CREAR PRODUCTO-------------------------------

function verCrearProd(){
    $(".lightbox-crear-producto").css("visibility", "visible");
    $(".lightbox-crear-producto").css("opacity", "1");
    $(".lightbox-crear-producto").animate({
        top: "40px",
    }, 200);
}

function ocultarCrearProd() {
    $(".lightbox-crear-producto").css("visibility", "hidden");
    $(".lightbox-crear-producto").css("opacity", "0");
    $(".lightbox-crear-producto").animate({
        top: "+=100px",
    }, 200);
}


//--------------------------------LIGHTBOX ELIMINAR PRODUCTO-------------------------------

function verEliminarProd(){
    $(".lightbox-eliminar-producto").css("visibility", "visible");
    $(".lightbox-eliminar-producto").css("opacity", "1");
    $(".lightbox-eliminar-producto").animate({
        top: "40px",
    }, 200);
}

function ocultarEliminarProd() {
    $(".lightbox-eliminar-producto").css("visibility", "hidden");
    $(".lightbox-eliminar-producto").css("opacity", "0");
    $(".lightbox-eliminar-producto").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX MODIFICAR PRODUCTO-------------------------------

function verModificarProd(){
    $(".lightbox-modificar-producto").css("visibility", "visible");
    $(".lightbox-modificar-producto").css("opacity", "1");
    $(".lightbox-modificar-producto").animate({
        top: "40px",
    }, 200);
}

function ocultarModificarProd() {
    $(".lightbox-modificar-producto").css("visibility", "hidden");
    $(".lightbox-modificar-producto").css("opacity", "0");
    $(".lightbox-modificar-producto").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX CREAR CATEGORIA-------------------------------

function verCrearCat(){
    $(".lightbox-crear-categoria").css("visibility", "visible");
    $(".lightbox-crear-categoria").css("opacity", "1");
    $(".lightbox-crear-categoria").animate({
        top: "40px",
    }, 200);
}

function ocultarCrearCat() {
    $(".lightbox-crear-categoria").css("visibility", "hidden");
    $(".lightbox-crear-categoria").css("opacity", "0");
    $(".lightbox-crear-categoria").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------LIGHTBOX ELIMINAR CATEGORIA-------------------------------

function verEliminarCat() {
    $(".lightbox-eliminar-categoria").css("visibility", "visible");
    $(".lightbox-eliminar-categoria").css("opacity", "1");
    $(".lightbox-eliminar-categoria").animate({
        top: "40px",
    }, 200);
}

function ocultarEliminarCat() {
    $(".lightbox-eliminar-categoria").css("visibility", "hidden");
    $(".lightbox-eliminar-categoria").css("opacity", "0");
    $(".lightbox-eliminar-categoria").animate({
        top: "+=100px",
    }, 200);
}

//--------------------------------DETALLE DE PRODUCTO-------------------------------

$('#img1').hover(function () {
    var imagen = $('#img1').prop('src');
    moverPrincipal(imagen);

});
$('#img2').hover(function () {
    var imagen = $('#img2').prop('src');
    moverPrincipal(imagen);

});
$('#img3').hover(function () {
    var imagen = $('#img3').prop('src');
    moverPrincipal(imagen);

});
$('#img4').hover(function () {
    var imagen = $('#img4').prop('src');
    moverPrincipal(imagen);

});
$('#img5').hover(function () {
    var imagen = $('#img5').prop('src');
    moverPrincipal(imagen);

});
$('#img6').hover(function () {
    var imagen = $('#img6').prop('src');
    moverPrincipal(imagen);

});
function moverPrincipal(imagen) {
    $(".img-detalle-grande").attr("src", imagen)
}